<?php

require "01connection.php";

$table = "

create table if not exists info (

id int auto_increment primary key not null ,
username nvarchar(255),
useremail nvarchar(255),
title nvarchar(255),
desc text(5000), 
DateofPost date default CURRENT_TIMESTAMP()

);
";


$res =mysqli_query($con, $table);

if ($res) {
    echo"create";
} else {

    echo"not created";
}

?>