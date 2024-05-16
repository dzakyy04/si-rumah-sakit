<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\Doctor;
use App\Models\Speciality;
use App\Models\Appointment;
use Illuminate\Http\Request;

class AppointmentController extends Controller
{
    public function index()
    {
        $title = 'Data Janji Temu';
        $appointments = Appointment::get();
        foreach ($appointments as $appointment) {
            $appointment->polyclinic = $this->mapPolyclinic($appointment->polyclinic);
            $appointment->doctor_photo = Doctor::where('name', $appointment->doctor)->first()->photo; 
        }
        return view('appointment.index', compact('title', 'appointments'));
    }

    private function mapPolyclinic($id)
    {
        $map = [
            1 => 'Umum',
            2 => 'Penyakit Dalam',
            3 => 'Anak',
            4 => 'Saraf',
            5 => 'Kandungan dan Ginekologi',
            6 => 'Bedah',
            7 => 'Kulit dan Kelamin',
            8 => 'THT',
            9 => 'Mata'
        ];

        return $map[$id] ?? $id;
    }

    public function confirm(Appointment $appointment)
    {
        $appointment->status = 'approved';
        $appointment->save();
        $polyclinic = Speciality::find($appointment['polyclinic'])->name;
        $meeting_date = Carbon::parse($appointment['meeting_date'])->format('d M Y');
        
        $message = "Halo *$appointment[name]*, janji temu anda pada tanggal *$meeting_date* di *Poliklinik $polyclinic* dengan *$appointment[doctor]* telah disetujui. Silahkan datang ke rumah sakit DIWA pada tanggal yang telah ditentukan. Terimakasih";

        $this->sendMessage($appointment->phone_number, $message);

        return redirect()->back()->with('success', 'Appointment successfully confirmed.');
    }

    public function reject(Appointment $appointment)
    {
        $appointment->status = 'rejected';
        $appointment->save();
        $polyclinic = Speciality::find($appointment['polyclinic'])->name;
        $meeting_date = Carbon::parse($appointment['meeting_date'])->format('d M Y');

        $message = "Halo *$appointment[name]*, maaf, janji temu anda pada tanggal *$meeting_date* di *Poliklinik $polyclinic* dengan *$appointment[doctor]* tidak disetujui karena pada tanggal tersebut pelayanan sudah habis. Terimakasih";

        $this->sendMessage($appointment->phone_number, $message);

        return redirect()->back()->with('success', 'Appointment rejected.');
    }

    public function destroy($id)
{
    // Mencari appointment berdasarkan ID
    $appointment = Appointment::findOrFail($id);

    // Menghapus appointment
    $appointment->delete();

    // Mengembalikan respon sukses
    return back()->with('success', 'Appointment berhasil dihapus');
}
public function getAppointment($id)
{
    $appointment = Appointment::find($id);
    return response()->json($appointment);
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
