<?php

namespace App\Entity;

use App\Db\Database;

use \PDO;

class User{
   

    public $name;

    public $email;

    public $color;

    public $resultados;

    

    
   
    //metodo responsavel por inserir um novo usuario e vilcular as tabelas users e colors
    public function cadastrar(){
        $newUser = new Database('users');
        $newUser->insert([
                        'name' => $this->name,
                        'email'=> $this->email
                        ]);
        
        $user = User::getUsers();
        foreach($user as $lista){
            $lastId =$lista->id;
                           
        };

        $newUser = new Database('user_colors');
        $newUser->insert([  
                            'user_id'=> $lastId,
                            'color_id'=> $this->color
                        ]);
        
        
       
        
 
        return true;
    }

    //metodo responsavel por atualizar dados do banco users e colors
    public function atualizar(){
        return (new Database('users'))->update('id = '.$this->id,[
                                                                    'name' => $this->name,
                                                                    'email'=> $this->email   
                                                                ]);
        
        return (new Database('user_colors'))->update('user_id = '.$this->id,[  
                                                                                    'color_id'=> $this->color
                                                                                 ]);
        
    }

    //metodo responsavel por excluir usario
    public function excluir(){
        
        return (new Database('users',))->delete('id = '.$this->id);
        return (new Database('user_colors',))->delete('user_id = '.$this->id);
        
        
    }

    
    
    
    
    //metodo responsavel por retornar dados da tabelas para a alteracao
    public static function getUsers($where = null, $order = null){
        return (new Database('users'))->select($where, $order)
                                      ->fetchAll(PDO::FETCH_CLASS,self::class);
    }
    
    //metodo responsavel por retornar o id do usuario para ser editado
    public static function getUser($id){
        return (new Database('users'))->select('id = '.$id)
                                    ->fetchObject(self::class);
        
    }



}