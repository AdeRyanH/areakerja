<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Traits\MediaUploadingTrait;
use App\Http\Requests\MassDestroyMitraRequest;
use App\Models\Company;
use App\Models\Mitra;
use App\Models\Role_User;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;
use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\PHPMailer;
use Symfony\Component\HttpFoundation\Response;

class MitraController extends Controller
{
    // use MediaUploadingTrait;

    public function index()
    {
        $mitras = Mitra::all();

        return view('admin.mitra.index', compact('mitras'));
    }

    public function show(Mitra $mitra)
    {
        return view('admin.mitra.show', compact('mitra'));
    }

    public function destroy(Mitra $mitra)
    {
        $mitra->delete();

        return back();
    }

    public function massDestroy(MassDestroyMitraRequest $request)
    {
        Mitra::whereIn('id', request('ids'))->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }

    public function addmitra($id)
    {
        $mitra  = mitra::where('id', $id)->first();
        $random = Str::random(8);

        return view('admin.mitra.create', compact('mitra', 'random'));
    }

    public function acc($id, Request $request)
    {
        $random = Str::random(8);
        $mitra  = Mitra::where('id', $id)->first();
        File::copy(public_path("img/mitralogo/{$mitra->logo}"), public_path("image/{$mitra->logo}"));
        File::copy(public_path("img/mitralogo/{$mitra->logo}"), public_path("img/companylogo/{$mitra->logo}"));
        $slug_judul = Str::slug($mitra->nama);
        Company::create([
            'name'      => $mitra->nama,
            'deskripsi' => $mitra->deskripsi,
            'alamat'    => $mitra->alamat,
            'gambar'    => $mitra->logo,
            'alamat'    => $mitra->alamat,
            'slug'      => $slug_judul,
        ]);
        $user           = new User();
        $user->name     = $mitra->nama;
        $user->email    = $mitra->email;
        $user->password = $request->password;
        $user->save();
        $details = [
            'email'    => $mitra->email,
            'password' => $request->password,
        ];
        $role          = new Role_User();
        $role->user_id = $user->id;
        $role->role_id = 3;
        $role->save();

        require base_path('vendor/autoload.php');
        $mail = new PHPMailer(true);     // Passing `true` enables exceptions

        try {
            // Server settings
            $mail->SMTPDebug = 2; // Enable verbose debug output
            $mail->isSMTP(); // Set mailer to use SMTP
            $mail->Host       = 'ssl://mail.areakerja.com '; // Specify main and backup SMTP servers
            $mail->SMTPAuth   = true; // Enable SMTP authentication
            $mail->Username   = 'admin@areakerja.com'; // SMTP username
            $mail->Password   = 'areakerja.com'; // SMTP password
            $mail->SMTPSecure = 'tls'; // Enable TLS encryption, [ICODE]ssl[/ICODE] also accepted
            $mail->Port       = 465; // TCP port to connect to

            // Recipients
            $mail->setFrom('admin@areakerja.com', 'Areakerja');
            $mail->addAddress($mitra->email);

            // Content
            $mail->isHTML(true); // Set email format to HTML
            $mail->Subject = 'Akun Mitra Areakerja';
            $mail->Body    = "<h3><b>Selamat, pendaftaran anda telah di terima<b></h3>
            Email anda <b>{$mitra->email}</b>, dan password anda <b>{$request->password}</b><br>
            Silahkan login melalui link berikut : <br>
            https://areakerja.com/mitra";

            $mail->send();
        } catch (Exception $e) {
            echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
        }

        $mitra->idUser = $user->id;
        $mitra->save();

        return redirect(route('admin.mitra.index'));
    }
}
