<?php
## Print/Dump variable's contents and stop execution
echo "<pre/>";print_r($variable);exit;
### or ###
echo "<pre/>";print_r($variable);die;
### or ###
echo "<pre/>";var_dump($variable);die;
### or ###
echo "<pre/>";var_dump($variable);exit;
### or ###
var_export($variable);die;
### or ###
var_export($variable);exit;
