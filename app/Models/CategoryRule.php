<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class CategoryRule extends Model
{
    use HasFactory;

    protected $fillable = ["name", "description"];

    /**
     * Get all of the rules for the CategoryRule
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function rules(): HasMany

    {
        return $this->hasMany(Rule::class, 'category_rule_id', 'id');
    }
}
