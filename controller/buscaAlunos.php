<?php 

include '../repository/alunoRepository.php';
include '../service/Mensagem.php';

try {
    $alunoRepository = new alunoRepository;

    $alunos = $alunoRepository->buscaAlunos();

    return $alunos;    
} catch (\Throwable $e) {
    new Mensagem('danger', 'Algo Inesperado Aconteceu :(');

    header('Location: ../index.php');
}