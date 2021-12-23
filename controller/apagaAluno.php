<?php

include '../repository/alunoRepository.php';
include '../service/Mensagem.php';

try {
    $id = filter_input(INPUT_GET, 'id', FILTER_VALIDATE_INT);

    $alunoRepository = new alunoRepository;

    $aluno = $alunoRepository->removeAluno($id);

    new Mensagem('success', 'Aluno Removido com Sucesso!');

    header('Location: ../index.php');
} catch (\Throwable $e) {
    new Mensagem('danger', 'Algo Inesperado Aconteceu :(');

    header('Location: ../view/lista-alunos.php');
}   