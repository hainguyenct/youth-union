<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class kieu_dulieu extends Model
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
    protected $table = 'kieu_dulieu';

    /**
    * The database primary key value.
    *
    * @var string
    */
    protected $primaryKey = 'id';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = [
                  'ten_kieu_dulieu'
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
        return $this->hasOne('App\Models\noidung_pdg','KIEU_DULIEU_ID','id');
    }



}
