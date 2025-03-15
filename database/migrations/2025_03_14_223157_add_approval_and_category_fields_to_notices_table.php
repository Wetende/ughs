<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::table('notices', function (Blueprint $table) {
            $table->enum('category', ['Academic', 'Sports', 'Cultural', 'Administrative'])->default('Academic')->after('content');
            $table->boolean('is_featured')->default(false)->after('active');
            $table->enum('approval_status', ['pending', 'approved', 'rejected'])->default('pending')->after('is_featured');
            $table->foreignId('approved_by')->nullable()->constrained('users')->after('approval_status');
            $table->timestamp('approved_at')->nullable()->after('approved_by');
            $table->boolean('is_important')->default(false)->after('approved_at');
            $table->dateTime('event_date')->nullable()->after('is_important');
            $table->text('rejection_reason')->nullable()->after('event_date');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('notices', function (Blueprint $table) {
            $table->dropForeign(['approved_by']);
            $table->dropColumn([
                'category',
                'is_featured',
                'approval_status',
                'approved_by',
                'approved_at',
                'is_important',
                'event_date',
                'rejection_reason'
            ]);
        });
    }
};
