<?php

class Admin extends Controller
{
    public function index()
    {
        if (!$_SESSION) {
            $this->redirect('Home', 'Index');
        }
        if (!$_SESSION['role'] === '1') {
            $this->redirect('Home', 'Index');
        }
        $this->view('common/home2/header_admin');
        $this->view('admin/index');
        $this->view('common/home2/footer_admin');
    }

    public function baruMasukAdmin()
    {
        if (!$_SESSION) {
            $this->redirect('Home', 'Index');
        }
        if (!$_SESSION['role'] === '1') {
            $this->redirect('Home', 'Index');
        }
        $data = $this->User_model->baruMasukFileAdmin();
        $this->view('common/home2/header_admin');
        $this->view('common/home2/AdminMasuk', false, array(
            'data' => $data
        ));
        $this->view('common/home2/footer_admin');
    }

    public function periksaOrder()
    {
    }
    public function accepted()
    {
    }

    public function rejected()
    {
    }
}
