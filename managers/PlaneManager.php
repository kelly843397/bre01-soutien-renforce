<?php

class PlaneManager extends AbstractManager
{
    public function findAll(): array
    {
        $query = $this->db->prepare('SELECT * FROM planes');
        $query->execute();
        $results = $query->fetchALL(PDO::FETCH_ASSOC);
        $planes = [];
        
        foreach($results as $item)
        {
            $plane = new Plane($item["name"], $item["start_year"], $item["end_year"], $item["picture_url"]);
            $plane->setId($item["id"]);
            $planes[] = $plane;
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
            $plane = new Plane($result["name"], $result["start_year"], $result["end_year"], $result["picture_url"]);
            $plane->setId($result["id"]);
            return $product;
            
        }
        return null;
    }
    
    public function findByUse(int $useId): array
    {
        $query = $this->db->prepare('SELECT * FROM planes JOIN planes_uses ON planes_uses.plane_id = planes.id WHERE planes_uses.use_id = :uses_id');
        $parameters = [
            "uses_id" => $useId
        ];
        
        $query->execute($parameters);
        $results = $query->fetchAll(PDO::FETCH_ASSOC);
        $planes = [];
    
        foreach ($results as $item) {
            $plane = new Plane($item["name"], $item["start_year"], $item["end_year"], $item["picture_url"]);
            $plane->setId($item["id"]);
            $planes[] = $plane;
        }
        return $planes;
    }
    
    public function create(Plane $plane): Plane
    {
        $query = $this->db->prepare('INSERT INTO planes (id, name, start_year, end_year, picture_url) VALUES (NULL, :name, :start_year, :end_year, :picture_url)');
        $parameters = [
            "name" => $plane->getName(),
            "start_year" => $plane->getStartYear(),
            "end_year" => $plane->getEndYear(),
            "picture_url" => $plane->getPictureUrl()
        ];

        $query->execute($parameters);

        $plane->setId($this->db->lastInsertId());

        return $plane;
    }
    
    public function delete(int $planeId): void
    {
        // Rqte sup
        $query = $this->db->prepare('DELETE FROM planes WHERE id =:id');
        $parameters = [
            "id" => $planeId
        ];
        $query->execute($parameters);
    }
}

 