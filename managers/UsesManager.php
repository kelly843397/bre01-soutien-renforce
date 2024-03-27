<?php

class UsesManager extends AbstractManager
{
    public function findAll(): array
    {
        $query = $this->db->prepare('SELECT * FROM uses');
        $query->execute();
        $results = $query->fetchALL(PDO::FETCH_ASSOC);
        $usesListes = [];
        
        foreach($results as $item)
        {
            $uses = new Uses($item["name"]);
            $uses->setId($item["id"]);
            $usesListes[] = $uses;
        }
        return $usesListes;
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
    
    public function findByPlane(int $planeID): array
    {
        $query = $this->db->prepare('SELECT * FROM uses JOIN planes_uses ON planes_uses.use_id = uses.id WHERE planes_uses.plane_id = :plane_id');
        $parameters = [
            "plane_id" => $planeID
        ];
        $query->execute($parameters);
        $results = $query->fetchAll(PDO::FETCH_ASSOC);
        $usesListe = [];
    
        foreach ($results as $item) {
            $uses = new Uses($item["name"]);
            $uses->setId($item["id"]);
            $usesListe[] = $uses;
        }
        return $usesListe;
    }
}
