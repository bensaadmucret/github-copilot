<?php


namespace mzb\controller;

use mzb\Forms\Form;
use mzb\Db\Connection;


use mzb\Security\Csrf;
use mzb\Db\QueryBuilder;
use mzb\Security\Session;
use mzb\Services\LoginForm;
use mzb\Validator\Validator;
use mzb\Controller\Controller;
use Symfony\Component\HttpFoundation\RedirectResponse;



class Auth extends Controller
{
    private $session;
    private $token;
    private $form;

    public function __construct()
    {
        $this->session = new Session();
        $this->token = new Csrf();
        $this->form = new Form();

    }
    public function login()
    {
        
        $form_login = new LoginForm($this->form);
        $form =  $form_login->make();
       
        $this->session->start();
 

        if($this->session->get_session('admin')){
            $redirection = new RedirectResponse('dashboard' , 302);
            return $redirection->send();
        }
       
        
        $session = $this->session;
        

        return $this->render('/admin/login', compact('form', 'session'));
       
        
    }

        /**
         * vérification des données du formulaire
         *  redirection de l'utilisateur admin
         *
         * @return void
         */
        public function checkLogin()
        {
            
          
            try {
              $db =   Connection::get()->connect(); 
            } catch (\PDOException $e) {
                echo $e->getMessage();
            }
         

           $query = new QueryBuilder();
              $q = $query->select('*')
                ->from('administrateur');
               
             
            
            $res = $db->query($q);
            $res->setFetchMode(\PDO::FETCH_ASSOC);
            $result = $res->fetch();
           
            $session = new Session();
            $session->start();

           
        




         
            
            if($result['email'] === $_POST['email'] 
            && password_verify($_POST['password'], $result['password_admin'])
            && $this->token->getTokenFromSession()=== $_POST['token']){
                $session->set_session('email', $_POST['email']);
                $session->set_session('admin', 'admin');
              
                $redirection = new RedirectResponse('dashboard', 302);
                return $redirection->send();
            }else{
                $form = new Form();
                $form_login = new LoginForm($form);
                $form =  $form_login->make();
                $session = new Session();
                $session->start();
                $session->set_session('error','Votre email ou mot de passe est incorrect');
                
                return $this->render('/admin/login', compact('form', 'session'));
            }
        }
            
        

    private function isLogged()
    {
        $session = new Session();
        $session->start();
        if($session->get_session('email') != null){
            return true;
        }else{
            return false;
        }
    }


    public function dashboard()
    {
        if($this->isLogged())
        {
            return $this->render('/admin/dashboard');
        }
        else
        {
            $session = new Session();
            $session->start();
            $session->set_session('error','Vous devez vous connecter pour accéder à cette page');

            $redirection = new RedirectResponse('login' , 302);
            return $redirection->send();
        }
    }

        
           

    public function logout()
    {
        $session = new Session();
        $session->start();
        $session->destroy_session('admin');
        $session->destroy_session('email');
        $redirection = new RedirectResponse('/' , 302);
            return $redirection->send();
    }
}
