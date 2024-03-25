<?php

class UsesManager extends AbstractManager
{
    public function findAll(): array
    {
        $query = $this->db->prepare('SELECT * FROM uses');
        $query->execute();
        $results = $query->fetchALL(PDO::FETCH_ASSOC).
        $uses = [];
        
        foreach($result as $item)
        {
            $uses = new Uses($item["name"]);
            $uses->setId($item["id"]);
            $uses[] = $uses;
        }
        return $uses;
    }
    
    public function findOne(int $id) : ? Uses
    {
        $query = $this->db->prepare('SELECT * FROM uses WHERE id=:id');
        
        $parameters = [
            "id" => $id
        ];
        
        $query->execute($parameters);
        $result = $query->fetch(PDO::FETCH_ASSOC);
        
        if($result)
        {
            $uses = new Uses($result["name"]);
            $uses->setId($result["id"]);
            return $uses;
            
        }
        return null;
    }
}
