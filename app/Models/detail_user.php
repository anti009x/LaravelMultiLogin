<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class detail_user extends Model
{
    use HasFactory,HasUuids;

    protected $fillable =[
        'user_id',
        'alamat'
    ];


}
