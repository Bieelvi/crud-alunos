<?php 

include '../repository/alunoRepository.php';
include '../service/Mensagem.php';

try {
    $nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_STRING);
    $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);

    $alunoRepository = new alunoRepository;

    $aluno = $alunoRepository->insereAluno($nome, $email);

    new Mensagem('success', 'Aluno Criado!');

    header('Location: ../view/lista-alunos.php');
} catch (\Throwable $e) {
    new Mensagem('danger', 'Email Duplicado');

    header('Location: ../view/insere-aluno.php');
}