<?php

namespace App\Controllers;

use App\Models\Home1;
use App\Models\Struktur;

class project extends BaseController
{
    public function __construct()
    {
        $this->data = new Home1();
        $this->id = new Struktur();
    }

    public function home()
    {

        echo view('aboute/home', [
            'data' => $this->data->findAll()

        ]);
    }

    // ==============CRUD card1================

    public function add()
    {
        echo view('aboute/card1/add');
    }

    function simpan()
    {
        $dataBerkas = $this->request->getFile('img');
        $fileName = $dataBerkas->getRandomName();

        $this->data->save([
            'id' => $this->request->getVar('id'),
            'img' => $fileName,
            'judul' => $this->request->getVar('judul'),
            'penjelasan' => $this->request->getVar('penjelasan'),
            'tipe' => $this->request->getVar('tipe'),

        ]);
        $dataBerkas->move('asset/img/', $fileName);
        return redirect()->to('project/admin');
    }


    public function get_edit($id)
    {
        $result =  $this->data->where(['id' => $id])->get();
        if ($result->getNumRows() > 0) {
            $i = $result->getRowArray();
            $data = [
                'id' => $i['id'],
                'img' => $i['img'],
                'judul' => $i['judul'],
                'penjelasan' => $i['penjelasan'],
                'tipe' => $i['tipe'],
            ];
            return view('aboute/card1/edit', $data);
        } else {
            echo "Data Was Not Found";
        }
    }

    function update()
    {
        $this->data->save([
            'id' => $this->request->getVar('id'),
            'img' => $this->request->getVar('img'),
            'judul' => $this->request->getVar('judul'),
            'penjelasan' => $this->request->getVar('penjelasan'),
            'tipe' => $this->request->getVar('tipe'),
        ]);
        return redirect()->to('project/admin');
    }

    function delete($id)
    {
        $this->data->delete($id);
        return redirect()->to('project/admin');
    }



    public function detaile($id)
    {
        $result =  $this->data->where(['id' => $id])->get();
        if ($result->getNumRows() > 0) {
            $i = $result->getRowArray();
            $data = [
                'id' => $i['id'],
                'img' => $i['img'],
                'judul' => $i['judul'],
                'penjelasan' => $i['penjelasan'],
            ];
            return view('aboute/card1/detaile', $data);
        } else {
            echo "Data Was Not Found";
        }
    }


    public function admin()
    {
        echo view('/admin/index', [
            'data' => $this->data->findAll()
        ]);
    }

    public function profile()
    {
        return view('/aboute/profile/profile');
    }


    public function tugasPoko()
    {
        return view('/aboute/tugas/tugasPoko');
    }

    public function informasi()
    {
        return view('/aboute/informasi/informasi');
    }

    public function pengumuman()
    {
        echo view('aboute/pengumuman/pengumuman', [
            'data' => $this->data->where(['tipe' => 'pengumuman'])->get()
        ]);
    }

    public function loka()
    {
        echo view('aboute/lowongan/loka', [
            'data' => $this->data->where(['tipe' => 'loker'])->get()

        ]);
    }
}
