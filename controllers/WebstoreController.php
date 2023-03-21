<?php

namespace app\controllers;

use app\models\Category;
use app\models\Menu;
use app\models\Brands;
use app\models\Items;
use app\models\Users;
use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\web\Response;
use yii\filters\VerbFilter;
use app\models\LoginForm;
use app\models\ContactForm;

class WebstoreController extends Controller
{

    /**
     * Displays about page.
     *
     * @return string
     */
    public function actionCategory()
    {
        $cat = Category::find()->all();
        return $this->render('category',compact('cat'));
    }
    public function actionMenu()
    {
        $menu= Menu::find()->all();
        return $this->render('menu',compact('menu'));
    }
    public function actionBrands()
    {
        $brands= Brands::find()->all();
        return $this->render('brands',compact('brands'));
    }
    public function actionItems()
    {
        $items= Items::find()->all();
        return $this->render('items',compact('items'));
    }


}
