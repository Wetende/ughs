<?php

namespace App\Console\Commands;

use App\Models\Notice;
use App\Models\User;
use Illuminate\Console\Command;

class CreateTestNotice extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'notice:create-test';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Create a test notice for notification testing';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        // Find an admin user
        $admin = User::whereHas('roles', function ($query) {
            $query->where('name', 'admin');
        })->first();

        if (!$admin) {
            $this->error('No admin user found. Please create an admin user first.');
            return 1;
        }

        // Create a test notice
        $notice = new Notice();
        $notice->title = 'Test Important Notice';
        $notice->content = 'This is a test important notice for notification testing.';
        $notice->start_date = now()->format('Y-m-d');
        $notice->stop_date = now()->addDays(30)->format('Y-m-d');
        $notice->active = true;
        $notice->school_id = 1;
        $notice->category = 'Academic';
        $notice->is_featured = true;
        $notice->approval_status = 'approved';
        $notice->approved_by = $admin->id;
        $notice->approved_at = now();
        $notice->is_important = true;
        $notice->event_date = now()->addDays(7);
        $notice->save();

        $this->info("Test notice created with ID: {$notice->id}");
        $this->info("You can now run 'php artisan notice:test-notification {$notice->id}' to test the notification system.");

        return 0;
    }
} 