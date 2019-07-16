<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kategori extends Model
{
    //  protected $fillable =  ['nama_kategori','slug'];
    public $timestamps = true;

    public function artikel()
    {
        return $this->hasMany('App\Artikel', 'id_kategori');
    }

    public static function boot()
    {
        parent::boot();
        self::deleting(function ($kategori) {
            // mengecek apakah penulis masih punya buku
            if ($kategori->artikel->count() > 0) {
                // menyiapkan pesan eror
                $html = 'kategori tidak bisa dihapus karena masih digunakan oleh Artikel: ';
                $html .= '<ul>';
                foreach ($kategori->artikel as $data) {
                    $html .= "<li>$data->judul</li>";
                }
                $html .= '</ul>';
                Session::flash("flash_notification", [
                    "level" => "danger",
                    "message" => $html
                ]);
                // membatalkan proses penghapusan
                return false;
            }
        });
    }


    public function getRouteKeyName()
    {
        return 'slug';
    }
}
