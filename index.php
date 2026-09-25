<?php include "config.php";
include DBAPI;
include(HEADER_TEMPLATE);
$erro =null;
try{
 $db = open_database(); 
} catch (Exception $e){
    $erro = $e;
}?>

<style>
.btn-azul,
.btn-azulclaro {
    display: block;
    width: 100%;
    padding: 20px 15px;
    border-radius: 12px;
    transition: all 0.3s ease-in-out;
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
    text-decoration: none;
    margin-bottom: 20px;
}

.icone-branco {
    color: #ffffff;
    margin-bottom: 12px;
    transition: transform 0.3s ease;
}

.btn-azul p,
.btn-azulclaro p {
    font-size: 1.1rem;
    font-weight: 600;
    margin-top: 10px;
    margin-bottom: 0;
    color: #ffffff;
    text-shadow: 0 1px 2px rgba(0, 0, 0, 0.2);
}

.alert-danger {
    border-radius: 8px;
    border-left: 5px solid #dc3545;
    padding: 15px 20px;
    box-shadow: 0 2px 5px rgba(0, 0, 0, 0.05);
}
</style>


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