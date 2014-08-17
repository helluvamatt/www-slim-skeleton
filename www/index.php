<?php

$app = require '../bootstrap.php';

$app->get('/', function () use ($app) {
	// Application entry point
})->name('/');

$app->run();