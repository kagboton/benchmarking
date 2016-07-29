$(document).ready(function() {

    // On récupère la balise <div> qui contient l'attribut « data-prototype » qui nous intéresse. Celui en dessous du label Fonctions quand on inspecte la page ../vehicule/add
    var $container = $('div#vehicule_fonctions');

    // On définit un compteur unique pour nommer les champs qu'on va ajouter dynamiquement
    var index = $container.find(':input').length;

    // On ajoute un nouveau champ à chaque clic sur le lien d'ajout.
    $('#add_fonction').click(function(e) {

        addFonction($container);
        e.preventDefault(); // évite qu'un # apparaisse dans l'URL
        return false;

    });

    // On ajoute un premier champ automatiquement s'il n'en existe pas déjà un (cas d'une nouvelle fonction par exemple).
    if (index == 0) {
        addFonction($container);

    } else {
        // S'il existe déjà des fonctions, on ajoute un lien de suppression pour chacune d'entre elles
        $container.children('div').each(function() {
            addDeleteLink($(this));
        });
    }

    // La fonction qui ajoute un formulaire FonctionType
    function addFonction($container) {

        // Dans le contenu de l'attribut « data-prototype », on remplace :
        // - le texte "__name__label__" qu'il contient par le label du champ
        // - le texte "__name__" qu'il contient par le numéro du champ
        var template = $container.attr('data-prototype')

                .replace(/__name__label__/g, 'Fonction n°' + (index+1))

                .replace(/__name__/g,        index)
            ;

        // On crée un objet jquery qui contient ce template
        var $prototype = $(template);

        // On ajoute au prototype un lien pour pouvoir supprimer la fonction
        addDeleteLink($prototype);

        // On ajoute le prototype modifié à la fin de la balise <div>
        $container.append($prototype);

        // Enfin, on incrémente le compteur pour que le prochain ajout se fasse avec un autre numéro
        index++;
    }


    // La fonction qui ajoute un lien de suppression d'une fonction

    function addDeleteLink($prototype) {
        // Création du lien
        var $deleteLink = $('<a href="#" class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span> Supprimer</a>');

        // Ajout du lien
        $prototype.append($deleteLink);

        // Ajout du listener sur le clic du lien pour effectivement supprimer la fonction

        $deleteLink.click(function(e) {
            $prototype.remove();

            e.preventDefault(); // évite qu'un # apparaisse dans l'URL
            return false;

        });

    }

});