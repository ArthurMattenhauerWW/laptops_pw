<?php 
	include("functions.php"); 
	view($_GET['id']);
?>

<?php include HEADER_TEMPLATE; ?>

<h2 class="mt-3">Laptop <?php echo $laptop['marca'] . " " . $laptop['modelo']; ?></h2>
<hr>

<?php if (!empty($_SESSION['message'])) : ?>
	<div class="alert alert-<?php echo $_SESSION['type']; ?>"><?php echo $_SESSION['message']; ?></div>
<?php endif; ?>

<dl class="dl-horizontal">
	<dt>Marca</dt>
	<dd><?php echo $laptop['marca']; ?></dd>

	<dt>Modelo:</dt>
	<dd><?php echo $laptop['modelo']; ?></dd>

	<dt>Tamanho:</dt>
	<dd><?php echo $laptop['tamanho'],"d/m/Y"; ?></dd>
</dl>

<dl class="dl-horizontal">
	<dt>Data de Cadastro:</dt>
	<dd><?php echo formatdata($laptop['datacad'],"d/m/Y"); ?></dd>

	<dt>Última Atualização:</dt>
	<dd><?php echo formatdata($laptop['datamod'],"d/m/Y"); ?></dd>

	<dt>Imagem:</dt>
	<dd><img src="<?php echo BASEURL; ?>assets/img/<?php echo $laptop['foto']; ?>" 
        alt="<?php echo $laptop['modelo']; ?>" 
        class="foto-laptop-view">
	</dd>

</dl>


<div id="actions" class="row">
	<div class="col-md-12">
	  <a href="edit.php?id=<?php echo $laptop['id']; ?>" class="btn btn-azul text-offwhite"><i class="fa-solid fa-pen-to-square text-offwhite"></i>Editar</a>
	  <a href="index.php" class="btn btn-azulclaro text-offwhite"><i class="fa-solid fa-circle-left text-offwhite"></i>Voltar</a>
	</div>
</div>

<?php include FOOTER_TEMPLATE; ?>