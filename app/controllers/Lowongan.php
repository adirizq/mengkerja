<?php

class Lowongan extends Controller
{
    public function index()
    {
        if (isset($_POST['keyword']) || isset($_POST['category_id'])) {
            $data['page'] = 'lowongan';
            $data['lowongan'] = $this->model('ModelLowongan')->search($_POST);
            $data['kategori'] = $this->model('ModelKategori')->getAll();
            $data['search'] = $_POST;
            $this->view('lowongan/index', $data);
        } else {
            $data['page'] = 'lowongan';
            $data['lowongan'] = $this->model('ModelLowongan')->getAll();
            $data['kategori'] = $this->model('ModelKategori')->getAll();
            $this->view('lowongan/index', $data);
        }
    }

    public function show($id)
    {
        if (!isset($id)) {
            header('Location: ' . BASE_URL . '/lowongan');
            exit;
        }

        $data['page'] = 'lowongan';
        $data['lowongan'] = $this->model('ModelLowongan')->getById($id)[0];

        if (!empty($data['lowongan'])) {
            $this->view('lowongan/show', $data);
        } else {
            header('Location: ' . BASE_URL . '/lowongan');
            exit;
        }
    }

    public function edit($id)
    {
        if (isset($_SESSION['user'])) {
            if ($_SESSION['user']['is_admin'] != 1) {
                header('Location: ' . BASE_URL);
                exit;
            }
        } else {
            header('Location: ' . BASE_URL);
            exit;
        }

        $data['page'] = 'lowongan';
        $data['lowongan'] = $this->model('ModelLowongan')->getById($id)[0];
        $data['kategori'] = $this->model('ModelKategori')->getAll();
        $this->view('lowongan/edit', $data);
    }

    public function dashboard()
    {
        if (isset($_SESSION['user'])) {
            if ($_SESSION['user']['is_admin'] != 1) {
                header('Location: ' . BASE_URL);
                exit;
            }
        } else {
            header('Location: ' . BASE_URL);
            exit;
        }

        $data['page'] = 'lowongan';
        $data['lowongan'] = $this->model('ModelLowongan')->getAll();
        $data['kategori'] = $this->model('ModelKategori')->getAll();
        $this->view('lowongan/dashboard', $data);
    }

    public function store()
    {
        if (isset($_SESSION['user'])) {
            if ($_SESSION['user']['is_admin'] != 1) {
                header('Location: ' . BASE_URL);
                exit;
            }
        } else {
            header('Location: ' . BASE_URL);
            exit;
        }

        if ($this->model('ModelLowongan')->add($_POST) > 0) {
            header('Location: ' . BASE_URL . '/lowongan/dashboard');
            exit;
        }
    }

    public function destroy($id)
    {
        if (isset($_SESSION['user'])) {
            if ($_SESSION['user']['is_admin'] != 1) {
                header('Location: ' . BASE_URL);
                exit;
            }
        } else {
            header('Location: ' . BASE_URL);
            exit;
        }

        if (!isset($id)) {
            header('Location: ' . BASE_URL . '/lowongan');
            exit;
        }

        if ($this->model('ModelLowongan')->delete($id) > 0) {
            header('Location: ' . BASE_URL . '/lowongan/dashboard');
            exit;
        }
    }

    public function update($id)
    {
        if (isset($_SESSION['user'])) {
            if ($_SESSION['user']['is_admin'] != 1) {
                header('Location: ' . BASE_URL);
                exit;
            }
        } else {
            header('Location: ' . BASE_URL);
            exit;
        }

        if ($this->model('ModelLowongan')->update($id, $_POST) > 0) {
            header('Location: ' . BASE_URL . '/lowongan/dashboard');
            exit;
        }
    }
}
