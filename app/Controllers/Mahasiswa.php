<?php

namespace App\Controllers;
use App\Controllers\BaseController;
use Config\Database;

class Mahasiswa extends BaseController
{
    public function tambah()
    {
        $db = Database::connect();
        $builder = $db->table('tb_mahasiswa');

        $data = [
            'nama'  => 'Muhammad Miftahuddin Zein',
            'nim'   => '32602300065',
            'prodi' => 'Teknik Informatika'
        ];

        $builder->insert($data);

        return "Data berhasil ditambahkan.";
    }

    public function tampil()
    {
        $db = Database::connect();
        $builder = $db->table('tb_mahasiswa');
        $query = $builder->get();

        $data['mahasiswa'] = $query->getResult();

        return view('mahasiswa_views', $data);
    }
}
