function test2(){
    // 날짜 및 요일 구하기
    var week = new Array('Sun', 'Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat')
    var select_date = $( "#datepicker" ).datepicker("getDate");
    var select_month = "0"+(select_date.getMonth()+1); //달
    var select_Date = select_date.getDate(); //일
    var select_day = select_date.getDay(); //요일

    //강의실 호수 구하기
    var select_room = document.getElementById('select').value;
    select_room = select_room.replace(/[^0-9]/g,"");

    var Tablename = select_month + select_Date + "_" + week[select_day]  + "_" +select_room + "_Time";
    document.getElementsByName('Tablename')[0].value = Tablename;
}

function test() {
    var time = document.getElementsByName('timebtn');
    for(var i=0; i<time.length; i++) {
        if(time[i].checked) {
            document.getElementsByName('testid')[0].value = time[i].value;
        }
    }

}

// $(document).ready(function() {
//     var i = 1;
//
//     for(i=1;i<5;i++){
//         document.getElementById(i).style.backgroundColor='red';
//     }
//
// });
//
// function test(){
//     for(var i = 0; i <5; i++){
//         document.getElementById(i).style.backgroundColor='red';
//     }
//
// }
