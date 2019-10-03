<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class noidung_pdg extends Model
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
    protected $table = 'noidung_pdg';

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
                  'NOIDUNG_CHA_PDG_ID',
                  'LOAI_NOIDUNG_PDG_ID',
                  'TEN_NDPDG',
                  'NOIDUNG_NDPDG',
                  'DIEMTOIDA_NDPDG',
                  'KIEU_DULIEU_ID'
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
     * Get the ParentNoidungPdg for this model.
     *
     * @return App\Models\NoidungPdg
     */
    public function ParentNoidungPdg()
    {
        return $this->belongsTo('App\Models\noidung_pdg','NOIDUNG_CHA_PDG_ID','ID');
    }

    /**
     * Get the LoaiNoidungPdg for this model.
     *
     * @return App\Models\LoaiNoidungPdg
     */
    public function LoaiNoidungPdg()
    {
        return $this->belongsTo('App\Models\loai_noidung_pdg','LOAI_NOIDUNG_PDG_ID','ID');
    }

    /**
     * Get the KieuDulieu for this model.
     *
     * @return App\Models\KieuDulieu
     */
    public function KieuDulieu()
    {
        return $this->belongsTo('App\Models\kieu_dulieu','KIEU_DULIEU_ID','id');
    }

    /**
     * Get the chitietMauphieu for this model.
     *
     * @return App\Models\ChitietMauphieu
     */
    public function chitietMauphieu()
    {
        return $this->hasOne('App\Models\chitiet_mauphieu','NOIDUNG_PDG_ID','ID');
    }

    /**
     * Get the chitietPdgSv for this model.
     *
     * @return App\Models\ChitietPdgSv
     */
    public function chitietPdgSv()
    {
        return $this->hasOne('App\Models\ChitietPdgSv','NOIDUNG_PDG_ID','ID');
    }

    /**
     * Get the childNoidungPdg for this model.
     *
     * @return App\Models\NoidungPdg
     */
    public function childNoidungPdg()
    {
        return $this->hasOne('App\Models\NoidungPdg','NOIDUNG_CHA_PDG_ID','ID');
    }



}
