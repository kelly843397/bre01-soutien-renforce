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
        dump($planes);
        
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
       
        
    
    public function researchPlane (): void
    {
        echo "Méthode research_plane() de AdminController()";
    }
}