<?php
/**
* Data Access Object (DAO) class. Contains all DB access code.
* $dao = new Dao();
* $result = $dao->getAllRows();
*/
class Dao
    {
	    private $host ="localhost";
	    private $dbname = "webdev";
	    private $user = "admin";
	    private $password = "root";
	/**
	* Creates a new PDO connection and returns the handle.
	*/
	private function getConnection()
										{
	// Create PDO instance using MySQL connection string.
												
	$conn = new PDO("mysql:dbname={$this->dbname};host={$this->host};",
	"$this->user", "$this->password");
	// Make sure to turn on exceptions for debugging.

	$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	return $conn;
	}
	
	/**
	* Returns all rows in the test table. No user input.
	*/
	
	public function getAllRows(){
	// Get a connection to the database.
	$conn = $this->getConnection();
	// Execute the query. If we aren't accepting any user input,
	// then we can use a query instead of a prepared statement.
	return $conn->query("SELECT * FROM test");
	}

	/**
	* Returns rows with email column equal to the given email.
	* Accepts user input.
	*/
	public function getRow($email)
	{
		$conn = $this->getConnection();
	// Setup the query string. ':email' is a "named placeholder". We will
	// tie ':email' to an actual value before we execute the prepared
	// statement.
	$query = "SELECT * FROM test WHERE email = :email";
	// Create the prepared statement (returns a PDOStatement object).
	$stmt = $conn->prepare($query);
	// Bind the $email parameter passed into the method to the ':email'
	// placeholder of the query.
	$stmt->bindParam(':email', $email);
	// Finally, execute the statement.
	$stmt->execute();
	// And return the result (an array of rows).
	return $stmt->fetchAll();
	}

	public function addRow($email)
	{
		$conn = $this->getConnection();
		// Setup the insert string. ':email' is a "named placeholder". We will
		// tie ':email' to an actual value before we execute the prepared
		// statement.
		$query = "INSERT INTO test (email) VALUES (:email)";
		// Create the prepared statement (returns a PDOStatement object).
		$stmt = $conn->prepare($query);
		// Bind the $email parameter passed into the method to the ':email'
		// placeholder of the query.
		$stmt->bindParam(':email', $email);
		// Finally, execute the statement.
		$stmt->execute();
		}
    }
?>
