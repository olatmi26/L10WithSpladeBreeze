<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ReviewPerformanceRegulation extends Mailable
{
    use Queueable, SerializesModels;

    public $performanceRegulation;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($performanceRegulation)
    {
        $this->performanceRegulation = $performanceRegulation;
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
