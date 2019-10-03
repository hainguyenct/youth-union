<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class doanphi_chi_cd extends Model
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
    protected $table = 'doanphi_chi_cd';

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
                  'LOAI_DP_CHI_ID',
                  'SOTIEN_CHI_CD',
                  'NGAY_CHI_CD',
                  'NGUOI_NHAN_PHIEU_CHI_CD'
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
     * Get the LoaiDpChi for this model.
     *
     * @return App\Models\LoaiDpChi
     */
    public function LoaiDpChi()
    {
        return $this->belongsTo('App\Models\loai_dp_chi','LOAI_DP_CHI_ID','ID');
    }

    /**
     * Get the chidoan for this model.
     *
     * @return App\Models\Chidoan
     */
    public function chidoan()
    {
        return $this->hasOne('App\Models\chidoan','DOANPHI_CHI_CD_ID','ID');
    }

    /**
     * Get the ptChidoan for this model.
     *
     * @return App\Models\PtChidoan
     */
    public function ptChidoan()
    {
        return $this->hasOne('App\Models\pt_chidoan','DOANPHI_CHI_CD_ID','ID');
    }

    /**
     * Set the NGAY_CHI_CD.
     *
     * @param  string  $value
     * @return void
     */
    public function setNGAYCHICDAttribute($value)
    {
        $this->attributes['NGAY_CHI_CD'] = !empty($value) ? \DateTime::createFromFormat('[% date_format %]', $value) : null;
    }

    /**
     * Get NGAY_CHI_CD in array format
     *
     * @param  string  $value
     * @return array
     */
    public function getNGAYCHICDAttribute($value)
    {
        return \DateTime::createFromFormat($this->getDateFormat(), $value)->format('j/n/Y g:i A');
    }

}
