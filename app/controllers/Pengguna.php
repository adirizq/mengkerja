<?php

class Pengguna extends Controller
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

        $data['page'] = 'pengguna';
        $data['pengguna'] = $this->model('ModelPengguna')->getAll();
        $this->view('pengguna/dashboard', $data);
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

        if ($this->model('ModelPengguna')->delete($id) > 0) {
            header('Location: ' . BASE_URL . '/pengguna/dashboard');
            exit;
        }
    }

    public function promote($id)
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

        if ($this->model('ModelPengguna')->promote($id) > 0) {
            header('Location: ' . BASE_URL . '/pengguna/dashboard');
            exit;
        }
    }
}
