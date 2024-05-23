<?php
    class Cliente {
        private $nome;
        private $cpf;
        private $email;
        private $data_nascimento;

        public function get_nome() {
            return $this->nome;
        }

        public function set_nome( $nome ) {
            $this->nome = $nome;
        }
        public function get_cpf() {
            return $this->cpf;
        }
        public function set_cpf( $cpf ) {
            $this->cpf = $cpf;
        }
        public function get_email() {
            return $this->email;
        }
        public function set_email( $email ) {
            $this->email = $email;
        }
        public function get_data_nascimento() {
            return $this->data_nascimento;
        }
        public function set_data_nascimento( $data_nascimento ) {
            $this->data_nascimento = $data_nascimento;
        }


    }

?>