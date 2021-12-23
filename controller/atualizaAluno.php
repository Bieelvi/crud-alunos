<?php

include '../repository/alunoRepository.php';
include '../service/Mensagem.php';

try {
    $id = filter_input(INPUT_GET, 'id', FILTER_VALIDATE_INT);
    $nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_STRING);
    $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_STRING);

    $alunoRepository = new alunoRepository;

    $aluno = $alunoRepository->atualizaAluno($id, $nome, $email);

    new Mensagem('success', 'Aluno Atualizado com Sucesso!');

    header('Location: ../index.php');
} catch (\Throwable $e) {
    new Mensagem('danger', 'Algo Inesperado Aconteceu :(');

    header('Location: ../view/lista-alunos.php');
}   