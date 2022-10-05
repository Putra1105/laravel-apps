<?php

namespace App\Http\Controllers\Post;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Post;

class EditPostController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function editPost(Request $request, $id)
    {
        return view('edit', 
        
        [
            'post' => Post::find($id)
        ]);
    }

    public function savePost(Request $request, $id)
    {
        $post = Post::find($id);
        $post->body = $request->get('body');
        $post->save();
        return redirect('/dashboard');
    }
}
