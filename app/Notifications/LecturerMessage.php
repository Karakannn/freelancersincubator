<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Notification;
use Illuminate\Notifications\Messages\MailMessage;
use App\Http\Requests\StoreLecturerRequest;
use Illuminate\Http\Request;


class LecturerMessage extends Notification {
    use Queueable;
    protected $message;

    /**
     * Create a new notification instance.
     *
     * @return void
     */
    public function __construct(Request $message)
    {
        $this->message = $message;
    }

    /**
     * Get the notification's delivery channels.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function via($notifiable)
    {
        return ['mail'];
    }

    /**
     * Get the mail representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return \Illuminate\Notifications\Messages\MailMessage
     */
    public function toMail($notifiable)
    {
        return (new MailMessage)
            ->subject(config('admin.name') . ", Become A Lecturer")
            ->greeting(" ")
            ->salutation(" ")
            ->from($this->message->email, $this->message->name)
            ->line("Name: " . $this->message->name)
            ->line("Email: " . $this->message->email)
            ->line("Phone: " . $this->message->phone)
            ->line("What is your country ? " . $this->message->country)
            ->line("Why are you interested in making a webinar with us ? " . $this->message->join_reason)
            ->line("What is your experience as a freelancer ? " . $this->message->freelance_experience)
            ->line("Title of your webinar: " . $this->message->webinar_title)
            ->line("How long will it be (Hours): " . $this->message->hours)
            ->line("Brief Description: " . $this->message->description)
            ->line("Detailed Description: " . $this->message->detailed_description);

    }

    /**
     * Get the array representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function toArray($notifiable)
    {
        return [
            //
        ];
    }
}
