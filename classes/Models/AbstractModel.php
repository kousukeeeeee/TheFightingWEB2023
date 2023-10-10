<?php

class AbstractModel
{
    private $pdo;
    protected $table_name;

    public function __construct()
    {
        $this->pdo = $this->dbConnect();
    }

    public function findByCol($val, $colName = 'id') {
        $sth = $this->getPdo()->prepare("SELECT * FROM " . $this->table_name . " WHERE `".$colName."` = ?");
        $sth->execute([$val]);
        return $sth->fetch();
    }

    public function findAll($val) {
        $sth = $this->getPdo()->prepare("SELECT * FROM " . $this->table_name . " WHERE * ;");
        $sth->execute();
        return $sth->fetchAll();
    }

    public function save() {
        $sth = $pdo->prepare("INSERT INTO `comments` (`account_id`, `comment`) VALUE(?, ?)");
        return $sth->execute([$_SESSION['account']['id'], $_POST['comment']]);

        $sth = $pdo->prepare("INSERT INTO `accounts` (`name`, `password`, admin_flag) VALUE(?, ?, ?)");
        return $sth->execute([$name, password_hash($password, PASSWORD_BCRYPT), $isAdmin ? 1 : 0]);

        return [];
    }

    public function update() {
        // @todo
        return [];
    }

    public function delete() {
        // @todo
        return [];
    }

    protected function getPdo()
    {
        return $this->pdo;
    }

    private function dbConnect() {
        $pdo = new PDO("mysql:host=mysql;dbname=bbs", 'root', 'root');
        $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
        return $pdo;
    }
}