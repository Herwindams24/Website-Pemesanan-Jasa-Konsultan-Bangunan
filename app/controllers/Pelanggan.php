<?php

class Pelanggan extends Controller
{
    public function __construct()
    {
        if (!$_SESSION) {
            $this->redirect('home', 'home');
        }
        if (!$_SESSION['role'] === '2') {
            $this->redirect('home2', 'PelangganMasuk');
        }
        $this->userModel = $this->model('User_model');
    }

    public function index()
    {
        if (!$_SESSION) {
            $this->redirect('Home', 'Index');
        }
        if (!$_SESSION['role'] === '2') {
            $this->redirect('home2', 'PelangganMasuk');
        }
        $this->view('common/home2/header_pelanggan');
        $this->view('common/home2/PelangganMasuk');
        $this->view('common/home2/footer_pelanggan');
    }

    public function addOrder()
    {
        
        $id_user = $_SESSION['id_user'];
        $request = [
       
            'nama'      => $this->input('nama'),
            'phone'     => $this->input('phone'),
            'services'  => $this->input('services'),
            'building'  => $this->input('building'),
            'budget_min' => $this->input('budget_min'),
            'budget_max' => $this->input('budget_max'),
            'location'  => $this->input('location'),
            'timeline'  => $this->input('timeline'),
            'message'   => $this->input('message'),
        ];
        //var_dump($request);
        //die();
        if (!isset($request)) {
            echo "<script>alert('Mohon teliti kembali, pastikan data terisi dengan benar');
                document.location='PelangganMasuk'
                </script>";
        } else {
            $parsing = $this->userModel->saveRequestPelanggan($request, $id_user);
            //die();
            if ($parsing) {
                echo "<script>alert('Informasi pelanggan telah diupdate');
                document.location='PelangganMasuk'
                </script>";
            } else {
                echo "<script>alert('Mohon teliti kembali, pastikan terisi semua dengan benar');
                document.location='PelangganMasuk'
                </script>";
            }
        }
    }

    public function lihatPesanan()
    {
        if (!$_SESSION['role'] === '2') {
            $this->redirect('pelanggan', 'pesananSaya');
        }
        $id_user = $_SESSION['id_user'];
        $requestPelanggan = $this->userModel->getRequestPelanggan($id_user);

        if (!$requestPelanggan) {
            $this->view('common/home2/header_pelanggan');
            $this->view('common/home2/PelangganMasuk');
            $this->view('common/home2/footer_pelanggan');
        } else {
            $this->view('common/home2/header_pelanggan');
            $this->view('pelanggan/pesananSaya', false, array(
                'nama'      => $requestPelanggan[0],
                'phone'     => $requestPelanggan[0],
                'services'  => $requestPelanggan[0],
                'building'  => $requestPelanggan[0],
                'budget_min' => $requestPelanggan[0],
                'budget_max' => $requestPelanggan[0],
                'location'  => $requestPelanggan[0],
                'timeline'  => $requestPelanggan[0],
                'message'   => $requestPelanggan[0],
                'status'    => $requestPelanggan[0],
            ));
            $this->view('common/home2/footer_pelanggan');
        }
    }
}
