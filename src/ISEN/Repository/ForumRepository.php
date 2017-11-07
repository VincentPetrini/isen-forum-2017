<?php
/**
 * Created by IntelliJ IDEA.
 * User: vince
 * Date: 03/10/2017
 * Time: 16:58
 */

namespace Isen\Repository;

class ForumRepository
{
    private static $file = 'data/forums.dat';

    public function getAll()
    {
        //test si le fichier existe déjà
        if(file_exists(static::$file) === false){
            //si ce n'est pas, il n'y a pas de forum
            return [];
        }

        // sinon, charge le fichier
        $content = file_get_contents(static::$file);

        //et le retourne désérialisé
        return unserialize($content);
    }

    public function saveAll($forums)
    {
        //crée le répertoire si ce n'est pas déjà fait
        mkdir(dirname(static::$file), 0777, true);

        //et stocks les données sérialisées
        file_put_contents(static::$file, serialize($forums));
    }

    public function add($forum)
    {
        //récupère tous les forums
        $forums = $this->getAll();

        //ajoute le nouveau
        $forums[] = $forum;

        //et sauvegarde le tout
        $this->saveAll($forums);
    }
}