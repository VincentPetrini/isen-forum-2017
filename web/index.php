<?php
/**
 * Created by IntelliJ IDEA.
 * User: vince
 * Date: 03/10/2017
 * Time: 17:38
 */


//chargement de l'autoloader de composer
require_once 'vendor/autoload.php';

use Isen\Controller\ForumController;

(new ForumController())->handle();