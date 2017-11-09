<?php

require __DIR__.'/Modele/modele.php';

$todos = fetchData();

require __DIR__.'/Vue/vue.php';
