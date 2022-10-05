<?php

namespace App\Http\Controllers\Post;

use App\Http\Controllers\Controller;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class StorePostController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function storePost(Request $request)
    {

        $request->validate([
            'body' => ['required', 'min:8']
        ]);

        if(Auth::check()){
            $post = Post::create([
                'body' => $request->body,
                'user_id' => Auth::user()->id
            ]);

            return back();
        }
        
        return redirect()->back()->with('success', 'Post Created Successfully');

      
    }
}
