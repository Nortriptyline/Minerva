<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Association extends Model
{
    use HasFactory;

    /**
     * Roles of this Assocation
     */
    public function assocroles()
    {
        return $this->hasMany(Assocrole::class);
    }
}
