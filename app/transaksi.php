<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class transaksi extends Model
{
    protected $guarded = [];

    public function user()
    {
        return $this->belongsTo(anggota::class, 'user_id', 'user_id');
    }

    public function guru()
    {
        return $this->belongsTo(guru::class, 'user_id', 'user_id');
    }

    public function buku()
    {
        return $this->belongsTo(buku::class, 'buku_id');
    }
}
