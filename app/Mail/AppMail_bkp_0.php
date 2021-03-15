<?php

namespace App\Mail;

use App\Subscribe;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use DB;

class AppMail
{
    // use Queueable, SerializesModels;
    protected $mail; 
    protected $fromAddress = 'contact@avita-india.com';
    protected $fromName = 'AVITA INDIA | Official Website AVITA INDIA';
    protected $to;
    protected $subject ;
    
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(Mail $mail)
    {
        $this->mail = $mail;
    }


    public function sendTicketInformation($mail, Subscribe $subscribe)
    {
        //$this->to = $user->email;

        $number = DB::table('subscribe')
        ->orderBy('created_at','email')
        ->first();

        $this->to =  $subscribe->email;
        $this->subject = "AVITA INDIA | Official Website AVITA INDIA";
        $this->view = 'subscribe.subscribe_info';
        

        return $this->deliver();
    
        $this->mail->send($this->view, function($message) {
            $message->from($this->fromAddress, $this->fromName)
                    ->to($this->to)->subject($this->subject);
        });
    }

    /**
     * Build the message.
     * AVITA INDIA | Official Website AVITA INDIA
     * @return $this
     */
    public function build()
    {
        return $this->view('view.name.subscribe');
    }
}
