<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\SoftDeletes;

class Role extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $guarded = ['id'];

    public function Permissions(): BelongsToMany
    {
        return $this->belongsToMany(Permission::class,'role_permissions');
    }
    public function users(){

        return $this->belongsToMany(User::class,'user_roles');
    }
}
