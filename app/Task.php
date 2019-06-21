<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'category_id', 'user_id', 'order'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        //
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        //
    ];    

    /**
     * Get the Category for the Task.
     */
    public function category()
    {
        return $this->belongsTo(\App\Category::class);
    }


    /**
     * Get the User for the Task.
     */
    public function user()
    {
        return $this->belongsTo(\App\User::class);
    }

}