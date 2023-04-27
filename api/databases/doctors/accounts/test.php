<?php
class AccountLine
{
    public $login;
    public $password;
    public $first_name;
    public $last_name;

    function __construct(string $login, string $password, string $first_name, string $last_name)
    {
        $this->login = $login;
        $this->password = $password;
        $this->first_name = $first_name;
        $this->last_name = $last_name;
    }
}

class Database
{
    function __construct(string $host, string $user, string $password, string $db_name)
    {
        $this->host = $host;
        $this->user = $user;
        $this->password = $password;
        $this->db_name = $db_name;
        $this->conn = null;

        $this->connect();
    }
    function connect()
    {
        try {
            $this->conn = new mysqli($this->host, $this->user, $this->password, $this->db_name);
            // echo "Connected";
        	// echo "<br>";
        } catch (Exception $e) {
            echo "connecting_error";
        }
    }
    function WriteLine(AccountLine $accountLine){
        $login = $accountLine->login;
        $password = $accountLine->password;
        $first_name = $accountLine->first_name;
        $last_name = $accountLine->last_name;

    	$sql = "INSERT INTO `accounts` (`id`, `login`, `password`, `first_name`, `last_name`) VALUES (NULL, '$login', '$password', '$first_name', '$last_name');";
    	try {
    		$request = mysqli_query($this->conn, $sql);
    	} catch (Exception $e) {
    		echo "Database error";
    	}
    }
}

$host = "localhost";
$user = "rostislav";
$password = "11223344";
$db_name = "doctors";

$db = new Database($host, $user, $password, $db_name);
$line = new AccountLine("11lowetwetgin22", 'passwwetwetwetord11', "firwetwetwetwetst_name", "last_wetewtwetwetname");
$db->WriteLine($line);
?>