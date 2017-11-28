<?php

require '../Source/Models/ActiveCampaign.php';

use Source\Models\ActiveCampaign AS Active;

$active = new Active;

$active->getByEmail("robsonvleite@gmail.com");
var_dump($active->getCallback());

$active->addActive("Nome", "Sobrenome", "nome@email.com.br", [1, 3, 4], "Mentor, Work Control, UpInside Play");
var_dump($active->getCallback());
