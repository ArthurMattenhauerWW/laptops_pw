<?php
include "functions.php";
index();
include HEADER_TEMPLATE; ?>

<style>

.table {
    vertical-align: middle;
    margin-top: 15px;
    border-radius: 8px;
    overflow: hidden;
    box-shadow: 0 2px 8px rgba(0, 0, 0, 0.05);
}

.table thead {
    background-color: #f8f9fa;
    border-bottom: 2px solid #dee2e6;
}

.table th {
    font-weight: 600;
    padding: 14px 12px;
}

.table td {
    padding: 12px;
}

.foto-laptop-index {
    max-width: 80px;
    height: auto;
    border-radius: 6px;
    object-fit: cover;
}

.actions .btn-sm {
    margin-left: 3px;
    margin-bottom: 2px;
    padding: 6px 12px;
    font-size: 0.85rem;
    border-radius: 6px;
    transition: all 0.2s ease-in-out;
    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.08);
}

@media (max-width: 768px) {
    .actions {
        display: flex;
        flex-direction: column;
        gap: 5px;
        align-items: flex-end;
    }
    
    .actions .btn-sm {
        width: 100%;
        max-width: 120px;
    }
}
</style>


<header>
    <div class="row">
        <div class="col-sm-6">
            <h2 class="mt-3 text-azul">Laptops</h2>
        </div>
        <div class="col-sm-6 text-end h2">
            <a class="btn btn-azul mt-3 text-offwhite" href="add.php"><i class="fa-solid fa-laptop-medical"></i> Novo Laptop</a>
            <a class="btn btn-azulclaro mt-3 text-offwhite" href="index.php"><i class="fa fa-refresh"></i> Atualizar</a>
        </div>
    </div>
</header>

<?php if (!empty($_SESSION['message'])): ?>
    <div class="alert alert-<?php echo $_SESSION['type']; ?> alert-dismissible" role="alert">
        <?php echo $_SESSION['message']; ?>
    </div>
    <?php unset($_SESSION['message']); unset($_SESSION['type']); ?>
<?php endif; ?>

<hr>


<div class="row mb-3">
    <div class="col-md-6">
        <div class="input-group">
            <span class="input-group-text"><i class="fa-solid fa-magnifying-glass"></i></span>
            <input type="text" id="searchMarca" class="form-control" 
                   placeholder="Pesquisar por marca...">
        </div>
    </div>
</div>

<table class="table table-hover" id="tabelaLaptops">
    <thead>
        <tr>
            <th class="text-azul">ID</th>
            <th width="30%" class="text-azul">Marca</th>
            <th class="text-azul">Modelo</th>
            <th class="text-azul">Imagem</th>
            <th class="text-azul">Atualizado em</th>
            <th class="text-azul text-end">Opções</th>
        </tr>
    </thead>
    <tbody>
        <?php if ($laptops): ?>
            <?php foreach ($laptops as $laptop): ?>
                <tr>
                    <td><?php echo $laptop['id']; ?></td>
                    <td><?php echo $laptop['marca']; ?></td>
                    <td><?php echo $laptop['modelo']; ?></td>
                    <td>
                        <img src="<?php echo BASEURL; ?>assets/img/<?php echo $laptop['foto']; ?>" 
                             alt="<?php echo $laptop['modelo']; ?>" 
                             class="foto-laptop-index">
                    </td>
                    <td>
                        <?php
                            $dt = new DateTime($laptop['datamod'], new DateTimeZone('-0300')); 
                            echo $dt->format("d/m/Y - H:i:s");
                        ?>
                    </td>
                    <td class="actions text-end">
                        <a href="view.php?id=<?php echo $laptop['id']; ?>" class="btn btn-sm btn-azul text-offwhite">
                            <i class="fa-solid fa-eye"></i> Visualizar
                        </a>
                        <a href="edit.php?id=<?php echo $laptop['id']; ?>" class="btn btn-sm btn-azulclaro text-offwhite">
                            <i class="fa-solid fa-pencil"></i> Editar
                        </a>
                        <a href="#" class="btn btn-sm btn-azulclarissimo text-offwhite" 
                           data-bs-toggle="modal" data-bs-target="#delete-modal"
                           data-laptop="<?php echo $laptop['id']; ?>">
                            <i class="fa-solid fa-trash"></i> Excluir
                        </a>
                    </td>
                </tr>
            <?php endforeach; ?>
        <?php else: ?>
            <tr>
                <td colspan="6">Nenhum registro encontrado.</td>
            </tr>
        <?php endif; ?>
    </tbody>
</table>

<script>
document.getElementById('searchMarca').addEventListener('keyup', function() {
    const termo = this.value.toLowerCase().trim();
    const linhas = document.querySelectorAll('#tabelaLaptops tbody tr');

    linhas.forEach(function(linha) {
        const marca = linha.cells[1]?.textContent.toLowerCase() || '';  // coluna 2 = marca
        linha.style.display = marca.includes(termo) ? '' : 'none';
    });
});
</script>

<?php 
include "modal.php";
include FOOTER_TEMPLATE; 
?>