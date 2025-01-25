<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Spatie\Permission\Models\Permission;

class UpdateSemesterPermissionsToTermPermissions extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        $permissions = [
            'menu-semester' => 'menu-term',
            'read semester' => 'read term',
            'create semester' => 'create term',
            'update semester' => 'update term',
            'delete semester' => 'delete term',
        ];

        foreach ($permissions as $old => $new) {
            Permission::where('name', $old)->update(['name' => $new]);
        }
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        $permissions = [
            'menu-term' => 'menu-semester',
            'read term' => 'read semester',
            'create term' => 'create semester',
            'update term' => 'update semester',
            'delete term' => 'delete semester',
        ];

        foreach ($permissions as $old => $new) {
            Permission::where('name', $old)->update(['name' => $new]);
        }
    }
}
