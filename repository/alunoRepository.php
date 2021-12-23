<?php 

include '../infra/BancoDados.php';
include '../model/Aluno.php';

class alunoRepository 
{
    private $con;

    public function __construct()
    {
        $conexao = new BancoDados();

        $this->con = $conexao->conexao(); 
    }

    public function insereAluno(string $nome, string $email)
    {    
        $sql = $this->con->prepare('INSERT INTO aluno (nome, email) VALUES (?, ?);');
        $sql->bindParam(1, $nome);
        $sql->bindParam(2, $email);

        if(!$sql->execute()) {
            throw new \PDOStatement('Erro ao inserer novo usuario!');
        }    

        return true;
    }

    public function removeAluno(int $id)
    {
        $sql = $this->con->prepare('DELETE FROM aluno WHERE id = ?;');
        $sql->bindParam(1, $id);

        if(!$sql->execute()) {
            throw new \PDOStatement('Erro ao remover usuarios!');
        } 
        
        return true;
    }

    public function atualizaAluno(int $id, string $nome, string $email)
    {
        $sql = $this->con->prepare('UPDATE aluno SET nome = ?, email = ? WHERE id = ?');
        $sql->bindParam(1, $nome);
        $sql->bindParam(2, $email);
        $sql->bindParam(3, $id);

        if(!$sql->execute()) {
            throw new \PDOStatement('Erro ao atualizar usuario!');
        } 

        return true;
    }

    public function buscaAluno(int $id)
    {
        $sql = $this->con->prepare('SELECT * FROM aluno WHERE id = ?;');
        $sql->bindParam(1, $id);

        if(!$sql->execute()) {
            throw new \PDOStatement('Erro ao busca usuario!');
        } 
        
        return $sql->fetch(\PDO::FETCH_ASSOC);;
    }

    public function buscaAlunos()
    {
        $sql = $this->con->prepare('SELECT * FROM aluno');

        if(!$sql->execute()) {
            throw new \PDOStatement('Erro ao buscar usuarios!');
        }    

        return $sql->fetchAll();
    }
}