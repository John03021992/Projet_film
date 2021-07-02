$('form').bind('submit',function(e){
    e.preventDefault();
    $.ajax({
        type:'POST',
        url:'searchBar_controller.php',
        data:$(this).serialize(),
        success:function(success){
            console.log('success');
            $('body').html(JSON.parse(success));

        }
    })
})