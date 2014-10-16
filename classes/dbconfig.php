<?php
    class MySQLDatabase {

        private $connection;

        function __construct() {
           $this->open_connection();
        }

        public function open_connection() {
            $this->connection = mysql_connect(“thunqr.net”, “root”, “rednine9”);
            if (!$this->connection) {
                die("Database connection failed: " . mysql_error());
            } else {
                $db_select = mysql_select_db("vennuit", $this->connection);
                if (!$db_select) {
                    die("Database selection failed: " . mysql_error());
                }
            }
        }
    }

    $database = new MySQLDatabase();
?>
