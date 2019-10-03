<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class pt_chidoan extends Model
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
    protected $table = 'pt_chidoan';

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
                  'HOCKY_ID',
                  'LOAI_PT_ID',
                  'CHIDOAN_ID',
                  'DOANPHI_CHI_CD_ID',
                  'TEN_PT_CD',
                  'NGAY_BD_PT_CD',
                  'NGAY_KT_PT_CD',
                  'GHICHU_PT_CD'
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
     * Get the Hocky for this model.
     *
     * @return App\Models\Hocky
     */
    public function Hocky()
    {
        return $this->belongsTo('App\Models\hocky','HOCKY_ID','ID');
    }

    /**
     * Get the LoaiPt for this model.
     *
     * @return App\Models\LoaiPt
     */
    public function LoaiPt()
    {
        return $this->belongsTo('App\Models\loai_pt','LOAI_PT_ID','ID');
    }

    /**
     * Get the Chidoan for this model.
     *
     * @return App\Models\Chidoan
     */
    public function Chidoan()
    {
        return $this->belongsTo('App\Models\chidoan','CHIDOAN_ID','ID');
    }

    /**
     * Get the DoanphiChiCd for this model.
     *
     * @return App\Models\DoanphiChiCd
     */
    public function DoanphiChiCd()
    {
        return $this->belongsTo('App\Models\doanphi_chi_cd','DOANPHI_CHI_CD_ID','ID');
    }

    /**
     * Set the NGAY_BD_PT_CD.
     *
     * @param  string  $value
     * @return void
     */
    public function setNGAYBDPTCDAttribute($value)
    {
        $this->attributes['NGAY_BD_PT_CD'] = !empty($value) ? \DateTime::createFromFormat('[% date_format %]', $value) : null;
    }

    /**
     * Set the NGAY_KT_PT_CD.
     *
     * @param  string  $value
     * @return void
     */
    public function setNGAYKTPTCDAttribute($value)
    {
        $this->attributes['NGAY_KT_PT_CD'] = !empty($value) ? \DateTime::createFromFormat('[% date_format %]', $value) : null;
    }

    /**
     * Get NGAY_BD_PT_CD in array format
     *
     * @param  string  $value
     * @return array
     */
    public function getNGAYBDPTCDAttribute($value)
    {
        return \DateTime::createFromFormat($this->getDateFormat(), $value)->format('j/n/Y g:i A');
    }

    /**
     * Get NGAY_KT_PT_CD in array format
     *
     * @param  string  $value
     * @return array
     */
    public function getNGAYKTPTCDAttribute($value)
    {
        return \DateTime::createFromFormat($this->getDateFormat(), $value)->format('j/n/Y g:i A');
    }

}
