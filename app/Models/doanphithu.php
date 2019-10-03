<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class doanphithu extends Model
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
    protected $table = 'doanphithu';

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
                  'sinhvien_id',
                  'thangnam_id',
                  'ngaydong'
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
     * Get the sinhvien for this model.
     *
     * @return App\Models\Sinhvien
     */
    public function sinhvien()
    {
        return $this->belongsTo('App\Models\sinhvien','sinhvien_id');
    }

    /**
     * Get the thangnam for this model.
     *
     * @return App\Models\Thangnam
     */
    public function thangnam()
    {
        return $this->belongsTo('App\Models\thangnam','thangnam_id');
    }

    /**
     * Set the ngaydong.
     *
     * @param  string  $value
     * @return void
     */
    public function setNgaydongAttribute($value)
    {
        $this->attributes['ngaydong'] = !empty($value) ? \DateTime::createFromFormat('[% date_format %]', $value) : null;
    }

    /**
     * Get ngaydong in array format
     *
     * @param  string  $value
     * @return array
     */
    public function getNgaydongAttribute($value)
    {
        return \DateTime::createFromFormat($this->getDateFormat(), $value)->format('j/n/Y g:i A');
    }

}
