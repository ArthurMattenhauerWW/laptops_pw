<?php 
  include('functions.php'); 
  edit();
  include(HEADER_TEMPLATE); ?>

<h2 class="mt-3">Atualizar Laptop Cadastrado</h2>

<form action="edit.php?id=<?php echo $laptop['id']; ?>" method="post"> 
  <hr />
  
  <div class="row">
    <
    <div class="col-md-6">
      <div class="form-group mb-3">
        <label for="marca">Marca</label>
        <input type="text" class="form-control" id="marca" name="laptop['marca']" value="<?php echo $laptop['marca']; ?>">
      </div>

      <div class="form-group mb-3">
        <label for="modelo">Modelo</label>
        <input type="text" class="form-control" id="modelo" name="laptop['modelo']" maxlength="15" value="<?php echo $laptop['modelo']; ?>">
      </div>

      <div class="row">
        <div class="form-group col-md-6 mb-3">
          <label for="tamanho">Tamanho</label>
          <input type="text" class="form-control" id="tamanho" name="laptop['tamanho']" value="<?php echo $laptop['tamanho']; ?>">
        </div>

        <div class="form-group col-md-6 mb-3">
          <label for="datacad">Data de Cadastro</label>
          <input type="date" class="form-control" id="datacad" name="laptop['datacad']" disabled value="<?php echo formatdata($laptop['datacad'], "d/m/Y - H:i:s"); ?>">
        </div>
      </div>
    </div>

    
    <div class="col-md-6 d-flex align-items-center justify-content-center">
      <img src="<?php echo BASEURL; ?>assets/img/<?php echo $laptop['foto']; ?>" 
           alt="<?php echo $laptop['modelo']; ?>" 
           class="foto-laptop-edit">
    </div>
  </div>

  <!-- Ações (Botões) -->
  <div id="actions" class="row mt-3">
    <div class="col-md-12">
      <button type="submit" class="btn btn-azul text-offwhite"><i class="fa-solid fa-floppy-disk text-offwhite"></i> Salvar</button>
      <a href="index.php" class="btn btn-azulclaro text-offwhite"><i class="fa-solid fa-circle-left text-offwhite"></i> Cancelar</a>
    </div>
  </div>
</form>

<?php include(FOOTER_TEMPLATE); ?>