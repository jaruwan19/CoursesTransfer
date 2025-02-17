<?php

// app/Models/Institution.php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Institution extends Model
{
    use HasFactory;

    protected $fillable = ['inst_name'];

    public function requestTransfers()
    {
        return $this->hasMany(RequestTransfer::class, 'inst_id');
    }
}
