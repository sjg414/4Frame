function classchange2(str){
    var select = document.getElementById('select');
    $("select#select option").remove();

    var select1 = new Array("-선택-", "102호", "104호", "108호");
    var select2 = new Array("-선택-", "106호", "105호", "121호");


    for(var i = 0; i < 4; i++) {
        var opt = document.createElement("option");
        if (str == 'normal') {
            opt.value = select1[i];
            opt.innerHTML = select1[i];
            select.appendChild(opt);
        }
        else {
            opt.value = select2[i];
            opt.innerHTML = select2[i];
            select.appendChild(opt);
        }
    }
}