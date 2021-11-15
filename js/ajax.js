$(document).ready(function() {
    $(document).on("click", "#return_list", function() {
        $.get("/controller/c_listProd.php", { cat: 'all' }, function(response) {
            $("#outer").html(response); 
        });
    });
});

$(document).ready(function() {
    $(document).on("change", "#categoria_filter", function() {
        $.get("/controller/c_listProd.php", { cat: $("#categoria_filter").val() }, function(response) {
            $("#outer").html(response); 
        });
    });

    $(document).on("click", ".goto_detall", function() {
        $.get("/controller/c_detallProd.php", { prod: this.title }, function(response) {
            $("#outer").html(response); 
        });
    });
});