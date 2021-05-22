<?php

namespace app\controllers;

use app\services\UserService;
use yii\data\ArrayDataProvider;

class UserController extends \yii\web\Controller
{
    /**
     * @var $userService UserService
     */
    private $userService;

    public function __construct($id, $module, UserService $userService, $config = [])
    {
        $this->userService = $userService;
        parent::__construct($id, $module, $config);
    }

    public function actionIndex($id)
    {
        $data = $this->userService->getInfoById($id);
        $dataProvider = new ArrayDataProvider([
            'models' => $data['history'],
            'pagination' => false
        ]);

        return $this->render('index', ['dataProvider' => $dataProvider, 'id' => $id, 'balance' => $data["balance"]]);
    }

}
