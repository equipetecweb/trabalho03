<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cliente extends CI_Controller{
  public function save(){
    $this->load->model('ContatoBD');
    $nome = $_POST["nome"];
    $email = $_POST["email"];
    $mensagem = $_POST["mensagem"];
    $programador_id = $_POST["programador_id"];
    $this->ContatoBD->nome=$nome;
    $this->ContatoBD->email=$email;
    $this->ContatoBD->mensagem=$mensagem;
    $this->ContatoBD->programador_id=$programador_id;
    $this->ContatoBD->insert();
  }
}
