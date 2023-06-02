<?php
if(isset($_GET['page'])){
    $page = $_GET['page'];
}
?>
<?php
if(isset($page)){
    switch ($page){
           case '1':
            include '1/file_1.php';
            break;
            case '2':
            include '2/file_2.php';
            break;
            case '3':
            include '3/file_3.php';
            break;
    }
}
?>
<a href="index.php?page=1">satu</a>
<a href="index.php?page=2">dua</a>
<a href="index.php?page=3">tiga</a>
