<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class xeploai_dk extends Model
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
    protected $table = 'xeploai_dk';

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
                  'TEN_XLDK',
                  'DIEMDAT_DK'
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
     * Get the phieudanhgiaDoankhoa for this model.
     *
     * @return App\Models\PhieudanhgiaDoankhoa
     */
    public function phieudanhgiaDoankhoa()
    {
        return $this->hasOne('App\Models\phieudanhgia_doankhoa','XEPLOAI_DK_ID','ID');
    }



}
