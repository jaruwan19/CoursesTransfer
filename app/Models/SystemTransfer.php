<?php

// app/Models/SystemTransfer.php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SystemTransfer extends Model
{
    use HasFactory;

    protected $fillable = ['syst_name'];

    public function requestTransfers()
    {
        return $this->hasMany(RequestTransfer::class, 'syst_id');
    }
}
