<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    use HasFactory;

    protected $table=['profile_users'];
    protected $guarded = ['id'];

    public function user()
    {
        return $this->beLongsTo(User::class,'user_id');
    }

}
