<?php

class Handler extends Controller
{
    public function notFound()
    {
        $this->view('errors/404');
    }
}
