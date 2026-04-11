<?php

namespace App\Http\Controllers;

use App\Models\PageManagement;
use App\Models\Subscription;
use Illuminate\Http\Request;

use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    public function newsletter(Request $request)
    {
        if($request->isMethod('GET'))
        {
            return redirect('/');
        }else{
            $request->validate([
                'email' => 'required|email|unique:subscriptions,email|email:rfc,dns',
            ], [
                'email.unique' => 'Already Subscribed'
            ]);
            
            $newsletter = new Subscription();
            $newsletter->email = $request->email;
            $newsletter->page_url = $request->page_url;
            $newsletter->save();
            return response()->json(['status' => 200]);
        }
    }

    public function sitemap()
    {
        $pages=PageManagement::all();
        return response()->view('web.layouts.sitemap', [
            'pages' => $pages,
        ])->header('Content-Type', 'text/xml');
    }
}
