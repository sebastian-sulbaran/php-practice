<?php

function dd($data)
{
    echo "<pre>";
    var_dump($data);
    echo "</pre>";
    die();
}

function checkEntryAge($age)
{
    $allowed_age = 21;
    return ($age >= $allowed_age);
}

//defining the pdo instance en una funcion 

function connectDb()
{

    //aparece el try catch para intentar ejecutar algo y si algo malo pasa, captura la excepcion.
    try {
        //mysql_connect es una funcion de php deprecada.
        return new PDO("mysql:host=127.0.0.1;dbname=mytodo", 'ssulbaran','1SopadepollO');
    
    } catch (PDOException $e) {
        dd($e->getMessage()); // se pueden usar mensajes especificos genericos o informacion detallada del error
        //E cual vamos a usar va a depender de nuestras definiciones de seguridad y que tanta data queremos mostrar
        // die('Couldnt connect');
    }
}

function fetchAllTasks($pdo)
{
    $statement = $pdo->prepare('select * from todos'); // hay que tener cuidado con estas sentencias (fetch) ya qu elos datos son cargados en memoria y si la query es gigante puede romper el sitio.

    $statement->execute();

    //$results = $statement->fetchAll(); // se trae los datos en forma de array asociativo (nombre d elas columnas)
    //$task_list = $statement->fetchAll(PDO::FETCH_OBJ); //Se trae la informacion den forma de objeto donde las propiedades son las columnas del mismo. Pero esto traera un standard class generico.
    return $statement->fetchAll(PDO::FETCH_CLASS,'Task');// podemosusar para queuse una clase cuando se traiga la data

}
