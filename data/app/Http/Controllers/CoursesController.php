<?php

namespace App\Http\Controllers;

use App\Course;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;


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

        return view('/manage/quanlykhoahoc', compact('course'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('/themkhoahoc');
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
        $course->category_id= 1;
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
        
        return view('insertandedit/editkhoahoc', compact('course'));
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
        
        if(
            $request->image == null

        ){
            $course->image = " ";
        }
        else{
            $course->image = $request->image;
        }
        $course->status = $request->status;
        $course->description = $request->description;
        // $course->category_id= 1;
        // $course->users_id = 2;

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
        $course = course::find($id);

        $course->delete();
        return redirect()->action('CoursesController@index')->with('success','Dữ liệu xóa thành công.');
    }
    public function showform() {
        return view('/editkhoahoc');
    }
    public function validationform(Request $request) {
        echo "<pre>";
            print_r($request->all());
        echo "</pre>";

        $this->validation($request,[
            'title'=>'required|max:50',
            'description'=>'required'
        ]);
    }
}