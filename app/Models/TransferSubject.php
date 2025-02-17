<?php
// app/Models/TransferSubject.php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TransferSubject extends Model
{
    use HasFactory;

    public function typeTransfer()
    {
        return $this->belongsTo(TypeTransfer::class, 'type_id');
    }

    public function subjects()
    {
        return $this->belongsToMany(Subject::class, 'transfer_subject', 'type_id', 'subject_id');
    }
}

