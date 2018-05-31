<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Mateus extends CI_Controller {
  public function sobre()
  {
    //para cada controlador coloca 'image' com o caminho do arquivo da foto
    //de cada membro
    $data['image'] = base_url("images/lucas.jpeg");
    $data['description'] = " Oi sou Lucas Mota graduando em engenharia da computação pela UFC campus Sobral.
     Atualmente batalhando pra passar nas disciplinas, aprendendo sobre tecnologias web, desenvolvendo um projeto para o tcc, e rezando pra esse diploma sair!. ";
    $this->load->view('header');
    $this->load->view('body',$data);

  }
}
