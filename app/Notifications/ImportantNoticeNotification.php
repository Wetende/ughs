<?php

namespace App\Notifications;

use App\Models\Notice;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class ImportantNoticeNotification extends Notification implements ShouldQueue
{
    use Queueable;

    protected $notice;

    /**
     * Create a new notification instance.
     */
    public function __construct(Notice $notice)
    {
        $this->notice = $notice;
    }

    /**
     * Get the notification's delivery channels.
     *
     * @return array<int, string>
     */
    public function via(object $notifiable): array
    {
        return ['mail'];
    }

    /**
     * Get the mail representation of the notification.
     */
    public function toMail(object $notifiable): MailMessage
    {
        $url = url('/notice-board');
        
        return (new MailMessage)
            ->subject('Important Notice: ' . $this->notice->title)
            ->greeting('Hello ' . $notifiable->name . '!')
            ->line('An important notice has been posted.')
            ->line('Title: ' . $this->notice->title)
            ->line('Category: ' . $this->notice->category)
            ->line('Content: ' . substr($this->notice->content, 0, 200) . (strlen($this->notice->content) > 200 ? '...' : ''))
            ->action('View Notice', $url)
            ->line('Thank you for using our application!');
    }

    /**
     * Get the array representation of the notification.
     *
     * @return array<string, mixed>
     */
    public function toArray(object $notifiable): array
    {
        return [
            'notice_id' => $this->notice->id,
            'title' => $this->notice->title,
            'category' => $this->notice->category,
        ];
    }
}
