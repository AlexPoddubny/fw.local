<?php

namespace App\Controllers;

use App\Models\Author;
use App\Models\NewsArticle;
use T4\Mvc\Controller;

class Index
    extends Controller
{

    public function actionDefault()
    {
    	$this->data->article = NewsArticle::findByPK(1);
    }

}