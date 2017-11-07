<?php
/**
 * Created by IntelliJ IDEA.
 * User: vince
 * Date: 03/10/2017
 * Time: 16:56
 */

namespace Isen\Model;

class Post
{
    protected $title;

    protected $author;

    protected $date;

    protected $content;

    /**
     * @return mixed
     */
    public function getTitle()
    {
        return $this->title;
    }


    /**
     * @return mixed
     */
    public function getAuthor()
    {
        return $this->author;
    }

}