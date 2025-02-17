<?php

// app/Models/Major.php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Major extends Model
{
    use HasFactory;

    protected $fillable = ['major_code', 'major_name'];

    public function users()
    {
        return $this->hasMany(User::class);
    }
}

