<?php

namespace Aurora\http\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    use HasUuids;
    
    protected $fillable = [
       'name',
       'email',
       'password'
    ];
}