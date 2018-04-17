<?php
/**
 * Created by PhpStorm.
 * User: mpthuispc
 * Date: 9-4-18
 * Time: 12:43
 */

namespace App\Http\Controllers;

use App\Users;
use Illuminate\Http\Request;

class UserController
{

    public function index(Request  $request){
        dump($request);
        return view('/users');
    }
    /**
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function insertUser(Request  $request)
    {
        $users = new Users;
        $users ->created_at = $request->get('created_at');
        $users->name = $request->get('name');
        $users->lastname= $request->get('lastname');
        $users->email= $request->get('email');
        $users->street= $request->get('street');
        $users->housenumber= $request->get('housenumber');
        $users->city= $request->get('city');
        $users->zipcode= $request->get('zipcode');
        $users->country= "Nederland";
        $users->save();
        return back()->with('success', 'Thanks for contacting us!');
    }


    public function getUserCredentials(Request $request)
    {
        //getuser cred. from db
        $users = Users::all();

        foreach ($users as $user) {
            $created_at = $user->created_at;
            $name = $user->name;
            $lastname =$user->lastname;
            $email =$user->email;
            $street= $user->street;
            $housenumber= $user->housenumber;
            $city = $user->city;
            $zipcode = $user->zipcode;
        }
        $count = $users->count();
        return view('whoareyou', compact('name', 'lastname','email','created_at', 'street','housenumber', 'city', 'zipcode' ,'count'));

    }
}
