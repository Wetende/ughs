<?php

namespace Tests\Feature;

use App\Models\Notice;
use App\Models\User;
use App\Notifications\ImportantNoticeNotification;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\Notification;
use Tests\TestCase;
use Mockery;

class NoticeNotificationTest extends TestCase
{
    public function test_important_notice_notification_is_sent()
    {
        Notification::fake();

        // Create a test user class that implements Notifiable
        $user = new class {
            use Notifiable;
            
            public $email = 'test@example.com';
            public $name = 'Test User';
        };

        // Mock a notice
        $notice = new Notice();
        $notice->id = 1;
        $notice->title = 'Test Important Notice';
        $notice->content = 'This is a test important notice content.';
        $notice->category = 'Academic';
        $notice->is_important = true;
        $notice->approval_status = 'approved';

        // Send the notification
        $notification = new ImportantNoticeNotification($notice);
        $user->notify($notification);

        // Assert the notification was sent to the user
        Notification::assertSentTo($user, ImportantNoticeNotification::class);
    }

    public function test_notification_has_correct_content()
    {
        // Create a simple user object instead of a mock
        $user = new \stdClass();
        $user->name = 'Test User';

        // Mock a notice
        $notice = new Notice();
        $notice->id = 1;
        $notice->title = 'Test Important Notice';
        $notice->content = 'This is a test important notice content.';
        $notice->category = 'Academic';
        $notice->is_important = true;
        $notice->approval_status = 'approved';

        // Create the notification
        $notification = new ImportantNoticeNotification($notice);

        // Get the mail representation
        $mail = $notification->toMail($user);

        // Assert the mail has the correct content
        $this->assertEquals('Important Notice: Test Important Notice', $mail->subject);
        $this->assertEquals('Hello Test User!', $mail->greeting);
        $this->assertStringContainsString('An important notice has been posted.', $mail->introLines[0]);
        $this->assertStringContainsString('Title: Test Important Notice', $mail->introLines[1]);
        $this->assertStringContainsString('Category: Academic', $mail->introLines[2]);
        $this->assertStringContainsString('Content: This is a test important notice content.', $mail->introLines[3]);
    }

    protected function tearDown(): void
    {
        Mockery::close();
        parent::tearDown();
    }
} 