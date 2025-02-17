<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\User;
use App\Models\Role;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('user_role', function (Blueprint $table) {
            // เพิ่ม foreign key สำหรับ user_id
            $table->foreignIdFor(User::class, 'user_id');
            // เพิ่ม foreign key สำหรับ role_id
            $table->foreignIdFor(Role::class, 'role_id');
            
            // กำหนด primary key แบบ composite (user_id, role_id)
            $table->primary(['user_id', 'role_id']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        // ลบตาราง user_role
        Schema::dropIfExists('user_role');
    }
};
