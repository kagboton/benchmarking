
$(document).ready(function() {

    // On récupère la balise <div> qui contient l'attribut « data-prototype » qui nous intéresse. Celui en dessous du label Composants affichage quand on inspecte la page ../vehicule/add
    var $container = $('div#vehicule_composantsAffichage');

    // On définit un compteur unique pour nommer les champs qu'on va ajouter dynamiquement
    var index = $container.find(':input').length;

    // On ajoute un nouveau champ à chaque clic sur le lien d'ajout.
    $('#add_composantAffichage').click(function(e) {

        addComposantAffichage($container);
        e.preventDefault(); // évite qu'un # apparaisse dans l'URL
        return false;

    });

    // On ajoute un premier champ automatiquement s'il n'en existe pas déjà un (cas d'un nouveau composant par exemple).
    if (index == 0) {
        addComposantAffichage($container);

    } else {
        // S'il existe déjà des fonctions, on ajoute un lien de suppression pour chacune d'entre elles
        $container.children('div').each(function() {
            addDeleteLink($(this));
        });
    }

    // La fonction qui ajoute un formulaire ComposantAffichageType
    function addComposantAffichage($container) {

        // Dans le contenu de l'attribut « data-prototype », on remplace :
        // - le texte "__name__label__" qu'il contient par le label du champ
        // - le texte "__name__" qu'il contient par le numéro du champ
        var template = $container.attr('data-prototype')

                .replace(/__name__label__/g, 'Composant d\'affichage n°' + (index+1))

                .replace(/__name__/g,        index)
            ;

        // On crée un objet jquery qui contient ce template
        var $prototype = $(template);

        // On ajoute au prototype un lien pour pouvoir supprimer le composant
        addDeleteLink($prototype);

        // On ajoute le prototype modifié à la fin de la balise <div>
        $container.append($prototype);

        // Enfin, on incrémente le compteur pour que le prochain ajout se fasse avec un autre numéro
        index++;
    }


    // La fonction qui ajoute un lien de suppression d'un composant

    function addDeleteLink($prototype) {
        // Création du lien
        var $deleteLink = $('<a href="#" class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span> Supprimer</a>');

        // Ajout du lien
        $prototype.append($deleteLink);

        // Ajout du listener sur le clic du lien pour effectivement supprimer le composant

        $deleteLink.click(function(e) {
            $prototype.remove();

            e.preventDefault(); // évite qu'un # apparaisse dans l'URL
            return false;

        });

    }

});


