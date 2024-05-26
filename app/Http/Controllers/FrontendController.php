<?php

namespace App\Http\Controllers;

use App\Models\about;
use App\Models\Attribute;
use App\Models\Banner;
use App\Models\Category;
use App\Models\PrivacyPolicy;
use App\Models\Product;
use App\Models\Review;
use App\Models\TermandCondition;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    //home
    function home(){
        $banners = Banner::where('status', 1)->get();
        $categorys = Category::where('status', 1)->get();
        $products = Product::where('status', 1)->get();
        $reviews = Review::where('status', 1)->get();
        return view('frontend.index',[
            'banners'=>$banners,
            'categorys'=>$categorys,
            'products'=>$products,
            'reviews'=>$reviews,
        ]);
    }

    // product_details
    function product_details($slug){
        $products = Product::where('slug', $slug)->get();
        $attributes = Attribute::where('inventorie_id', $products->first()->inventorie_id)->get();

        $available_colors = $attributes->groupBy('rel_to_color.id');

        return view('frontend.product_details',[
            'products'=>$products,
            'attributes' => $attributes,
            'available_colors' => $available_colors,
        ]);
    }
    // getProductDetails
    public function getProductDetails(Request $request)
    {
        $attribute_id = $request->input('attribute_id');
        $inventoryId = $request->input('inventorie_id');
        $color = $request->input('color');

        if($color){
            $productDetails = Attribute::where('inventorie_id', $inventoryId)
            ->where('color_id', $color)
            ->first();
        }elseif($attribute_id){
            $productDetails = Attribute::where('inventorie_id', $inventoryId)
            ->where('id', $attribute_id)
            ->first();
        }

        if ($productDetails) {
            return response()->json([
                'price' => $productDetails->price,
                'sell_price' => $productDetails->sell_price,
                'quantity' => $productDetails->quantity,
                'image' => $productDetails->image,
            ]);
        } else {
            return response()->json(['error' => 'Product details not found.'], 404);
        }
    }

    //getsize
    public function getsize(Request $request)
    {
        $attribute = Attribute::where('inventorie_id', $request->inventorie_id)->where('color_id', $request->color_id)->get();
        $str = '';

        $str .= '<label>Size:</label>
                <div class="product-nav product-nav-thumbs product_details_size">';
        foreach($attribute as $size){
            $str .= '<div class="form-check size-option form-option form-check-inline mb-2">
                        <label class="color-option" for="'.$size->rel_to_size->id.'">'.$size->rel_to_size->name.'</label>
                        <input class="size_id" type="radio" name="attribute_id" id="'.$size->rel_to_size->id.'" value="'.$size->id.'" required>
                    </div>';
        }
        $str .= '</div>';

        echo $str;

    }

    // category_details
    function category_show($category){
        $products = Product::where('category_id', $category)->with('rel_to_inventorie')->get();
        return view('frontend.category_product',[
            'products'=>$products,
        ]);
    }

      //shop
      function shop(Request $request){
        // search
        $data = $request->all();

        $products = Product::where(function($q) use ($data){
            if(!empty($data['q']) && $data['q'] != '' && $data['q'] != 'undefined'){
                $q->where(function($q) use ($data){
                    $q->where('name', 'like', '%'.$data['q'].'%');
                    $q->orWhere('tag', 'like', '%'.$data['q'].'%');
                    $q->orWhere('description', 'like', '%'.$data['q'].'%');
                    $q->orWhere('slug', 'like', '%'.$data['q'].'%');
                });
            }
            if(!empty($data['category_id']) && $data['category_id'] != '' && $data['category_id'] != 'undefined'){
                $q->where('category_id', $data['category_id']);
            }

        })->where('status', 1)->paginate(6)->withQueryString();

        // search product count
        $products_count = $products->count();

        $categorys = category::all();
       return view('frontend.shop', [
           'products'=>$products,
           'categorys'=>$categorys,
           'products_count'=>$products_count,
       ]);
   }

    //about_us
    function about_us(){
        $abouts = about::where('status', 1)->first();
        return view('frontend.about',[
            'abouts'=>$abouts,
        ]);
    }

    //privacy_policy
    function privacy_policy(){
        $privacypolicy = PrivacyPolicy::first();
        return view('frontend.privacy_policy',[
            'privacypolicy'=>$privacypolicy,
        ]);
    }

    //terms_condition
    function terms_condition(){
        $termscondition = TermandCondition::first();
        return view('frontend.termandcondition',[
            'termscondition'=>$termscondition,
        ]);
    }

}
