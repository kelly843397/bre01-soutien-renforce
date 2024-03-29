// si le dom de la page est bien chargé
window.addEventListener("DOMContentLoaded", function(){

    // Je récupère la modale
    const deleteModal = document.getElementById('deleteModal');

    // Je vérifie si elle existe bien
    if(deleteModal)
    {
        // si la modale apparait
        deleteModal.addEventListener("show.bs.modal", function(event){
            const deleteButton = event.relatedTarget;

            // je récupère l'url de la route pour supprimer
            const url = deleteButton.getAttribute("data-url");
            const confirmDelete = document.getElementById("deleteConfirmButton");

            // si le bouton de confirmation est cliqué
            confirmDelete.addEventListener("click", function(event){
                // j'envoie vers la route qui supprime
                window.location.href = 'index.php?route=admin-supprimer-avion';
            })

        });
    }
});