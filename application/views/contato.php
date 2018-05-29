<form class="container" method="post" action="<?php echo base_url();?>index.php/cliente/save/">

  <div class="form-group">
    <label class="control-label col-sm-2" for="nome">Nome</label>
    <div class="col-sm-10">
      <input class="form-control" id="email" name="nome" placeholder="Digite seu nome">
    </div>
  </div>

  <div class="form-group">
    <label class="control-label col-sm-2" for="email">Email</label>
    <div class="col-sm-10">
      <input type="email" class="form-control" name="email" id="email" placeholder="Digite seu email">
    </div>
  </div>

  <div class="form-group">
    <label class="control-label col-sm-2" for="email">Mensagem</label><br>
    <div class="col-sm-10">
      <input class="form-control" name="mensagem" rows="8" cols="80">
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-sm-2" for="pwd">Programador</label>
    <div class="col-sm-10">
      <div class="col-sm-8">
          <label><input type="radio" name="mateus">Mateus</label>
          <label><input type="radio" name="leila">Leila</label>
          <label><input type="radio" name="paulo">Paulo</label>
          <label><input type="radio" name="lucas">Lucas</label>
    </div>
      <input class="form-control" id="pwd" name="programador_id" placeholder="Qual programador quer contactar?">
    </div>
  </div>

  <div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
      <button type="submit" class="btn btn-default">Submit</button>
    </div>
  </div>
</form></body>
