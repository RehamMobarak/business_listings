<?php

namespace App\Http\Controllers;

use App\Models\Listing;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ListingsController extends Controller
{
    //**  if i wanted to make listings shown to public but modifying , creating or deleting require logging in

    // public function __construct()
    // {
    //     $this->middleware('auth', ['except' => ['index', 'show']]);
    // }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $listings = Auth::user()->listings;
        // $listings = Listing::orderBy('created_at','desc')->get();
        $listings = auth()->user()->listings()->orderBy("created_at", "desc")->get();
        return view('index')->with('listings', $listings);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required|email',
            'address' => 'required',
            'website' => 'required',
            'phone' => 'required|integer',
            'bio' => 'required',
        ]);

        $listing = new Listing();
        $listing->user_id = Auth::id();
        $listing->Name = $request->input('name');
        $listing->Email = $request->input('email');
        $listing->Address = $request->input('address');
        $listing->Website = $request->input('website');
        $listing->Phone = $request->input('phone');
        $listing->Bio = $request->input('bio');
        $listing->save();

        return redirect()->to('/dashboard')->with('success', "Listing created successfully !");
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $listing = Listing::find($id);
        return view('show')->with('listing', $listing);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $listing = Listing::find($id);
        return view('edit')->with('listing', $listing);
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
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required|email',
            'address' => 'required',
            'website' => 'required',
            'phone' => 'required|integer',
            'bio' => 'required',
        ]);

        $listing = Listing::find($id);
        $listing->Name = $request->input('name');
        $listing->Email = $request->input('email');
        $listing->Address = $request->input('address');
        $listing->Website = $request->input('website');
        $listing->Phone = $request->input('phone');
        $listing->Bio = $request->input('bio');
        $listing->save();

        return redirect()->to('/dashboard')->with('success', "Listing modified successfully !");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $listing = Listing::find($id);
        $listing->delete();
        return redirect()->to('/dashboard')->with('success', "Listing deleted successfully !");
    }
}
