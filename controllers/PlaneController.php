<?php

class PlaneController extends AbstractController
{
    public function plane (): void
    {
        // echo "Méthode plane() de PlaneController";
        /*$UseManager = new UsesManager();
        $uses=$UseManager->findByPlane(3);
        dump($uses);*/
        
        /*$PlaneManager = new PlaneManager();
        $planes=$PlaneManager->findByUse(1);
        dump($planes);*/
        $this->render("home.html.twig", []);
    }
    
    public function researchPlane() : void
    {
        echo "Méthode research_plane() de PlaneController";
    }
    
}