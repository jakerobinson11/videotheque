<?php
namespace Connection;

class Connect
{
    protected function connect()
    {
        // les class appeles dan un namespace qui appartiement à PHP
        // doivent etre precedes d'un \ ex: \Date()
        return new \PDO('mysql:host=localhost;dbname=netflix;charset=utf8', 'root', '', [
            \PDO::ATTR_ERRMODE => \PDO::ERRMODE_EXCEPTION,
            \PDO::ATTR_DEFAULT_FETCH_MODE => \PDO::FETCH_ASSOC
        ]);
    }
}