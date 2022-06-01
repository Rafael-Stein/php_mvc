<?php
Class homeController extends Controller
{

    public function index()
    {
        $this->LoadTemplate('home');
    }

}