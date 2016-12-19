<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Contato
 *
 * @author 201519060149
 */
class Contato {

    public $nome;
    public $email;
    
    function __construct($nome, $email) {
        $this->nome = $nome;
        $this->email = $email;
    }
}
