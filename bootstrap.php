<?php
// este tipo de archivos puede ser util cuando queremos hacer cosas globales.
//por ejemplo el return de esto es una clase que puede hacer querys de lo que sea.
//si queremos que sea una variable global, importamos el archivo dentro de una variable
require("database/Connection.php");
require("database/QueryBuilder.php");

return new QueryBuilder(
    Connection::make()
);