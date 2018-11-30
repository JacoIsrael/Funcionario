<?php

class Funcionario
{
	public $nome;
    public $departamento;
    public $salario;
    public $dataEntrada;
    public $cpf;

    public function recebeAumento(){

        $aumento = $this->salario * 0.1;

        $this->salario = $this->salario + $aumento;

        return $aumento;
    }

    public function calculaGanhoAnual(){

    	$ganhoAnual = $this ->salario * 12;

    	return $ganhoAnual;
    }

    public function mostra(){

    	return "O funcionario{$this->nome} do departamento {$this->departamento}, funcionario desde {$this->dataEntrada->getData()} possui salario de {$this->salario}";
    }

    public function __toString(){

    	return $this->mostra();

    }

}