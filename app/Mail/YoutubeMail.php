<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class YoutubeMail extends Mailable
{
    use Queueable, SerializesModels;

    public $video;
    public $subject = "Nuevo video de Youtube - El León Verde";

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($video)
    {
        $this->video = $video;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('mails.youtube');
    }
}
