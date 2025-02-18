<?php

// app/Models/SubjectTransfer.php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SubjectTransfer extends Model
{
    use HasFactory;

    public function requestTransfer()
    {
        return $this->belongsTo(RequestTransfer::class, 'request_id');
    }

    public function transferSubject()
    {
        return $this->belongsTo(TransferSubject::class, 'current_subject_id');
    }
}
