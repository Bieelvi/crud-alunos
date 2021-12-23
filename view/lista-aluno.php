<?php include_once '../view/header.php'; ?>

<main>
    <div class="container estilo mt-5">
        <h1>
            Aluno <?= $_GET['nome'] ?>
        </h1>
        
        <form action="../controller/atualizaAluno.php?id=<?= $_GET['id'] ?>" method="post">
            <div class="mb-3">
                <label for="nome" class="form-label">Nome</label>
                <input type="nome" class="form-control" id="nome" name="nome" value="<?= $_GET['nome'] ?>" required>
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control" id="email" name="email" value="<?= $_GET['email'] ?>" required>
            </div>
            <button type="submit" class="btn btn-success">Atualizar</button>
        </form>

        <div>
            <button type="button" class="btn btn-success mt-3">
                <a href="lista-alunos.php">
                    Buscar Alunos
                </a>
            </button> 
            <button type="button" class="btn btn-success mt-3">
                <a href="insere-aluno.php">
                    Novo Aluno
                </a>
            </button>  
        </div>
    </div>
</main>

<?php include_once '../view/footer.php'; ?>