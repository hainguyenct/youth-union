<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class chidoan extends Model
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
    protected $table = 'chidoan';

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
                  'PHIEUDANHGIA_CHIDOAN_ID',
                  'DOANPHI_CHI_CD_ID',
                  'DOANKHOA_ID',
                  'KHOA_ID',
                  'TEN_CD'
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
     * Get the PhieudanhgiaChidoan for this model.
     *
     * @return App\Models\PhieudanhgiaChidoan
     */
    public function PhieudanhgiaChidoan()
    {
        return $this->belongsTo('App\Models\phieudanhgia_chidoan','PHIEUDANHGIA_CHIDOAN_ID','ID');
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
     * Get the Doankhoa for this model.
     *
     * @return App\Models\Doankhoa
     */
    public function Doankhoa()
    {
        return $this->belongsTo('App\Models\doankhoa','DOANKHOA_ID','ID');
    }

    /**
     * Get the Khoa for this model.
     *
     * @return App\Models\Khoa
     */
    public function Khoa()
    {
        return $this->belongsTo('App\Models\khoa','KHOA_ID','ID');
    }

    /**
     * Get the doanphiThuCd for this model.
     *
     * @return App\Models\DoanphiThuCd
     */
    public function doanphiThuCd()
    {
        return $this->hasOne('App\Models\doanphi_thu_cd','CHIDOAN_ID','ID');
    }

    /**
     * Get the doanvienThanhnien for this model.
     *
     * @return App\Models\DoanvienThanhnien
     */
    public function doanvienThanhnien()
    {
        return $this->hasOne('App\Models\doanvien_thanhnien','CHIDOAN_ID','ID');
    }

    /**
     * Get the phieubauUutu for this model.
     *
     * @return App\Models\PhieubauUutu
     */
    public function phieubauUutu()
    {
        return $this->hasOne('App\Models\phieubau_uutu','CHIDOAN_ID','ID');
    }

    /**
     * Get the ptChidoan for this model.
     *
     * @return App\Models\PtChidoan
     */
    public function ptChidoan()
    {
        return $this->hasOne('App\Models\pt_chidoan','CHIDOAN_ID','ID');
    }



}
