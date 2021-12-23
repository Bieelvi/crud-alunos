<?php 

class Aluno 
{
    private int $id;
    private string $nome;
    private string $email;

    public function __construct(string $nome = null, string $email = null)
    {
        $this->nome = $nome;
        $this->email = $email;
    }

    public function getId(): ?int
    {
        return $this->getId();
    }

    public function setNome(string $nome): self
    {
        $this->nome = $nome;
        
        return $this;
    }

    public function getNome(): string
    {
        return $this->nome;
    }

    public function setEmail(string $email): self
    {
        $this->email = $email;

        return $this;
    }

    public function getEmail(): string
    {
        return $this->email;
    }
}