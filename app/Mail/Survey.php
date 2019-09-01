<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class Survey extends Mailable
{
    use Queueable, SerializesModels;

    public $survey;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($survey)
    {
        $this->survey = $survey;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('emails.survey');
    }
}
