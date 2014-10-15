<?php defined('SYSPATH') OR die('No direct access allowed.');
class HTTP_Exception_404 extends Kohana_HTTP_Exception_404
{
 
    /**
     * Generate a Response for the 404 Exception.
     *
     * The user should be shown a nice 404 page.
     * 
     * @return Response
     */
    public function get_response()
    {
        
        I18n::init(array('error'));
        
        $view = View::factory('web/error/404');
 
        // Remembering that `$this` is an instance of HTTP_Exception_404
        

        $view->message = $this->getMessage();
 
        $response = Response::factory()
            ->status(404)
            ->body($view->render());

          I18n::add();
        
        return $response;
    
       
    }
}