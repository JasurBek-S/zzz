<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Categories;
use Hashids\Hashids;

class CategoriesController extends Controller
{
    public function index(){     
        $hashids = new Hashids('SATIF', 30);
   
        $categories = Categories::latest()->orderBy('created_at', 'asc')->where(['action' => 'true'])->paginate(10);

        return view('dashboard.categories.index',compact('categories', 'hashids'))
            ->with('i', (request()->input('page', 1) - 1) * 10);
    }
    
    public function create(){
        $categories = Categories::where(['action' => 'true'])->get();
        $hashids = new Hashids('SATIF', 30);

        return view('dashboard.categories.create', compact('categories', 'hashids'));
    }
    
    public function story(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'parent' => 'nullable',
            'link' => 'required',
            'user_id' => 'required',
        ]);
        
        $categories_req = new Categories;
        $categories_req->name = json_encode($request->input('name'));
        $categories_req->parent_category = $request->input('parent');
        $categories_req->link = $request->input('link');
        $categories_req->save();
        return redirect()->route('dashboard.categories')
            ->with('success', 'Categories created successfully.');
    }
    
    public function edit($id){
        $hashids = new Hashids('SATIF', 30);   
        $hashid = new Hashids(30);   
        $idd = $hashids->decode($id);     
        $categorie = Categories::where(['action' => 'true', 'id' => $idd])->first();
        $categories = DB::table('categories')->where(['action' => 'true'])->get();
        return view('dashboard.categories.edit', compact('categories', 'categorie', 'hashids', 'hashid'));
    }

    public function update(Request $request)
    {
        $hashids = new Hashids(30);   
        $request->validate([
            'name' => 'required',
            'parent' => 'present|nullable',
            'user_id' => 'required',
            'category_id' => 'required',
        ]);
        // $idd = $hashids->decode($id);     

        $categories_req = Categories::find($request->input('category_id'));
        $categories_req->name       = json_encode($request->input('name'));
        $categories_req->parent_category       = $request->input('parent');
        $categories_req->save();
        
        return redirect()->route('dashboard.categories')
            ->with('success', 'Categories updated successfully.');
    }

    public function destroy(Request $request)
    {
        $request->validate([
            'category' => 'required',
        ]);

        $hashids = new Hashids('SATIF', 15);   

        $contact = Categories::find($request->input('category'));
        $contact->action = 'false';
        $contact->save();

        return redirect()->route('dashboard.categories')
            ->with('success', 'Categories Delete successfully.');
    }
}