$(function(){
    console.log("que onda");
    $('#search').keyup(function(){
        let search = $('#search').val();
        $.ajax({ //metodo de jquery, hace peticion al server
            url: 'search-note.php',
            type: 'POST',
            data: {search}, // antiguamente en js search: search
            success: function(response){
                console.log(response);
            }
        }) 
    })
});