/**
 * Created by Marejean on 10/16/16.
 */


function login() {

}

function search() {
    var filter = $("#filter").val();
    var keyWord = $("#keyWord").val();

    if(keyWord.trim() != "") {
        $.ajax({
            type: "POST",
            url: "../php/search.php",
            data: {"filter": filter, "keyWord": keyWord},
            success: function(data) {
                $("#result").html(data);
                console.log(data);
            },
            error: function(data) {
                console.log("error in searching " + JSON.stringify(data));
            }
        });
    }
}