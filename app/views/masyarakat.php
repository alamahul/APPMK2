<?php

if (!isset($_SESSION['nik'])) {
    header('Location:'. BASEURL .'/Blank');
}