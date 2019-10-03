<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class loai_ktkl extends Model
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
    protected $table = 'loai_ktkl';

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
                  'TEN_LOAIKTKL'
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
     * Get the khenthuongKyluat for this model.
     *
     * @return App\Models\KhenthuongKyluat
     */
    public function khenthuongKyluat()
    {
        return $this->hasOne('App\Models\khenthuong_kyluat','LOAI_KTKL_ID','ID');
    }



}
