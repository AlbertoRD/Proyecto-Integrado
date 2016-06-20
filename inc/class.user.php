<?php

require_once('dbconfig.php');

class USER {

    private $conn;

    public function __construct() {
        $database = new Database();
        $db = $database->dbConnection();
        $this->conn = $db;
    }

    
    /* public function register($uname, $umail, $upass) {
      try {
      $new_password = password_hash($upass, PASSWORD_DEFAULT);

      $stmt = $this->conn->prepare("INSERT INTO users(username,email,pass)
      VALUES(:uname, :umail, :upass)");
      $stmt->bindparam(":uname", $uname);
      $stmt->bindparam(":umail", $umail);
      $stmt->bindparam(":upass", $new_password);

      $stmt->execute();

      return $stmt;
      } catch (PDOException $e) {
      echo $e->getMessage();
      }
      } */

    public function doLogin($uname, $umail, $upass) {
        try {
            $stmt = $this->conn->prepare("SELECT id, username, email, pass FROM users WHERE username=:uname OR  email=:umail ");
            $stmt->execute(array(':uname' => $uname, ':umail' => $umail));
            $userRow = $stmt->fetch(PDO::FETCH_ASSOC);
            if ($stmt->rowCount() == 1) {
                if (password_verify($upass, $userRow['pass'])) {
                    $_SESSION['user_session'] = $userRow['username'];
                    return true;
                } else {
                    return false;
                }
            }
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    }

    public function is_loggedin() {
        if (isset($_SESSION['user_session'])) {
            return true;
        }
    }

    public function redirect($url) {
        header("Location: $url");
    }

    public function refresh() {
        header("Refresh:0");
    }

    public function doLogout() {
        unset($_SESSION['user_session']);
        session_destroy();
        return true;
    }

}

?>