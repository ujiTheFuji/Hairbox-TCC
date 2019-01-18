<?php

namespace Illuminate\Foundation\Auth;
use App\User;
use Illuminate\Support\Facades\Auth;
trait RedirectsUsers
{
    /**
     * Get the post register / login redirect path.
     *
     * @return string
     */

    public function userOrAdmin($redirect = null){
        $cargo = User::find(Auth::id())->cargo;
        if($cargo == 1)
            return '/admin';
        return $redirect;
    }
    public function redirectPath()
    {
        if (method_exists($this, 'redirectTo')) {
            return $this->useOrAdmin($this->redirectTo());
        }

        if(property_exists($this, 'redirectTo')){
            return $this->userOrAdmin($this->redirectTo);
        }
        else{
            return $this->userOrAdmin('/perfil');
        }    
    }
}
