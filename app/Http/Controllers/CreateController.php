<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Article;
class CreateController extends Controller
{ 
    //
    public function home()

    {
        $articles = Article::all();
        //print_r($articles);
        return view('home',['articles'=>$articles ]);

    }
    public function add(request $request)
    {
        $this->validate($request,[
            'title' => 'required',
            'description' => 'required'
        ]);
        $articles = new Article;
        $articles->title = $request->input('title');
        $articles->description = $request->input('description');
        $articles->save();
        
        return redirect('/')->with('info','Article Saved!!');
    }
    public function update($id)
    {   
        $articles = Article::find($id);
        //print_r($articles);
        return view('update',['articles'=>$articles ]);
    }
    public function read_Data($id)
    {   
        $articles = Article::find($id);
        //print_r($articles);
        return view('read',['articles'=>$articles ]);
    }
    public function edit(request $request,$id)
    {
        $this->validate($request,[
        'title' => 'required',
        'description' => 'required'
        ]);
        $data = array(
            'Title' => $request->input('title'),
            'Description' => $request->input('description')
        );
        Article::where('id',$id)->update($data);
        return redirect('/')->with('info','Article Updated!!');
    }
    public function Delete_Data($id)
    {
        Article::where('id',$id)->delete();
        return redirect('/')->with('info','Article Removed!!');
    }

}
