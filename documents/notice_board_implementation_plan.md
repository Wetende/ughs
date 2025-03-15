# Notice Board Implementation Plan

## Overview
This document outlines the plan to implement a fully functional notice board system for Uasin Gishu High School's website. The system will allow administrators to approve notices created by teachers before they appear on the public notice board, and will include an email notification system for important announcements.

## Requirements
1. Teachers can create featured notices but require admin approval before they appear on the public board
2. An approval workflow for teacher-created notices
3. Email notification system for important announcements
4. Support for notice categories: All Updates, Academic, Sports, Cultural, Administrative

## Implementation Timeline

### Day 1: Database and Model Updates ✅
- Create migration for adding new columns to the notices table ✅
- Update the Notice model with new relationships and scopes ✅
- Add new permissions to the permission seeder ✅

### Day 2: Service Layer Updates ✅
- Update NoticeService with new methods for approval workflow ✅
- Create NoticeNotificationService for email notifications ✅
- Update policies to enforce the new permission structure ✅

### Day 3: Controller and Route Updates ✅
- Update NoticeController with new methods ✅
- Create NoticeApprovalController ✅
- Update routes in web.php ✅

### Day 4: Admin Dashboard Views
- Create new Blade views for notice management
- Update admin sidebar menu
- Create Livewire components for notice approval

### Day 5: Public Notice Board Updates
- Update notice-board.blade.php to display categorized notices
- Implement filtering functionality
- Style the notice board according to the design

### Day 6: Email Notification System
- Create ImportantNoticeNotification class ✅
- Implement notification sending in the service layer ✅
- Test email notifications

### Day 7: Testing and Deployment
- Test all functionality
- Fix any bugs
- Deploy to production

## Technical Details

### Database Changes ✅
```php
Schema::table('notices', function (Blueprint $table) {
    $table->enum('category', ['Academic', 'Sports', 'Cultural', 'Administrative'])->default('Academic');
    $table->boolean('is_featured')->default(false);
    $table->enum('approval_status', ['pending', 'approved', 'rejected'])->default('pending');
    $table->foreignId('approved_by')->nullable()->constrained('users');
    $table->timestamp('approved_at')->nullable();
    $table->boolean('is_important')->default(false);
    $table->dateTime('event_date')->nullable();
    $table->text('rejection_reason')->nullable();
});
```

### New Permissions ✅
- `approve-notices` - For admins to approve/reject notices
- `create-featured-notices` - For teachers to create featured notices
- `send-notice-notifications` - For sending email notifications

### Model Updates ✅
The Notice model will be updated with new scopes:
- `scopePending($query)` - Get notices pending approval
- `scopeApproved($query)` - Get approved notices
- `scopeFeatured($query)` - Get featured notices
- `scopeByCategory($query, $category)` - Filter notices by category

### Service Layer ✅
The NoticeService will be updated with new methods:
- `getApprovedNoticesByCategory($category)` - Get approved notices by category
- `getFeaturedNotices()` - Get featured notices
- `getPendingNotices()` - Get notices pending approval
- `approveNotice(Notice $notice, User $approver)` - Approve a notice
- `rejectNotice(Notice $notice, User $approver, $reason)` - Reject a notice

### Controllers ✅
- `NoticeApprovalController` - Handle notice approval workflow
- Update `NoticeController` to handle public notice board display

### Views
- `resources/views/pages/notice/pending.blade.php` - View for pending notices
- Update `resources/views/notice-board.blade.php` - Public notice board

### Email Notifications ✅
- `ImportantNoticeNotification` class for sending email notifications

## User Flow

### Teacher Flow
1. Teacher logs in to the dashboard
2. Navigates to Notices section
3. Creates a new notice, optionally marking it as featured or important
4. Submits the notice for approval
5. Can view the status of their submitted notices

### Admin Flow
1. Admin logs in to the dashboard
2. Sees a notification of pending notices
3. Reviews pending notices
4. Approves or rejects notices with feedback
5. Approved notices appear on the public notice board

### Public User Flow
1. User visits the notice board page
2. Views all approved notices
3. Can filter notices by category
4. Can view featured notices prominently displayed
5. Can see upcoming events in the calendar section

## Conclusion
This implementation plan provides a comprehensive approach to creating a functional notice board system with an approval workflow and email notifications. The system will enhance communication between the school and its stakeholders while ensuring that only approved content is displayed publicly. 