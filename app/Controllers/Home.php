<?php

namespace App\Controllers;

use App\Models\newmodel;
use CodeIgniter\Model;

class Home extends BaseController
{
    protected $session;
    function __construct()
    {
        $this->session = \Config\Services::session();
        $this->session->start();
    }
    public function index(): string
    {
        return view('my_view/index');
    }
    public function delete($id = NULL)
    {
        if ($id != NULL) {
            $obj = new newmodel();
            $where = array('row' => $id);
            $obj->deleterow('members', $where);
            return redirect()->to(previous_url());
        }
    }
    public function update($id = NULL)
    {
        // echo 'This is update';
        $obj = new newmodel();
        $where = array('row' => $id);
        $this->session->set('id', $where);
        $data['value'] = $obj->selectonerow('members', $where);
        echo view('my_view/header');
        echo view('my_view/edit_form', $data);
    }
    public function upd()
    {
        echo 'This is update';
        $obj = new newmodel();
        $id = $this->session->get('id');
        $row['name'] = $this->request->getPost('name');
        $row['work'] = $this->request->getPost('work');
        $row['status'] = $this->request->getPost('status');
        $row['birth'] = $this->request->getPost('birth');
        $row['city'] = $this->request->getPost('city');
        // $where = array('row' => $row['name']);
        $obj->updat('members', $id, $row);
        // return redirect()->to(base_url('daseboard'));
    }
    public function insert()
    {
        return view('my_view/insert');
    }
}
