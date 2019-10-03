<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class doanvien_thanhnien extends Model
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
    protected $table = 'doanvien_thanhnien';

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
                  'PHUONG_XA_ID_QQ',
                  'CHIDOAN_ID',
                  'TONGIAO_ID',
                  'PHUONG_XA_ID_NS',
                  'DANTOC_ID',
                  'TEN_SV',
                  'NGAYSINH_SV',
                  'DIACHI_SV',
                  'PHAI_SV',
                  'SDT_SV',
                  'EMAIL_SV',
                  'NGAYVAODOAN_SV',
                  'NOIVAODOAN_SV',
                  'MATKHAU_DV'
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
     * Get the PhuongXa for this model.
     *
     * @return App\Models\PhuongXa
     */
    public function PhuongXa()
    {
        return $this->belongsTo('App\Models\phuong_xa','PHUONG_XA_ID_NS','ID');
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
     * Get the Tongiao for this model.
     *
     * @return App\Models\Tongiao
     */
    public function Tongiao()
    {
        return $this->belongsTo('App\Models\tongiao','TONGIAO_ID','ID');
    }

    /**
     * Get the Dantoc for this model.
     *
     * @return App\Models\Dantoc
     */
    public function Dantoc()
    {
        return $this->belongsTo('App\Models\dantoc','DANTOC_ID','ID');
    }

    /**
     * Get the chitietKtkl for this model.
     *
     * @return App\Models\ChitietKtkl
     */
    public function chitietKtkl()
    {
        return $this->hasOne('App\Models\chitiet_ktkl','DOANVIEN_THANHNIEN_ID','ID');
    }

    /**
     * Get the ctChucvuDv for this model.
     *
     * @return App\Models\CtChucvuDv
     */
    public function ctChucvuDv()
    {
        return $this->hasOne('App\Models\ct_chucvu_dv','DOANVIEN_THANHNIEN_ID','ID');
    }

    /**
     * Get the doanphiThuDv for this model.
     *
     * @return App\Models\DoanphiThuDv
     */
    public function doanphiThuDv()
    {
        return $this->hasOne('App\Models\doanphi_thu_dv','DOANVIEN_THANHNIEN_ID','ID');
    }

    /**
     * Get the phieudanhgiaDoanvien for this model.
     *
     * @return App\Models\PhieudanhgiaDoanvien
     */
    public function phieudanhgiaDoanvien()
    {
        return $this->hasOne('App\Models\phieudanhgia_doanvien','DOANVIEN_THANHNIEN_ID','ID');
    }

    /**
     * Get the qdDvKetnap for this model.
     *
     * @return App\Models\QdDvKetnap
     */
    public function qdDvKetnap()
    {
        return $this->hasOne('App\Models\qd_dv_ketnap','DOANVIEN_THANHNIEN_ID','ID');
    }

    /**
     * Get the qdDvTtdoan for this model.
     *
     * @return App\Models\QdDvTtdoan
     */
    public function qdDvTtdoan()
    {
        return $this->hasOne('App\Models\qd_dv_ttdoan','DOANVIEN_THANHNIEN_ID','ID');
    }

    /**
     * Get the thanhtichThamgium for this model.
     *
     * @return App\Models\ThanhtichThamgium
     */
    public function thanhtichThamgium()
    {
        return $this->hasOne('App\Models\thanhtich_thamgia','DOANVIEN_THANHNIEN_ID','ID');
    }

    /**
     * Get the vaitro for this model.
     *
     * @return App\Models\Vaitro
     */
    public function vaitro()
    {
        return $this->hasOne('App\Models\vaitro','DOANVIEN_THANHNIEN_ID','ID');
    }

    /**
     * Set the NGAYSINH_SV.
     *
     * @param  string  $value
     * @return void
     */
    public function setNGAYSINHSVAttribute($value)
    {
        $this->attributes['NGAYSINH_SV'] = !empty($value) ? \DateTime::createFromFormat('[% date_format %]', $value) : null;
    }

    /**s
     * Set the NGAYVAODOAN_SV.
     *
     * @param  string  $value
     * @return void
     */
    public function setNGAYVAODOANSVAttribute($value)
    {
        $this->attributes['NGAYVAODOAN_SV'] = !empty($value) ? \DateTime::createFromFormat('[% date_format %]', $value) : null;
    }

    /**
     * Get NGAYSINH_SV in array format
     *
     * @param  string  $value
     * @return array
     */
    public function getNGAYSINHSVAttribute($value)
    {
        return \DateTime::createFromFormat($this->getDateFormat(), $value)->format('j/n/Y g:i A');
    }

    /**
     * Get NGAYVAODOAN_SV in array format
     *
     * @param  string  $value
     * @return array
     */
    public function getNGAYVAODOANSVAttribute($value)
    {
        return \DateTime::createFromFormat($this->getDateFormat(), $value)->format('j/n/Y g:i A');
    }

}
