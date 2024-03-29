<?php

class AdminController extends AbstractController
{
    public function adminplane (): void
    {
        //echo "Méthode admin_plane() de AdminController()";
        //Instanciation de PlaneManager
        $planeManager = new PlaneManager();
        // Appel de la méthode findAll de PlaneManager
        $planes = $planeManager->findAll();
        //dump($planes);
        
        // Méthode render pour transmettre les données à Twig
        $this->render("admin/admin-planes.html.twig", ["planes" => $planes]);
    }
    
    public function adminuses (): void
    {    //Instanciation de UsesManager
         $usesManager= new UsesManager();
         // Appel de la méthode findAll de UsesManager
         $uses = $usesManager->findAll();
         
         // Méthode render pour transmettre les données à Twig
        $this->render("admin/admin-uses.html.twig", ["uses" => $uses]);
    }
       
        
    // 
    public function researchPlane (): void
    {
        echo "Méthode research_plane() de AdminController()";
    }
    
    public function createPlane(): void
    {
        //echo "Méthode createPlane de AdminController()";
        $this->render("admin/create-plane.html.twig", []);
        // vérification des données du formulaire
       
    }

    // ok
    public function checkCreatePlane (): void
    {
        echo "Méthode checkCreatePlane de AdminController()";
        
         if(isset($_POST["name"]) && isset($_POST["start_year"]) & isset($_POST["end_year"]) & isset($_POST["picture_url"]))
        {
            // Récup des données du form
            $name = $_POST["name"];
            $start_year = $_POST["start_year"];
            $end_year = $_POST["end_year"];
            $picture_url = $_POST["picture_url"];
            
            // Instanciation de planeManager
            $planeManager = new PlaneManager();
            
            // Instanciation de Plane avec les données du form
            $plane = new Plane($name, $start_year, $end_year, $picture_url);
            
            // Appel de la méthode create de PlaneManger en lui passant l'instance de Plane
            $createdPlane = $planeManager->create($plane);
        }
    }
    // ok
    public function editPlane(): void
    {
        //echo "Méthode editPlane de AdminController()";
        $this->render("admin/edit-plane.html.twig", []);
        
    }
    //ok
    public function checkEditPlane(): void
    {
        echo "Méthode checkEditPlane de AdminController()";
    }
    // ok
    public function deletePlane(int $planeId): void
    {
       // echo "Méthode deletePlane de AdminController()";
       /*$this->render("admin/delete-plane.html.twig", []);
       
       // Instanciation de planeManager
       $planeManager = new PlaneManager();
       // appel de la méthode de sup de PlaneManager
       $planeManager->delete($planeID);*/
       

        // Instanciation de PlaneManager
        $planeManager = new PlaneManager();
        // Appel de la méthode de suppression dans PlaneManager
        $planeManager->delete($planeId);
        
    }
    
    public function checkDeletePlane(): void
    {
        echo "Méthode checkDeletePlane de AdminController()";
    }
    //ok
    public function createUses(): void
    {
        // echo "Méthode createUses de AdminController()";
        $this->render("admin/create-uses.html.twig", []);
        
    }
    // ok
    public function checkCreateUses(): void
    {
        echo "Méthode checkCreateUses de AdminController()";
        
        // vérification des données du formulaire
        if(isset($_POST["name"]))
        {
            // Récup des données du form
            $name = $_POST["name"];
            
            // Instanciation de UsesManager
            $usesManager = new UsesManager();
            
            // Instanciation de Uses avec les données du form
            $uses = new Uses($name);
            
            // Appel de la méthode create de UsesManger en lui passant l'instance de Uses
            $createdUses = $usesManager->create($uses);
        }
    }
    // ok
    public function editUses(): void
    {
        //echo "Méthode editeUses de AdminController()";
        $this->render("admin/edit-uses.html.twig", []);
    }
    // ok
    public function checkEditUses(): void
    {
        echo "Méthode checkEditUses de AdminController()";
    }
    // ok
    public function deleteUses(int $usesId): void
    {
        //echo "Méthode deleteUses de AdminController()";
        /* $this->render("admin/delete-uses.html.twig", []);*/
        
        // Instanciation de usesManager
        $usesManager = new UsesManager();
       // appel de la méthode de sup de UsesManager
       $usesManager->delete($usesId);
    }
    //ok
    public function checkDeleteUses(): void
    {
        echo "Méthode checkDeleteUses de AdminController()";
    }
    
}

