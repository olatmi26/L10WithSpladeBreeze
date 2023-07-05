<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ReviewPerformanceEvaluation extends Mailable
{
    use Queueable, SerializesModels;

    public $evaluation;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($evaluation)
    {
        $this->evaluation = $evaluation;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('view.name');
    }
}
