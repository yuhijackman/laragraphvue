<?php

namespace Domain\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Food extends Model
{
    protected $attributes = [
        'name' => '',
        'amount' => 0
    ];

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'amount'
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
}
