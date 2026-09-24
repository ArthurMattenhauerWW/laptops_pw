<?php 
  include('functions.php'); 
  add();
  include(HEADER_TEMPLATE); ?>

<h2 class="mt-3">Adicionar Laptop</h2>

<form action="add.php" method="post" enctype="multipart/form-data">
  <hr />
  
  <div class="row">
    <div class="col-md-6">
      <div class="form-group mb-3">
        <label for="marca">Marca</label>
        <input type="text" class="form-control" id="marca" name="laptop['marca']">
      </div>

      <div class="form-group mb-3">
        <label for="modelo">Modelo</label>
        <input type="text" class="form-control" id="modelo" name="laptop['modelo']" maxlength="15">
      </div>

      <div class="row">
        <div class="form-group col-md-6 mb-3">
          <label for="tamanho">Tamanho</label>
          <input type="text" class="form-control" id="tamanho" name="laptop['tamanho']">
        </div>

        <div class="form-group col-md-6 mb-3">
          <label for="datacad">Data de Cadastro</label>
          <input type="date" class="form-control" id="datacad" name="laptop['datacad']" disabled>
        </div>
      </div>

      <div class="form-group mb-3">
        <label for="foto">Foto do Laptop</label>
        <input type="file" class="form-control" id="foto" name="foto" accept="image/*" onchange="previewImagem(event)">
      </div>
    </div>

    <div class="col-md-6 d-flex align-items-center justify-content-center">
      <img id="img-preview" src="<?php echo BASEURL; ?>assets/img/default.png" alt="Preview da Imagem" class="foto-laptop-view" style="display: none;">
    </div>
  </div>

  <div id="actions" class="row mt-3">
    <div class="col-md-12">
      <button type="submit" class="btn btn-azul text-offwhite"><i class="fa-solid fa-floppy-disk text-offwhite"></i> Salvar</button>
      <a href="index.php" class="btn btn-azulclaro text-offwhite"><i class="fa-solid fa-circle-left text-offwhite"></i> Cancelar</a>
    </div>
  </div>
</form>

<script>
  function previewImagem(event) {
    const input = event.target;
    const preview = document.getElementById('img-preview');

    if (input.files && input.files[0]) {
      const reader = new FileReader();

      reader.onload = function(e) {
        preview.src = e.target.result;
        preview.style.display = 'block';
      }

      reader.readAsDataURL(input.files[0]);
    }
  }
</script>

<?php include(FOOTER_TEMPLATE); ?>