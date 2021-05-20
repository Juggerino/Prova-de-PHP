<?php

namespace App\Db;

use \PDO;

use PDOException;

class Database{

    const HOST = 'localhoslt';

    const PORT = '3308';

    const NAME = 'bd_prova';

    const USER = 'root';

    const PASS = '';

    private $table;

    private $connection;

    public function __construct($table = null){
        $this->table = $table;
        $this->setConnection();
    }

    //metodo resposavel por criar a conexao com o banco de dados

    private function setConnection(){
        try{
            $this->connection = new PDO('mysql:host=localhost;dbname=bd_prova',self::USER,self::PASS);
            $this->connection->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
        }catch(PDOException $e){
            die('ERROR:!! '.$e->getMessage());
        }
    }

    
  

    //metodo responsavrl por ececutar queries dentro do banco de dados
    public function execute($query,$params = []){
        try{
            $statement = $this->connection->prepare($query);
            $statement->execute($params);
            return $statement;
        }catch(PDOException $e){
            die('ERROR:!! '.$e->getMessage());
        };
    }
    
    //meto responsavel por iserir os dados no banco
    public function insert($values){
        //dados da query
        $fields = array_keys($values);
        $binds  = array_pad([],count($fields),'?');
                
        $query = 'INSERT INTO '.$this->table.' ('.implode(',',$fields).') VALUES ('.implode(',',$binds).')';

        $this->execute($query,array_values($values));
        
       
        return $this->connection->lastInsertId();
        
    } 

    


  
    //metodo responsavel por executar uma consulta no banco 
    public function select($where = null, $order = null, $fields = '*'){
        $where = strlen($where) ? 'WHERE '.$where : '';
        $order = strlen($order) ? 'ORDER BY '.$order : '';
       
       


        $query = 'SELECT '.$fields.' FROM '.$this->table.' '.$where;
        
        return $this->execute($query);
    }
    
    //metodo responsavel por altera o usuario
    public function update($where,$values){
        
        $fields = array_keys($values);
        
        $query = 'UPDATE '.$this->table.' SET '.implode('=?, ',$fields).'=? WHERE '.$where;
        

        $this->execute($query,array_values($values));

        return $id=$this->id;
    }



    //metodo responsavel por excluir um usuario 
    public function delete($where){
        //Monta a query
        $query = 'DELETE FROM '.$this->table. ' WHERE '.$where;
        
        //executa a query
        $this->execute($query);

        //retorna sucesso
        return true;
    }
}