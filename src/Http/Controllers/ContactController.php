<?php
namespace Thuhtet\Contact\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Thuhtet\Contact\Models\Contact;

class ContactController extends Controller
{
    public function index()
    {
        return view('contact::contact');
    }

    public function send(Request $request)
    {
        Contact::create([
            'email' => $request->get('email'),
            'desc' => $request->get('desc')
        ]);

        return redirect()->back()->with('message', 'IT WORKS!');
    }
}