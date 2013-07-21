<?php

class HomeController extends Controller
{

    public $defaultAction = 'index';

    public function actionIndex(){
        // renders the view file 'protected/views/site/index.php'
        // using the default layout 'protected/views/layouts/main.php'
        $this->render('index');

//        $theTime = date("D M j G:i:s T Y");
//        $this->render('main',array('time'=>$theTime));
    }

    public function actionDashboard(){
        $this->render('dashboard');
    }


	// Uncomment the following methods and override them if needed
	/*
	public function filters()
	{
		// return the filter configuration for this controller, e.g.:
		return array(
			'inlineFilterName',
			array(
				'class'=>'path.to.FilterClass',
				'propertyName'=>'propertyValue',
			),
		);
	}

	public function actions()
	{
		// return external action classes, e.g.:
		return array(
			'action1'=>'path.to.ActionClass',
			'action2'=>array(
				'class'=>'path.to.AnotherActionClass',
				'propertyName'=>'propertyValue',
			),
		);
	}
	*/
    /**
     * Declares class-based actions.
     */
//    public function actions()
//    {
//        return array(
//            // page action renders "static" pages stored under 'protected/views/site/pages'
//            // They can be accessed via: index.php?r=site/page&view=FileName
//            'page'=>array(
//                'class'=>'CViewAction',
//            ),
//        );
//    }
    public function actionError()
    {
        if($error=Yii::app()->errorHandler->error)
        {
            if(Yii::app()->request->isAjaxRequest)
                echo $error['message'];
            else
                $this->render('error', $error);
        }
    }

    /**
     * This is the default 'index' action that is invoked
     * when an action is not explicitly requested by users.
     */
}