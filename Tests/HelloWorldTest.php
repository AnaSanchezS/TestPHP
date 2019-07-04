<?php

class HelloWorldTest extends PHPUnit_Framework_TestCase
{
    /**
     * @var PDO
     */
    private $pdo;

    public function setUp()
    {
        $this->pdo = new PDO($GLOBALS['db_dsn'], $GLOBALS['db_username'], $GLOBALS['db_password']);
        $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $this->pdo->query("CREATE TABLE login (user VARCHAR(50) NOT NULL)");
    }

	function getuser($conn) {
    $sql = 'SELECT * FROM login ORDER BY name';
    foreach ($conn->query($sql) as $row) {
        print $row['user'] . "\t";
        //print $row['name'] . "\t";
      }
}
    
}

