<?php
    class Usuario{
        private $usuId;
        private $usuLogin;
        private $usuSenha;
        private $dataCadas;
        
        public function getUsuId() {      
            return $this->usuId;
        }
      
        public function getUsuLogin() {
            return $this->usuLogin;
        }
        
        public function getUsuSenha() {
            return $this->usuSenha;
        }

        public function getDataCadas() {
            return $this->dataCadas;
        }

        public function setUsuId($usuId): void {
            $this->usuId = $usuId;
        }
        public function setUsuLogin($usuLogin): void {
            $this->usuLogin = $usuLogin;
        }

        public function setUsuSenha($usuSenha): void {
            $this->usuSenha = $usuSenha;
        }

        public function setDataCadas($dataCadas): void {
            $this->dataCadas = $dataCadas;
        }

        public function loadById($id) {
            $sql = new Sql();
            
            $results = $sql->select("SELECT * FROM usuarios WHERE u_id = :ID",
                    array(
                        ":ID"=>$id
                    ));
            
            if (count($results) > 0) {
                
                $row = $results[0];
                
                $this->setUsuId($row['u_id']);
                $this->setUsuLogin($row['u_user']);
                $this->setUsuSenha($row['u_password']);
                $this->setDataCadas(new DateTime($row['dataCad']));
                
            }
        }
        
        public static function getList() {
            $sql = new Sql();
            $query = "SELECT * FROM usuarios ORDER BY u_id;";
            
            return $sql->select($query);
            
        }
        
        public static function search($login) {
            $sql = new Sql();
            $query = "SELECT * FROM usuarios WHERE u_user LIKE :SEARCH ORDER BY u_user;";
            $params = array(":SEARCH"=>"%".$login."%");
            return $sql->select($query, $params);
            
        }
        
        public function login($login, $password) {
            $sql = new Sql();
            $query = "SELECT * FROM usuarios WHERE u_user = :USER AND u_password = :PASS";
            $params = array(":USER"=>$login, ":PASS"=>$password,);
            
            $results = $sql->select($query, $params);
            
            //var_dump($results);
            
            if (count($results) > 0){
                
                $row = $results[0];
                //var_dump($row);
                
                $this->setUsuId($row['u_id']);
                $this->setUsuLogin($row['u_user']);
                $this->setUsuSenha($row['u_password']);
                $this->setDataCadas(new DateTime($row['dataCad']));
               
            } else {
                //throw new Exception("Login e/ou senha inválidos."); 
                echo "Login e/ou senha inválidos.";
            } 
            
                      
        }

        public function __toString() {
            return json_encode(array(
                "u_id" => $this->getUsuId(),
                "u_user" => $this->getUsuLogin(),
                "u_password" => $this->getUsuSenha(),
                "dataCad" => $this->getDataCadas()->format("d/m/Y H:i:s")
            ));
        }
        
        
        
    }