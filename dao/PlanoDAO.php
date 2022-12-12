<?php

class PlanoDAO {
    
    public function create(Plano $plano) {

        //echo '<pre>' , var_dump($plano) , '</pre>';

        try {

            $sql = 'INSERT INTO plano (plano, valor, status, duracao)
            VALUES (:plano, :valor, :status, :duracao)';

            $stmt = Connection::getConnection()->prepare($sql);

            $stmt->bindValue(':plano', $plano->getPlano(), PDO::PARAM_STR);
            $stmt->bindValue(':valor', $plano->getValor());
            $stmt->bindValue(':status', $plano->getStatus(), PDO::PARAM_INT);
            $stmt->bindValue(':duracao', $plano->getDuracao(), PDO::PARAM_INT);
            
            return $stmt->execute();

        } catch (Exception $e) {

            echo 'Erro ao inserir plano.<br>' . $e . '<br>';

        }

    }

    public function read($id) {

        try {

            $sql = 'SELECT *
            FROM plano
            WHERE id = :id';

            $stmt = Connection::getConnection()->prepare($sql);

            $stmt->bindValue(':id', $id);

            $stmt->execute();

            $data = $stmt->fetch(PDO::FETCH_ASSOC);

            if ($data) {

                $plano = new Plano();

                $plano->setId($data['id']);
                $plano->setPlano($data['plano']);
                $plano->setValor($data['valor']);
                $plano->setStatus($data['status']);
                
                return $plano;

            }
    
            return $data;

        } catch (Exception $e) {

            echo 'Erro ao selecionar plano.<br>' . $e . '<br>';

        }

    }

    public function readAll() {

        try {
            $sql = 'SELECT *
            FROM plano
            ORDER BY valor ASC';

            $stmt = Connection::getConnection()->prepare($sql);

            $stmt->execute();

            $data = $stmt->fetchAll(PDO::FETCH_ASSOC);

            $list = array();

            foreach ($data as $row) {

                $list[] = $this->list($row);

            }


            return $list;

        } catch (Exception $e) {

            echo 'Erro ao selecionar plano.<br>' . $e . '<br>';

        }

    }

    private function list($row) {

        $plano = new Plano();

        $plano->setId($row['id']);
        $plano->setPlano($row['plano']);
        $plano->setValor($row['valor']);
        $plano->setStatus($row['status']);
        $plano->setDuracao($row['duracao']);

        return $plano;

    }

    public function update(Plano $plano) {

        try {

            $sql = 'UPDATE plano
            SET plano = :plano, valor = :valor, status = :status, duracao = :duracao
            WHERE id = :id';

            $stmt = Connection::getConnection()->prepare($sql);

            $stmt->bindValue(':plano', $plano->getPlano(), PDO::PARAM_STR);
            $stmt->bindValue(':valor', $plano->getValor());
            $stmt->bindValue(':status', $plano->getStatus(), PDO::PARAM_BOOL);
            $stmt->bindValue(':duracao', $plano->getDuracao(), PDO::PARAM_INT);
            $stmt->bindValue(':id', $plano->getId(), PDO::PARAM_INT);

            return $stmt->execute();

        } catch (Exception $e) {

            echo 'Erro ao tentar atualizar plano.<br>' . $e . '<br>';

        }

    }

    public function delete(Plano $plano) {

        try {

            $sql = 'DELETE FROM plano
            WHERE id = :id';

            $stmt = Connection::getConnection()->prepare($sql);

            $stmt->bindValue(':id', $plano->getId());

            return $stmt->execute();

        } catch (Exception $e) {

            echo 'Erro ao tentar excluir plano.<br>' . $e . '<br>';

        }

    }
        
}

?>