<?php

namespace app\controllers;

//use components\web\Controller;

class SiteController
{
    public function actionIndex()
    {
        echo 'Index!';
        //(new \components\routing\Router)->redirect("site/about");
    }

    public function actionAbout()
    {
    	echo "About";
    }

    public function actionTest(){
        echo "Test";
    }
    public function actionError(){
        
    }
    //TODO: сделай абстрактный класс контроллер с методом render()
}