<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class SendMail2 extends Mailable
{
    use Queueable;
    use SerializesModels;

    /**
     * Create a new message instance.
     *
     * @param mixed $umur
     *
     * @return void
     */
    public function __construct($umur)
    {
        $this->umur = $umur;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from('hhahahah@gmail.com')
            ->view('email2')
            ->with(
                [
                    'umur' => $this->umur,
                ]
            );
    }
}
