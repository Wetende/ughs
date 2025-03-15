<?php

namespace App\Console\Commands;

use App\Models\Notice;
use App\Models\User;
use App\Notifications\ImportantNoticeNotification;
use Illuminate\Console\Command;

class TestNoticeNotification extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'notice:test-notification {notice_id? : The ID of the notice to use} {user_id? : The ID of the user to send to}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Test the notice notification system';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $noticeId = $this->argument('notice_id');
        $userId = $this->argument('user_id');

        // If no notice ID is provided, get the latest important notice
        if (!$noticeId) {
            $notice = Notice::where('is_important', true)
                ->where('approval_status', 'approved')
                ->latest()
                ->first();

            if (!$notice) {
                $this->error('No approved important notices found. Please create one first or specify a notice ID.');
                return 1;
            }
        } else {
            $notice = Notice::find($noticeId);
            if (!$notice) {
                $this->error("Notice with ID {$noticeId} not found.");
                return 1;
            }
        }

        // If no user ID is provided, get a random user
        if (!$userId) {
            $user = User::whereHas('roles', function ($query) {
                $query->whereIn('name', ['student', 'teacher', 'parent']);
            })->inRandomOrder()->first();

            if (!$user) {
                $this->error('No users found. Please create a user first or specify a user ID.');
                return 1;
            }
        } else {
            $user = User::find($userId);
            if (!$user) {
                $this->error("User with ID {$userId} not found.");
                return 1;
            }
        }

        $this->info("Sending notification for notice '{$notice->title}' to user '{$user->name}'...");

        // Send the notification
        $user->notify(new ImportantNoticeNotification($notice));

        $this->info('Notification sent successfully!');
        $this->info('Since MAIL_MAILER is set to "log", check the Laravel log file to see the email content.');

        return 0;
    }
} 