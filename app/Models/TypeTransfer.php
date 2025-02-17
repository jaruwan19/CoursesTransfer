<?php

// app/Models/TypeTransfer.php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TypeTransfer extends Model
{
    use HasFactory;

    protected $fillable = ['type_name'];

    public function transferSubjects()
    {
        return $this->hasMany(TransferSubject::class, 'type_id');
    }
}
