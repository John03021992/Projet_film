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


var liValue = document.querySelector('.test');

console.log(liValue.textContent);



$('.test').click(function(e){

    $.ajax({
        type:'POST',
        url:'http://localhost/dossier_projet_film/Projet_film//controller/categories_controller.php',
        data: $(this).textContent,
        success:function(success){
            console.log('success');
            $('body').html(JSON.parse(success));
        }

    })    

});

