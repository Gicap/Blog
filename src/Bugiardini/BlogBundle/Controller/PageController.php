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
        $values = [1 => 1,
            2 => 2,
            3 => 'fizz',
            4 => 4,
            5 => 'buzz',
            6 => 'fizz',
            7 => 7,
            8 => 8,
            9 => 'fizz',
            12 => 'fizz',
            15 => 'fizzbuzz',
            30 => 'fizzbuzz'];
        $res = "";
        foreach ($values as $value => $result) {
            if ($this->fizzBuzz($value) === $result)
            {
                $res = $res . "ok<br>";}
            else {
                $res = $res . "NO<br>";
            }
        }
        return $res;
        //return fizzBuzzTest(); //$this->render('BugiardiniBlogBundle:Page:index.html.twig');
    }

    private function fizzBuzz($f)
    {
        $r = '';
        if ($f % 3 == 0) $r = 'fizz';
        if ($f % 5 == 0) $r = $r . 'buzz';
        if (strlen($r) < 4) $r = $f;
        return $r;
    }

}