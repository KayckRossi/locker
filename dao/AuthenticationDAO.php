<?php

class AuthenticationDAO {

    public function authenticate($email) {

        try {

            $sql = 'SELECT id, email, senha, nome, ativo
            FROM aluno
            WHERE email = :email and ativo = 1';

            $stmt = Connection::getConnection()->prepare($sql);

            $stmt->bindValue(':email', $email);
            
            $stmt->execute();

            $data = $stmt->fetch(PDO::FETCH_ASSOC);
            
            return $data;

        } catch (Exception $e) {

            echo 'Erro ao selecionar aluno.<br>' . $e . '<br>';

        }

    }

}

?>