<?php

namespace App\Controllers;

use App\Models\TransaksiModel;

class Transaksi extends BaseController
{
    public function index()
    {
        $model = new TransaksiModel();
        $data['transaksi'] = $model->findAll(); // Ambil semua data transaksi

        return view('admin/data_transaksi', $data);
    }
}