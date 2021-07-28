<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Role extends Model
{
    use HasFactory,
        SoftDeletes;

    protected $fillable = [
        'title',
        'icon',
        'color'
    ];

    public function permissions(){
        return $this->belongsToMany(Permission::class);
    }
}
