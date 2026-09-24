<?php include "config.php";
include DBAPI;
include(HEADER_TEMPLATE);
$erro =null;
try{
 $db = open_database(); 
} catch (Exception $e){
    $erro = $e;
}?>

<h1 class="mt-3 text-azul">Bem-Vindos ao Nosso Site!</h1>
<hr />

<?php if ($db): ?>

    <div class="row">
        <div class="col-xs-6 col-sm-3 col-md-2 ">
            <a href="laptops/add.php" class="btn btn-azul text-offwhite">
                <div class="row">
                    <div class="col-xs-12 text-center ">
                        <i class="fa-solid fa-laptop-medical fa-5x icone-branco"></i>
                    </div>
                    <div class="col-xs-12 text-center">
                        <p>Novo Laptop</p>
                    </div>
                </div>
            </a>
        </div>

        <div class="col-xs-6 col-sm-3 col-md-2">
            <a href="laptops" class="btn btn-azulclaro text-offwhite">
                <div class="row">
                    <div class="col-xs-12 text-center">
                        <i class="fa-solid fa-laptop fa-5x icone-branco"></i>
                    </div>
                    <div class="col-xs-12 text-center">
                        <p>Lista de Laptops</p>
                    </div>
                </div>
            </a>
        </div>
    </div>

<?php else: ?>
    <div class="alert alert-danger" role="alert">
        <p>
            <b>ERRO:</b> Não foi possível Conectar ao Banco de Dados!<br>
            <?= $erro;?>
        </p>
    </div>

<?php endif; ?>

<?php include(FOOTER_TEMPLATE); ?>