<?php
/**
 * Created by PhpStorm.
 * User: giacomo
 * Date: 04/11/14
 * Time: 18.09
 */

namespace Bugiardini\BlogBundle\Controller;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;


class PageController extends Controller
{

    public function indexAction()
    {
        return $this->render('BugiardiniBlogBundle:Page:index.html.twig');
    }
    public function aboutAction()
    {
        return $this->render('BugiardiniBlogBundle:Page:about.html.twig');
    }

}