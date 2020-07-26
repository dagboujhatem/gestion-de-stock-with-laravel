<?php

namespace App;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Task
 * @package App
 * @version July 26, 2020, 1:17 pm UTC
 *
 * @property string $name
 * @property string $description
 */
class Task extends Model
{
    use SoftDeletes;

    public $table = 'tasks';
    

    protected $dates = ['deleted_at'];



    public $fillable = [
        'name',
        'description'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'name' => 'string',
        'description' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    
}
