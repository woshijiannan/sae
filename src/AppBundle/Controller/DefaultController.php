<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class DefaultController extends Controller
{
    /**
     * @Route("/", name="homepage")
     */
    public function indexAction(Request $request)
    {
        // replace this example code with whatever you need
        /*return $this->render('default/index.html.twig', [
            'base_dir' => realpath($this->getParameter('kernel.root_dir').'/..'),
        ]);*/
        return $this->render('homepage/index.html.twig');
    }
    /**
     * @Route("/redandblue", name="redandblue")
     */
    public function redandblue(){
        /*
        $session = $this->getRequest()->getSession();
        $session->set($sessionName, $sessionValue );
        $username = $session->get($sessionName);


        if (isset($session['red'])&&isset($session['blue'])){
            $red = $session->get($session['red']);
            $blue = $session->get($session['blue']);
        }else{
            $result = $this->get('redandblue')->redandblue;
            $red = $result['red'];
            $blue = $result['blue'];
        }

        $message1 = "本次模拟的幸运号码是：";
        $message2 = "红球：".$red;
        $message3 = "蓝球：".$blue;
        return $this->render('lotterypage/redandblue.html.twig',array('message1'=>$message1,'message2'=>$message2,'message3'=>$message3));*/
        if (!isset($_SESSION['red'])&&!isset($_SESSION['BLUE'])){
            $numbers=array(1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24,25,26,27,28,29,30,31,32,33);
            shuffle($numbers);
            $numbers = array_slice($numbers,0,6);
            sort($numbers);
            $red = join(",",$numbers);
            $blue = mt_rand(1,16);
            $_SESSION['red'] = $red;
            $_SESSION['blue'] = $blue;
        }
        $message1 = "本次模拟的幸运号码是：";
        $message2 = "红球：".$_SESSION['red'];
        $message3 = "蓝球：".$_SESSION['blue'];
        return $this->render('lotterypage/redandblue.html.twig',array('message1'=>$message1,'message2'=>$message2,'message3'=>$message3));
    }
    /**
     * @Route("/bigfun", name="bigfun")
     */
    public function bigfun(){
        if (!isset($_SESSION["bigfun_front"])&&!isset($_SESSION["bigfun_follow"])) {
            $frontnumbers = array(1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24, 25, 26, 27, 28, 29, 30, 31, 32, 33, 34, 35);
            shuffle($frontnumbers);
            $frontnumbers = array_slice($frontnumbers, 0, 5);
            sort($frontnumbers);
            $front = join(",", $frontnumbers);

            $follownumbers = array(1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12);
            shuffle($follownumbers);
            $follownumbers = array_slice($follownumbers, 0, 2);
            sort($follownumbers);
            $follow = join(",", $follownumbers);
            $_SESSION["bigfun_front"] = $front;
            $_SESSION["bigfun_follow"] = $follow;
        }
        $message1 =  "本次模拟的幸运号码是：";
        $message2 =  "前区：".$_SESSION["bigfun_front"];
        $message3 =  "后区：".$_SESSION["bigfun_follow"];
        return $this->render('lotterypage/bigfun.html.twig',array('message1'=>$message1,'message2'=>$message2,'message3'=>$message3));
    }
}
