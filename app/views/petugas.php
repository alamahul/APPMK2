<?php

if (!isset($_SESSION['level'])) {
    if ($_SESSION['level'] == 'petugas') {
    header('Location:'. BASEURL .'/blank');
    }else{
    header('Location:'. BASEURL .'/blank');
    }
}