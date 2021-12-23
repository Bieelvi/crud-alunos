<?php

include '../repository/alunoRepository.php';
include '../service/Mensagem.php';

try {
    $id = filter_input(INPUT_GET, 'id', FILTER_VALIDATE_INT);

    $alunoRepository = new alunoRepository;

    $aluno = $alunoRepository->buscaAluno($id);

    new Mensagem('success', 'Aluno Encontrado!');

    header("Location: ../view/lista-aluno.php?id=" . $aluno['id'] . "&nome=" . $aluno['nome'] . "&email=" . $aluno['email']);
} catch (\Throwable $e) {
    new Mensagem('danger', 'Algo Inesperado Aconteceu :(');

    header('Location: ../index.php');
}   