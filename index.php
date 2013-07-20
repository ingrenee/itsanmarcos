<?PHP

$c=$_GET['c'];
$a=$_GET['a'];


$pathController='controllers/';
$controlador=$pathController.c.'Controller.php';

if(file_exists($controlador)):
    $obj=new $controlador();
    if(method_exists($obj, $a)):
        $obj->$a();
        else:
        echo 'El metodo no existe';
    endif;
    
    else:
    
      echo 'El controlador no existe';  
endif;

