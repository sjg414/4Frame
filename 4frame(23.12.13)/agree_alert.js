$(document).ready(function () {
    $("#checking").click(function () {
        if ($("#check_1").is(":checked") == false){
            alert("동의하셨습니다!");
            return;
        }
    });
});