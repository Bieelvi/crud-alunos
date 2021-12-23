<?php 
    include_once '../view/header.php'; 
    include '../controller/buscaAlunos.php';
?>

<main>
    <div class="container estilo mt-5">
        <h1>
            Alunos
        </h1>

        <div>
            <ul class="list-group">
            <?php foreach ($alunos as $aluno): ?>
                <li class="list-group-item d-flex justify-content-between">
                    <div>
                        <span> <?= $aluno['nome'] ?> </span> 
                    </div>
                    
                    <div>
                        <a href="../controller/buscaAluno.php?id=<?=  $aluno['id'] ?>" > visualizar </a>
                        <a href="../controller/apagaAluno.php?id=<?=  $aluno['id'] ?>" > apagar </a>
                    </div>                    
                </li>
            <?php endforeach; ?>
            </ul>
        </div>

        <button type="button" class="btn btn-success mt-3">
            <a href="insere-aluno.php">
                Novo Aluno
            </a>
        </button>  
    </div>
</main>

<?php include_once '../view/footer.php'; ?>