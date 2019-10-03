<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class loai_noidung_pdg extends Model
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
    protected $table = 'loai_noidung_pdg';

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
                  'TEN_LOAI_NDPDG'
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
     * Get the noidungPdg for this model.
     *
     * @return App\Models\NoidungPdg
     */
    public function noidungPdg()
    {
        return $this->hasOne('App\Models\noidung_pdg','LOAI_NOIDUNG_PDG_ID','ID');
    }



}
