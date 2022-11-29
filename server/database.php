<?php

class Database {
    // log in details
    private $servername = "cs3-dev.ict.ru.ac.za";   
    private $username = "G20N8123";
    private $password = "G20N8123";
    private $dbname = "g20n8123";
    
    public $conn; // perform database queries
    
    // used in all .php files to
    // check for databse connection errors
    // and update DOM with javascript.
    public $status;

    function __construct() {
        // Create connection
        $this->conn = new mysqli($this->servername, $this->username, 
                                $this->password, $this->dbname);
        
        // Check connection
        if (mysqli_connect_error()) {
            $this->status = "Database Connection failed";
            die(" Database Connection failed: ". mysqli_connect_error());
        } else { 
           // echo "<h1>Connection successful</h1>";
           $this->status .= "Successfully Connected to Database!<br>";
        }
    }

    function __destruct() {
        $this->conn->close();
        $this->status = "";
    }

    /*** Acess modifiers: Setters and Getters ***/
    public function setStatus($message) {
        $this->status = $message;
    } // set Status

    /***  database insert data method(s) ***/
    public function insertRecord($sql) {

        if ( $this->conn->query($sql) === TRUE ) {
            $this->setStatus("New Record added successfully!");
        } else $this->function_alert("Error" + $sql + "<br>" + $this->conn->error);
    }

    /*** database retrieve data method(s) ***/
    public function userValid($name, $passwordCheck) {
       
        $name = trim($name); // clear spaces 

        // get user info
        $table = "Users";
        $query = "SELECT * FROM Users 
                  WHERE username = '{$name}'";
        $row = $this->conn->query($query);

        // if the $result is not False, 
        // and contains at least one row
        $username = $hash_password = "";
        if ($row !== false) {
            if ($row->num_rows > 0) {
                // user exists
                $query = $this->conn->query("SELECT * FROM Users 
                        WHERE username = '{$name}'");
                $row = mysqli_fetch_array($query);
                $username = $row['username']; 
                
                $query = $this->conn->query("SELECT * FROM Users 
                        WHERE username = '{$name}'");
                $row = mysqli_fetch_array($query);
                $hash_password = $row['password'];
            }
            else { 
                // user does not exist
                $this->status .= "Error: User not found in {$table} table <br>";
                return false;
            }
        }
        else echo 'Unable to check the result, error - '. $this->conn->error;

        // check if all user details are correct
        if ($username != "" && $hash_password != "") {
            // 
            if(password_verify($passwordCheck, $hash_password)) {
                return true;
            }
        }
        return false;
    }


    private function createTable($table, $query_str) {
        // perform the query and store the result
        $sql = "SHOW TABLES LIKE '{$table}'";
        $result = $this->conn->query($sql);
    
        // if the $result is not False, 
        // and contains at least one row
        if ($result !== false) {
            if ($result->num_rows > 0) {
                // table exists
                $this->status .= "Error: {$table} table already exists<br>";
            }
            else { 
                // table does not exit, create it  
                $sql = $query_str; 
                $result = $this->conn->query($sql);
                $this->checkTableStatus($result, $table);
            }
        }
        else echo 'Unable to check the table, error - '. $this->conn->error;
    } // createTable


    private function checkTableStatus($result, $table) {

        if ($result) {
            $this->status .= "{$table} table created successfully<br>";
            // echo "Table created successfully";
        } else {
                $this->status = "Error creating {$table} table";
                // echo "Error creating table: " . $this->conn->error;
        }
    } // checkTableStatus

    public function createAllTables() {
        // Create Users table
        $table = "Users";
        $query_str = "CREATE TABLE {$table} (
            user_id int NOT NULL UNIQUE AUTO_INCREMENT,
            firstname varchar(50) NOT NULL,
            lastname varchar(50) NOT NULL,
            username varchar(100) NOT NULL UNIQUE,
            password TEXT NOT NULL,
            email varchar(255) UNIQUE,
            gender ENUM('F','M', 'Other') NOT NULL, 
            role varchar(25) DEFAULT 'standard',
            PRIMARY KEY (user_id)
        );";
        $this->createTable($table, $query_str);

        // Create Comments table
        $table = "Comments";
        $query_str = "CREATE TABLE {$table} (
            comment_id int NOT NULL UNIQUE AUTO_INCREMENT,
            comment TEXT, 
            user_id int,
            PRIMARY KEY (comment_id),
            FOREIGN KEY (user_id) REFERENCES Users(user_id)
        );";
        $this->createTable($table, $query_str);

        // Create Prize table
        $table = "Prize";
        $query_str = "CREATE TABLE {$table} (
            prize_id int NOT NULL UNIQUE AUTO_INCREMENT,
            firstname varchar(50) NOT NULL,
            lastname varchar(50) NOT NULL,
            phone int,
            PRIMARY KEY (prize_id)
        );";
        $this->createTable($table, $query_str);

        // Create Contact table
        $table = "Contact";
        $query_str = "CREATE TABLE {$table} (
            ticket_id int NOT NULL UNIQUE AUTO_INCREMENT,
            firstname varchar(50) NOT NULL,
            lastname varchar(50) NOT NULL,
            email varchar(255),
            subject varchar(255),
            message  TEXT,
            PRIMARY KEY (ticket_id)
        );";
        $this->createTable($table, $query_str);

    } // createAllTables

    function function_alert($message) {
        // Display the alert box 
        echo "<script>alert('$message');</script>";
    }
}

?>