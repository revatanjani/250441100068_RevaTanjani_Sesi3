<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class sewa extends Model
{
    use HasFactory;

protected $table = 'sewas';
protected $fillable = ['nama_penyewa','tanggal_mulai','lama_sewa'];

}
