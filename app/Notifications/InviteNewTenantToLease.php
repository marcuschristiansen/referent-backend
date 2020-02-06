<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Notification;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;

class InviteNewTenantToLease extends Notification
{
    use Queueable;

    protected $leaseInvite;

    /**
     * Create a new notification instance.
     *
     * @return void
     */
    public function __construct($leaseInvite)
    {
        $this->leaseInvite = $leaseInvite;
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
                    ->subject('Referent - Lease Collaboration')
                    ->line('You have been invited to colaborate on a lease.')
                    ->action('View lease', env('CLIENT_URL') . 'leases/' . $this->leaseInvite->lease_id)
                    ->line('Thank you for using Referent!');
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
