<?php

require __DIR__.'/Modele/modele.php';

$todos = fetchData();
$todos = fetchDataBrowse();
$todos = fetchDatabin();
$todos = fetchDataedit();
$todos = fetchDataadd();

require __DIR__.'/Vue/entete.php';
require __DIR__.'/Vue/Muga_Diary.png';
require __DIR__.'/Vue/pied_de_page.php';
require __DIR__.'/Vue/semantic.css';
require __DIR__.'/Vue/style.css';
require __DIR__.'/Vue/vue.php';
require __DIR__.'/Vue/vue_add.php';
require __DIR__.'/Vue/vue_delete.php';
require __DIR__.'/Vue/vue_edit.php';
require __DIR__.'/Vue/vue_parcourir.php';

