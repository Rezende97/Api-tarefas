<?php

    namespace App\Controllers;

    session_start();

    use App\Model\LoginModel;
    use App\Helpers\Header;
    class Login
    {

        protected $user;
        
        protected $email;

        protected $password;

        public function authentication()
        {
            $login = filter_input_array(INPUT_POST, FILTER_DEFAULT);
            
            $this->email    = $login["email"];
            $this->password = $login["password_user"];

            $model = new LoginModel;
            $this->user = $model->acesso($this->email);

            if ($this->user) {

                if ($this->user["active"] == '1') {
                    
                    if ($this->password == $this->user["password_user"]) {
                        
                        $_SESSION['user'] = $this->user["name_user"];

                        $data['data']   = $_SESSION['user'];
                        $data['sucess'] = true;
    
                    }else {
                        
                        $data['sucess'] = false;
                        $data["error"] = "Usúario ou Senha Incorreta";
                    }

                }else{

                    $data['sucess'] = false;
                    $data["error"] = "Usúario Inativo";

                }

            }else{
                
                $data['sucess'] = false;
                $data['error'] = "Usuário não cadastrado";

            }

            echo Header::http_json($data);            
        }

    }