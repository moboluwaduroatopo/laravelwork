<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Chapters;
class ChaptersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('chapters.addchapters');
    }
    public function success()
    {
        return view('chapters.success');
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'chapter_name'=>'required',
            'chapter_abbreviation'=>'required',
            'chapter_abbreviation'=>'required',
            'president_name'=>'required',
            'president_email'=>'required',
            'president_phone'=>'required',
            
            ]);
            $chap=Chapters::where('chapter_name','=',$request->chapter_name)->first();
            if ($chap===null){
                $chapter=Chapters::create($request->all());
                return redirect('/success/')->with('id',$chapter->id);
            }
            else{
                return redirect('/chapters/')->with('success','Data already exit');
            }
            // $chapter=Chapters::create($request->all());
            // return redirect('/chapters/')->with('success',$chapter);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
       //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
