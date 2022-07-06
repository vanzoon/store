<?php

namespace App\Http\Controllers\Store;

use App\Models\Category;
use App\Models\Product;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class StoreController extends Controller
{
  public function __construct()
  {
    $this->middleware('auth')->except([
      'index',
      'product_list', 'product_detail',
      'category_list', 'category_detail'
    ]);
  }
  public function index()
  {
    $categories = Category::inRandomOrder()
      ->limit(5)
      ->get();
    $products = Product::inRandomOrder()
      ->limit(9)
      ->get();
    return view(
      'store.homepage',
      [
        'categories' => $categories,
        'products' => $products
      ]
    );
  }

  public function category_list()
  {
    $categories = Category::get();

    // dd(Category::find(17)->products);

    return view('store/category_list', [
      'categories' => $categories,
    ]);
  }

  public function category_detail(Category $category)
  {

    return view('store/category_detail', [
      'category' => $category,
    ]);
  }

  public function product_detail(Product $product)
  {
    return view('store/product_detail', [
      'product' => $product,
    ]);
  }

  public function product_delete(Product $product)
  {
    $this->authorize('delete', $product);
    $product->delete();

    return back();
  }
}
