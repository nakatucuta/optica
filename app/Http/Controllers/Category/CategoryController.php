<?php

namespace App\Http\Controllers\Category;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\category\Category;
use App\Http\Requests\Category\CategoryCreateRequest;
use App\Http\Requests\Category\CategoryUpdateRequest;
use Session;
class CategoryController extends Controller
{

     public function __construct(){/*3.se crea este contruct en el controlador a trabajar*/

        $this->middleware('auth');
        $this->middleware('insert_tiproduct', ['only' =>'index']);
        
        /*$this->middleware('admin', ['only' =>'show']);
        $this->middleware('admin', ['only' =>'detail']);
        */

    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = Category::orderBy('id','desc')
            ->paginate();

             return view('categories.index')->with(compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('categories.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CategoryCreateRequest $request)
    {
        $entytistore = new Category;
    

         $entytistore->name = $request->name;
         $entytistore->description = $request->description;
         $entytistore->save();
          return redirect()->route('category.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $categoryshow = Category::find($id);
        return view('categories.show',compact('categoryshow'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $categoriesedit = Category::find($id);
        return view('categories.edit',compact('categoriesedit'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(CategoryUpdateRequest $request, $id)
    {
             $updatecategory = Category::find($id);
             $updatecategory->name = $request->name;
             $updatecategory->description = $request->description;
             $updatecategory->save();

        
                return redirect()->route('category.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
         $categories=Category::FindOrFail($id);
       $categories->delete();
       Session::flash('delete','El registro se ha eliminado correctamente');
       return redirect()->route('category.index');
    }
}
