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
    echo '<table class="table table-striped table-dark">';
    echo '<thead class="thead-dark">';
    echo '<td>WEB</td><td>Name</td>';
    echo '</thead>';
    echo '</tbody>';
    for($i=0;$i<sizeof($t);$i++){
        echo '<tr>';
        for($j=0;$j<sizeof($t[$i]);$j++){
            echo '<td>'.$t[$i][$j].'</td>';
        }
        echo '</tr>';
    }
    echo '</body>';
    echo '</table>';
}
    ?>
<!doctype html>
<html lang="en">
  <head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
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
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>
</html>
