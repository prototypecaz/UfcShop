<?php

class Database {

    private $hostname;
    private $dbname;
    private $username;
    private $password;
    private $connection;

    public function __construct() {
        try {
            require_once( __DIR__ . '/../configuration.php' );
            $this->setHostname($configuration['hostname']);
            $this->setDbname($configuration['dbname']);
            $this->setUsername($configuration['username']);
            $this->setPassword($configuration['password']);
            $connection = (object) new PDO( sprintf("mysql:host=%s;dbname=%s", $this->getHostname(), $this->getDbname()), $this->getUsername(), $this->getPassword() );
        } catch (PDOException $exception) {
            die('Connection at database have failed');
        } finally {
            $this->setConnection($connection);
        }
    }

    public function getData(string $sql, array $mapper) : array {
        $this->setPrepare($sql);
        $this->setExecute($mapper);
        return (array) $this->getFetchAll();
    }

    private function setPrepare(string $sql) : void {
        $this->prepare = (object) (!empty($sql)) ? $this->getConnection()->prepare($sql) : die('sql query is not defined');
    }

    private function setExecute(array $mapper) : void {
        ($this->prepare->execute($mapper)) ? null : die('sql query is not correct');
    }

    private function getFetchAll() : array {
        return (array) ($this->prepare->rowCount() > 0) ? $this->prepare->fetchAll(PDO::FETCH_ASSOC) : die();
    }

    // Accessors SETTER

    private function setHostname(string $hostname) : void {
        $this->hostname = (string) (!empty($hostname)) ? $hostname : die('hostname is not defined');
    }

    private function setDbname(string $dbname) : void {
        $this->dbname = (string) (!empty($dbname)) ? $dbname : die('dbname is not defined');
    }

    private function setUsername(string $username) : void {
        $this->username = (string) (!empty($username)) ? $username : die('username is not defined');
    }

    private function setPassword(string $password) : void {
        $this->password = (string) (!empty($password)) ? $password : die('password is not defined');
    }

    private function setConnection(object $connection) : void {
        $this->connection = (object) $connection;
    }

    // Accessors GETTER

    private function getHostname() : string {
        return (string) $this->hostname;
    }

    private function getDbname() : string {
        return (string) $this->dbname;
    }

    private function getUsername() : string {
        return (string) $this->username;
    }

    private function getPassword() : string {
        return (string) $this->password;
    }

    private function getConnection() : object {
        return (object) $this->connection;
    }

}

?>