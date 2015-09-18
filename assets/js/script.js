
$(document).ready(function(){

    $(".mgsDelete").click(function(){
        if (!confirm("Do you want to delete?")){
            return false;
        }
    });

    $(".alertPending").click(function(e){
        alert("Unable to view Pending post.");
        e.preventDefault();
    });

});


// image previwe before upload
function readURL(input) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();

        reader.onload = function (e) {
            $('#blah').attr('src', e.target.result);
        }

        reader.readAsDataURL(input.files[0]);
    }
}

$("#imgInp").change(function(){
    readURL(this);
});

// ERT
$(document).ready( function() {
    $("#txtEditor").Editor();
    $("#txtEditor").Editor('setText', $("#txtEditor").text());
});

$(document).submit( function() {
    $("#txtEditor").val($('.Editor-editor').html());
});


$("#editAbout").click(function(){
    $(".about-content").slideToggle("slow");
    $('html, body').delay('200').animate({
        scrollTop: $(this).offset().top - 70
    }, 200);
});