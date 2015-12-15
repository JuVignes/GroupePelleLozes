<?php

class Model {

    public $data = [];

    public function __construct($data = array()) {
        if($data) $this->hydrate($data);
    }

    public function hydrate($data) {
        foreach($data as $key => $value) {
            $this->$key = $value;
        }
    }

    public function __get($key) {
        if(isset($this->data[$key])) {
            return $this->data[$key];
        }
        throw new Error('Unknown preoperty '. $key);
    }

    public function __set($key, $value) {
        $this->data[$key] = $value;
    }

    public function save() {
        global $dbh;
        $sql_start = 'UPDATE '.static::$table.' SET ';
        $sql_end = ' WHERE '.static::$primary.' = ?';
        $sql_attributes = [];
        $sql_attributes_values = [];
        foreach (static::$attributes as $key) {
            $sql_attributes[] = $key. ' = ?';
            $sql_attributes_values[] = $this->$key;
        }
        $sql = $sql_start . implode(',', $sql_attributes) . $sql_end;
        $sth = $dbh->prepare($sql);
        $sql_attributes_values[] = $this->{static::$primary};
        $sth->execute($sql_attributes_values);
    }

    /** Static **/

    public static function getAll() {

        global $dbh;
        $sql = 'SELECT * FROM '.static::$table;
        $sth = $dbh->prepare($sql);
        $sth->execute([]);

        $models_db = $sth->fetchAll(PDO::FETCH_ASSOC);

        $models_obj = [];
        foreach ($models_db as $model_db) {
            $models_obj[] = new static($model_db);
        }

        return $models_obj;
    }

    public static function select($primaryValue) {
        global $dbh;
        $sql = 'SELECT * FROM '.static::$table.' WHERE '.static::$primary.' = ?';
        $sth = $dbh->prepare($sql);
        $sth->execute([$primaryValue]);

        $model_db = $sth->fetch(PDO::FETCH_ASSOC);
        if(!$model_db) return null;
        $model_obj = new static($model_db);

        return $model_obj;
    }

}
