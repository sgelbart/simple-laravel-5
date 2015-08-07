<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Categories extends Model  {

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'categories';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['name', 'description'];

    protected $rules = ['name:string'];

}
