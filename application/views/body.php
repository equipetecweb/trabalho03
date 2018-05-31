<body>
  <br><br>
  <div class="container">
    <h1 class="mt-4"> <?php echo $nome;?>
    </h1>    <h3> <?php echo $cargo;?> </h3>
  </div>

<div class="col-sm">
<img class="rounded-circle img-fluid d-block mx-auto" style="width: 400px; height: 400px" src="<?= $image;?>" alt="">
</div>
<br>
<div class="container">
  <?php echo $description;?>
</div>

<br><br>

</body>