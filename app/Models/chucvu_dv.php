<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class chucvu_dv extends Model
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
    protected $table = 'chucvu_dv';

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
                  'TEN_CHUCVU'
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
     * Get the ctChucvuDv for this model.
     *
     * @return App\Models\CtChucvuDv
     */
    public function ctChucvuDv()
    {
        return $this->hasOne('App\Models\ct_chucvu_dv','CHUCVU_DV_ID','ID');
    }



}
