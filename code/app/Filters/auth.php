<?php namespace App\Filters;

use CodeIgniter\Filters\FilterInterface;
use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;

class Auth  implements FilterInterface
{
    public function before(RequestInterface $request, $arguments = null)
    {
        // if user not logged in
        if(! session()->get('logged_in')){
            // then redirct to login page
            return redirect()->to('/login'); 
        }
    }
   
   public function after(RequestInterface $request, ResponseInterface $response)
   {
       
   }  
   
}
