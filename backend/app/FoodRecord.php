<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class FoodRecord extends Model
{
    protected $attributes = [
        'amount' => 0,
        'feeding_time' => '0000-00-00 00:00'
    ];

    protected $casts = [
        'amount' => 'integer',
    ];

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'amount', 'food_id', 'ferret_id','feeding_time'
    ];

    protected $dates = [
        'created_at',
        'updated_at'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function ferret(): BelongsTo
    {
        return $this->belongsTo(Ferret::class);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
    */
    public function food(): BelongsTo
    {
        return $this->belongsTo(Food::class);
    }
}
