<?php
/**
 * Created by PhpStorm.
 * User: yinpeng
 * Date: 2019-11-06
 * Time: 16:50
 */
header('Content-Type:text/json;charset=utf-8');

$data = @$_REQUEST;

echo json_encode($data);
