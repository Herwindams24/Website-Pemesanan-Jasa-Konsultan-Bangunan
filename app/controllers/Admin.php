<?php

class Admin extends Controller
{

    public function __construct()
    {
        if (!$_SESSION) {
            $this->redirect('home', 'home');
        }
        if (!$_SESSION['role'] === '1') {
            $this->redirect('home2', 'AdminMasuk');
        }
        $this->userModel = $this->model('User_model');
    }

    public function index()
    {
        if (!$_SESSION) {
            $this->redirect('Home', 'Index');
        }
        if (!$_SESSION['role'] === '1') {
            $this->redirect('home2', 'AdminMasuk');
        }
        $this->view('common/home2/header_admin');
        $this->view('common/home2/AdminMasuk');
        $this->view('common/home2/footer_admin');
    }

    public function lihatOrder()
    {
        if (!$_SESSION['role'] === '1') {
            $this->redirect('Home', 'Index');
        }

        $id_user = $_SESSION['id_user'];
        $data = $this->userModel->masukOrder();

        if (!$data) {
            $this->view('common/home2/header_admin');
            $this->view('common/home2/AdminMasuk');
            $this->view('common/home2/footer_admin');
            //echo 'Ini admin masuk'; die;
        } else {
            $this->view('common/home2/header_admin');
            $this->view('admin/listOrder', false, array(
                'id_request' => $data[0],
                'nama'      => $data[0],
                'phone'     => $data[0],
                'services'  => $data[0],
                'building'  => $data[0],
                'budget_min' => $data[0],
                'budget_max' => $data[0],
                'location'  => $data[0],
                'timeline'  => $data[0],
                'message'   => $data[0],
                'status'    => $data[0],
            ));
            $this->view('common/home2/footer_admin');
            //echo 'Ini list order'; die;
        }
    }

    public function Order($id_request = NULL)
    {
        //var_dump($id_request);
        //die();
        if (!$_SESSION) {
            $this->redirect('Home', 'Index');
        }
        if (!$_SESSION['role'] === '1') {
            $this->redirect('home2', 'AdminMasuk');
        }
        $data = $this->userModel->masukOrder();
        $this->view('admin/terimaOrder', false, array(
            'data' => $data,
            'id_request' => $id_request
        ));
    }

    public function acceptedStatus($id_request = NULL)
    {

        if (!$_SESSION) {
            $this->redirect('Home', 'Index');
        }
        if (!$_SESSION['role'] === '1') {
            $this->redirect('home2', 'AdminMasuk');
        }

        if (isset($_POST['submit'])) {

            $id_request = $_POST['id_request'];
            $status = $_POST['status'];
            //var_dump($status, $id_request);
            //die();

            if ($status == 2) {
                $this->userModel->updateStatus($id_request, $status);
                echo "<script>alert('Request diterima, segera hubungi pelanggan!');
                </script>";
                $this->view('admin/keputusanOrder');
            } else {
                echo "<script>alert('Terdapat kesalahan dalam menerima request');
                </script>";
            }
        }
    }
    public function rejectedStatus($id_request = NULL)
    {
        if (!$_SESSION) {
            $this->redirect('Home', 'Index');
        }
        if (!$_SESSION['role'] === '1') {
            $this->redirect('home2', 'AdminMasuk');
        }

        if (isset($_POST['submit'])) {

            $id_request = $_POST['id_request'];
            $status = $_POST['status'];
            //var_dump($status);
            //die();

            if ($status == 3) {
                $this->userModel->updateStatus($id_request, $status);
                echo "<script>alert('Request telah ditolak!');
                </script>";
                $this->view('admin/keputusanOrder');
            } else {
                echo "<script>alert('Request gagal ditolak');
                </script>";
            }
        }
    }
}
