<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\File;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;

class FileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $files = File::all()->sortByDesc('created_at');
        return view('index', ['files' => $files]);
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
    { {
            return Validator::make($request, [
                'description' => ['required', 'string', 'max:255'],
                'photo' => ['required', 'image']
            ]);
        }


        $file = new File;

        $file->description = $request->description;
        $file->photo = $request->photo;

        if (!$file->save()) return 'Error on save, please retry.';
        Session::flash('message', 'Votre photo à bien été enregistrée !');
        return redirect('index');
    }
}
