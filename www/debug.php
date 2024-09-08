<?php
// Servidor: php -S localhost:8000 : Necessário php-sqlite 

//Normalizar caminho relativo do SQLite para conexão
function normalizePath($path)
{
    $parts = array();
    $path = str_replace('\\', '/', $path);
    $path = preg_replace('/\/+/', '/', $path);
    $segments = explode('/', $path);
    $test = '';
    foreach($segments as $segment)
    {
        if($segment != '.')
        {
            $test = array_pop($parts);
            if(is_null($test))
                $parts[] = $segment;
            else if($segment == '..')
            {
                if($test == '..')
                    $parts[] = $test;

                if($test == '..' || $test == '')
                    $parts[] = $segment;
            }
            else
            {
                $parts[] = $test;
                $parts[] = $segment;
            }
        }
    }
    return implode('/', $parts);
}

$path_sqlite = "../database/banco.db";

echo($path_sqlite);
?>