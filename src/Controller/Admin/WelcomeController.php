<?php

namespace App\Controller\Admin;

use App\Controller\AppController;

class WelcomeController extends AppController
{
    public function index()
    {
        $user = $this->Auth->user(); //recupera o usuário logado
        $this->set(compact('user')); //envia para view
    }

}
