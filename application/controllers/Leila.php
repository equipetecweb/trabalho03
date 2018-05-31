
<?php
/*
O controller é o que vai "montar" a página. Existem as views
header, body e footer que são padrões em todas as páginas. O que esse controller
faz é pegar o texto de uma varável nesse arquivo e colocar na página onde essa
variável é chamada. No caso as variaveis usadas são 'image' e 'description'. Essas
variáveis são chamadas na view 'body' nas linhas 8 e 12. Para cada usuário cria-se
um controller mas as views são sempre as mesmas. Usem esse código pra adaptar as
páginas de vocês.
*/

defined('BASEPATH') OR exit('No direct script access allowed');
class Leila extends CI_Controller {

  public function sobre()
  {
    //para cada controlador coloca 'image' com o caminho do arquivo da foto
    //de cada membro
    $data['nome'] = "Leila Rodrigues";
    $data['cargo'] = "Desenvolvedora";
    $data['image'] = base_url("images/leiila.jpeg");
    $data['description'] = "Olá, sou Leila Rodrigues, graduanda em Engenharia da Computação pela Universidade Federal do Ceará - Campus Sobral.
      <br>Atualmente estudo sobre Machine learning, Deep learning, Processamento de Linguagem Natural e desenvolvo alguns projetos na área de IoT e VLC. Implementando tudo isso ai utilizando python. 
      Descobrindo um novo mundo da programação com a disciplina de Tecnologias Web, arranhando um pouco em HTML, CSS e JavaScript, além de entender um pouquinho sobre alguns frameworks. 
     <br> Me encontre no git: https://github.com/engleilarodrigues/";
    $this->load->view('header');
    $this->load->view('body',$data);

  }
}
