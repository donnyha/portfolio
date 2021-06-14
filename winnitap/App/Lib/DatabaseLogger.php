<?php

namespace App\Lib;

class DatabaseLogger implements ILogger
{
    private $dbh;

    /**
     * construct dbh
     *
     * @param   $dbh
     *
     * @return
     */
    public function __construct($dbh)
    {
        $this->dbh = $dbh;
    }

    /**
     * write log to the database
     *
     * @param   string  $event
     *
     * @return
     */
    public function write($event)
    {       
        // prepare query
        $query = "INSERT INTO log (event) VALUES (:event)";
            
        // prepare the statement to be executed
        $stmt = $this->dbh->prepare($query);

        // use these values to fill in values in placeholders
        $params = array(
            ':event' => $event,
        );

        // execute the statement and the data is inserted
        $stmt->execute($params);
    }

    /**
     * getting all logs from the database
     *
     * @return  [type]  [return description]
     */
    public function getLog()
    {
        $this->dbh;

        $query = "SELECT
        *
        FROM
        log
        ";

        $stmt = $this->dbh->query($query);

        $logs = $stmt->fetchAll();

        return $logs;
    }
}