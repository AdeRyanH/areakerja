<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Calonkandidat;
use App\Models\Kandidat;
use App\Models\Organisasi;
use App\Models\Pengalaman;
use App\Models\RiwayatPendidikan;
use App\Models\Sertifikasi;
use App\Models\Skill;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\PHPMailer;

class KandidatController extends Controller
{
    public function index()
    {
        $kandidats = Kandidat::all();

        return view('admin.kandidat.index', compact('kandidats'));
    }

    public function show(Kandidat $kandidat)
    {
        $kandidat->load('mainskill');
        $idkandidat  = $kandidat->id;
        $organisasi  = Organisasi::where('idKandidat', $idkandidat)->get();
        $pendidikan  = Riwayatpendidikan::where('idKandidat', $idkandidat)->get();
        $pengalaman  = Pengalaman::where('idKandidat', $idkandidat)->get();
        $sertifikasi = Sertifikasi::where('idKandidat', $idkandidat)->get();
        $skill       = Skill::where('idKandidat', $idkandidat)->get();

        return view('admin.kandidat.show', compact('kandidat', 'organisasi', 'pendidikan', 'pengalaman', 'sertifikasi', 'skill'));
    }

    public function acc($id, Request $request)
    {
        $calon = Calonkandidat::where('id', $id)->first();
        User::create([
            'name'     => $request->namalengkap,
            'email'    => $request->email,
            'password' => $request->password,
        ]);

        $idUser = User::where('name', $request->namalengkap)->first();

        $idUser->roles()->sync('4');

        Kandidat::create([
            'nama'     => $request->namalengkap,
            'idSkill'  => $request->skillutama,
            'domisili' => $request->alamat,
            'biografi' => $request->biografi,
            'slug'     => Str::slug($request->namalengkap),
            'status'   => 'unhire',
            'idUser'   => $idUser->id,
            'cv'       => $calon->cv,
            'image'    => $calon->image,
        ]);

        $idKandidat    = Kandidat::where('nama', $request->namalengkap)->first();
        $jumlah_school = count(collect($calon->school));

        for ($i = 0; $i < $jumlah_school; $i++) {
            Riwayatpendidikan::create([
                'nama_instansi' => $calon->school[$i],
                'tahun'         => $calon->tahun[$i],
                'idKandidat'    => $idKandidat->id,
            ]);
        }

        $jumlah_skill = count(collect($calon->namaskill));

        for ($i = 0; $i < $jumlah_skill; $i++) {
            Skill::create([
                'nama'       => $calon->namaskill[$i],
                'tingkat'    => $calon->rangeskill[$i],
                'idKandidat' => $idKandidat->id,
            ]);
        }

        $jumlah_organisasi = count(collect($calon->organisasi));

        for ($i = 0; $i < $jumlah_organisasi; $i++) {
            Organisasi::create([
                'judul'      => $calon->organisasi[$i],
                'jabatan'    => $calon->jabatan[$i],
                'idKandidat' => $idKandidat->id,
            ]);
        }

        $jumlah_pengalaman = count(collect($calon->kantor));

        for ($i = 0; $i < $jumlah_pengalaman; $i++) {
            Pengalaman::create([
                'nama_pengalaman' => $calon->kantor[$i],
                'posisi'          => $calon->pekerjaan[$i],
                'idKandidat'      => $idKandidat->id,
            ]);
        }

        $lowongan = Calonkandidat::all();
        $calon->delete();

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
            $mail->addAddress($request->email);

            // Content
            $mail->isHTML(true); // Set email format to HTML
            $mail->Subject = 'Akun Kandidat Areakerja';
            $mail->Body    = "<h3><b>Selamat, pendaftaran anda telah di terima<b></h3>
            Email anda <b>{$request->email}</b>, dan password anda <b>{$request->password}</b><br>
            Silahkan login melalui link berikut : <br>
            https://areakerja.com/kandidat";

            $mail->send();
        } catch (Exception $e) {
            echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
        }

        return redirect()->route('admin.calonkandidat.index');
    }
}
