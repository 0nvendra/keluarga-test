<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Keluarga extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama',
        'gender',
        'ref_id',
    ];

    protected $appends = [
        'fGender'
    ];

    public function GetFGenderAttribute()
    {
        switch ($this->gender) {
            case 1:
                return 'laki-laki';
                break;
            case 2:
                return 'perempuan';
                break;
            default:
                return '-';
                break;
        }
    }

    public function parent()
    {
        return $this->belongsTo(self::class,'ref_id');
    }

    public function childs()
    {
        return $this->hasMany(self::class, 'ref_id');
    }
}
