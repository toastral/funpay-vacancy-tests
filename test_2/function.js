function magic_function(url){
    $('#myModal').modal('show');
    $.ajax({
            url: url,
            cache: false,
        })
        .done(function( html ) {
            $(".modal-body").html( html );
        }).fail(function(jqxhr, status, errorMsg) {
            $(".modal-body").html( '<h1>'+ errorMsg + '</h1>' );
    });
}