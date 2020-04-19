<?php

require_once 'CrudController.php';
$crud = new CrudController();
$crud->add($_POST);

header('Location: index.php');