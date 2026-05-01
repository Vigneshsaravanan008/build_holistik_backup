<?php

namespace App\Http\Controllers;

use App\Models\Contactus;
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

    public function storeContact(Request $request)
    {
        $request->validate([
            'first_name' => 'required',
            'last_name' => 'required',
            'email' => 'required|email',
            'company' => 'required',
            'team_size' => 'required',
            'interest' => 'required',
        ]);

        // Combine first and last name for name field
        $name = $request->first_name . ' ' . $request->last_name;
        
        // Create message from form fields
        $message = "Company: " . $request->company . "\n";
        $message .= "Team Size: " . $request->team_size . "\n";
        $message .= "Interest: " . $request->interest . "\n";
        if($request->message) {
            $message .= "\nMessage: " . $request->message;
        }

        Contactus::create([
            'name' => $name,
            'email' => $request->email,
            'phone_number' => $request->phone_number ?? 'N/A',
            'message' => $message,
        ]);

        return response()->json(['status' => 200, 'message' => 'Form submitted successfully!']);
    }
}
