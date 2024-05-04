<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Rule extends Model
{
    use HasFactory;

    protected $fillable = ["libelle", "min_note", "max_note", "category_rule_id"];

    protected $with = [
        'category'
    ];

    /**
     * Get the category_rule that owns the Rule
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function category(): BelongsTo
    {
        return $this->belongsTo(CategoryRule::class, 'category_rule_id');
    }
}
