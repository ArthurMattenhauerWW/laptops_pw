<?php 
  include('functions.php'); 
  add();
  include(HEADER_TEMPLATE); ?>

<h2 class="mt-3">Adicionar Laptop</h2>

<form action="add.php" method="post">
  <!-- area de campos do form -->
  <hr />
  <div class="row">
    <div class="form-group col-md-6">
      <label for="marca">Marca</label>
      <input type="text" class="form-control" id="marca" name="laptop['marca']">
    </div>
    </div>
   <div class="row">

    <div class="form-group col-md-6">
      <label for="modelo">Modelo</label>
      <input type="text" class="form-control" id="modelo" name="laptop['modelo']" maxlength="15">
    </div>
  </div>
  
  <div class="row">
    <div class="form-group col-md-3">
      <label for="tamanho">Tamanho</label>
      <input type="text" class="form-control" id="tamanho" name="laptop['tamanho']">
    </div>

    <div class="form-group col-md-3">
      <label for="datacad">Data de Cadastro</label>
      <input type="date" class="form-control" id="datacad"  name="laptop['datacad']" disabled>
    </div>
  </div>
  
  <div id="actions" class="row">
    <div class="col-md-12">
      <button type="submit" class="btn btn-azul mt-3 text-offwhite"><i class="fa-solid fa-floppy-disk text-offwhite"></i>Salvar</button>
      <a href="index.php" class="btn btn-azulclaro mt-3 text-offwhite"><i class="fa-solid fa-circle-left text-offwhite"></i>Cancelar</a>
    </div>
  </div>
</form>

<?php include(FOOTER_TEMPLATE); ?>