<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Notification;
use Illuminate\Notifications\Messages\MailMessage;

class NewWorkRequest extends Notification
{
    private $workRequest;

    public function __construct($workRequest)
    {
        $this->workRequest = $workRequest;
    }

    public function via($notifiable)
    {
        return ['database'];
    }

    public function toDatabase($notifiable)
    {
        return [
            'work_request_id' => $this->workRequest->id,
            'title' =>'titleWR',
            'description' => 'descriptionWR',
            'user_name' => $this->workRequest->requester_id,
        ];
    }
}
