<?php

class Model
{
    protected static $dbh;
    protected $table_name;
    protected $key;

    /**
     * Declares PDO
     *
     * @param   PDO  $dbh  database handle
     *
     * @return  void
     */
    public static function init($dbh)
    {
        static::$dbh = $dbh;
    }

    /**
     * Gets all matching records
     *
     * @return  array 
     */
    public function all():array
    {
        global $dbh;

        $query = "SELECT * FROM {$this->table_name}";

        $stmt = $dbh->query($query);
        
        return $stmt->fetchAll() ?? [];
    }

    /**
     * Gets a specific record
     *
     * @param   int    $id  id number
     *
     * @return  array
     */
    public function one(int $id):array
    {
        $query = "SELECT * FROM {$this->table_name} 
        WHERE {$this->key} = :id";

        $stmt = static::$dbh->prepare($query);

        $params = array(
            ':id' => $id
        );

        $stmt->execute($params);
        
        return $stmt->fetch() ?? [];
    }
}