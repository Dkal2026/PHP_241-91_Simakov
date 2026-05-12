<?php
    namespace src\Servisec;

    class db
    {
        private $pdo;

        public function __construct()
        {
            $dboption = require 'settings.php';
            $this->pdo = new \PDO
            (
                'mysql:host='.$dboption['host'].';dbname='.$dboption['db'],
                $dboption['user'],
                $dboption['password'],
            );
            $this->pdo->exec('SET NAMES UTF8');
        }

        public function query(string $sql, $params = [])
        {
            $sth = $this->pdo->prepare($sql);
            $result = $sth->execute($params);
            if($result === false)
            {
                return null;
            }
            
            return $sth->fetchAll();

        }
    }