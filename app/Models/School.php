<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

class School extends Model
{
    use HasFactory;

    protected $fillable = ["name", "description", "address", "contact", "logo", "banner", "images", "email", "site_web", "infrastructure", "responsable", "localisation"];

    protected $casts = [
        'images' => 'array',
        'infrastructure' => 'array',
        'responsable' => 'array',
        'localisation' => 'array',
    ];

    /**
     * Get all of the comments for the School
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function comments(): HasMany
    {
        return $this->hasMany(Comment::class, 'school_id', 'id');
    }

    /**
     * Get all of the notes for the School
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function notes(): HasMany
    {
        return $this->hasMany(Note::class, 'school_id', 'id');
    }

    /**
     * Get all of the programs for the School
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function programs(): HasMany
    {
        return $this->hasMany(Program::class, 'school_id', 'id');
    }

    /**
     * The sectors that belong to the School
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function sectors(): BelongsToMany
    {
        return $this->belongsToMany(SchoolSector::class, 'school_sectors', 'sector_id', 'school_id');
    }
}
