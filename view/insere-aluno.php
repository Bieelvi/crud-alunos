<?php include_once '../view/header.php'; ?>

<main>
    <div class="container estilo mt-5">
        <h1>
            Criar Aluno
        </h1>
        
        <form action="../controller/insereAluno.php" method="post">
            <div class="mb-3">
                <label for="nome" class="form-label">Nome</label>
                <input type="nome" class="form-control" id="nome" name="nome" required>
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control" id="email" name="email" required>
            </div>
            <button type="submit" class="btn btn-success">Criar</button>
        </form>

        <button type="button" class="btn btn-success mt-3">
            <a href="lista-alunos.php">
                Buscar Alunos
            </a>
        </button>  
    </div>
</main>

<?php include_once '../view/footer.php'; ?>