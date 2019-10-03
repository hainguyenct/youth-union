<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class chitiet_mauphieu extends Model
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
    protected $table = 'chitiet_mauphieu';

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
                  'MAUPHIEU_ID',
                  'NOIDUNG_PDG_ID',
                  'THUTU_NOIDUNG'
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
     * Get the Mauphieu for this model.
     *
     * @return App\Models\Mauphieu
     */
    public function Mauphieu()
    {
        return $this->belongsTo('App\Models\mauphieu','MAUPHIEU_ID','ID');
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
