<?php

namespace App\Mail;

use App\Subscribe;
use Illuminate\Contracts\Mail\Mailable;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\SerializesModels;
use DB;

class AppMailer {
    protected $mailer; 
    protected $fromAddress = 'contact@avita-india.com';
    protected $fromName = 'AVITA INDIA | Official Website AVITA INDIA';
    protected $to;
    protected $subject;
    protected $view;
    protected $data = [];

    public function __construct(Mail $mail)
    {
        $this->mailer = $mailer;
    }

    public function sendSubscriberInformation($user, Subscribe $subscribe)
    {
              
        $this->to = $subscribe->email;
        $this->subject = "New Subscriber | AVITA INDIA";
        $this->view = 'emails.subscription';
        $this->data = compact('user', 'subscribe');

        return $this->deliver();
    }

    public function deliver()
    {
        $this->mailer->send($this->view, $this->data, function($message) {
            $message->from($this->fromAddress, $this->fromName)
                    ->to($this->to)->subject($this->subject);
        });
    }
}