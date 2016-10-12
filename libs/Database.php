<?php
/**
 * Created by WebSector
 */

class Database extends PDO
{
    public function __construct($DB_TYPE, $DB_HOST, $DB_NAME, $DB_USER, $DB_PASS, $DB_CHAR_SET)
    {
        parent::__construct($DB_TYPE . ':host=' . $DB_HOST . ';dbname=' . $DB_NAME . ';charset=' . $DB_CHAR_SET, $DB_USER, $DB_PASS);
    }

    /**
     *
     * SQL select statement
     * @param string $sql
     * @param array $array
     * @param constant $fetchMode
     */
    public function select($sql, $array = array(), $fetchMode = PDO::FETCH_ASSOC)
    {
        $sth = $this->prepare($sql);
        foreach ($array as $key => $value) {
            $sth->bindValue("$key", $value);
        }

        $sth->execute();
        return $sth->fetchAll($fetchMode);
    }

    /**
     *
     * SQL insert statement
     * @param string $table A name of table to insert into
     * @param string $data An associative array
     */
    public function insert($table, $data){
        ksort($data); // sort an array by key

        $fieldNames = implode('`, `', array_keys($data));
        $fieldValues = ':' . implode(', :', array_keys($data));

        $sth = $this->prepare("INSERT INTO $table (`$fieldNames`) VALUES ($fieldValues)");

        foreach ($data as $key => $value) {
            $sth->bindValue(":$key", $value);
        }

        $sth->execute();
    }


    /**
     *
     * SQL update statement
     * @param string $table
     * @param string $data
     * @param string $where
     */
    public function update($table, $data, $where){

        ksort($data); // sort an array by key

        $fieldDetails = NULL;
        foreach($data as $key => $value){
            $fieldDetails .= "`$key`=:$key,";
        }
        $fieldDetails = rtrim($fieldDetails, ',');

        $sth = $this->prepare("UPDATE $table SET $fieldDetails WHERE $where");

        foreach($data as $key => $value){
            $sth->bindValue(":$key", $value);
        }

        $sth->execute();
    }

    /**
     *
     * SQL delete statement
     * @param string $table
     * @param string $where
     * @param integer $limit
     * @return integer affected rows
     */
    public function delete($table, $where, $limit = 1)
    {
        return $this->exec("DELETE FROM $table WHERE $where LIMIT $limit");
    }
}