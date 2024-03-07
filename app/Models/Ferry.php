<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Model;

class Ferry extends Model
{
    use HasFactory;
    protected $fillable = ['nom', 'photo', 'longueur', 'largeur', 'vitesse'];
    public function equipements(): BelongsToMany{
        return $this->belongsToMany(Equipement::class);
    }
}