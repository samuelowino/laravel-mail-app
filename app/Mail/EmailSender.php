<?php
namespace App\Mail;

use App\Models\UserEmail;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class EmailSender extends Mailable
{
    use Queueable, SerializesModels;

    public UserEmail $userEmail;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(UserEmail $userEmail)
    {
        $this->userEmail = $userEmail;
    }
    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        $to = $this->userEmail->getToAddress();
        $title = $this->userEmail->getTitle();
        $body = $this->userEmail->getBody();
        

        return $this->from($to, 'Mail Demo')
            ->subject($title)
            ->markdown('mails.emailTemplate')
            ->with([
                'title' => $title,
                'body' => $body,
                'link' => 'https://github/samuelowino'
            ]);
    }
}