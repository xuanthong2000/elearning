<?php

namespace App\Http\Controllers;

use App\Category;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class CategorysController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $category = DB::table('category')->select('category.id','category.name','category.description',);
        $category = $category->get();

        return view('/manage/quanlychude', compact('category'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('/themchude');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $category = new Category;
        $category->name = $request->name; 
        $category->description = $request->description;
       
        $category->save();
        return redirect()->action('CategorysController@index');
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
        $category = category::findOrFail($id);
        
        return view('insertandedit/editchude', compact('category'));
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
        $category = category::find($id);
        $category->name = $request->name; 
        $category->description = $request->description;
        $category->save();
        return redirect()->action('CategorysController@index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $category = category::find($id);

        $category->delete();
        return redirect()->action('CategorysController@index')->with('success','Dữ liệu xóa thành công.');
    }
    // public function showform() {
    //     return view('/editkhoahoc');
    // }
    // public function validationform(Request $request) {
    //     echo "<pre>";
    //         print_r($request->all());
    //     echo "</pre>";

    //     $this->validation($request,[
    //         'title'=>'required|max:50',
    //         'description'=>'required'
    //     ]);
    // }
}
