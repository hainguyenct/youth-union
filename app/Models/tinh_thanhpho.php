<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class tinh_thanhpho extends Model
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
    protected $table = 'tinh_thanhpho';

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
                  'TEN_TP'
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
     * Get the quanHuyen for this model.
     *
     * @return App\Models\QuanHuyen
     */
    public function quanHuyen()
    {
        return $this->hasOne('App\Models\quan_huyen','TINH_THANHPHO_ID','ID');
    }



}
