function writeBox(checkvalue) {
    var theform = document.form1;
    var quote = theform.box.value
    var quote1 = theform.input[checkvalue].value;
    var quechk = theform.input[checkvalue].checked;

    if (quechk == true) {
        theform.box.value = quote + ' ' + quote1
    } else {
        theform.box.value = quote.replace(quote1, "");
    }
}