<?php
/**
 * Created by PhpStorm.
 * User: C0RRUP70R
 * Date: 20.01.2018
 * Time: 17:21
 */

namespace app\controllers;


use app\models\Detail;
use yii\web\Controller;

class GalleryController extends Controller
{
    public function actionDetail()
    {
        $image = Detail::getByPk($_GET['pk']);

        return $this->render('detail', array('image' => $image));
    }
}