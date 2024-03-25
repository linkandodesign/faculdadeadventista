<?php

namespace App\Controllers;

class Cursos extends BaseController
{
    public function todosCursos()
    {
        $dadosHeader['title'] = "Todos os cursos - Seven Pro";
        echo view('/templates/header', $dadosHeader);
        echo view('/todos-cursos');
        echo view('/templates/footer');
    }
    public function estudantes()
    {
        $dadosHeader['title'] = "Estudantes - Seven Pro";
        echo view('/templates/header', $dadosHeader);
        echo view('/estudantes');
        echo view('/templates/footer');
    }
    public function empresas()
    {
        $dadosHeader['title'] = "Empresas - Seven Pro";
        echo view('/templates/header', $dadosHeader);
        echo view('/empresas');
        echo view('/templates/footer');
    }
    public function instituicoes()
    {
        $dadosHeader['title'] = "Instituições - Seven Pro";
        echo view('/templates/header', $dadosHeader);
        echo view('/instituicoes');
        echo view('/templates/footer');
    }
    public function quemSomos()
    {
        $dadosHeader['title'] = "Quem Somos - Seven Pro";
        echo view('/templates/header', $dadosHeader);
        echo view('/quem-somos');
        echo view('/templates/footer');
    }
    /* ÁREAS */
    public function saude()
    {
        $dadosHeader['title'] = "Saúde - Seven Pro";
        echo view('/templates/header', $dadosHeader);
        echo view('/areas/saude');
        echo view('/templates/footer');
    }
    public function negocios()
    {
        $dadosHeader['title'] = "Negócios - Seven Pro";
        echo view('/templates/header', $dadosHeader);
        echo view('/areas/negocios');
        echo view('/templates/footer');
    }
    public function educacao()
    {
        $dadosHeader['title'] = "Educação - Seven Pro";
        echo view('/templates/header', $dadosHeader);
        echo view('/areas/educacao');
        echo view('/templates/footer');
    }
    public function tecnologia()
    {
        $dadosHeader['title'] = "Tecnologia - Seven Pro";
        echo view('/templates/header', $dadosHeader);
        echo view('/areas/tecnologia');
        echo view('/templates/footer');
    }
    public function teologia()
    {
        $dadosHeader['title'] = "Teologia - Seven Pro";
        echo view('/templates/header', $dadosHeader);
        echo view('/areas/teologia');
        echo view('/templates/footer');
    }
    /* CURSOS */
    public function gestaoEmSaude()
    {
        $dadosHeader['title'] = "Gestão em Saúde - Seven Pro";
        echo view('/templates/header', $dadosHeader);
        echo view('/cursos/gestao-em-saude');
        echo view('/templates/footer');
    }
}
