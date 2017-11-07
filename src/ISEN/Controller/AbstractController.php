<?php
/**
 * Created by IntelliJ IDEA.
 * User: vince
 * Date: 03/10/2017
 * Time: 17:06
 */

namespace Isen\Controller ;

abstract class AbstractController
{
    public function render($template, $variables)
    {
        //expose les variables dans le tableau dans le scope local
        //prend en  paramètre un tableau est créer les variable en fonction
        // des noms des cases.
        extract($variables);

        //détermine le chemin des templates
        $directory = dirname(__FILE__) . '/../../../resources/view/';

        // appelle le template
        require $directory . $template ;
    }
}