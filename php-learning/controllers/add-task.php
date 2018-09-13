<?php

$app['database']->insertInto('todos', $_POST['description']); 