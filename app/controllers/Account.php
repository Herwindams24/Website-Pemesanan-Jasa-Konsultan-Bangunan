<?php

class Account extends Controller
{

    public function __construct()
    {
        $this->accountModel = $this->model('Account_model');
    }

    public function login()
    {
        $this->view('common/sbadmin/login');
    }

    public function checkingLogin()
    {
        $data = [
            'title' => 'Login page',
            'username' => '',
            'password' => '',
            'usernameError' => '',
            'passwordError' => ''
        ];

        //Check for post
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            //Sanitize post data
            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

            $data = [
                'username' => trim($_POST['username']),
                'password' => trim($_POST['password']),
                'usernameError' => '',
                'passwordError' => '',
            ];
            //Validate username
            if (empty($data['username'])) {
                $data['usernameError'] = 'Please enter a username.';
            }

            //Validate password
            if (empty($data['password'])) {
                $data['passwordError'] = 'Please enter a password.';
            }
            //Check if all errors are empty
            if (empty($data['usernameError']) && empty($data['passwordError'])) {
                $loggedInUser = $this->model('Account_model')->login($data['username'], $data['password']);
                //var_dump($data, $loggedInUser, $_SESSION);
                //die();
                if ($loggedInUser) {

                    $this->createUserSession($loggedInUser);
                    //var_dump($data, $loggedInUser, $_SESSION);
                    //die();
                } else {
                    //echo 'salah semua';
                    $data['passwordError'] = 'Password or username is incorrect. Please try again.';
                    $this->view('common/sbadmin/login');
                }
            }
        } else {
            $data = [
                'username' => '',
                'password' => '',
                'usernameError' => '',
                'passwordError' => ''
            ];
        }
    }

    public function index()
    {
        $this->view('sbadmin/signup');
        $this->view('sbadmin/login');
        $this->view('sbadmin/forgotpassword');
    }

    public function signUp()
    {
        $this->view('common/sbadmin/signup');
    }

    public function createAccount()
    {
        $userData = [
            'username'      => $this->input('username'),
            'nama'          => $this->input('name'),
            'email'         => $this->input('email'),
            'password'      => $this->input('password'),
            'telp'          => $this->input('telp'),
            'role'       => $this->input('role'),
            'usernameError' => '',
            'namaError'     => '',
            'emailError'    => '',
            'passwordError' => ''
        ];

        if (empty($userData['email'])) {
            $userData['emailError'] = "Mohon masukan kembali email Anda";
        }

        if (empty($userData['nama'])) {
            $userData['namaError'] = 'Mohon masukan kembali nama Anda';
        }

        if (empty($userData['username'])) {
            $userData['usernameError'] = 'Mohon masukan kembali username ';
        } else {

            $username = $this->accountModel->checkUsername($userData['username']);
            if (!empty($username)) {
                $userData['usernameError'] = "Mohon maaf username telah terdaftar";
            }
        }

        if (empty($userData['password'])) {
            $userData['passwordError'] = "Mohon masukan password karena dibutuhkan";
        } else if (strlen($userData['password'] < 8)) {
            $userData['passwordError'] = "Minimal 8 karakter untuk password";
        }

        if (empty($userData['namaError']) && empty($userData['usernameError'] && empty($userData['passwordError']))) {
            $password = password_hash($userData['password'], PASSWORD_DEFAULT);
            //$data = [$userData['username'], $userData['nama'], $userData['email'], $password];
            //var_dump($userData, $password);
            //die;

            if ($this->accountModel->createAccount($userData, $password)) {
                // die;
                Flasher::setFlash("Your account has been created successfully, please login", "accountCreated", "success");
                header('location:' . BASEURL . '/Account/login');
            }
        } else {
            $this->view('common/sbadmin/signup', $userData);
        }
    }
    public function createUserSession($user)
    {

        //Melakukan set session
        $_SESSION['id_user'] = $user->id_user;
        $_SESSION['role'] = $user->role;
        $_SESSION['username'] = $user->username;
        $_SESSION['email'] = $user->email;
        //var_dump($user, $_SESSION);
        //die();
        if ($_SESSION['role'] == 2) {
            $this->redirect("Pelanggan", "index");
        } else {

            $this->redirect("Admin", "index");
        }
    }
    public function forgotpassword()
    {
        $this->view('common/sbadmin/forgotpassword');
    }
    public function logout()
    {
        unset($_SESSION['id_user']);
        unset($_SESSION['username']);
        unset($_SESSION['email']);
        unset($_SESSION['roll']);
        $this->redirect("Home", "Index");
    }
    public function profil()
    {
        $this->view('common/home2/profil');
    }
}
