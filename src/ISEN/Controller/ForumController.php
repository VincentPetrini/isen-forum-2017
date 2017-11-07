<?php

namespace Isen\Controller;

use Isen\Repository\ForumRepository;
use Isen\Model\Forum;

class ForumController extends AbstractController
{
    public function handle()
    {
        switch ($_SERVER['REQUEST_URI']){
            case '/':
                $this->indexAction();
                break;
            case '/forum/add':
                $this->addAction();
                break;
            default:
                die('Not Found');
        }
    }

    public function indexAction()
    {
        $repository = new ForumRepository();

        $this->render('index.php', array(
            'title' => 'Hello World',
            'forums' =>$repository->getAll()
        ));
    }

    public function addAction()
    {
        //récupère le nom du nouveau forum
        $forumName = $_POST['title'];

        //créee le nouveau forum
        $forum = new Forum();
        $forum->setTitle($forumName);

        //ajoute le forum
        $repository = new ForumRepository();
        $repository->add($forum);

        //redirige vers la page d'accueil
        header('Location: /');
    }
}
