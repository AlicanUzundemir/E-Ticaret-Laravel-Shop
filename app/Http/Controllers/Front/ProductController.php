<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        //   $categories = Category::all()->take(8);
        //   dd(\Cache::get('mert'));
        $data = Category::with('subCategories')
            ->where('up_id', 0)
            ->get()
            ->toArray();
        //$categoriesWithProducts = Category::with('products')->get();

        // arama kısmından form post edilirse if bloguna girer
        if ($request->isMethod('post')) {
            $search = $request->input('search');
            $products = Product::with('categories')
                ->where('name', 'like', "%$search%")
                ->orWhere('name', 'like', "%$search%")
                ->get();
        } else {
            $products = Product::with('categories')
                // ->simplePaginate(4);
                ->paginate(3);
            $request->flash();
        }

        // dd($products);
        /*        return view('frontend.product')->with([
                    'categories' => $categories
                ]);*/

        /*        return view('frontend.product', [
                    'categories' => $categories
                ]);*/
        return view('frontend.product', compact('data', 'products'));
    }

    public function category($slug, $id)
    {
        $data = Category::with('subCategories')
            ->where('up_id', 0)
            ->get()
            ->toArray();
        $category = Category::where(['slug' => $slug, 'id' => $id])
            ->firstOrFail();
            
        $products = $category->products()->paginate(3);
        
        return view('frontend.category', compact('category', 'data', 'products'));
    }





    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function show($slug)
    {

        $data = Category::with('subCategories')
            ->where('up_id', 0)
            ->get()
            ->toArray();

        // $product = Product::where('slug',$slug)->first();
        //  $product = Product::whereSlug($slug)->first();
        /*       $product = Product::whereSlug($slug)
                   ->whereName('Rerum occaecati praesentium.')
                   ->first();*/

        /*        $product = Product::where([
                    'slug' => $slug,
                    'stock' => 68
                ])->firstOrFail();*/
        $product = Product::where('slug', $slug)->firstOrFail();
        return view('frontend.product-detail', compact('data', 'product'));
        
    }
    

    public function categories()
    {
        $categories = Category::all();

        dd($categories->toArray());
    }

    
    public function productDetailShow()
    {
        return view('frontend.product-detail');
    }
    public function productDetailSummary()
    {
        return view('frontend.product-summary');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    

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
