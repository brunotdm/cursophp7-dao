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

/*$lista = Usuario::getList(); //Para chamar diretamente a função (sem instanciar objeto), é necessário colocá-la como static.
echo json_encode($lista);
*/
/*$login = "ern";
$search = Usuario::search($login);
echo json_encode($search);
*/

/*$usu = new Usuario();
var_dump($usu);
echo "</br>";
//$usu->getUsuId()
$usu->setUsuLogin("lacapu");
$usu->setUsuSenha("lacapucha");
//$usu->login("Bruno", "@lg0ritm088");
var_dump($usu);
echo "</br>";
//echo $usu;
*/

/*
$usu = new Usuario("Jesus", "!@#$12312121");
$usu->insert();
echo $usu;*/
/*$usu1 = new Usuario();
var_dump($usu1);
echo "</br>";
$nome = "Titus";
$senha = "!@#$1234987";
//echo $nome;
//echo $senha;
$usu1->setUsuLogin($nome);
$usu1->setUsuSenha($senha);
var_dump($usu1);
echo "</br>";
$usu1->insert();
*/

$usu = new Usuario();
$usu->loadById(5);
$usu->update("Ernesto", "0p0oi23#$");
echo $usu;