<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Sector extends Model
{
    use HasFactory;

    protected $fillable = ["libelle", "description"];

    /**
     * The roles that belong to the Sector
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function schools(): BelongsToMany
    {
        return $this->belongsToMany(School::class, 'school_sectors', 'school_id', 'sector_id');
    }
}
