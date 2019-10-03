<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class namhoc extends Model
{
    
    /**
     * Indicates if the model should be timestamped.
     *
     * @var bool
     */
    public $timestamps = false;
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'namhoc';

    /**
    * The database primary key value.
    *
    * @var string
    */
    protected $primaryKey = 'id';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = [
                  'namhoc'
              ];

    /**
     * The attributes that should be mutated to dates.
     *
     * @var array
     */
    protected $dates = [];
    
    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [];
    
    /**
     * Get the thangnams for this model.
     *
     * @return Illuminate\Database\Eloquent\Collection
     */
    public function thangnams()
    {
        return $this->hasMany('App\Models\Thangnam','namhoc_id','id');
    }



}
