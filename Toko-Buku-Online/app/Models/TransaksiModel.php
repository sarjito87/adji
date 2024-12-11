<?php

namespace App\Models;

use CodeIgniter\Model;

class TransaksiModel extends Model
{
    protected $table = 'transaksi'; // Ganti dengan nama tabel Anda
    protected $primaryKey = 'id_transaksi';
    protected $allowedFields = ['nama_pelanggan', 'jumlah', 'tanggal', 'status']; // Ganti dengan field yang sesuai
}