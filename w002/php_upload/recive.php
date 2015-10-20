<?php

if(!empty($_POST)){
   //$_FILES  二维数组
	$fileName = iconv("utf-8", "gbk", $_FILES['wj']['name']);
    echo (move_uploaded_file( $_FILES['wj']['tmp_name'], "../save/".$fileName ))?"OK":"failed";

}