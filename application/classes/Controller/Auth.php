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
    public function not_password($validation){
      var_dump($validation);die;
      /*if ($validation)
      {
          $validation->error($field, 'the_rule');
      }*/
    }
    public function action_hashpass(){

    $this->template->positionleft = false;
	   //Создание обьекта авторизации
	   $auth = Auth::instance();
     $data = array();
     if($auth->logged_in()){
        if($_POST){
          $post = Validation::factory($_POST);
          $post->rule('password_old','not_empty')
               ->rule('password_old','Model_Myuser::not_password')
               ->rule('password_new','not_empty')
               ->rule('password_confirm','not_empty')
               ->rule('password_confirm','matches', array(':validation', 'password_new', ':field'));
          if($post->check()){
            $model = ORM::factory('myuser')->where("id","=",$auth->get_user()->id)->find();
            $model->password = $auth->hash_password($post['password_new']);
            $model->save();
            $this->redirect('main');
          }
          else{
            $data = $post->errors("chanepass");
          }          
        }
        $view = View::factory('chanepass');
        $view->data = $data;
        // $this->template->content = View::factory($view);
        $this->template->content = $view;              
      }else{
        $this->redirect('auth');
      }
    }   
    public function action_logout(){
	   //Создание обьекта авторизации
	   $auth = Auth::instance();
       $auth->logout();
       $this->redirect();        
    }
}