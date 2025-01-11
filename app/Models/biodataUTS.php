
<?php 

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class biodataUTS extends Model
{
    use HasFactory;

    protected $table = 'biodata_u_t_s'; // Nama tabel di database

    protected $fillable = [
        'nama',
        'tempat_lahir',
        'tgl_lahir',
        'no_hp',
        'alamat',
        'nilai',
    ];
}
