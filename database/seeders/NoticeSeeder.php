<?php

namespace Database\Seeders;

use App\Models\Notice;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class NoticeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Get a school ID from an existing user
        $schoolId = User::first()->school_id ?? 1;
        
        // First, check if a notice with ID 1 exists
        $existingNotice = Notice::find(1);
        
        if ($existingNotice) {
            // If it exists, update it to meet all conditions
            $existingNotice->update([
                'title' => 'Test Notice',
                'content' => 'This is a test notice content.',
                'start_date' => now()->subDays(1)->format('Y-m-d'), // Yesterday
                'stop_date' => now()->addDays(7)->format('Y-m-d'), // 7 days from now
                'active' => 1,
                'school_id' => $schoolId,
                'category' => 'Academic',
                'is_featured' => true,
                'approval_status' => 'approved',
                'approved_by' => User::first()->id ?? 1,
                'approved_at' => now(),
                'is_important' => true,
                'event_date' => now()->addDays(3)->format('Y-m-d H:i:s'), // 3 days from now
            ]);
            
            echo "Updated existing notice with ID 1\n";
        } else {
            // If it doesn't exist, create a new one with ID 1
            // First, disable foreign key checks to force ID 1
            DB::statement('SET FOREIGN_KEY_CHECKS=0;');
            
            Notice::create([
                'id' => 1,
                'title' => 'Test Notice',
                'content' => 'This is a test notice content.',
                'start_date' => now()->subDays(1)->format('Y-m-d'), // Yesterday
                'stop_date' => now()->addDays(7)->format('Y-m-d'), // 7 days from now
                'active' => 1,
                'school_id' => $schoolId,
                'category' => 'Academic',
                'is_featured' => true,
                'approval_status' => 'approved',
                'approved_by' => User::first()->id ?? 1,
                'approved_at' => now(),
                'is_important' => true,
                'event_date' => now()->addDays(3)->format('Y-m-d H:i:s'), // 3 days from now
            ]);
            
            DB::statement('SET FOREIGN_KEY_CHECKS=1;');
            
            echo "Created new notice with ID 1\n";
        }
    }
}
