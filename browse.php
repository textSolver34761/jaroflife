<?php

require __DIR__.'/Modele/modele.php';

$todosBrowse = fetchDataBrowse();

require __DIR__.'/Vue/vue_parcourir.php';