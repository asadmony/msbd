<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class InformationSend extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($desc, $mobile, $name , $email)
    {
        $this->data =$desc;
        $this->mobile =$mobile;
        $this->name = $name;
        $this->email =$email;
        // $this->seeking_for =$seeking_for;


    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        $desc =$this->data;
        $mobile = $this->mobile;
        $name = $this->name;
        $email = $this->email;
        // $seeking_for = $this->seeking_for;
        
        return $this->from($email)
                ->view('emails.informationSend',[
                    'desc' => $desc,
                    'mobile' => $mobile,
                    'name' => $name,
                    'email' => $email,
                    // 'seeking_for' => $seeking_for
                ]);
    }
}
