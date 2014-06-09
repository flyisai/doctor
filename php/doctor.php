<?
$Specialty = $_POST["Specialty"];
switch($Specialty)
{
    case "Psychologist":
        $result[0] -> name = 'Jason Seaver';
        $result[0] -> hospital = '上海长征医院';
        $result[0] -> address = '上海市凤阳路415号';
        $result[0] -> id = 1;
        $result[1] -> name = 'Margaret Seaver';
        $result[1] -> hospital = '上海长征医院';
        $result[1] -> address = '上海市凤阳路415号';
        $result[1] -> id = 2;
        break;
    case "Dentist":
        $result[0] -> name = 'Margaret Seaver';
        $result[0] -> hospital = '上海交通大学医学院附属仁济医院';
        $result[0] -> address = '上海市山东中路145号(西),上海市东方路1630号(东)';
        $result[0] -> id = 2;
        break;
    case "Dermatologist":
        $result[0] -> name = 'Mike Seaver';
        $result[0] -> hospital = '上海交通大学附属瑞金医院';
        $result[0] -> address = '上海市瑞金二路197号（永嘉路口）';
        $result[0] -> id = 3;
        break;
    case "Allergy & Immunology":
        $result[0] -> name = 'Carol Seaver';
        $result[0] -> hospital = '上海交通大学附属第六人民医院';
        $result[0] -> address = '上海市宜山路600号';
        $result[0] -> id = 4;
        break;
    case "Anesthesia":
        $result[0] -> name = 'Benjamin Seaver';
        $result[0] -> hospital = '上海蓝十字医院';
        $result[0] -> address = '上海市徐汇区吴中路6号 (吴中路和中山西路交叉口)';
        $result[0] -> id = 5;
        break;
}
echo json_encode($result);
