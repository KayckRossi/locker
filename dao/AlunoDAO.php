<?php

class AlunoDAO {

    public function create(Aluno $aluno) {

        //echo '<pre>' , var_dump($aluno) , '</pre>';

        try {

            $sql = 'START TRANSACTION;
            INSERT INTO aluno (rm, cpf, email, senha, nome, sobrenome, purl)
            VALUES (:rm, :cpf, :email, :senha, :nome, :sobrenome, :purl);
            SELECT LAST_INSERT_ID() INTO @id;
            INSERT INTO telefone_aluno (telefone, id_aluno)
            VALUES(:telefone, @id);
            COMMIT;';

            $stmt = Connection::getConnection()->prepare($sql);

            $stmt->bindValue(':rm', $aluno->getRm(), PDO::PARAM_INT);
            $stmt->bindValue(':cpf', $aluno->getCpf(), PDO::PARAM_STR);
            $stmt->bindValue(':email', $aluno->getEmail(), PDO::PARAM_STR);
            $stmt->bindValue(':senha', $aluno->getSenha(), PDO::PARAM_STR);
            $stmt->bindValue(':nome', $aluno->getNome(), PDO::PARAM_STR);
            $stmt->bindValue(':sobrenome', $aluno->getSobrenome(), PDO::PARAM_STR);
            $stmt->bindValue(':telefone', $aluno->getTelefone(), PDO::PARAM_STR);
            $stmt->bindValue(':purl', $aluno->getPurl(), PDO::PARAM_STR);
            
            return $stmt->execute();

        } catch (Exception $e) {

            echo 'Erro ao inserir aluno.<br>' . $e . '<br>';

        }

    }

    public function read($id) {

        try {

            $sql = 'SELECT aluno.id, rm, cpf, email, senha, nome, sobrenome, telefone
            FROM aluno INNER JOIN telefone_aluno telefone
            ON aluno.id = telefone.id_aluno
            WHERE aluno.id = :id';

            $stmt = Connection::getConnection()->prepare($sql);

            $stmt->bindValue(':id', $id);
            $stmt->execute();

            $data = $stmt->fetch(PDO::FETCH_ASSOC);

            if ($data) {

                $aluno = new Aluno();

                $aluno->setId($data['id']);
                $aluno->setCpf($data['cpf']);
                $aluno->setEmail($data['email']);
                $aluno->setSenha($data['senha']);
                $aluno->setNome($data['nome']);
                $aluno->setSobrenome($data['sobrenome']);
                $aluno->setTelefone($data['telefone']);
                $aluno->setRm($data['rm']);
                
                return $aluno;
                
            }
    
        return $data;

        } catch (Exception $e) {

            echo 'Erro ao selecionar aluno.<br>' . $e . '<br>';

        }

    }

    public function readAll() {

        try {
            $sql = 'SELECT aluno.id, rm, cpf, email, nome, sobrenome, telefone
            FROM aluno INNER JOIN telefone_aluno telefone
            ON aluno.id = telefone.id_aluno
            ORDER BY nome ASC';

            $stmt = Connection::getConnection()->prepare($sql);

            $stmt->execute();

            $data = $stmt->fetchAll(PDO::FETCH_ASSOC);

            $list = array();

            foreach ($data as $row) {

                $list[] = $this->list($row);

            }

            return $list;

        } catch (Exception $e) {

            echo 'Erro ao selecionar alunos.<br>' . $e . '<br>';

        }

    }

    private function list($row) {

        $aluno = new Aluno();

        $aluno->setId($row['id']);
        $aluno->setRm($row['rm']);
        $aluno->setCpf($row['cpf']);
        $aluno->setEmail($row['email']);
        $aluno->setNome($row['nome']);
        $aluno->setSobrenome($row['sobrenome']);
        $aluno->setTelefone($row['telefone']);

        return $aluno;

    }
     
