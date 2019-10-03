<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class chitiet_pdg_cd extends Model
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
    protected $table = 'chitiet_pdg_cd';

    /**
    * The database primary key value.
    *
    * @var string
    */
    protected $primaryKey = 'ID';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = [
                  'PHIEUDANHGIA_CHIDOAN_ID',
                  'NOIDUNG_PDG_ID',
                  'DIEM_DUYET_PDGCD',
                  'DIEM_CD_TUDANHGIA',
                  'GHICHU_PDGCD'
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
     * Get the NoidungPdg for this model.
     *
     * @return App\Models\NoidungPdg
     */
    public function NoidungPdg()
    {
        return $this->belongsTo('App\Models\noidung_pdg','NOIDUNG_PDG_ID','ID');
    }



}
