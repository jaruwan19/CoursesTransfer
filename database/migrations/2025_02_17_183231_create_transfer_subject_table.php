<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\TypeTransfer;
use App\Models\Subject;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    // database/migrations/xxxx_xx_xx_xxxxxx_create_transfer_subject_table.php

    public function up()
    {
        Schema::create('transfer_subject', function (Blueprint $table) {
            $table->foreignIdFor(TypeTransfer::class); // Replace unsignedBigInteger('type_id')
            $table->foreignIdFor(Subject::class); // Replace unsignedBigInteger('subject_id')
            $table->timestamps();
        });
    }


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('transfer_subject');
    }
};
