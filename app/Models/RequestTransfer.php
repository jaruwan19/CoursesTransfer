<?php

// app/Models/RequestTransfer.php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RequestTransfer extends Model
{
    use HasFactory;

    protected $primaryKey = 'request_id';

    protected $fillable = [
        'user_id', 
        'syst_id', 
        'inst_id', 
        'graduation_date', 
        'student_original_code', 
        'major_original_id', 
        'transcrip', 
        'trns_subj_id', 
        'status'
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function systemTransfer()
    {
        return $this->belongsTo(SystemTransfer::class, 'syst_id');
    }

    public function institution()
    {
        return $this->belongsTo(Institution::class, 'inst_id');
    }

    public function major()
    {
        return $this->belongsTo(Major::class, 'major_original_id');
    }

    public function transferSubject()
    {
        return $this->belongsTo(TransferSubject::class, 'trns_subj_id');
    }
}
