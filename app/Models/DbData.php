<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DbData extends Model
{
    use HasFactory;

    protected $table = 'db_data'; // Nama tabel di database
    protected $fillable = ['nama', 'tempat_lahir', 'tgl_lahir', 'no_hp', 'alamat', 'nilai'];
    
}

   

    

