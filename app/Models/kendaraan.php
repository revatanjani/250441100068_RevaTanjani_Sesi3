<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class kendaraan extends Model
{
    
use HasFactory;

protected $table = 'kendaraans';
protected $fillable = ['plat_nomor','merek','jenis','tarif_per_hari'];

}
