<?php

namespace App\Controllers;

use App\Models\Program;

class kerja extends BaseController
{

    public function __construct()
    {

        $this->data = new Program();
    }

    public function add()
    {
        echo view('aboute/pKerja/add');
    }

    function simpan()
    {
        $this->data->save([
            'id' => $this->request->getVar('id'),
            'program' => $this->request->getVar('program'),
        ]);
        return redirect()->to('project/admin');
    }


    public function get_edit($id)
    {
        $result =  $this->data->where(['id' => $id])->get();
        if ($result->getNumRows() > 0) {
            $i = $result->getRowArray();
            $id = [
                'id' => $i['id'],
                'program' => $i['program'],
            ];
            return view('aboute/pKerja/edit', $id);
        } else {
            echo "Data Was Not Found";
        }
    }


    function update()
    {

        $this->data->save([
            'id' => $this->request->getVar('id'),
            'program' => $this->request->getVar('program'),
        ]);
        return redirect()->to('kerja/programKerja');
    }


    function delete($id)
    {
        $this->data->delete($id);
        return redirect()->to('kerja/programKerja');
    }


    public function programhome()
    {
        echo view('admin/adminprogram', [
            'data' => $this->data->findAll()
        ]);
    }


    public function programKerja()
    {
        echo view('/aboute/pKerja/programKerja', [
            'data' => $this->data->findAll()
        ]);
    }
}
