<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\Doctor;
use App\Models\Speciality;
use App\Models\Appointment;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function index()
    {
        $doctors = Doctor::with('speciality')->get();
        $specialities = Speciality::with('doctors')->orderBy('name')->get();
        return view('frontend.index', compact('doctors', 'specialities'));
    }

    public function submitAppointment(Request $request)
    {
        $appointment = $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'phone_number' => 'required',
            'meeting_date' => 'required',
            'polyclinic' => 'required',
            'doctor' => 'required',
            'has_visited_before' => 'required',
            'message' => 'required',
        ]);

        Appointment::create($appointment);

        $meeting_date = Carbon::parse($appointment['meeting_date'])->format('d M Y');

        $message = "Halo *$appointment[name]*, anda telah membuat janji temu pada tanggal *$meeting_date* di *Poliklinik $appointment[polyclinic]* dengan *$appointment[doctor]*. Saat ini, status janji temu Anda masih *pending*. Kami akan segera memprosesnya. Harap tunggu pesan selanjutnya dari nomor ini.";

        $this->sendMessage($appointment['phone_number'], $message);
        return redirect()->route('home')->with('success', 'Janji temu berhasil dibuat. Silahkan cek Whatsapp anda!');
    }

    public function sendMessage($target, $message)
    {
        $curl = curl_init();

        curl_setopt_array($curl, array(
            CURLOPT_URL => 'https://api.fonnte.com/send',
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => '',
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => 'POST',
            CURLOPT_POSTFIELDS => array(
                'target' => $target,
                'message' => $message,
                'countryCode' => '62'
            ),
            CURLOPT_HTTPHEADER => array(
                'Authorization: ' . env('WA_TOKEN')
            ),
        ));

        $response = curl_exec($curl);
        if (curl_errno($curl)) {
            $error_msg = curl_error($curl);
        }
        curl_close($curl);

        if (isset($error_msg)) {
            echo $error_msg;
        }

        return $response;
    }
}
