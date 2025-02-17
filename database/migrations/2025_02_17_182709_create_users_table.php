<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\Major;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    // database/migrations/{timestamp}_create_users_table.php

    // database/migrations/xxxx_xx_xx_xxxxxx_create_users_table.php

    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id('user_id');
            $table->string('username');
            $table->string('password');
            $table->string('citizen_id');
            $table->string('prefix');
            $table->string('firstname');
            $table->string('lastname');
            $table->foreignIdFor(Major::class); // Replace unsignedBigInteger('major_id')
            $table->timestamps();
        });
    }



    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
