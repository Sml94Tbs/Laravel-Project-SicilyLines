<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Model;

class Equipement extends Model
{
    use HasFactory;

    public function ferries() : BelongsToMany{
        return $this->belongsToMany(Ferry::class);
    }
}