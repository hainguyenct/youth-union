<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class xeploai_cd extends Model
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
    protected $table = 'xeploai_cd';

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
                  'TEN_PH',
                  'DIEMDAT_CD'
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
     * Get the phieudanhgiaChidoan for this model.
     *
     * @return App\Models\PhieudanhgiaChidoan
     */
    public function phieudanhgiaChidoan()
    {
        return $this->hasOne('App\Models\phieudanhgia_chidoan','XEPLOAI_CD_ID','ID');
    }



}
