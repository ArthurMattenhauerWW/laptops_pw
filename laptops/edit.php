<?php 
  include('functions.php'); 
  edit();
  include(HEADER_TEMPLATE); ?>

<style>

.form-group label {
    font-weight: 600;
    color: #333;
    margin-bottom: 5px;
}

.form-control {
    border-radius: 6px;
    border: 1px solid #ced4da;
    padding: 10px;
    transition: border-color 0.2s ease, box-shadow 0.2s ease;
}

.form-control:focus {
    border-color: #0d6efd;
    box-shadow: 0 0 0 0.25rem rgba(13, 110, 253, 0.25);
}

.form-control:disabled {
    background-color: #e9ecef;
    opacity: 1;
}
.foto-laptop-edit {
    max-width: 100%;
    max-height: 250px;
    width: auto;
    height: auto;
    object-fit: contain;
    border-radius: 8px;
    box-shadow: 0 4px 12px rgba(0, 0, 0, 0.12);
    margin-top: 10px;
}

#actions .btn {
    margin-right: 8px;
    padding: 8px 16px;
}

#actions .btn i {
    margin-right: 6px;
}

</style>


<h2 class="mt-3">Atualizar Laptop Cadastrado</h2>

<form action="edit.php?id=<?php echo $laptop['id']; ?>" method="post"> 
  <hr />
  
  <div class="row">
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
          <input type="date" class="form-control" id="datacad" name="laptop['datacad']" disabled value="<?php echo date('Y-m-d', strtotime($laptop['datacad'])); ?>">
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
      <a href="index.php" class="btn btn-azulclaro text-offwhite"><i class="fa-solid fa-ban"></i> Cancelar</a>
    </div>
  </div>
</form>

<?php include(FOOTER_TEMPLATE); ?>