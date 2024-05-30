<?php

namespace app\controllers;

use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\web\Request;
use app\models\Admins;
use app\models\VisitorsData;
use yii\web\Response;
use yii\filters\VerbFilter;
use app\models\Rooms;
use app\models\RoomsForm;

class SiteController extends Controller
{
    /**
     * {@inheritdoc}
     */
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::class,
                'only' => ['logout'],
                'rules' => [
                    [
                        'actions' => ['logout'],
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                ],
            ],
            'verbs' => [
                'class' => VerbFilter::class,
                'actions' => [
                    'logout' => ['post'],
                ],
            ],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function actions()
    {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
            'captcha' => [
                'class' => 'yii\captcha\CaptchaAction',
                'fixedVerifyCode' => YII_ENV_TEST ? 'testme' : null,
            ],
        ];
    }

    /**
     * Displays homepage.
     *
     * @return string
     */
    public function actionIndex()
    {
        return $this->render('index');
    }




    /**
     * Displays about page.
     *
     * @return string
     */
    public function actionRoomslisting()
    {
        $rooms = Rooms::find()->all(); // Retrieve all rooms from the database
        return $this->render('roomslisting', ['rooms' => $rooms]);
    }
    

  /* public function actionUser()
    {
        $model= new UserForm;

        if($model->load(Yii::$app->request->post()) && $model->validated())
        {
            Yii::$app->session->setFlash('success','YOUR INFORMATION HAS BEEN SUBMITED.');
        }
            return $this->render('userForm',['model'=>$model]);
        
    }*/

    public function actionVisitorsform()
    {
        $model = new \app\models\VisitorsData();
    
        if ($model->load(Yii::$app->request->post())) {
            if ($model->validate()) {
                $model->save();

                Yii::$app->session->setFlash('success', 'information saved successfully.');
                
            }
        }
    
        return $this->render('visitorsform', [
            'model' => $model,
        ]);

    }
    public function actionLogin()
    {
        $model = new Admins();
        
        if (Yii::$app->request->isPost) {
            $username = Yii::$app->request->post('Admins')['username'];
            $password = Yii::$app->request->post('Admins')['password'];
            
            $admin = Admins::findByUsername($username);
            
            if ($admin !== null && $admin->validatePassword($password)) {
                // Authentication successful, set up session
                Yii::$app->user->login($admin);
                return $this->redirect(['/site/afterlog']);
            } else {
                // Authentication failed, display error message
                Yii::$app->session->setFlash('error', 'Invalid username or password.');
            }
        }
        
        return $this->render('adminloginform', ['model' => $model]);
    }
    
    public function actionLogout()
{
    Yii::$app->user->logout();

    return $this->redirect(['login']);
}


public function actionAfterlog()
{
    // Check if the user is logged in and is an admin
    if (!Yii::$app->user->isGuest){ 
        // Fetch visitors data
        $visitorsData = VisitorsData::find()->all(); // Assuming `VisitorsData` is your ActiveRecord model
        // Render the afterlog.php view
        return $this->render('afterlog', [
            'visitorsData' => $visitorsData,
        ]);
    } else {
        // If the user is not logged in or is not an admin, redirect to the login page
        return $this->redirect(['login']);
    }
}


    public function actionUpdateRooms()
{
    // Check if the user is logged in and is an admin
    if (!Yii::$app->user->isGuest ) {
        $model = new RoomsForm();

        if ($model->load(Yii::$app->request->post()) && $model->validate()) {
            // Save the updated room data
            $model->updateRooms();

            Yii::$app->session->setFlash('success', 'Rooms updated successfully.');
            return $this->redirect(['site/roomslisting']);
        }

        return $this->render('update_rooms', ['model' => $model]);
    } else {
        // If the user is not logged in or is not an admin, redirect to the login page or show an error message
        Yii::$app->session->setFlash('error', 'You do not have permission to access this page.');
        return $this->redirect(['login']);
    }
}

}





