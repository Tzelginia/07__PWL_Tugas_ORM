<?php
namespace App\Models;
use Illuminate\Contracts\Auth\MustVerifyemail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\Mahasiswa as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Model; //Model Eloquen

class Mahasiswa extends Model
{
    protected $table='mahasiswa'; // Eloquent akan membuat model mahasiswa menyimpan record di tabel mahasiswa
 protected $primaryKey = 'Nim'; // Memanggil isi DB Dengan primarykey
 /**
 * The attributes that are mass assignable.
 *
 * @var array
 */
 protected $fillable = [
 'Nim',
 'Nama',
 'Kelas',
 'Jurusan',
  //menambah 3 kolom pada model
  'Email' ,
  'Alamat' ,
  'tanggal_lahir' ,
 ];
}
