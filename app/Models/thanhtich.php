<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class thanhtich extends Model
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
    protected $table = 'thanhtich';

    /**
    * The database primary key value.
    *
    * @var string
    */
    protected $primaryKey = 'ID';
    protected $keyType = 'string';
    public $incrementing = false;


    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = [
                  'TEN_TT'
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
     * Get the thanhtichThamgium for this model.
     *
     * @return App\Models\ThanhtichThamgium
     */
    public function thanhtichThamgium()
    {
        return $this->hasOne('App\Models\thanhtich_thamgia','THANHTICH_ID','ID');
    }



}
