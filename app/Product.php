<?php


namespace App;


use Illuminate\Database\Eloquent\Model;


class Product extends Model
{
	protected $guard_name = 'admin';
    /**
     * The attributes that are mass assignable.
     *	
     * @var array
     */
    protected $fillable = [
        'name', 'detail'
    ];
}