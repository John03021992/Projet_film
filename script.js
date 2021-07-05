// Ajax pour la barre de recherche

$('form').bind('submit',function(e){
    e.preventDefault();
    $.ajax({
        type:'POST',
        url:'http://localhost/dossier_projet_film/Projet_film//controller/searchBar_controller.php',
        data:$(this).serialize(),
        success:function(success){
            console.log('success');
            $('body').html(JSON.parse(success));

        }
    })
});

// Ajax pour les boutons "genres"

$('.test').click(function(e){
     e.preventDefault();
    var val = $(this).val();

    $.ajax({
        type:'POST',
        url:'http://localhost/dossier_projet_film/Projet_film//controller/categories_controller.php',
        data: { 
            value: val 
            },
        success:function(success){
            console.log('success');
            $('body').html(JSON.parse(success));
        }

    })    

});



