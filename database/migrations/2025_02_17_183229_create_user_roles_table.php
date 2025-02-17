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
    // database/migrations/xxxx_xx_xx_xxxxxx_create_role_users_table.php

    public function up()
    {
        Schema::create('user_role', function (Blueprint $table) {
            $table->foreignIdFor(User::class); // Replace unsignedBigInteger('users_id')
            $table->foreignIdFor(Role::class); // Replace unsignedBigInteger('role_id')
            $table->primary(['users_id', 'role_id']); // Composite Primary Key

            // Foreign key constraints are automatically added by foreignIdFor
            $table->foreign('users_id')->references('user_id')->on('users')->onDelete('cascade');
            $table->foreign('role_id')->references('roles_id')->on('roles')->onDelete('cascade');
        });
    }


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('user_roles');
    }
};
