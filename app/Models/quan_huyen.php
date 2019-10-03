<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class quan_huyen extends Model
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
    protected $table = 'quan_huyen';

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
                  'TINH_THANHPHO_ID',
                  'TEN_QD'
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
     * Get the TinhThanhpho for this model.
     *
     * @return App\Models\TinhThanhpho
     */
    public function TinhThanhpho()
    {
        return $this->belongsTo('App\Models\tinh_thanhpho','TINH_THANHPHO_ID','ID');
    }

    /**
     * Get the phuongXa for this model.
     *
     * @return App\Models\PhuongXa
     */
    public function phuongXa()
    {
        return $this->hasOne('App\Models\phuong_xa','QUAN_HUYEN_ID','ID');
    }



}
