<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\Mechanic;

class Likes extends Model
{
    use HasFactory;

    protected $fillable = ['mechanic_id', 'user_id'];

    public function mechanic()
    {
        return $this->belongsTo(Mechanic::class);
    }


}
