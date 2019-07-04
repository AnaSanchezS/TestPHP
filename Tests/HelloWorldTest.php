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
		$this->pdo->query("CREATE TABLE password (pass VARCHAR(50) NOT NULL)");
    }

	public function tearDown()
    {
        $this->pdo->query("DROP TABLE login");
	$this->pdo->query("DROP TABLE password");
        
    }
	
     
    public function testHelloWorld()
    {
        $helloWorld = new HelloWorld($this->pdo);

        $this->assertEquals('Hello Luis', $helloWorld->hello());
    }

    
	public function testpassword()
    {
        $password = new password($this->pdo);

        $this->assertEquals('Contrasena', $password>password());
    }

    
}

