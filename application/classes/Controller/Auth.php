<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Auth extends Controller_Common {
    
	public function action_index(){
    
    $this->template->positionleft = false;
	   //Создание обьекта авторизации
	   $auth = Auth::instance();$data = "";
       //Проверка залогинен или нет
       if($auth->logged_in()){
          $this->redirect( 'main');
            // Request::initial()->redirect('main');
       }
       else{
            //Проверка нажата ли кнопка входа
            if(isset($_POST['LOGGED_IN'])){
                //Получение логина от пользователя
                $login = Arr::get($_POST,'login','admin');
                //Получение пароля от пользователя
                $password = Arr::get($_POST,'password','admin');
                //Проверка совпадения в базе
                if($auth->login($login,$password)){
                        $session = Session::instance();
                        $auth_redirect = $session->get('AUTH_REDIRECT', 'main');
                        $session->delete('AUTH_REDIRECT');
    
                        $this->redirect('main');
                }
                else{
                    $data = "Не правильно введен логин или пароль";                    
                }
            }            
       }
        $view = View::factory('login');
        $view->data = $data;
        // $this->template->content = View::factory($view);
        $this->template->content = $view;
        // $this->response->body(View::factory($view)); 
    }    
    public function action_hashpass(){
	   //Создание обьекта авторизации
	   $auth = Auth::instance();
       $this->template->content =  $auth->hash_password('admin');        
    }   
    public function action_logout(){
	   //Создание обьекта авторизации
	   $auth = Auth::instance();
       $auth->logout();
       $this->redirect();        
    }
}