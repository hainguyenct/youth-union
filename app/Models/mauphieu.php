<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class mauphieu extends Model
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
    protected $table = 'mauphieu';

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
                  'TEN_MP',
                  'NGAYTAO_MP',
                  'NGAYCAONHAT_MP'
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
     * Get the chitietMauphieu for this model.
     *
     * @return App\Models\ChitietMauphieu
     */
    public function chitietMauphieu()
    {
        return $this->hasOne('App\Models\chitiet_mauphieu','MAUPHIEU_ID','ID');
    }

    /**
     * Get the phieudanhgiaSinhvien for this model.
     *
     * @return App\Models\PhieudanhgiaSinhvien
     */
    public function phieudanhgiaSinhvien()
    {
        return $this->hasOne('App\Models\phieudanhgia_sinhvien','MAUPHIEU_ID','ID');
    }



}
