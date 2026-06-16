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
            // print_r($propertiseName);
            return $propertiseName;
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
            if($this->id == null) $this->store($mapProperty);
            else $this->update($mapProperty);
        }

        private function store(array $mapProperty)
        {
            $db = db::getInstance();
            $mapProperty = array_filter($mapProperty);
            $properties = [];
            $values = [];
            $PropertyToValue = [];
            foreach($mapProperty as $key=>$value)
                {
                    $properties[] = '`'.$key.'`';
                    $property = ":$key";
                    $values[] = "$property";
                    $PropertyToValue[$property] = $value;
                }
                // print_r($PropertyToValue);
            $sql = 'INSERT INTO `'.static::getTableName().'`('.implode(',',$properties).') VALUES ('.implode(',',$values).')';
            // print_r($sql);
            // print_r($PropertyToValue);
            return $db->query($sql, $PropertyToValue, static::class);
            
        }
        private function update(array $mapProperty)
        {
            $db = db::getInstance();
            
            $ColumnToParametr = [];
            $ParamToValue = [];
            foreach($mapProperty as $key=>$value)
                {
                    $Column = '`'.$key.'`';
                    $param = ":$key";
                    $ColumnToParametr[] = $Column.'='.$param;
                    $ParamToValue[$key] = $value;
                }
                // print_r($ParamToValue);
            $sql = 'UPDATE `'.static::getTableName().'` SET '.implode(',', $ColumnToParametr).'
            WHERE `id`=:id';
            // print_r($sql);
            return $db->query($sql, $ParamToValue, static::class);
        }

        public function delete()
        {
            $db = db::getInstance();
            $sql = 'DELETE FROM `'.static::getTableName().'` WHERE `id`=:id';
            return $db->query($sql, [':id'=>$this->id], static::class);
        }

        public static function findOneByColumn(string $columnName, $value): ?array
        {
            $db = Db::getInstance();
            $result = $db->query(
                'SELECT * FROM `' . static::getTableName() . '` WHERE `' . $columnName . '` = :value;',
                [':value' => $value],
                static::class
            );
            if ($result === [])
            {
                return null;
            }
            return $result;
        }
        
    }
?>