<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Support\Facades\Input;
use App\Model\blog;
use Illuminate\Support\Str;
use Auth;

class BlogMail extends Mailable
{
    use Queueable, SerializesModels;
 public $input;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct()
    {
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        
     //   $from_name = $user->first_name;
        $inputs = Input::all();
         $from_name = $inputs['username'];
        $data = array(
            'from_name' => $from_name
        );
        return $this->from($from_name)
                ->subject('Deal Register')
                ->view('emails.blog_template')
                ->with($data);
    }
}
