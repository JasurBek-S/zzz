<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Products;
use App\Models\Categories;
use App\Models\Brand;
use App\Models\ProductImages;
use App\Models\Attribute;
use Hashids\Hashids;

class ProductController extends Controller
{
    public function index(){
        $hashids = new Hashids('SATIF', 30);

        $product = Products::latest()->orderBy('created_at', 'asc')->where(['action' => 'true'])->paginate(10);
        $category = Categories::where(['action' => 'true'])->get();
        $productimage = ProductImages::get();

        return view('dashboard.products.index',compact('product', 'hashids', 'category', 'productimage'))
            ->with('i', (request()->input('page', 1) - 1) * 10);
    }
    
    public function create(){
        $hashids = new Hashids('SATIF', 30);
        $category = Categories::where(['action' => 'true'])->get();
        $brand = Brand::where(['action' => 'true'])->get();
   
        return view('dashboard.products.create',compact('hashids', 'category', 'brand'));
    }
    
    public function story(Request $request)
    {
        $request->validate([
                'name' => 'nullable',
                'short_desc' => 'nullable',
                'categories' => 'nullable',
                'regular_price' => 'nullable',
                'brand' => 'nullable',
                'tags' => 'nullable',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
  
       
        $category_idd = $request->input('categories');

        if ($image = $request->file('image')) {
            $times = date('Ymdhis');
            $destinationPath = 'storage/images/';
            $profileImage = time().'c'. $category_idd . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
                $data_image = $profileImage;
        }
    
        // $image_req = new ProductImages;
        // $image_req->image = $data_image;
        // $image_req->save();
        
        $image_id = DB::table('product_images')->insertGetId(
            ['image' => $data_image, 'product_id' => '1']
        );
        $prod_name = json_encode($request->input('name'));
        $prod_n = json_decode($prod_name);

        $products_req = new Products;
        $products_req->name = $prod_name;
        $products_req->desc = $request->input('short_desc');
        $products_req->category_id = $request->input('categories');
        $products_req->price = $request->input('regular_price');
        $products_req->brand = $request->input('brand');
        $products_req->tags = json_encode($request->input('tags'));
        $products_req->status = $request->input('status');
        $products_req->link = preg_replace('/\W+/', '-', strtolower(trim($prod_n['uz'])));
        $products_req->images = $image_id;
        $products_req->save();

        return redirect()->route('dashboard.products')
                        ->with('success','Product created successfully.');
    }

    // Brand
    public function brand_index(){     
        $hashids = new Hashids('SATIF', 30);
   
        $brand = Brand::latest()->orderBy('created_at', 'asc')->where(['action' => 'true'])->paginate(10);
        $category = Categories::where(['action' => 'true'])->get();

        return view('dashboard.brands.index',compact('brand', 'hashids', 'category'))
            ->with('i', (request()->input('page', 1) - 1) * 10);
    }
    
    public function brand_create(){     
        $hashids = new Hashids('SATIF', 30);
        $brand = Brand::where(['action' => 'true'])->get();
   
        return view('dashboard.brands.create',compact('hashids', 'brand'));
    }
    
    public function brand_story(Request $request)
    {
        $request->validate([
                'name' => 'required',
        ]);
        $brand_req = new Brand;
        $brand_req->name = $request->input('name');
        $brand_req->save();

        return redirect()->route('dashboard.products')
                        ->with('success','Product created successfully.');
    }
}