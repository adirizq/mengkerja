<?php

class Kategori extends Controller
{
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

        $data['page'] = 'kategori';
        $data['kategori'] = $this->model('ModelKategori')->getAll();
        $this->view('kategori/dashboard', $data);
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

        $data['page'] = 'kategori';
        $data['kategori'] = $this->model('ModelKategori')->getById($id)[0];
        $this->view('kategori/edit', $data);
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

        if ($this->model('ModelKategori')->add($_POST) > 0) {
            header('Location: ' . BASE_URL . '/kategori/dashboard');
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

        if ($this->model('ModelKategori')->delete($id) > 0) {
            header('Location: ' . BASE_URL . '/kategori/dashboard');
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

        if ($this->model('ModelKategori')->update($id, $_POST) > 0) {
            header('Location: ' . BASE_URL . '/kategori/dashboard');
            exit;
        }
    }
}
