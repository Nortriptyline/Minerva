<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * Roles d'une association.
 */

class Assocrole extends Model
{
    use HasFactory;

    public function association()
    {
        return $this->belongsTo(Association::class);
    }

    /**
     * Les Utilisateurs sont liés à un role
     * qui est lié à une association
     * 
     * Association <- Assocrole <- User
     */
    public function users()
    {
        return $this->belongsToMany(User::class);
    }
}
