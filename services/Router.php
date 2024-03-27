<?php

class Router 
{
    public function handleRequest(array $get) : void 
    {
        //Instanciation des controlleurs
        $ap = new PlaneController();
        $ad = new AdminController();
        
        if(isset($get['route'])) {
            if($get["route"] === "plane")
            {
                $ap->plane();
            }
            elseif($get["route"] === "research_plane")
            {
                 $ap->research_plane(); 
            }
            elseif($get["route"] === "admin-plane")
            {
                 $ad->adminplane();
            }
            elseif($get["route"] === "admin-use")
            {
                 $ad->adminuses();
            }
        }
    }
}




