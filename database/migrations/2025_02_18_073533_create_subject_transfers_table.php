<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\RequestTransfer;
use App\Models\TransferSubject;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('subject_transfer', function (Blueprint $table) {
            $table->id('trns_subj_id');
            $table->foreignIdFor(RequestTransfer::class, 'request_id');
            $table->string('original_subject_code');
            $table->string('original_subject_name');
            $table->integer('original_credits');
            $table->string('original_grade');
            $table->foreignIdFor(TransferSubject::class, 'current_subject_id');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('subject_transfers');
    }
};
