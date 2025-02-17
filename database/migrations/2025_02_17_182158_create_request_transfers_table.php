<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\User;
use App\Models\SystemTransfer;
use App\Models\Institution;
use App\Models\Major;
use App\Models\TransferSubject;


class CreateTransferRequestsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    // database/migrations/xxxx_xx_xx_xxxxxx_create_request_transfer_table.php

    public function up()
    {
        Schema::create('request_transfer', function (Blueprint $table) {
            $table->id('request_id');
            $table->foreignIdFor(User::class); // Replace unsignedBigInteger('user_id')
            $table->foreignIdFor(SystemTransfer::class); // Replace unsignedBigInteger('syst_id')
            $table->foreignIdFor(Institution::class); // Replace unsignedBigInteger('inst_id')
            $table->date('graduation_date');
            $table->string('student_original_code');
            $table->foreignIdFor(Major::class); // Replace unsignedBigInteger('major_original_id')
            $table->string('transcrip');
            $table->foreignIdFor(TransferSubject::class); // Replace unsignedBigInteger('trns_subj_id')
            $table->string('status');
            $table->timestamps();
        });
    }


    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('transfer_requests');
    }
}
