<?php
declare(strict_types=1);

session_start();
require_once __DIR__ . '/app/modelos/Invitada.php';
require_once __DIR__ . '/app/controladores/AccesoController.php';

(new AccesoController(new Invitada()))->mostrar();
