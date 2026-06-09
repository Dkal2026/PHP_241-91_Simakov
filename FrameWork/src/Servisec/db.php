<?php
    namespace src\Servisec;
    use \src\Exceptions\dbexception;

    class db
    {
        private $pdo;
        private static $instance;

        private function __construct()
        {
            $dboption = require 'settings.php';
            try{
                $this->pdo = new \PDO
                (
                    'mysql:host='.$dboption['host'].';dbname='.$dboption['db'],
                    $dboption['user'],
                    $dboption['password'],
                );
                $this->pdo->exec('SET NAMES UTF8');
            }
            catch (\PDOException $e)
            {
                throw new DbException('Ошибка при подключении к базе данных: ' . $e->getMessage());
            }
        }

        public static function getInstance()
        {
            if(self::$instance === null){
                self::$instance = new self();
            }
            return self::$instance;
        }

        public function query(string $sql, $params = [], string $className='stdClass')
        {
            $sth = $this->pdo->prepare($sql);
            $result = $sth->execute($params);
            if($result === false)
            {
                return null;
            }
            
            return $sth->fetchAll(\PDO::FETCH_CLASS, $className);

        }
    }