    public function update(Aluno $aluno) {

        try {

            $sql = 'START TRANSACTION;
            UPDATE aluno SET senha = :senha, nome = :nome, sobrenome = :sobrenome
            WHERE id = :id;
            UPDATE telefone_aluno SET telefone = :telefone
            WHERE id_aluno = :id;
            COMMIT;';

            $stmt = Connection::getConnection()->prepare($sql);

            $stmt->bindValue(':senha', $aluno->getSenha(), PDO::PARAM_STR);
            $stmt->bindValue(':nome', $aluno->getNome(), PDO::PARAM_STR);
            $stmt->bindValue(':sobrenome', $aluno->getSobrenome(), PDO::PARAM_STR);
            $stmt->bindValue(':telefone', $aluno->getTelefone(), PDO::PARAM_STR);
            $stmt->bindValue(':id', $_SESSION['id'], PDO::PARAM_INT);

            return $stmt->execute();

        } catch (Exception $e) {

            echo 'Erro ao tentar fazer atualizar aluno.<br>' . $e . '<br>';

        }

    }

    public function delete(Aluno $aluno) {

        try {

            $sql = 'START TRANSACTION;
            DELETE FROM telefone_aluno
            WHERE id_aluno = :id;
            DELETE FROM aluno
            WHERE id = :id;
            COMMIT;';

            $stmt = Connection::getConnection()->prepare($sql);
            
            $stmt->bindValue(':id', $aluno->getId());

            return $stmt->execute();

        } catch (Exception $e) {

            echo 'Erro ao tentar excluir aluno.<br>' . $e . '<br>';

        }

    }


    public function countActive(){

        try {

            $sql = 'SELECT Count(id) FROM  aluno WHERE ativo = 1';

            $stmt = Connection::getConnection()->prepare($sql);

            $stmt->execute();

            $data = $stmt->fetch(PDO::FETCH_ASSOC);

            return $data["Count(id)"];
          

        } catch (Exception $e) {

            echo 'Erro ao tentar contar os alunos ativos.<br>' . $e . '<br>';

        }
    }


    public function createADM(Aluno $aluno) {

        //echo '<pre>' , var_dump($aluno) , '</pre>';

        try {

            $sql = 'START TRANSACTION;
            INSERT INTO aluno (rm, cpf, email, senha, nome, sobrenome, purl, ativo)
            VALUES (:rm, :cpf, :email, :senha, :nome, :sobrenome, :purl, :ativo);
            SELECT LAST_INSERT_ID() INTO @id;
            INSERT INTO telefone_aluno (telefone, id_aluno)
            VALUES(:telefone, @id);
            COMMIT;';

            $stmt = Connection::getConnection()->prepare($sql);

            $stmt->bindValue(':rm', $aluno->getRm(), PDO::PARAM_INT);
            $stmt->bindValue(':cpf', $aluno->getCpf(), PDO::PARAM_STR);
            $stmt->bindValue(':email', $aluno->getEmail(), PDO::PARAM_STR);
            $stmt->bindValue(':senha', $aluno->getSenha(), PDO::PARAM_STR);
            $stmt->bindValue(':nome', $aluno->getNome(), PDO::PARAM_STR);
            $stmt->bindValue(':sobrenome', $aluno->getSobrenome(), PDO::PARAM_STR);
            $stmt->bindValue(':telefone', $aluno->getTelefone(), PDO::PARAM_STR);
            $stmt->bindValue(':purl', $aluno->getPurl(), PDO::PARAM_STR);
            $stmt->bindValue(':ativo', $aluno->getAtivo(), PDO::PARAM_STR);

            return $stmt->execute();

        } catch (Exception $e) {

            echo 'Erro ao inserir aluno.<br>' . $e . '<br>';

        }

    }

    public function admReadAll() {

        try {
            $sql = 'SELECT aluno.id, rm, cpf, email, nome, sobrenome, telefone
            FROM aluno INNER JOIN telefone_aluno telefone
            ON aluno.id = telefone.id_aluno
            ORDER BY nome ASC';

            $stmt = Connection::getConnection()->prepare($sql);

            $stmt->execute();

            $data = $stmt->fetchAll(PDO::FETCH_ASSOC);

            $list = array();

            foreach ($data as $row) {

                $list[] = $this->list($row);

            }

            return $list;

        } catch (Exception $e) {

            echo 'Erro ao selecionar alunos.<br>' . $e . '<br>';

        }

    }


    
        
}

?>