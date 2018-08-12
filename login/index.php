<?php
    //$con = mysqli_connect('localhost', 'my_user', 'password', 'db');

    class Login {
        protected $localhost = 'localhost';
        protected $user      = 'root';
        protected $pass      = '';
        protected $db        = 'oops_login';
        protected $conn;
        public $errors = array();

        function __construct() {
            $this->conn = mysqli_connect($this->localhost, $this->user, $this->pass, $this->db);
        }

        protected function checkInput($var) {
            $var = htmlspecialchars($var);
            $var = trim($var);
            $var = stripslashes($var);

            return $var;
        }

        public function insertIntoTb($username, $password) {
            $username = $this->checkInput($username);
            $password = $this->checkInput($password);

            // call for error checking
            if($this->checkErrors($username, $password))
            {
                // check if username exists - returns true if not exists
                if($this->checkUsername($username)) {
                    // message for insertion into DB
                    if($this->insertDB($username, $password)) $this->errors = ['Successfully inserted into DB'];
                }
            }
        }

        protected function checkErrors ($username, $password) {

            if(strlen($username) > 10 || strlen($username) < 4) {
                array_push($this->errors, 'Username should be between 4 and 8 characters');
                return false;
            }

            if(strlen($password) > 8 || strlen($password) < 4) {
                array_push($this->errors, 'Password should be between 4 and 8 characters');
                return false;
            }
            return true;
        }

        protected function insertDB($username, $password) {
            $query ="INSERT INTO users(username, password) VALUES('$username', '$password')";
            mysqli_query($this->conn, $query);

            if(mysqli_affected_rows($this->conn) > 0) {
                return true;
            } else {
                return false;
            }
        }

        protected function checkUsername($username) {
            $query = "SELECT username FROM users WHERE username = $username";
            mysqli_query($this->conn, $query);

            if(mysqli_affected_rows($this->conn) > 0) {
                array_push($this->errors, 'Username already exists!');
                return false;
            } else {
               return true;
            }
        }
    }
?>
