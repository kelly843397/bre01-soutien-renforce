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
    }

    // ok
    public function checkCreatePlane (): void
    {
        echo "Méthode checkCreatePlane de AdminController()";
        
        if(isset($_POST["name"]) && isset($_POST["start_year"]) && isset($_POST["end_year"]) && isset($_POST["picture_url"]))
        {
            $champ1 = $_POST["name"];
            $champ2 = $_POST["start_year"];
            $champ3 = $_POST["end_year"];
            $champ4 = $_POST["picture_url"];
            $plane = new Plane($champ1, $champ2, $champ3, $champ4);
            dump($plane);
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
    public function deletePlane(): void
    {
       // echo "Méthode deletePlane de AdminController()";
       $this->render("admin/delete-plane.html.twig", []);
    }
    //ok
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
        
        if(isset($_POST["name"]))
        {
            $champ1 = $_POST["name"];
            $uses = new Uses($champ1);
            dump($uses);
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
    public function deleteUses(): void
    {
        //echo "Méthode deleteUses de AdminController()";
         $this->render("admin/delete-uses.html.twig", []);
    }
    //ok
    public function checkDeleteUses(): void
    {
        echo "Méthode checkDeleteUses de AdminController()";
    }
}