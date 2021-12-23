<?php 

class BancoDados
{
    private string $server;
    private string $usuario;
    private string $senha;
    private string $nomeBancoDados;

    public function conexao()
    {
        try {            
            $this->server = 'localhost';
            $this->usuario = 'root';
            $this->senha = 'vJn27trLE7V7Q22phk2mHfNah';
            $this->nomeBancoDados = 'banco_mm';
            
            $conexao = new \PDO(
                'mysql:host='.$this->server.';dbname='.$this->nomeBancoDados, $this->usuario, $this->senha
            );

            $conexao->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);

            return $conexao;
        } catch (\PDOException $e) {
            return 'Erro no banco de dados: ' . $e->getMessage();
        }
    }
}