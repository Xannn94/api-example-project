<?php

namespace App;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $id
 * @property string  $title
 * @property string  $vendor_code
 * @property integer $price
 * @property integer $quantity
 * @property boolean $active
 * @property Carbon  $created_at
 * @property Carbon  $updated_at
 * @method  Builder active()
 */
class Product extends Model
{
    public function scopeActive(Builder $query) : Builder
    {
        return $query->where('active', 1);
    }
}
