<?php

namespace App;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Product
 * @package App
 * @version June 14, 2020, 2:14 pm UTC
 *
 * @property string $image
 * @property string $product_name
 * @property string $price
 * @property string $qte
 * @property string $availability
 */
class Product extends Model
{
    use SoftDeletes;

    public $table = 'products';
    

    protected $dates = ['deleted_at'];



    public $fillable = [
        'image',
        'product_name',
        'price',
        'qte',
        'availability'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'image' => 'string',
        'product_name' => 'string',
        'price' => 'string',
        'qte' => 'string',
        'availability' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'image' => 'required',
        'product_name' => 'required',
        'price' => 'required',
        'qte' => 'required',
        'availability' => 'required'
    ];

    
}
