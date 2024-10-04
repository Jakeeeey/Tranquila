<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreContactRequest;
use App\Http\Requests\UpdateContactRequest;
use Illuminate\Support\Facades\Mail;
use App\Mail\Newsletter;
class ContactController extends Controller
{ 
    //Route name: contactform
    public function index()
    {
        $cforms = Contact::all();
        return view('contacts.index',['cforms' => $cforms]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    //Route name: contactform
    public function store(Request $request)
    {
        
        $fields = $request->validate([
            'fullname' => ['required'],
            'email' => ['required'],
            'mobileno' => ['required','max:11'],
            'comment' => ['required']
        ]);
        Contact::create($fields);
        //Redirect back to contact page
        return back()->with('message', 'Your inquiry or comment was sent');
    }

    /**
     * Display the specified resource.
     */
    public function show(Contact $contact)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Contact $contact)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateContactRequest $request, Contact $contact)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Contact $contact)
    {
        //
    }
    //Route name: newsletter
    public function newsletteremail(){
        $cforms = Contact::all('email');
        Mail::to($cforms)->send(new Newsletter());
        return back()->with('message', 'Newsletter sent to all!');
    }
}
