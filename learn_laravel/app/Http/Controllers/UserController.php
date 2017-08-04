<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Illuminate\Support\Facades\Mail;
class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $users = DB::table('users')->get();
       return view('user',array('users'=>$users));
    }

    
    public function testMail(){
      $sent = Mail::send('base.verify', array('confirmation_code' => 'value'), function($message)
      {
         $message->from('anilgupta.itech@gmail.com.com');
         $message->to('anilgupta@i-techsoftware.com', 'John Smith')->subject('Welcome!');
      });

      if( ! $sent) dd("something wrong");
      dd("send");
    }

 
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
//        echo public_path('photo');
//        $data = $request->all();
//        $file = $request->file('image');
//        $image_name = time().$request->image->extension();
//        $file->image->move(public_path('photo'),$image_name);
//echo public_path('photo');exit();
//        $hobby = implode(',', $data['hobby']);
//        $insert_data = array('username'=>$data['username'],'password'=>$data['password'],'hobby'=>$hobby,'gender'=>$data['gender'],'technology'=>$data['technology'],'image'=>$data['image']);
//        DB::table('user')->insert($insert_data);
//        print_r($request->all());

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }




    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id,Request $request)
    {
        $user = DB::table('users')->where('id',$id)->first();
        if($request->method() == 'POST'){
           
             $input = $request->all();
              unset($input['_token']);
              $input['hobby'] = implode(',', $input['hobby']);
           // print_r($input);exit();
                DB::table('users')
                  ->where('id', $id)
                  ->update($input);
                return redirect()->route('user_list');
        }
       
        
        return view('auth/register',array('user'=>$user));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::table('users')->where(array('id'=>$id))->delete();
       echo 1;
    }
}
