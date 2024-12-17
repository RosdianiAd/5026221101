namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class KeranjangBelanja extends Model
{
    protected $table = 'keranjangbelanja'; // Nama tabel di database
    protected $fillable = ['KodeBarang', 'Jumlah', 'Harga']; // Kolom yang dapat diisi
}
