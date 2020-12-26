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
        $id_user = $_SESSION['id_user'];
        /*$request = $_SESSION['request'];
        $id_pelanggan = $_SESSION['id_pelanggan'];*/
        /*$addOrder = $this->User_model->saveRequestPelanggan($request, $id_pelanggan);*/
        $addOrder = $this->User_model->saveRequestPelanggan($id_user);
        if (!$addOrder) {
            $this->view('common/home2/header_pelanggan');
            $this->view('peserta/index');
            $this->view('common/home2/header_pelanggan');
        } else {
            $this->view('common/home2/header_pelanggan');
            $this->view('pelanggan/addOrder', false, array(
                'nama'      => $addOrder[0],
                'phone'     => $addOrder[0],
                'services'  => $addOrder[0],
                'building'  => $addOrder[0],
                'location'  => $addOrder[0],
                'timeline'  => $addOrder[0],
                'message'   => $addOrder[0],
            ));
            $this->view('common/home2/footer_pelanggan');
        }
    }

    /*
    public function index()
    {
        if (!$_SESSION) {
            $this->redirect('Home', 'Index');
        }
        if (!$_SESSION['role'] === '2') {
            $this->redirect('Home', 'Index');
        }
        $this->PelangganMasuk();
    }
    public function PelangganMasuk()
    {
        if (!$_SESSION) {
            $this->redirect('Home', 'Index');
        }
        if (!$_SESSION['role'] == '2') {
            $this->redirect('Home', 'PelangganMasuk');
        }
        //if else, true-> view pelanggan
        //$data = $this->User_model->baruMasukFilePelanggan();
        $this->view('common/home2/header_pelanggan');
        $this->view('common/home2/PelangganMasuk');
        $this->view('common/home2/footer_pelanggan');
    }*/

    public function addOrder()
    {
        /*$id_user = $_SESSION['id_user'];*/
        $id_user = $_SESSION['id_user'];
        $request = [
            'nama'      => $this->input('nama'),
            'phone'     => $this->input('phone'),
            'services'  => $this->input('services'),
            'building'  => $this->input('building'),
            'location'  => $this->input('location'),
            'timeline'  => $this->input('timeline'),
            'message'   => $this->input('message'),
        ];
        if (!isset($request)) {
            echo "<script>alert('Mohon teliti kembali, pastikan data terisi dengan benar');
                document.location='index'
                </script>";
        } else {
            $parsing = $this->User_model->saveRequestPelanggan($request, $id_user);
            if ($parsing) {
                echo "<script>alert('Informasi Tim telah diupdate');
                document.location='index'
                </script>";
            } else {
                echo "<script>alert('Mohon teliti kembali, pastikan terisi semua dengan benar');
                document.location='index'
                </script>";
            }
        }
        /*$this->view('pelanggan/addOrder');
        if(!$_SESSION['role'] === 'pelanggan'){
            $this->redirect('Home', 'Index');
        }
        $id_user = $_SESSION['id_user'];
        $saveRequestPelanggan = $this->User_model->saveRequestPelanggan($id_user);
        if(! $saveRequestPelanggan){
            $this->view('common/home2/header_pelanggan');
            $this->view('pelanggan/addOrder');
            $this->view('common/home2/footer_pelanggan');
        }else{
            //var_dump($requestPelanggan);
            $this->view('common/home2/header_pelanggan');
            $this->view('pelanggan/sudahRequest', false, array(
                'phone' =>  $saveRequestPelanggan[0],
                'services' =>  $saveRequestPelanggan[0],
                'building' =>  $saveRequestPelanggan[0],
                'budget' =>  $saveRequestPelanggan[0],
                'location' =>  $saveRequestPelanggan[0],
                'timeline' =>  $saveRequestPelanggan[0],
                'message' =>  $saveRequestPelanggan[0],
            ));
            $this->view('common/home2/footer_pelanggan');
        }*/
    }


    public function PesananDiterima()
    {
    }

    public function lihatPesanan()
    {
        $this->view('pelanggan/pesananSaya');
    }
}
