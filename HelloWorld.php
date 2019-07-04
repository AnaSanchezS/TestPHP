<?php

class HelloWorld
{
    /**
     * @var PDO
     */
    private $pdo;

    public function __construct(PDO $pdo)
    {
        $this->pdo = $pdo;
    }

    public function hello($what = 'Luis')
    {
        $sql = "INSERT INTO login VALUES (" . $this->pdo->quote($what) . ")";
        $this->pdo->query($sql);
        return "Hello $what";
		 print "Hello $what";
    }


    public function what()
    {
        $sql = "SELECT what FROM login";
        $stmt = $this->pdo->query($sql);
        return $stmt->fetchColumn();
    }
	//Password
	
	
    public function passwordtest($password = 'Contrasena')
    {
        $sql = "INSERT INTO password VALUES (" . $this->pdo->quote($password) . ")";
        $this->pdo->query($sql);
        return "Hello $password";
		 print "Hello $password";
    }


    public function password()
    {
        $sql = "SELECT pass FROM login";
        $stmt = $this->pdo->query($sql);
        return $stmt->fetchColumn();
    }
	}
