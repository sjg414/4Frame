function re_reser() {
    if(confirm("다시 예약하시겠습니까?") == true){
        window.location.reload(true);
    }
    else{
        return false;
    }
}
