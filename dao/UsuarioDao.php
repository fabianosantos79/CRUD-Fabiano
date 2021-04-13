<?php

    require_once 'models/Usuario.php';

    class UsuarioDao{
        
        private $pdo;

        public function __construct(PDO $driver){
            $this->pdo = $driver;
        }



        //CREATE
        public function create(Usuario $u){
            $sql = $this->pdo->prepare("INSERT INTO usuarios (nome, email) VALUES (:n, :e)");
            $sql->bindValue(':n', $u->getNome());
            $sql->bindValue(':e', $u->getEmail());
            $sql->execute();

            $u->getId($this->pdo->lastInsertId());

            return $u;
        }

        //FIND ALL
        public function findAll(){
            $array=[];
            $sql = $this->pdo->prepare("SELECT * FROM usuarios");
            $sql->execute();

            if($sql->rowCount() > 0){
                $lista = $sql->fetchAll(PDO::FETCH_ASSOC);

                foreach($lista as $item){
                    $u = new Usuario();
                    $u->setId($item['id']);
                    $u->setNome($item['nome']);
                    $u->setEmail($item['email']);

                    $array[] = $u;
                }
            }
            return $array;
        }

        //FIND BY ID
        public function findById($id){
            $sql = $this->pdo->prepare("SELECT * FROM usuarios WHERE id = :id");
            $sql->bindValue(":id", $id);
            $sql->execute();

            if($sql->rowCount() > 0){
                $dados = $sql->fetch(PDO::FETCH_ASSOC);
                
                $u = new Usuario();
                $u->setId($dados['id']);
                $u->setNome($dados['nome']);
                $u->setEmail($dados['email']);

                return $u;
            }
            else
            {
                return false;
            }
        }

        //FIND BY E-MAIL
        public function findByEmail($email){

            $sql = $this->pdo->prepare("SELECT * FROM usuarios WHERE email = :e");
            $sql->bindValue(":e", $email);
            $sql->execute();

            if($sql->rowCount() > 0){
                $dados = $sql->fetch(PDO::FETCH_ASSOC);
                
                $u = new Usuario();
                $u->setId($dados[id]);
                $u->setNome($dados['nome']);
                $u->setEmail($dados['email']);

                return $u;
            }
            else
            {
                return false;
            }
        }

        //READ
        public function read(){
            
        }

        //UPDATE
        public function update(Usuario $u){
            
        }

        //DELETE
        public function delete($id){
            
        }
    }
?>