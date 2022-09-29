<?php

$app = [];
// este tipo de archivos puede ser util cuando queremos hacer cosas globales.
//por ejemplo el return de esto es una clase que puede hacer querys de lo que sea.
//si queremos que sea una variable global, importamos el archivo dentro de una variable
require("core/database/Connection.php");
require("core/database/QueryBuilder.php");
require("core/Router.php");
require("core/Request.php");
require("functions.php");

$app['config'] = require("config.php");

$app['database'] = new QueryBuilder(
    Connection::make($app['config']['database'])
);