<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class phieudanhgia_doankhoa extends Model
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
    protected $table = 'phieudanhgia_doankhoa';

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
                  'XEPLOAI_DK_ID',
                  'MAUPHIEU_ID',
                  'TEN_PDGDK'
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
     * Get the XeploaiDk for this model.
     *
     * @return App\Models\XeploaiDk
     */
    public function XeploaiDk()
    {
        return $this->belongsTo('App\Models\xeploai_dk','XEPLOAI_DK_ID','ID');
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
     * Get the chitietPdgDk for this model.
     *
     * @return App\Models\ChitietPdgDk
     */
    public function chitietPdgDk()
    {
        return $this->hasOne('App\Models\chitiet_pdg_dk','PHIEUDANHGIA_DOANKHOA_ID','ID');
    }

    /**
     * Get the doankhoa for this model.
     *
     * @return App\Models\Doankhoa
     */
    public function doankhoa()
    {
        return $this->hasOne('App\Models\doankhoa','PHIEUDANHGIA_DOANKHOA_ID','ID');
    }



}
