<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Notification;
use Illuminate\Notifications\Messages\MailMessage;

class NewWorkOrder extends Notification
{
    private $workOrder;

    public function __construct($workOrder)
    {
        $this->workOrder = $workOrder;
    }

    public function via($notifiable)
    {
        return ['database'];
    }

    public function toDatabase($notifiable)
    {
        return [
            'work_order_id' => $this->workOrder->id,
            'title' => 'titleWO',
           'description' => 'descriptionWO',
           'user_name' => $this->workOrder->user->name,
       ];
   }
}