<?php

namespace App\Controllers;

use App\Models\Struktur;

class organisasi extends BaseController
{

    public function __construct()
    {

        $this->data = new Struktur();
    }

    public function add()
    {
        echo view('aboute/struktur/add');
    }

    function simpan()
    {
        $dataBerkas = $this->request->getFile('img');
        $fileName = $dataBerkas->getRandomName();

        $this->data->save([
            'id' => $this->request->getVar('id'),
            'img' => $fileName,
            'jabatan' => $this->request->getVar('jabatan'),
            'nama' => $this->request->getVar('nama'),
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
                'jabatan' => $i['jabatan'],
                'nama' => $i['nama'],
            ];
            return view('aboute/struktur/edit', $data);
        } else {
            echo "Data Was Not Found";
        }
    }

    function update()
    {

        $this->data->save([
            'id' => $this->request->getVar('id'),
            'img' => $this->request->getVar('img'),
            'jabatan' => $this->request->getVar('jabatan'),
            'nama' => $this->request->getVar('nama'),
        ]);
        return redirect()->to('organisasi/struktur');
    }

    function delete($id)
    {
        $this->data->delete($id);
        return redirect()->to('organisasi/struktur');
    }


    public function strukturhome()
    {
        echo view('admin/adminstruktur', [
            'data' => $this->data->findAll()
        ]);
    }


    public function struktur()
    {
        echo view('aboute/struktur/strukturOrganisasi', [
            'data' => $this->data->findAll()
        ]);
    }
}
