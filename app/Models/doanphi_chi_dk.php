<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class doanphi_chi_dk extends Model
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
    protected $table = 'doanphi_chi_dk';

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
                  'SOTIEN_CHI_DK',
                  'NGAY_CHI_DK',
                  'NGUOI_NHAN_PHIEU_CHI_DK'
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
     * Get the ptDoankhoa for this model.
     *
     * @return App\Models\PtDoankhoa
     */
    public function ptDoankhoa()
    {
        return $this->hasOne('App\Models\pt_doankhoa','DOANPHI_CHI_DK_ID','ID');
    }

    /**
     * Set the NGAY_CHI_DK.
     *
     * @param  string  $value
     * @return void
     */
    public function setNGAYCHIDKAttribute($value)
    {
        $this->attributes['NGAY_CHI_DK'] = !empty($value) ? \DateTime::createFromFormat('[% date_format %]', $value) : null;
    }

    /**
     * Get NGAY_CHI_DK in array format
     *
     * @param  string  $value
     * @return array
     */
    public function getNGAYCHIDKAttribute($value)
    {
        return \DateTime::createFromFormat($this->getDateFormat(), $value)->format('j/n/Y g:i A');
    }

}
