<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;
use App\Models\ProductDetail;
use App\Models\Urun;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public function index()
    {

        $categories = Category::all();
        $data = [];
        collect($categories)->each(function ($item, $key) use ($categories, &$data) {
            if ($item->up_id === 0) {
                $data[$key]['name'] = $item->name;
                $data[$key]['slug'] = $item->slug;
                $data[$key]['id'] = $item->id;
                $data[$key]['sub_categories'] = collect($categories)->where('up_id', $item->id);
            }
        });
        $data = collect($data)->values();

        /*        $sliders = ProductDetail::with(['product' => function ($query) {
                    return $query->select('id', 'name')->where('stock', 54)->get();
                }])
                    ->where('slider', 1)
                    ->where('product_id', '<', 5)
                    ->get()
                    ->take(5);*/

        /*       $d = Product::with(['categories', 'productDetail'=>function($query){
                return $query->select('product_id','slider');
               }])->get();*/

        $sliders = ProductDetail::with('product')
            ->where('slider', 1)
            ->orderBy('created_at', 'DESC')
            ->get()
            ->take(5);

        $featured = ProductDetail::with('product')
            ->where('featured', 1)
            ->orderBy('created_at', 'DESC')
            ->get()
            ->take(8);

        $latest = ProductDetail::with('product')
            ->where('latest', 1)
            ->orderBy('created_at', 'DESC')
            ->get()
            ->take(8);


        $electronics = Category::with(['products' => function ($query) {
            return $query->orderByDesc('id')->take(8);
        }])->where(['slug' => 'electronics'])
            ->first();

        $clothes = Category::with(['products' => function ($query) {
            return $query->orderByDesc('id')->take(8);
        }])->where(['slug' => 'clothes'])
            ->first();

        $foodbeverages = Category::with(['products' => function ($query) {
            return $query->orderByDesc('id')->take(8);
        }])->where(['slug' => 'food-beverages'])
            ->first();

        $digital = Category::with(['products' => function ($query) {
            return $query->orderByDesc('id')->take(8);
        }])->where(['slug' => 'digital'])
            ->first();
//dd($men->products);
        return view('frontend.homepage',
            compact('data','featured', 'latest','sliders',
                'electronics', 'foodbeverages', 'digital', 'clothes'));
    }

//     public function getDb()
//     {
//         /*        DB::table("urun")->insert([
//                     ['name' => 'havuc', 'price' => 919, 'description' => 'kilosu pahalı1'],
//                     ['name' => 'soğan', 'price' => 929, 'description' => 'kilosu pahalı2'],
//                 ]);*/
//         $urunler = DB::table('urun')->get();
//         $urun = DB::table('urun')->where('id', 9)->first();
//         $urun = DB::table('urun')->where('id', 9)->update(['price' => 97]);
//         $urun = DB::table('urun')->where(['name' => 'elma', 'description' => 'yenir'])->update(['price' => 100]);
//         $urun = DB::table('urun')->where('id', 9)->delete();

//         $urunler = DB::table('urun')->orderBy('price', 'desc')->get();
//         $urunler = DB::table('urun')
//             ->where('price', '>', '50')
//             ->orderBy('price', 'asc')
//             ->get();
//         $urun = DB::table('urun')->first();

//         /*        print_r($urunler);
//                 exit();*/

//         dump($urun->name);
//         dd($urunler->all());
//     }


//     public function getModelDb()
//     {
//         $urunler = Urun::all();
//         $urunler = Urun::where('price', '>', '90')->get();
//         $urun = Urun::find(5);

//         //---UPDATE------------------
//         $urun = Urun::where('id', 5)->first();

//         $urun->price = 98;
//         $urun->save();

//         // 2. yontem
//         Urun::where('id', 5)->update(['price' => 66]);
//         //--------------------------------------------------------
//         //  dd($urun->price);

//         //DELETE------------
//         Urun::where('id', 10)->delete();
// //------------------------------------
//         /*        $urunler = [
//                     ['name' => 99],
//                     ['name' => 9009]
//                 ];*/
//         /*        dd($urunler[0]['name']);
//                 dd($urunler[0]->name);*/
//         dd($urun);
//         dd($urunler);
//     }
}
