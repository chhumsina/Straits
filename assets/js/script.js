
$(document).ready(function(){

    $(".mgsDelete").click(function(){
        if (!confirm("Do you want to delete?")){
            return false;
        }
    });

});
