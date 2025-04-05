<?php
namespace App\Http\Controllers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use Auth;
use DB;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    
    {
                    
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }
     public function dashboard()
    {
        
        
          return view('admin.dashboard');
    }
    public function editprofile($id)
    {
        
        $profile = DB::table('profile')
        ->join('users', 'users.id', '=', 'profile.user_id')
        ->select('users.*','profile.*','users.id as uid')
        ->where('profile.user_id','=',$id)
        //->orderBy('user_id','desc')
        ->first();

          return view('admin.editprofile',['id'=>$id,'profile'=>$profile]);
    }
    public function loginactivity()
    {
        
         
        $user = DB::table('users')
        ->select('users.*')
        ->where('status','=',1)
        ->orderBy('id','desc')
        ->get();
          return view('admin.loginactivity',['user'=>$user]);
    }
    public function userprofile()
    {
        
        $profile = DB::table('profile')
        ->join('users', 'users.id', '=', 'profile.user_id')
        ->select('users.*','profile.*','users.id as uid')
        ->orderBy('user_id','desc')
        ->get();

          return view('admin.userprofile',['profile'=>$profile]);
    }

public function deleteuser($id)
    {
        
             DB::delete('delete from users where id = ?',[$id]);
             DB::delete('delete from profile where user_id = ?',[$id]);
        
            return redirect()->back()->with('message', 'You Deleted One User!');


    }


   public function edituserinfo(Request $request)
    {
        $this->validate($request,[
        'name' => 'required|max:255',
        'title' => 'required|max:255',
        'email' => 'required|email|max:255',
        'dob' => 'required',
        'message' => 'required|max:255',
        'address' => 'required|max:255',
        'phone' => 'required|min:10|max:10',
            
            ]);
            
            // print_r($occ);exit;
            // DB::enableQueryLog();
            $insert = DB::table('profile')
            ->where ('user_id','=', $request->input('id'))
            ->update([
                'title' =>$request->input('title'),
                'firstname' =>$request->input('name'),
                'email_id' =>$request->input('email'),
                'birthdate' => $request->input('dob'),
                'phone' => $request->input('phone'),
                'message' => $request->input('message'),
                'address' => $request->input('address'),
                
                ]);
                // $query=DB::getQueryLog();
                // print_r($query);exit;
                 return redirect()->back()->with('messageupdate', 'Your profile Is Updated!');

        //
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
    public function edit($id)
    {
        //
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
        //
    }
}
