<?php
$url_array = array(
    array("http://stu.rbru.ac.th/~s6014421001","Kritsada Man"),
    array("http://stu.rbru.ac.th/~s6014421005","Sopita Joom"),
    array("http://stu.rbru.ac.th/~s6014421006","Amon M"),
    array("http://stu.rbru.ac.th/~s6014421007","Nantawat Nice"),
);
function creat_link($u,$t){
    return "<a href=\"$u\">$t</a>";
}
function creat_table($t){
    echo '<table border="2">';
    for($i=0;$i<sizeof($t);$i++){
        echo '<tr>';
        for($j=0;$j<sizeof($t[$i]);$j++){
            echo '<td>'.$t[$i][$j].'</td>';
        }
        echo '</tr>';
    }
    echo '</table>';
}
    ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>6014421001-W04</title>
</head>
<body>
    <?php
        $url = "http://stu.rbru.ac.th/~s6014421001";
        $txt = "Click Here";
        echo "<a href=\"$url\">$txt</a>";
    ?>
    <?php
        echo creat_link($url,$txt);
        echo $url_array[0][0]. " ". $url_array[0][1];
    ?>
    <ol>
    <?php
        for($i=0;$i<sizeof($url_array);$i++){
    ?>
        <li><?php echo creat_link($url_array[$i][0],$url_array[$i][1]); ?></li>
    <?php
        }
        creat_table($url_array);
    ?>
    </ol>
</body>
</html>
