<?php


class Post {

private $id;
private $titolo;
private $sottotitolo;
private $testo;
private $id_autore;

    
    //costruttore
    public function __construct()
    {

    }

    //metodi getter e setter generici
    public function __get($nomeAttributo)
    {
        return $this->$nomeAttributo;
    }

    public function __set($nomeAttributo, $value)
    {
        if (isset($value)) $this->$nomeAttributo = $value;
    }

    public function getAutore()
    {
        require_once '../app/models/UtentiDAO.php';
        $utente = new UtentiDAO;
        return $utente->findOne($this->id);
    }


    public function __toString()
    {
        return '<h1>'.$this->titolo . '</h1><h2>' . $this->sottotitolo . '</h2>'.'<p>'. implode($this->getAutore()) .'</p>';
    }

}