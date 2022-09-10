<?php

class QueryBuilder
{
    protected $pdo;
    //preguntas que uno deberia hacerse al momento de hacer clases
    // que otras cosas podria necesitar la clase en orden de cumplir con sus tareas? en este caso necesitamos un pdo
    // ejemplo de jeffrey del contractor, un contratista para poder hacer su trabajo necesitara de plomeros electricistas y disenadores, esas serian las dependencias/colaboradores.
    // para eso acudimos al constructor
    //el constructor es el sitio donde se definen o declaran las dependencias de una clase

    public function __construct(PDO $pdo) // type hinting
    {
        $this->pdo = $pdo;
    }

    public function selectAll($table)
    {
        $statement = $this->pdo->prepare("select * from {$table}"); // hay que tener cuidado con estas sentencias (fetch) ya qu elos datos son cargados en memoria y si la query es gigante puede romper el sitio.

        $statement->execute();
    
        //$results = $statement->fetchAll(); // se trae los datos en forma de array asociativo (nombre d elas columnas)
        //$task_list = $statement->fetchAll(PDO::FETCH_OBJ); //Se trae la informacion den forma de objeto donde las propiedades son las columnas del mismo. Pero esto traera un standard class generico.
        return $statement->fetchAll(PDO::FETCH_CLASS);// podemosusar para queuse una clase cuando se traiga la data
    
    }
}