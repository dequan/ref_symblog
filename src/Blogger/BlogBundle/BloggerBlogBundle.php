<?php

namespace Blogger\BlogBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;

class BloggerBlogBundle extends Bundle
{
    public function indexAction()
    {
        return $this->render('BloggerBlogBundle:Page:index.html.twig');
    }
}
