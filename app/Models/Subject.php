<?php

// app/Models/Subject.php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subject extends Model
{
    use HasFactory;

    protected $fillable = ['subject_code', 'subject_name', 'credit'];

    public function transferSubjects()
    {
        return $this->belongsToMany(TransferSubject::class, 'transfer_subject', 'subject_id', 'type_id');
    }
}
