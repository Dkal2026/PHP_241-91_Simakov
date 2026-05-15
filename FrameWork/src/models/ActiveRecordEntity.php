<?php
    namespace src\models;
    use src\Servisec\db;

    abstract class ActiveRecordEntity
    {
        protected $id;

        public static function getById($id): ?self
        {
            $db = db::getInstance();
            $entity = $db->query('SELECT * FROM `'.static::getTableName().'` WHERE id = :id;', [':id' => $id], static::class);
            return $entity ? $entity[0] : null;
        }
        
        private function camelToCamel(string $name)
        {
            return strtolower(preg_replace('/(?<!^)[A-Z]/', '_$0', $name));
        }

        private function mapPropertiesToDbFormat()
        {
            $reflector = new \ReflectionObject($this);
            $properties = $reflector->getProperties();
            // print_r($properties);
            $propertiseName =[];
            foreach($properties as $property)
            {
                $propertyName = $property->getName();
                $propertyNamedbFormat = $this->camelToCamel($propertyName);
                $propertiseName[$propertyNamedbFormat] = $this->$propertyName;
            }
            print_r($propertiseName);
            return;
        }
    
        public function __set($name, $value)
        {
            $newProperty = $this->upperToCamel($name);
            $this->$newProperty = $value;
        }

        private function upperToCamel(string $name)
        {
            return lcfirst(str_replace('_', '', ucwords($name, '_')));
        }

        
        
        public static function findAll()
        {
            $db = db::getInstance();
            return $db->query('SELECT * FROM `'.static::getTableName().'`;',[], static::class);
        }

        public function getId() :string
        {
            return $this->id;
        }

        public function save()
        {
            $mapProperty = $this->mapPropertiesToDbFormat();
            if($this->id == null) $this->store();
            else $this->update();
        }

        private function store()
        {

        }
        private function update()
        {

        }

        
    }
?>