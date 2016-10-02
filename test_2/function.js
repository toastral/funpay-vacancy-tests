function magic_function(url){
    $('#myModal').modal('show');
    $(".modal-body").empty();
    $.ajax({
            url: url,
            cache: false
        })
        .done(function( html ) {
            $(".modal-body").append( html );
        }).fail(function(jqxhr, status, errorMsg) {
            $(".modal-body").append( '<h1>'+ errorMsg + '</h1>' );
    });
}