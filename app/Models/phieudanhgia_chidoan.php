<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class phieudanhgia_chidoan extends Model
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
    protected $table = 'phieudanhgia_chidoan';

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
                  'NAMHOC_ID',
                  'XEPLOAI_CD_ID',
                  'MAUPHIEU_ID',
                  'TEN_PDGCD'
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
     * Get the Namhoc for this model.
     *
     * @return App\Models\Namhoc
     */
    public function Namhoc()
    {
        return $this->belongsTo('App\Models\namhoc','NAMHOC_ID','ID');
    }

    /**
     * Get the XeploaiCd for this model.
     *
     * @return App\Models\XeploaiCd
     */
    public function XeploaiCd()
    {
        return $this->belongsTo('App\Models\xeploai_cd','XEPLOAI_CD_ID','ID');
    }

    /**
     * Get the Mauphieu for this model.
     *
     * @return App\Models\Mauphieu
     */
    public function Mauphieu()
    {
        return $this->belongsTo('App\Models\mauphieu','MAUPHIEU_ID','ID');
    }

    /**
     * Get the chidoan for this model.
     *
     * @return App\Models\Chidoan
     */
    public function chidoan()
    {
        return $this->hasOne('App\Models\chidoan','PHIEUDANHGIA_CHIDOAN_ID','ID');
    }

    /**
     * Get the chitietPdgCd for this model.
     *
     * @return App\Models\ChitietPdgCd
     */
    public function chitietPdgCd()
    {
        return $this->hasOne('App\Models\chitiet_pdg_cd','PHIEUDANHGIA_CHIDOAN_ID','ID');
    }



}
