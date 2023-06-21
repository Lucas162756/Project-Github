<?php

class DBleden
{
    private $dataSource = "mysql:dbname=groenlinks_leden;host=localhost;";
    private $userName = "root";
    private $password = "";

    public function SelecteerLid(){
        $pdo = new PDO($this->dataSource, $this->userName, $this->password);
        $statement = $pdo->prepare("SELECT * FROM lid");
        $statement->execute();
        return $statement->fetchAll(PDO::FETCH_ASSOC);
    }
    public function MaakLid(string $Naam, string $Functie){
        $pdo = new PDO($this->dataSource, $this->userName, $this->password);
        $statement = $pdo->prepare("INSERT INTO lid(Naam,Functie) VALUES(:Naam, :Functie)");
        // $statement->bindParam("ID", $ID, PDO::PARAM_INT);
        $statement->bindParam("Naam", $Naam, PDO::PARAM_STR);
        $statement->bindParam("Functie", $Functie, PDO::PARAM_STR);
        $statement->execute();
    }
    public function VerwijderLid(int $ID){
        try{
            $pdo = new PDO($this->dataSource, $this->userName, $this->password);
            $statement = $pdo->prepare("DELETE FROM lid WHERE ID = :ID");
            $statement->bindParam("ID", $ID, PDO::PARAM_STR);
            $statement->execute();
        }
        catch(PDOException $e){
        }
    }

}