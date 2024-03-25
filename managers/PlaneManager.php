<?php

class PlaneManager extends AbstractManager
{
    public function findAll(): array
    {
        $query = $this->db->prepare('SELECT * FROM planes');
        $query->execute();
        $results = $query->fetchALL(PDO::FETCH_ASSOC).
        $planes = [];
        
        foreach($result as $item)
        {
            $plane = new Plane($item["name"], $item["start_year"], $item["end_year"], $item["picture_url"]);
            $plane->setId($item["id"]);
            $plane[] = $plane;
        }
        return $planes;
    }
    
    public function findOne(int $id) : ? Plane
    {
        $query = $this->db->prepare('SELECT * FROM planes WHERE id=:id');
        
        $parameters = [
            "id" => $id
        ];
        
        $query->execute($parameters);
        $result = $query->fetch(PDO::FETCH_ASSOC);
        
        if($result)
        {
            $plane = new Plane($result["name"], $result["start_year"], $result["end_year"], $result["pictures_url"]);
            $plane->setId($result["id"]);
            return $product;
            
        }
        return null;
    }
}
