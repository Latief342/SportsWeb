<?php

namespace App\Http\Controllers;

use App\Models\Athlete;
use Illuminate\Http\Request;

class AthleteController extends Controller
{
    // ==========================
    // FRONTEND
    // ==========================

    public function index(Request $request)
    {
        $search = $request->search;

        $athletes = Athlete::when($search, function ($query) use ($search) {

            $query->where('name', 'like', "%{$search}%")
                  ->orWhere('sport', 'like', "%{$search}%");

        })->paginate(9);

        return view('athletes.index', compact('athletes'));
    }

    public function show(Athlete $athlete)
    {
        return view('athletes.show', compact('athlete'));
    }

    // ==========================
    // ADMIN
    // ==========================

    public function dashboard()
    {
        $athletes = Athlete::latest()->get();

        return view('admin.index', compact('athletes'));
    }

    public function create()
    {
        return view('admin.create');
    }

    public function store(Request $request)
    {

        $request->validate([

            'name'=>'required',

            'sport'=>'required',

            'earnings'=>'required',

            'description'=>'required',

            'photo'=>'required|image'

        ]);

        $image = time().'.'.$request->photo->extension();

        $request->photo->move(public_path('images'),$image);

        Athlete::create([

            'name'=>$request->name,

            'sport'=>$request->sport,

            'earnings'=>$request->earnings,

            'description'=>$request->description,

            'photo'=>$image

        ]);

        return redirect()->route('admin.index')
                ->with('success','Athlete added successfully.');

    }

    public function edit(Athlete $athlete)
    {
        return view('admin.edit',compact('athlete'));
    }

    public function update(Request $request,Athlete $athlete)
    {

        $request->validate([

            'name'=>'required',

            'sport'=>'required',

            'earnings'=>'required',

            'description'=>'required'

        ]);

        $image=$athlete->photo;

        if($request->hasFile('photo')){

            if(file_exists(public_path('images/'.$athlete->photo))){

                unlink(public_path('images/'.$athlete->photo));

            }

            $image=time().'.'.$request->photo->extension();

            $request->photo->move(public_path('images'),$image);

        }

        $athlete->update([

            'name'=>$request->name,

            'sport'=>$request->sport,

            'earnings'=>$request->earnings,

            'description'=>$request->description,

            'photo'=>$image

        ]);

        return redirect()->route('admin.index')
                ->with('success','Athlete updated.');

    }

    public function destroy(Athlete $athlete)
    {

        if(file_exists(public_path('images/'.$athlete->photo))){

            unlink(public_path('images/'.$athlete->photo));

        }

        $athlete->delete();

        return back()->with('success','Athlete deleted.');

    }
}