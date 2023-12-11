<?php

class ServerLoadException extends Exception{};
class NetworkException extends Exception{};
class DiskFullException extends Exception{};

interface NetworkStorage{
    function connect();
    function getName();
    // function report();
}

class MySQLServer implements NetworkStorage{
    function connect(){
        throw new ServerLoadException();
    }

    function getName() {
        return 'mysql';
    }
}

class PostgreSQLServer implements NetworkStorage{
    function connect(){
        // throw new NetworkException();
        return $this;
    }

    function getName() {
        return 'PostgreSQL';
    }
}

class MongoDBServer implements NetworkStorage{
    function connect(){
       throw new DiskFullException();
    }

    function getName() {
        return 'MongoDB';
    }
}

class ConnectionPool{
    private $connection;
    private $storage;

    function __construct()
    {
        $this->storage = array();

    }

    function addStorage ($storage) {
        array_push($this->storage, $storage); 
    }

    function getConnection() {
        foreach($this->storage as $storage){
            try{
               $this->connection = $storage->connect();
            }
            catch(ServerLoadException $e){
               echo $storage->getName() . "is facing huge load \n";
            }
            catch(NetworkException $e){
                echo $storage->getName() . "is having some problem with it \n";
            }
            catch(DiskFullException $e){
                echo $storage->getName() . "has it's full disk \n";
            }

            // break use koray samne ar loop jabe na
            if($this->connection){
               break;
            }
        }

        if($this->connection){
          return $this->connection;        
        }
        return false; 
    }
}

$MySQLServer       = new MySQLServer();
$PostgreSQLServer  = new PostgreSQLServer();
$MongoDBServer     = new MongoDBServer();

$ConnectionPool    = new ConnectionPool();
$ConnectionPool->addStorage($MySQLServer);
$ConnectionPool->addStorage($PostgreSQLServer);
$ConnectionPool->addStorage($MongoDBServer);

$connection = $ConnectionPool->getConnection();
print_r($connection);
?>
