<?php
/**
 * Created by PhpStorm.
 * User: antony
 * Date: 6/11/16
 * Time: 1:18 PM
 */
namespace ZList\Controllers;

class HelloController extends Controller
{
    public function __construct()
    {
        parent::__construct();
    }
    
    public function index()
    {
        echo $this->twig->render('index.twig');
    }

    public function contact()
    {
        echo $this->twig->render('contact.twig');
    }

    public function postContact()
    {
        var_dump($_POST);
    }
}