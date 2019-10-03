<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class loai_dp_chi extends Model
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
    protected $table = 'loai_dp_chi';

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
                  'TEN_LOAI_DP'
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
     * Get the doanphiChiCd for this model.
     *
     * @return App\Models\DoanphiChiCd
     */
    public function doanphiChiCd()
    {
        return $this->hasOne('App\Models\doanphi_chi_cd','LOAI_DP_CHI_ID','ID');
    }

    /**
     * Get the doanphiChiDk for this model.
     *
     * @return App\Models\DoanphiChiDk
     */
    public function doanphiChiDk()
    {
        return $this->hasOne('App\Models\Doanphi_chi_dk','LOAI_DP_CHI_ID','ID');
    }



}
