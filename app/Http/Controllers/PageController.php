<?php
namespace App\Http\Controllers;
use App\Models\Product;
use App\Models\ProductCategory;
use App\Http\Controllers\BaseController;
use Illuminate\Http\Request;

class PageController extends BaseController
{
  protected $viewPath = 'web.pages.';

  public function __construct(Product $product, ProductCategory $productCategory)
  {
    parent::__construct();
    $this->product = $product;
    $this->productCategory = $productCategory;
  }

  /**
   * Page: 'Home'
   *
   * @return \Illuminate\Http\Response
   */

  public function index()
  { 
    $categories = $this->productCategory->with('products')->orderBy('order')->where('parent_id', '=', NULL)->get();
    return view($this->viewPath . 'home', ['categories' => $categories]);
  }
}
