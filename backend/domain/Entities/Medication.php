<?php

namespace Domain\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Medication extends Model
{
    protected $attributes = [
        'name' => '',
        'date' => '0000-00-00'
    ];

     /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'date', 'ferret_id'
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
