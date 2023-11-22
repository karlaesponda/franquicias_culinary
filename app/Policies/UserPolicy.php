<?php

namespace App\Policies;

use App\Models\{
    User,
    Subscription
};
use Carbon\Carbon;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Auth;


class UserPolicy
{

    public function viewAll(User $user)
    {
        
        $subs = Subscription::where('user_id', $user->id)->orderBy('id','desc')->first();
        if(!empty($subs)){
            
            $fechaActual = now();
            return Carbon::parse($fechaActual) < $subs->ends_at;
        }
        return Auth::user()->permissionRoles->first()->role_id==1 || false;
    }

    public function createSubs(User $user){

        return Auth::user()->permissionRoles->first()->role_id==2 && !$this->viewAll($user);
    }

}
