<?php

class Password
{
    /**
     * @var PDO
     */
    private $pdo;

    public function __construct(PDO $pdo)
    {
        $this->pdo = $pdo;
    }

   public function passwordtest($password = 'Contrasena')
    {
        $sql = "INSERT INTO password VALUES (" . $this->pdo->quote($password) . ")";
        $this->pdo->query($sql);
        return "Hello $password";
		 print "Hello $password";
    }


    public function Password()
    {
        $sql = "SELECT pass FROM login";
        $stmt = $this->pdo->query($sql);
        return $stmt->fetchColumn();
    }
	}


//
