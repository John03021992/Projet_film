console.log('toto');

document.querySelectorAll('.categories').forEach(button => {
    button.addEventListener('click', function(e){
        e.preventDefault();
        console.log('toto');
        var val = $(this).val();
        
        $.ajax({
        type:'POST',
        url:'http://localhost/Projet_film/controllers/categories_controller.php',
        data: {
        value: val
        },
        success:function(success){
            $('body').load("http://localhost/Projet_film/views/categories_view.php");
        // $('body').html(JSON.parse(success));
        }
        
        })
    })
    
});

//*Ajax Search BAR *//
$('form').bind('submit',function(e){
    e.preventDefault();
    $.ajax({
    type:'POST',
    url:'http://localhost/Projet_film/controllers/search_controller.php',
    data:$(this).serialize(),
    success:function(success){
    $('body').html(JSON.parse(success));
    }
})
});
