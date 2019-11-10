/**
 * Created by kozika on 05/07/2017.
 */

$(document).ready(function() {
    $(document).ready(function() {
        var $container = $('div#backbundle_equipe_joueurs');

        var nbJoueurParEquipe = 2;
        var nb = $container.find(':input').length;
        var index = nb;
        for(var i=0; i<nbJoueurParEquipe-nb; i++){
            addCategory($container);
        }


        function addCategory($container) {
            var $prototype = $($container.attr('data-prototype').replace(/__name__label__/g, 'Joueur n°' + (index+1))
                .replace(/__name__/g, index));

            if(index == 0){
                $prototype.css('margin-bottom', '30px');
            }
            $prototype.find('label:first').css('display','none');

            $container.append($prototype);
            index++;

        }

        function addDeleteLink($prototype) {
            $deleteLink = $('<a href="#" class="btn red supprimg"><i class="material-icons right">delete</i>Supprimer le joueur</a>');

            $prototype.append($deleteLink);

            $deleteLink.click(function(e) {
                $prototype.remove();
                e.preventDefault();
                return false;
            });
        }
    });
});