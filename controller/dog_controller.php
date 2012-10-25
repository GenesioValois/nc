<?php
	require_once "../model/dog.php";
	require_once "../model/database.php";
	
	$dog = new Dog;
	$action = $_GET['action'];
	$id = $_GET['id'];
	
	switch($action){
		case 'create':
			$dog->nome = $_POST['nome'];
            $dog->idade = $_POST['idade'];
            $dog->origem = $_POST['origem'];
            $dog->ingrus = $_POST['ingrus'];
            $arquivo = $_FILES['arquivo']['tmp_name']; 
            $tamanho = $_FILES['arquivo']['size'];
            if ( $arquivo != "none" ){
                $dog->set_foto($arquivo,$tamanho);
            }
			$dog->create();
			header("location: ../view/index.php");
			break;
		case "delete":
			$dog = Dog::find_by_id($id);
			$dog->delete();
		    header("location: ../view/index.php");
			break;
		case "update":
			$dog = Dog::find_by_id($id);
			$dog->nome = $_POST['nome'];
			$dog->idade = $_POST['idade'];
			$dog->ingrus = $_POST['ingrus'];
			/*if(isset($_FILES['arquivo'])){
			    $arquivo = $_FILES['arquivo']['tmp_name']; 
                $tamanho = $_FILES['arquivo']['size'];
                $dog->set_foto($arquivo,$tamanho);
			}*/
			$dog->update();
			header("location: ../view/dogs.php");
			break;
	}

?>
