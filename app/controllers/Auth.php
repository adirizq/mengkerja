<?php

class Auth extends Controller
{
    public function login()
    {
        $data['page'] = 'login';
        $this->view('auth/login', $data);
    }

    public function register()
    {
        $data['page'] = 'register';
        $this->view('auth/register', $data);
    }

    public function dashboard()
    {
        $data['page'] = 'register';
        $this->view('auth/dashboard', $data);
    }

    public function store()
    {
        if ($this->model('ModelPengguna')->add($_POST) > 0) {
            $_SESSION['msg'] = "success";
            header('Location: ' . BASE_URL . '/auth/login?msg=success');
            exit;
        }
    }

    public function auth()
    {
        unset($_SESSION['user']);
        $user = $this->model('ModelPengguna')->auth($_POST);

        if (!empty($user)) {
            $_SESSION['user'] = $user[0];
            header('Location: ' . BASE_URL);
            exit;
        } else {
            $_SESSION['msg'] = 'wrong credentials';
            unset($_SESSION['user']);
            header('Location: ' . BASE_URL . '/auth/login');
            exit;
        }
    }

    public function logout()
    {
        unset($_SESSION['user']);
        header('Location: ' . BASE_URL);
        exit;
    }
}
