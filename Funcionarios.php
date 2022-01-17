<?php

class Funcionarios
{
    private $funcionarios;

    public function __construct()
    {
        $this->funcionarios = [
            ['cpf' => 68484681681681, 'nome' => 'João', 'salario' => 1500],
            ['cpf' => 264816468468461, 'nome' => 'José', 'salario' => 1230.50],
            ['cpf' => 316616816188644, 'nome' => 'Maria', 'salario' => 1678.54],
            ['cpf' => 6816168168161, 'nome' => 'kevin', 'salario' => 15000],
            ['cpf' => 6486486464163, 'nome' => 'victor', 'salario' => 16000],
            ['cpf' => 64684646464645, 'nome' => 'denner', 'salario' => 17000],
            ['cpf' => 76486486468464, 'nome' => 'edu', 'salario' => 18000],
        ];
    }
    public function all()
    {
        return $this->funcionarios;
    }
    /**
     * @return array | null
     */
    public function find($id)
    {
        foreach ($this->funcionarios as $func){
            if($func['cpf'] == $id){
                return $func;
            }
        }
    
        return null;
    }
}

?>
