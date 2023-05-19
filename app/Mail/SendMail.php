<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class SendMail extends Mailable
{
    use Queueable;
    use SerializesModels;

    public function __construct($data)
    {
        $this->user = $data;
    }

    public function build()
    {
        return $this
            ->subject('Saran')
            ->view('email')
            ->with([
                'nama'  => $this->user['nama'],
                'nomor' => $this->user['nomor'],
                'email' => $this->user['email'],
                'saran' => $this->user['saran'],
            ]);
    }
}