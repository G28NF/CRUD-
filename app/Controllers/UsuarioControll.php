<?php

namespace App\Controllers;
use App\Models\UsuarioModel;

class UsuarioControll extends BaseController
{
    public function __construct()
    {
        $this->usuarioModel = new UsuarioModel();
    }

    public function creat()
    {
        $usuario = $this->request->getPost('dados');

        if(empty($usuario)) {
            return redirect()->back()->with('error', 'Dados do usuário não fornecidos.');
        }

        if($this->usuarioModel->where('email', $usuario['email'])->first()) {
            return redirect()->back()->with('error', 'Email já cadastrado.');
        }

        $this->usuarioModel->insert($usuario);
    }

    public function read()
    {
        $usuarios = $this->usuarioModel->findAll();
        return view('usuarios/list', ['usuarios' => $usuarios]);
    }

    public function update()
    {
        $usuario = $this->request->getPost('dados');

        if(empty($usuario)) {
            return redirect()->back()->with('error', 'Dados do usuário não fornecidos.');
        }

        if(!$this->usuarioModel->where('email', $usuario['email'])->first()) {
            return redirect()->back()->with('error', 'Usuário não encontrado.');
        }

        if($usuario['senha'] !== $this->usuarioModel->where('id', $usuario['id'])->first()['senha']) {
            return redirect()->back()->with('error', 'Senha incorreta.');
        }
    }
}