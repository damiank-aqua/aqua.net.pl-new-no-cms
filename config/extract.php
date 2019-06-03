<?php

$content = $section = $module = false;

if(isset($_GET['content']))
    $content = $_GET['content'];

if(isset($_GET['section']))
    $section = $_GET['section'];

if(isset($_GET['module']))
    $module = $_GET['module'];