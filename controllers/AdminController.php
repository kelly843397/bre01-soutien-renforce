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
    // ok
    public function createPlane (): void
    {
        echo "Méthode createPlane de AdminController()";
    }
    // ok
    public function checkCreatePlane (): void
    {
        echo "Méthode checkCreatePlane de AdminController()";
    }
    // ok
    public function editPlane(): void
    {
        echo "Méthode editPlane de AdminController()";
    }
    //ok
    public function checkEditPlane(): void
    {
        echo "Méthode checkEditPlane de AdminController()";
    }
    // ok
    public function deletePlane(): void
    {
        echo "Méthode deletePlane de AdminController()";
    }
    //ok
    public function checkDeletePlane(): void
    {
        echo "Méthode checkDeletePlane de AdminController()";
    }
    //ok
    public function createUses(): void
    {
        echo "Méthode createUses de AdminController()";
    }
    // ok
    public function checkCreateUses(): void
    {
        echo "Méthode checkCreateUses de AdminController()";
    }
    // ok
    public function editUses(): void
    {
        echo "Méthode editeUses de AdminController()";
    }
    // ok
    public function checkEditUses(): void
    {
        echo "Méthode checkEditUses de AdminController()";
    }
    // ok
    public function deleteUses(): void
    {
        echo "Méthode deleteUses de AdminController()";
    }
    //ok
    public function checkDeleteUses(): void
    {
        echo "Méthode checkDeleteUses de AdminController()";
    }
}