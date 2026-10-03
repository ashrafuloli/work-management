<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class TwoFactorEmailCodeNotification extends Notification implements ShouldQueue
{
    use Queueable;

    /**
     * The email verification code.
     */
    protected string $code;

    /**
     * Number of minutes before the code expires.
     */
    protected int $expiresInMinutes;

    /**
     * Number of times the queued notification may be attempted.
     */
    public int $tries = 3;

    /**
     * Number of seconds before retrying a failed notification.
     */
    public int $backoff = 10;

    /**
     * Create a new notification instance.
     */
    public function __construct(
        string $code,
        int $expiresInMinutes = 10
    ) {
        $this->code = $code;
        $this->expiresInMinutes = $expiresInMinutes;

        $this->onQueue('notifications');
    }

    /**
     * Get the notification's delivery channels.
     *
     * @return array<int, string>
     */
    public function via(object $notifiable): array
    {
        return [
            'mail',
        ];
    }

    /**
     * Get the mail representation of the notification.
     */
    public function toMail(object $notifiable): MailMessage
    {
        $appName = config(
            'app.name',
            'WorkManagement'
        );

        $displayName = $notifiable->profile?->display_name
            ?: $notifiable->email;

        return (new MailMessage)
            ->subject(
                $appName . ' - Two-Factor Authentication Code'
            )
            ->greeting(
                'Hello ' . $displayName . ','
            )
            ->line(
                'Use the verification code below to complete your two-factor authentication.'
            )
            ->line(
                'Your verification code is:'
            )
            ->line(
                '**' . $this->code . '**'
            )
            ->line(
                'This code will expire in '
                . $this->expiresInMinutes
                . ' minutes.'
            )
            ->line(
                'If you did not request this code, you can safely ignore this email.'
            )
            ->salutation(
                'Regards, ' . $appName
            );
    }

    /**
     * Get the array representation of the notification.
     *
     * @return array<string, mixed>
     */
    public function toArray(object $notifiable): array
    {
        return [
            'type' => 'two_factor_email_code',
            'expires_in_minutes' => $this->expiresInMinutes,
        ];
    }
}
