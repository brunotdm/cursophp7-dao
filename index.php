<?php

require_once("config.php");

//$sql = new Sql();

//$usuarios = $sql->select("SELECT * FROM usuarios");

//$rawQuery = "SELECT * FROM usuarios";
//$usuarios = $sql->select($rawQuery);

//echo json_encode($usuarios);

/*
$root = new Usuario();

$root->loadById(6);

//var_dump($root);
echo $root;
*/
/*$lista = new Usuario();

$usuarios = $lista->getList();

//var_dump($usuarios);

//echo json_encode($usuarios);

foreach ($usuarios as $usuario) {
    
    //var_dump($usuario);
    echo "<hr>";
    
    foreach ($usuario as $key => $value) {
        echo "<strong>".$key.":</strong> ".$value."</br>";
    }
    
}
*/
//Outra forma de fazer:

//$lista = Usuario::getList(); //Para chamar diretamente a função (sem instanciar objeto), é necessário colocá-la como static.
//echo json_encode($lista);

/*$login = "br";
$search = Usuario::search($login);
echo json_encode($search);
*/

$usu = new Usuario();
$usu->login("Bruno", "@lg0ritm088");
var_dump($usu);
//echo $usu;