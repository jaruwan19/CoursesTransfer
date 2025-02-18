<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\User;
use App\Models\SystemTransfer;
use App\Models\Institution;
use App\Models\Major;
use App\Models\TransferSubject;

return new class extends Migration
// database/migrations/xxxx_xx_xx_xxxxxx_create_request_transfer_table.php
{
    public function up()
    {
        Schema::create('request_transfer', function (Blueprint $table) {
            $table->id('request_id');
            $table->foreignIdFor(User::class, 'user_id');  // ใช้ foreignIdFor
            $table->foreignIdFor(SystemTransfer::class, 'syst_id'); // ใช้ foreignIdFor
            $table->foreignIdFor(Institution::class, 'inst_id'); // ใช้ foreignIdFor
            $table->date('graduation_date');
            $table->string('student_original_code');
            $table->foreignIdFor(Major::class, 'major_original_id');  // ใช้ foreignIdFor
            $table->string('transcript');
            $table->foreignIdFor(TransferSubject::class, 'type_tranfer_id'); // ใช้ foreignIdFor
            $table->string('status');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('request_transfer');
    }
};
