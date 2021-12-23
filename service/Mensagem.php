<?php 
session_abort();
session_start();

class Mensagem
{
    public function __construct(string $tipo, string $msg)
    {
		$_SESSION['tipo_msg'] = $tipo;
		$_SESSION['msg'] = $msg;
	}
}