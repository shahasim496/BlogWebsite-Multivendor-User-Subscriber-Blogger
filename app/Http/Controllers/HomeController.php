<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;
use App\Exports\UsersExport;
use Maatwebsite\Excel\Facades\Excel;
Use App\Models\User;
Use App\Models\Post;
use Illuminate\Support\Facades\Mail;
use App\Mail\passwordmail;
Use Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }


    public function export() 
    {
        return Excel::download(new UsersExport, 'users.xlsx');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
       //$posts = Post::where('user_id', auth()->user()->id)->get();

         if(Auth::user()->utype==='adm')
         {
          $posts=post::all();
           return view('admin.dashboard',compact('posts'));
         }

           if(Auth::user()->utype==='blg')
           {
               return view('blogger.dashboard');
           }

          
            if(Auth::user()->utype==='spr')
            {
                return view('subscriber.dashboard');
            }

            return view('home');
    }


    public function users()
    {
        return view ('users.index');
    }
   
    public function userdata()
    {
        $query = User::select('id', 'name', 'email');
        return datatables($query) ->addColumn('Actions', function($data) {
            return '
                <button type="button" data-id="'.$data->id.'" data-toggle="modal" data-target="#DeleteUserModal" class="btn btn-danger btn-sm" id="getDeleteId">Delete</button>';
        })
        ->rawColumns(['Actions'])
        ->make(true);
    }

    public function deleteuser($id)
    {
        $user =User::find($id);
        $user->delete();

        return response()->json([
            'success' => true,
            'msg' => 'User Deleted Created Successfully'
        ]);
    }

    public function updateuser($id)
    {
        $user = new User;
        $data = $user->findData($id);

    

    }

    public function RegisterUser(Request $request)
    {
        $hashpassword =str::random(20);
        $user = new User();
        $email= $request['email'];
       Mail::to($email)->send(new passwordmail($hashpassword));
        $user->name =$request->name;
        $user->email = $request->email;
        $user->aboutus= 'null';
        $user->utype='spr';
        $user->password=Hash::make($hashpassword);
        
        $user->save();
        return response()->json([
            'success' => true,
            'msg' => 'User Created Successfully'
        ]);

    

    }
    

}
