<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Comment;
use App\Models\category;
Use Auth;
Use DB;
Use PDF;

class PostsController extends Controller
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

    public function generatePDF()
    {
        $data = [
            'title' => 'This is test downlaod',
            'date' => date('m/d/Y')
        ];
          
        $pdf = PDF::loadView('myPDF', $data);
    
        return $pdf->download('mypdf.pdf');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if(Auth::user()->utype==='adm')
        {
        $posts = Post::all();
        return view ('posts.manage',compact('posts'));
        }
        if(Auth::user()->utype==='blg')
        {
        $posts = Post::where('user_id', auth()->user()->id)->get();
        $categories=category::whereNotNull('category_id')->get();
        return view ('posts.manage',compact('posts','categories'));

        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories=category::whereNotNull('category_id')->get();
        // dd($categories);
        return view ('posts.create',compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        // dd( $request);
        $this->validate ($request,
        [
            'title'=>'required',
            'body'=>'required', 
            'cover_img' => 'image|nullable|max:1999',
        ]);

         // Handle File Upload
        if($request->hasFile('cover_img')){
            // Get filename with the extension
            $filenameWithExt = $request->file('cover_img')->getClientOriginalName();
            // Get just filename
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            // Get just ext
            $extension = $request->file('cover_img')->getClientOriginalExtension();
            // Filename to store
            $fileNameToStore= $filename.'_'.time().'.'.$extension;
            // Upload Image
            $path = $request->file('cover_img')->storeAs('public/cover_img', $fileNameToStore);
		
	 
		
        } else {
            $fileNameToStore = 'noimage.jpg';
        }

        //post
        $post=new post;
        $post->title=$request->input('title');
        $post->body=$request->input('body');
        $post->category_id=$request->input('category_id');
        $post->user_id=auth()->user()->id;
        $post->save();
        return redirect('/');


      
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $post=Post::where('id',$id)->first();
        $comment=Comment::where('pst_id',$id)->get();
        // dd($comment->count());

        // $posts=Comment::where('pst_id',$post->id);

        // dd($posts)

        return view('posts.show',compact('post','comment'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $post=Post::find($id);
         // Check for correct user
         if(auth()->user()->id ===$post->user_id || auth()->user()->utype==='adm'){
            
            return view('posts.edit')->with('post',$post);
        }

        return redirect('/posts')->with('error', 'Unauthorized Page');
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
        $this->validate ($request,
        [
            'title'=>'required',
            'body'=>'required', 
            'cover_img' => 'image|nullable|max:1999'
        ]);

        // Handle File Upload
        if($request->hasFile('cover_img')){
            // Get filename with the extension
            $filenameWithExt = $request->file('cover_img')->getClientOriginalName();
            // Get just filename
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            // Get just ext
            $extension = $request->file('cover_img')->getClientOriginalExtension();
            // Filename to store
            $fileNameToStore= $filename.'_'.time().'.'.$extension;
            // Upload Image
            $path = $request->file('cover_img')->storeAs('public/cover_img', $fileNameToStore);
		
	 
		
        } else {
            $fileNameToStore = 'noimage.jpg';
        }

        //post
        $post=Post::find($id);
        $post->title=$request->input('title');
        $post->body=$request->input('body');
        $post->cover_img = $fileNameToStore;
        $post->save();
        return redirect('/');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $post=Post::find($id);
        // Check for correct user
        if(auth()->user()->id ==$post->user_id or (Auth::user()->utype==='adm' ))  {
            $post->delete();
            // return redirect('/posts')->with('error', 'Unauthorized Page');
        }
        // $post->delete();
        return redirect('/posts')->with('error', 'Unauthorized Page');
        return redirect('/');
    }

    public function savePost(Request $request)
    {
        
          
        $post = new Post();
        $post->category_id =$request->category ;
        $post->user_id = Auth::user()->id;
        $post->title = $request->title;
        $post->body = $request->description;
        
        $post->save();
        return response()->json([
            'success' => true,
            'msg' => 'Post Created Successfully'
        ]);
    }

    public function search(Request $request)
    {
        $search=$request->search;
        $posts=post::where('title', 'like', '%' .$search. '%')->paginate(5);
        $categories=category::whereNotNull('category_id')->get();
        return view ('posts.manage',compact('posts','categories'));
 
    }
    
    public function action(Request $request)
    {
     if($request->ajax())
     {
      $output = '';
      $query = $request->get('query');
      if($query != '')
      {
       $data = DB::table('posts')
         ->where('title', 'like', '%'.$query.'%')->paginate(5);
         
      }
      else
      {
       $data = DB::table('posts')
        ->paginate(10);
         
      }
      $total_row = $data->count();
      if($total_row > 0)
      {
       foreach($data as $data)
       {
        $output .= '
        <tr>
         <td>'.$data->title.'</td>
         <td>
         <button type="button" data-id="'.$data->id.'"  class="btn btn-primary btn-sm" id="getEditArticleData">Edit</button>
         </td>
         <td>
         <button type="button" data-id="'.$data->id.'" data-toggle="modal" data-target="#DeleteUserModal" class="btn btn-danger btn-sm" id="getDeleteId">Delete</button>
         </td>


        </tr>
        ';
       }
      }
      else
      {
       $output = '
       <tr>
        <td align="center" colspan="5">No Data Found</td>
       </tr>
       ';
      }
      $data = array(
       'table_data'  => $output,
       
      );

      echo json_encode($data);
     

     }
    }

    public function editarticle($id)
    {
        
        $post = new post;

        $data = $post->find($id);
    

        $html = '<div class="form-group">
                    <label for="Title">Title:</label>
                    <input type="text" class="form-control" name="title" id="editTitle" value="'.$data->title.'">
                </div>
                <div class="form-group">
                    <label for="Name">Description:</label>
                    <textarea class="form-control" name="body" id="editbody">'.$data->body.'                        
                    </textarea>
                </div>';

                return response()->json([
                    
                    'html' => $html
                ]);

        // return response()->json(['html'=>$html]);
    }

    public function savearticle(Request $request, $id)
    {
    
        
        $this->validate ($request,
        [
            'title'=>'required',
            'body'=>'required', 
            
        ]);

      
        $post=Post::find($id);

       
        $post->title=$request->input('title');
        $post->body=$request->input('body');
        $post->category_id='1';
        $post->user_id=auth()->user()->id;
        $post->save();

        return response()->json([
            'success' => true,
            'msg' => 'Post Updated Successfully'
        ]);
    }


    public function deletepost($id)
    {
        $post =Post::find($id);
        $post->delete();

        return response()->json([
            'success' => true,
            'msg' => ' Deleted Created Successfully'
        ]);
    }
}
