<?php
    class Contact {
        private $id;
        private $name;
        private $phone;
        private $date;
        private $address;
        private $email;
        private $pdo;

        public function __construct()
        {
            try {
                $this->pdo = new Database;
            } catch (PDOException $e) {
                die($e->getMessage());
            }
        }

        public function getAll()
        {
            try {
                $strSql = "SELECT * FROM contactos";
                return $this->pdo->select($strSql);
            } catch (PDOException $e) {
                die($e->getMessage());
            }
        }

        public function newContact($data)
        {
            try {
                $this->pdo->insert("contactos",$data);
            } catch (PDOException $e) {
                die($e->getMessage());
            }
        }

        public function getById($id)
        {
            try {
                $strSql = "SELECT * FROM contactos WHERE id =:id";
                $arrayData = ['id' => $id];
                return $this->pdo->select($strSql, $arrayData);
            } catch (PDOException $e) {
                die($e->getMessage());
            }
        }

        public function editContact($data)
        {
            try {
                $strWhere = 'id = '. $data['id'];
                $table = 'contactos';
                $this->pdo->update($table, $data, $strWhere);
            } catch (PDOException $e) {
                die($e->getMessage());
            }
        }
        public function deleteContact($data)
{
		try {
				$strWhere = 'id = '. $data['id'];
				$table = 'contactos';
				$this->pdo->delete($table, $strWhere);
		} catch (PDOException $e) {
				die($e->getMessage());
		}
}
    }