<?php

class Data
{
	public $dia;
    public $mes;
    public $ano;

    public function mostra(){
    	return "{$this->dia}/
    			{$this->mes}/
    			{$this->ano}";
    }
}
