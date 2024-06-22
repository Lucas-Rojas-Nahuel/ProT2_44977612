<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        echo view('front/header');
        echo view('front/section_principal');
        echo view('front/footer');
    }

    public function section_quienes_somos()
    {
        echo view('front/header');
        echo view('front/section_quienes_somos');
        echo view('front/footer');
    }

    public function section_servicios()
    {
        echo view('front/header');
        echo view('front/section_servicios');
        echo view('front/footer');
    }

    public function section_registrarme()
    {
        echo view('front/header');
        echo view('front/section_registrarme');
        echo view('front/footer');
    }

    public function section_iniciar_sesion()
    {
        echo view('front/header');
        echo view('front/section_iniciar_sesion');
        echo view('front/footer');
    }
}
