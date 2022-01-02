<?php

namespace App\Http\Controllers;


use App\Course;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use App\Category;


class CoursesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $course = DB::table('course')->select('course.id','course.name','course.image','course.description','course.status');
        $course = $course->get();

        return view('/admin/QLKH/quanlykhoahoc', compact('course'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */




    public function create()
    {
        $category = Category::all();
        // dd($category);

        return view('admin/QLKH/themkhoahoc', compact('category'));


    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $course = new Course;
        $course->name = $request->name; 
        $course->image = $request->image;
        $course->status = $request->status;
        $course->description = $request->description;
        $course->category_id= $request->category;
        $course->users_id = 2;
        $course->save();
        return redirect()->action('CoursesController@index');
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
        $course = course::findOrFail($id);
        
        return view('admin/QLKH/suakhoahoc', compact('course'));
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
        $course = course::find($id);
        $course->name = $request->name;
        $course->image = $request->image;
        $course->status = $request->status;
        $course->description = $request->description;

        $course->save();
        return redirect()->action('CoursesController@index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $course = course::findOrFail($id);

        $course->delete();
        return redirect()->action('CoursesController@index');
        
    }
}
