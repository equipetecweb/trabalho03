<?php

class ContatoBD extends CI_Model{
  public $id;
  public $nome;
  public $email;
  public $mensagem;
  public $programador_id;

  public function __construct(){
    parent::__construct();
  }
//funcao de inserir novos clientes
  public function insert(){
    $data = array("nome"=>$this->nome,"email"=>$this->email, "mensagem"=>$this->mensagem,
  "programador_id"=>$this->programador_id);
  return  $this->db->insert('cliente',$data);
  }
}
