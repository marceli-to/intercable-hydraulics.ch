<?php
namespace App\Http\Controllers;
use App\Models\Product;
use App\Models\Accessory;
use App\Models\Tool;
use App\Models\Consumable;
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

  public function index(Request $request)
  { 
    // Save request data from wholesale shop / elbridge
    $data = [];
    \Log::error($request->all());
    if ($request->all())
    {
      session()->flush();
      foreach($request->all() as $key => $value)
      {
        $data[$key] = $value;
      }
      session(['api_connection_data' => $data]);
    }
    $categories = $this->productCategory->with('products')->orderBy('order')->where('parent_id', '=', NULL)->get();

    // Teaser
    $teaser = $this->product->with('publishedImages')->find(29);

    return view($this->viewPath . 'home', ['categories' => $categories, 'teaser' => $teaser]);
  }

  /**
   * Page: 'Privacy'
   * 
   * @return \Illuminate\Http\Response
   */
  
  public function privacy()
  {
    return view($this->viewPath . 'privacy.privacy');
  }

  /**
   * Page: 'Cookies'
   *
   * @return \Illuminate\Http\Response
   */

  public function cookies()
  {
    return view($this->viewPath . 'privacy.cookies');
  }

}
