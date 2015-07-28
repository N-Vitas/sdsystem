<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Main extends Controller_Common {
 
    public function action_index()
    { 
		
		$this->template->positionleft = false;
        // Передаем данные в шаблон по умолчанию - main.php
        $this->template->content = View::factory('main');
    }
    public function action_staff()
    { 
    	$item = ORM::factory('item')->find_all();
		try{
			foreach($item as $val)
			{	
				$data[] = array(
					"id" => $val->id,
					"name" => $val->name,
					"birthday" => $val->birthday,
					"contact" => $val->contact,
					"state" => $val->state,
					"scool" => $val->scool,
					"job" => $val->job,
					"invalid" => $val->invalid,
					"diagnos" => $val->diagnos,
					"ipr" => $val->ipr,
					"advanset" => $val->advanset,
					"myjob" => $val->myjob,
				);
			}
			@$content = ["data" => $data];
			echo json_encode($content);die;			
		}catch(Exeption $e){
			echo json_encode(["data" => false]);die;
		}
    }
    public function action_create()
    { 
		$model = ORM::factory('item');
		$post = Validation::factory($_POST['data'][0]);
		$post->rule('name'    ,'not_empty')
			 ->rule('birthday','not_empty')
			 ->rule('contact' ,'not_empty')
			 ->rule('state'   ,'not_empty')
			 ->rule('scool'   ,'not_empty')
			 ->rule('job'     ,'not_empty')
			 ->rule('invalid' ,'not_empty')
			 ->rule('diagnos' ,'not_empty')
			 ->rule('ipr'     ,'not_empty')
			 ->rule('advanset','not_empty')
			 ->rule('myjob'   ,'not_empty')
			 ->rule('name','Model_Item::unique_name')
			 ->rule('birthday','date')
			 ->rule('contact' ,'phone')
			 ->rule('invalid' ,'numeric');
		if($post -> check()){
			$model->name	 = $post['name'];	
			$model->birthday = $post['birthday'];		
			$model->contact	 = $post['contact'];	
			$model->state	 = $post['state'];	
			$model->scool	 = $post['scool'];	
			$model->job		 = $post['job'];
			$model->invalid	 = $post['invalid'];	
			$model->diagnos	 = $post['diagnos'];	
			$model->ipr		 = $post['ipr'];
			$model->advanset = $post['advanset'];		
			$model->myjob	 = $post['myjob'];
			if($model->save())
			{
				echo json_encode(["result"=>true]);
			}	
			else{
				echo json_encode(["result"=>false,"errors"=>$model->errors()]);
			}			
		}	
		else{
			echo json_encode(["result"=>false,"errors"=>$post->errors('models')]);
		}
        die;
    }

    public function action_update()
    { 
		$post = Validation::factory($_POST['data'][0]);
		$post->rule('name'    ,'not_empty')
			 ->rule('birthday','not_empty')
			 ->rule('contact' ,'not_empty')
			 ->rule('state'   ,'not_empty')
			 ->rule('scool'   ,'not_empty')
			 ->rule('job'     ,'not_empty')
			 ->rule('invalid' ,'not_empty')
			 ->rule('diagnos' ,'not_empty')
			 ->rule('ipr'     ,'not_empty')
			 ->rule('advanset','not_empty')
			 ->rule('myjob'   ,'not_empty')
			 ->rule('birthday','date')
			 ->rule('contact' ,'phone')
			 ->rule('invalid' ,'numeric');
		$model = ORM::factory('item')->where("id","=",$post['id'])->find();
		if($post -> check()){
			$model->name	 = $post['name'];	
			$model->birthday = $post['birthday'];		
			$model->contact	 = $post['contact'];	
			$model->state	 = $post['state'];	
			$model->scool	 = $post['scool'];	
			$model->job		 = $post['job'];
			$model->invalid	 = $post['invalid'];	
			$model->diagnos	 = $post['diagnos'];	
			$model->ipr		 = $post['ipr'];
			$model->advanset = $post['advanset'];		
			$model->myjob	 = $post['myjob'];
			if($model->save())
			{
				echo json_encode(["result"=>true]);
			}	
			else{
				echo json_encode(["result"=>false,"errors"=>$model->errors()]);
			}			
		}	
		else{
			echo json_encode(["result"=>false,"errors"=>$post->errors()]);
		}
        die;
    }    
    public function action_delete()
    { 
    	$post = Validation::factory($_POST['data'][0]);
		if(ORM::factory('item',$post['id'])->delete())
		{
			echo json_encode(["result"=>true]);
		}	
		else{
			echo json_encode(["result"=>false]);
		}
        die;
    }

    // Регистрация пользователей 
    public function action_register()
    {
        $this->template->positionleft = false;
    // Если есть данные, присланные методом POST    
    if ($_POST)
        {
        // Создаем переменную, отвечающую за связь с моделью данных User 
        $model = ORM::factory('user');
        // Вносим в эту переменную значения, переданные из POST 
        $model->values(array(
           'username' => $_POST['username'],
           'email' => $_POST['email'],
           'password' => $_POST['password'],
           'password_confirm' => $_POST['password_confirm'],
        ));
        try
        {
            // Пытаемся сохранить пользователя (то есть, добавить в базу) 
            //$model->save();
            // Назначаем ему роли 
            $model->add('roles', ORM::factory('role')->where('name', '=', 'login')->find());
            // И отправляем его на страницу пользователя 
                $this->redirect('main');
        }
        catch (ORM_Validation_Exception $e)
        {
            // Это если возникли какие-то ошибки 
            echo $e;
        }
        }
        // Загрузка формы логина 
        $this->template->content = View::factory('register');
    }
 
    // Просмотр пользовательских данных 
    public function action_view()
    {
    // Проверям, залогинен ли пользователь     
    if(Auth::instance()->logged_in())
            {
            // Если да, то здороваемся и предлагаем выйти. Это можно было и в виде view реализовать 
            echo 'Добро пожаловать, '.Auth::instance()->get_user()->username.'!';
            echo '<br /><a href=\'logout\'>logout</a>';
            }
    else
        {
            // А если он не залогинен, отправляем логиниться 
            return $this->request->redirect('member/login');
        }
 
    }
 
    // Метод разлогивания 
    public function action_logout()
    {
    // Пытаемся разлогиниться 
    if (Auth::instance()->logout())
        {
            // Если получается, то предлагаем снова залогиниться 
            return $this->request->redirect('member/login');
        }
    else
        {
            // А иначе - пишем что не удалось 
            echo 'fail logout';
        }
    }
 
    // Метод логина 
    public function action_login()
    {
        // Проверям, вдруг пользователь уже зашел 
        if(Auth::instance()->logged_in())
            {
            // И если это так, то отправляем его сразу на страницу пользователей 
            return $this->request->redirect('main');
            }
 
        // Если же пользователь не зашел, но данные на страницу пришли, то: 
        if ($_POST)
        {
            // Создаем переменную, отвечающую за связь с моделью данных User 
            $user = ORM::factory('myuser');
            // в $status помещаем результат функции login 
            $status = Auth::instance()->login($_POST['login'], $_POST['password']);
            // Если логин успешен, то 
            if ($status)
            {
                // Отправляем пользователя на его страницу 
                $this->request->redirect('main');
            }
            else
            {
                // Иначе ничего не получилось, пишем failed 
                echo 'failed';
            }
        }
        // Загрузка формы логина 
        $this->template->content = View::factory('login');
    } 
 
} // End Main

