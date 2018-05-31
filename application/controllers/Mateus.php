<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Mateus extends CI_Controller {

  public function sobre()
  {
    //para cada controlador coloca 'image' com o caminho do arquivo da foto
    //de cada membro
    $data['image'] = base_url("images/mateus.jpeg");
    $data['description'] = "Me chamo Mateus Arruda e atualmente estudo na
    Universidade Federal do Ceará. Programador viciado em transformar café
    em código, tenho experiência com Java, Python e atualmente aprendendo
    novas tecnologias web como HTML, CSS e JavaScript. Com um olho no mercado
    e outro no mestrado, pretendo seguir carreira acadêmica mas nunca deixando
    de desenvolver novas habilidades na construção de software. E pra finalizar,
    aqui vai um texto Lorem Ipsum pra encher linguiça.<br>
    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam tincidunt odio
    libero, at finibus ante ultrices et. Quisque id tristique est.
     Morbi dictum dolor eu purus vestibulum, nec porta elit mattis.
     Vestibulum vehicula sapien eget enim condimentum rutrum.
      Nulla egestas facilisis urna, vitae ultrices arcu.
      Aenean porttitor placerat enim vitae placerat.<br>
      Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos.
      Nulla vitae tincidunt nunc, vel molestie erat.
     Cras pharetra ipsum sed libero pulvinar, vitae eleifend dui sagittis.
     Nulla gravida ex et metus viverra condimentum eget eget lorem. Suspendisse feugiat erat id urna consectetur, sit amet blandit felis aliquet. Duis volutpat, risus non placerat vehicula, nisi dolor vehicula nunc, nec lobortis lectus elit ut lorem. Donec in ullamcorper turpis, aliquet efficitur sem. Cras rhoncus ac leo non viverra. In hac habitasse platea dictumst. Aenean pellentesque libero at metus dictum, et eleifend metus semper.";
    $this->load->view('header');
    $this->load->view('body',$data);
    $this->load->view('footer');

  
  }
}
