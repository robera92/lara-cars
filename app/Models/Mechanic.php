<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\Likes;

class Mechanic extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'last_name', 'specialization', 'img_path', 'city', 'service_id'];

    public function likes()
    {
        return $this->hasMany(Likes::class);
    }


    public function service()
    {
        return $this->belongsTo(Service::class);
    }

}
