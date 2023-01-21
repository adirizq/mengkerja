<?php

class Home extends Controller
{
    public function index()
    {
        $data['page'] = 'home';
        $data['lowongan'] = $this->model('ModelLowongan')->getNew();
        $this->view('home/index', $data);
    }
}
