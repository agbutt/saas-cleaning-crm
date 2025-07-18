<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Office extends Model
{
    use HasFactory;

    protected $fillable = ['name'];

    public function cleaners()
    {
        return $this->hasMany(Cleaner::class);
    }

    public function jobs()
    {
        return $this->hasMany(Job::class);
    }
}
