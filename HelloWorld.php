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
        return "$what";
    }


    public function what()
    {
        $sql = "SELECT what FROM login";
        $stmt = $this->pdo->query($sql);
        return $stmt->fetchColumn();
    }
	
	function getuser($conn) {
    $sql = 'SELECT * FROM login ORDER BY name';
    foreach ($conn->query($sql) as $row) {
        print $row['user'] . "\t";
        //print $row['name'] . "\t";
      }
}
}
