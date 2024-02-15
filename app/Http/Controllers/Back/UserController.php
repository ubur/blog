<?php

namespace App\Http\Controllers\Back;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Requests\UserRequest;
use App\Http\Controllers\Controller;
use App\Http\Requests\UserUpdatedRequest;

class UserController extends Controller
{
    public function index(){
       if (auth()->user()->role == 1) {
            $users = User::get();
       } else {
            $users =User::whereId(auth()->user()->id)->get();
       }
       return view('Back.User.index',[
        'users' => $users
    ]);
       
    }

    public function store(UserRequest $request){
        $data = $request->validated();

        //hashing password

        $data['password'] = bcrypt($data['password']);
        User::create($data);

        return back()->with('success','User has been Created');
    }


    public function update(UserUpdatedRequest $request, $id){
        $data = $request->validated();

        //hashing password
        if($data['password'] != ''){
            $data['password'] = bcrypt($data['password']);
            User::find($id)->update($data);
        }else{
            User::find($id)->update([
                'name' => $request->name,
                'email' => $request->email,
            ]);
        }

        

        return back()->with('success','User has been Updated');
    }

    public function destroy(string $id){
        User::find($id)->delete();
        
        return back()->with('success','User has been Deleted');
    }
}
