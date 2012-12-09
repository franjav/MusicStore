<?php

/**
 * login actions.
 *
 * @package    MusicStore
 * @subpackage login
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class loginActions extends sfActions
{
    /**
     * Executes index action
     * 
     * @param sfRequest $request A request object
     */
    public function executeLogin(sfWebRequest $request)
    {
        $this->form = new LoginForm();
        
        if($request->isMethod("post")){
            
            $this->form->bind($request->getParameter("loginx"));
            
            if($this->form->isValid()){
                if(!$usuario = LoginTable::login($this->form->getValue("login"), $this->form->getValue("contraseña"))){
                // No hemos conseguido loguear al usuario
                // Redirigimos de nuevo al login con un mensaje de error
                $this->getUser()->setFlash("error", "Login o contraseña incorrectos. Intente nuevamente.");
                $this->redirect("login/login");
                
            }else{
                // Logueamos
                $this->getUser()->setAuthenticated(true);
                $this->getUser()->setAttribute("login",$usuario->login);
                
                // Comprobamos si tiene referer, si no, le llevamos a la homepage
                $url = $this->getUser()->getAttribute("referer",false)?:"usuarios/index";
                $this->getUser()->setAttribute("referer", false);
                $this->redirect($url);
                
                
             }//else
          }//if
        }//if
    }
    
    public function executeRegistro(sfWebRequest $request)
    {
        
        $this->redirectIf($this->getUser()->isAuthenticated(),"usuarios/index"); //Si el usuario esta autenticado redirige al home page
        
        $this->form = new RegistroForm();
        
        
        if($request->isMethod("post")){ 
            $this->form->bind($request->getParameter("registro"));
            
            if($this->form->isValid()){
                $usuario = new Usuarios();
                
                $usuario->login = $this->form->getValue("login");
                $usuario->correo = $this->form->getValue("correo");
                $usuario->contrasena = md5($this->form->getValue("contraseña"));
                $usuario->sexo = $this->form->getValue("genero");   // podriamos utilizar otro sistema para encriptar la contraseña
                
                $usuario->save();
                                

                $url = $this->getUser()->getAttribute("referer",false)?:"login/login";
                $this->getUser()->setAttribute("referer",false);
                $this->redirect($url);
             }
        }
    }//executeRegistro 
  
}