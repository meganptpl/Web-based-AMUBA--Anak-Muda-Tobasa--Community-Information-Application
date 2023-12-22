<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class informasi extends Model
{
    use HasFactory;

    protected $table = "informasis";
 
    protected $fillable = ['nama','tempat','tanggal','gambar'];

    public $timestamps = false;
}
