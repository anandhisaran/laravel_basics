<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Session;
use DB;
use Hash;
use App\Model\Blog;
use App\Model\User;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Redirect;
use Mail;
use App\Mail\BlogMail;



class UserRegistration extends Controller {
   // public function postRegister(Request $request) {
   //    //Retrieve the name input field
   //    $name = $request->input('name');
   //    echo 'Name: '.$name;
   //    echo '<br>';
      
   //    //Retrieve the username input field
   //    $username = $request->input('username');
   //    echo 'Username: '.$username;
   //    echo '<br>';
      
   //    //Retrieve the password input field
   //    $password = $request->password;
   //    echo 'Password: '.$password;
   //     return view('home');
   // }

   //  public function insert(Request $request) {
   //    $name = $request->input('name');
   //    DB::insert('insert into student (name) values(?)',[$name]);
   //    echo "Record inserted successfully.<br/>";
   //    echo '<a href = "home">Click Here</a> to go back.';
   // }
public function store(Request $request) {
$inputs = Input::all();

if( $request->hasFile('myresume')){ 
        $image = $request->file('myresume'); 
         $destinationPath = 'uploads';
        $fileName = $image->getClientOriginalName();
        $image->move($destinationPath , $fileName);
    $fileExtension = $image->getClientOriginalExtension();
      //  dd($fileExtension); 
        // $fileExtension->move('uploads');
         
    }


$data = Blog::create ([
'name' => $inputs['name'],
'user' => $inputs['username'],
'password' => $inputs['password'],
'gender' => $inputs['gender'],
 'vehicle' => implode(',', (array) $request->input('vehicle')),
 'bike-company' => $inputs['company_list'],
 'resume' => $fileName
]);
Session::flash('message','Blog added Successfully');
   Session::flash('alert-class','alert-success');

   // $admin_mail = 'imagedownload2017@gmail.com';
   //      Mail::to($admin_mail)->queue(new BlogMail);


 return redirect::to('/home');
}
public function showuser(Request $request) {
$show_detail = Blog::paginate(5);
return view('home',compact('show_detail'));
// return view('profile',compact('show_detail'));
}
public function edituser(Request $request,$id) {
$edit_user= Blog::where('s_id',$id)->first();
return view('edit',compact('edit_user', 's_id'));
// return view('profile',compact('show_detail'));
}

public function updateuser(Request $request) {

}

public function showprofile(Request $request) {
$show_profile = User::all();
return view('profile',compact('show_profile'));
// return view('profile',compact('show_detail'));
}




}