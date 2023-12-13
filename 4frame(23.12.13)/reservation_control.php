<meta http-equiv="Content-Type" content="text/html; charset=utf8" />
<?php
    $TableName = $_POST['Tablename'];
    $exp_TN = explode('_', $TableName);
    $Day = $exp_TN;

    include('DB_CONNET.php');

    $sql = "insert into infor(name, room, day) values('$TableName', $Day[2], $Day[0])";
    $result = $connect->query($sql);

    $rseult_exist = $connect-> query("show tables like '$TableName'");
    $row_exist = mysqli_fetch_array($rseult_exist);

    if($row_exist==true){
        echo "테이블 존재";
        header('Location: test_reservation2.php');
    }
    else{
        $sql = "create table " . $TableName . "(";
        $sql .= "time INT(5) primary key,";
        $sql .= "kinds varchar(15) default Null";
        $sql .= ")";
        $result = $connect->query($sql);

        if($result){
            echo "테이블 생성 완료";
        }
        else{
            echo "테이블 생성 실패";
        }

        if($Day[2] == '104'){
            if($Day[1]=='mon'){
                $sql = "insert into " . $TableName . "(time, kinds)";
                $sql .= "values ((1,'class'), (2,'class'), (3,'class'), (5,'class'), (6,'class'), (7,'class'))";
            }
            else if($Day[1]=='tue'){
                $sql = "insert into " . $TableName . "(time, kinds)";
                $sql .= "values (1,'class'), (2,'class'), (3,'class'), (6,'class'), (7,'class'), (8,'class'), (9,'class')";
            }
            else if($Day[1]=='wed'){
                $sql = "insert into " . $TableName . "(time, kinds)";
                $sql .= "values (1,'class'), (2,'class'), (3,'class'), (6,'class'), (7,'class'), (8,'class'), (9,'class')";
            }
            else if($Day[1]=='thu'){
                $sql = "insert into " . $TableName . "(time, kinds)";
                $sql .= "values (1,'class'), (2,'class'), (3,'class')";
            }
            else {
                $sql = "insert into " . $TableName . "(time, kinds)";
                $sql .= "values (1,'class'), (2,'class'), (5,'class'), (6,'class')";
            }
        }
        else if($Day[2] == '105'){
            if($Day[1]=='mon'){
                $sql = "insert into " . $TableName . "(time, kinds)";
                $sql .= "values (6,'class'), (7,'class'), (8,'class')";
            }
            else if($Day[1]=='tue'){
                $sql = "insert into " . $TableName . "(time, kinds)";
                $sql .= "values (6,'class'), (7,'class')";
            }
            else if($Day[1]=='wed'){
                $sql = "insert into " . $TableName . "(time, kinds)";
                $sql .= "values (3,'class'), (4,'class')";
            }
            else {

            }
        }
        else if($Day[2] == '106'){
            if($Day[1]=='mon'){
                $sql = "insert into " . $TableName . "(time, kinds)";
                $sql .= "values (3,'class'), (4,'class'), (6,'class'), (7,'class'),";
            }
            else if($Day[1]=='tue'){
                $sql = "insert into " . $TableName . "(time, kinds)";
                $sql .= "values (6,'class'), (7,'class'), (8,'class'), (9,'class')";
            }
            else if($Day[1]=='wed'){
                $sql = "insert into " . $TableName . "(time, kinds)";
                $sql .= "values (1,'class'), (2,'class'), (6,'class'), (7,'class')";
            }
            else if($Day[1]=='thu'){
                $sql = "insert into " . $TableName . "(time, kinds)";
                $sql .= "values (5,'class'), (6,'class'), (7,'class'), (8,'class')";
            }
            else {

            }
        }
        else if($Day[2] == '121'){
            if($Day[1]=='mon'){
                $sql = "insert into " . $TableName . "(time, kinds)";
                $sql .= "values (5,'class'), (6,'class'), (7,'class'), (8,'class'),";
            }
            else if($Day[1]=='tue'){
                $sql = "insert into " . $TableName . "(time, kinds)";
                $sql .= "values (6,'class'), (7,'class'), (8,'class'), (9,'class')";
            }
            else if($Day[1]=='thu'){
                $sql = "insert into " . $TableName . "(time, kinds)";
                $sql .= "values (1,'class'), (2,'class'), (3,'class')";
            }
            else {

            }
        }
        $result = $connect->query($sql);
        if($result){
            echo "내용 삽입 완료";
            header('Location: test_reservation2.php');
        }
        else{
            echo "내용 삽입 실패";
        }
    }
    mysqli_close($connect);//DB종료
?>
