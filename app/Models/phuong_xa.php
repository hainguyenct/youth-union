<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class phuong_xa extends Model
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
    protected $table = 'phuong_xa';

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
                  'QUAN_HUYEN_ID',
                  'TEN_PX'
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
     * Get the QuanHuyen for this model.
     *
     * @return App\Models\QuanHuyen
     */
    public function QuanHuyen()
    {
        return $this->belongsTo('App\Models\quan_huyen','QUAN_HUYEN_ID','ID');
    }

    /**
     * Get the doanvienThanhnien for this model.
     *
     * @return App\Models\DoanvienThanhnien
     */
    public function doanvienThanhnien()
    {
        return $this->hasOne('App\Models\doanvien_thanhnien','PHUONG_XA_ID_QQ','ID');
    }



}
