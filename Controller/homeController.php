<?php
Class homeController extends Controller
{

    public function index()
    {
        $this->LoadTemplate('home');
    }

    public function empresa()
    {
        $this->LoadTemplate('empresa');
    }

    public function contato()
    {
        $this->LoadTemplate('contato');
    }

    public function pageNotFound()
    {
        $this->LoadTemplate('pageNotFound');
    }

}