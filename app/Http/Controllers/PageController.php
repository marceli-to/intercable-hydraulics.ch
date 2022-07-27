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
    session()->flush();
    \Log::error($request->all());
    if ($request->all())
    {
      foreach($request->all() as $key => $value)
      {
        $data[$key] = $value;
      }
      session(['api_connection_data' => $data]);
    }
    $categories = $this->productCategory->with('products')->orderBy('order')->where('parent_id', '=', NULL)->get();
    return view($this->viewPath . 'home', ['categories' => $categories]);
  }


  /**
   * Endpoint for testing purposes
   * @return \Illuminate\Http\Response
   */

  // public function updateFormData()
  // {
  //   $products = Product::get();
  //   foreach($products as $product)
  //   {
  //     $product->form_data = json_encode([
  //       [
  //         "SUPPLIER_ID_GLN" => "7611971000000", 
  //         "MANUFACTURER_PID" => $product->article_no, 
  //         "MANUFACTURER_TYPE_DESCR" => $product->subtitle, 
  //         "INTERNATIONAL_PID" => "1234567890128", 
  //         "DESCRIPTION_SHORT" => $product->subtitle, 
  //         "PRICE_AMOUNT" => "0.00",
  //         "CURRENCY" => "CHF",
  //         "PRICE_QUANTITY" => "1", 
  //         "UDX.EDXF.DISCOUNT_GROUP_MANUFACTURER" => "D123", 
  //         "QUANTITY" => "1.00",
  //         "ORDER_UNIT" => "C62",
  //         "VALIDITY_END" => "2025-12-31",
  //       ],
  //     ]);
  //     $product->save();
  //   }

  //   $accessories = Accessory::get();
  //   foreach($accessories as $accessory)
  //   {
  //     $product->form_data = json_encode([
  //       [
  //         "SUPPLIER_ID_GLN" => "7611971000000", 
  //         "MANUFACTURER_PID" => $accessory->article_no, 
  //         "MANUFACTURER_TYPE_DESCR" => $accessory->subtitle, 
  //         "INTERNATIONAL_PID" => "1234567890128", 
  //         "DESCRIPTION_SHORT" => $accessory->subtitle, 
  //         "PRICE_AMOUNT" => "0.00",
  //         "CURRENCY" => "CHF",
  //         "PRICE_QUANTITY" => "1", 
  //         "UDX.EDXF.DISCOUNT_GROUP_MANUFACTURER" => "D123", 
  //         "QUANTITY" => "1.00",
  //         "ORDER_UNIT" => "C62",
  //         "VALIDITY_END" => "2025-12-31",
  //       ],
  //     ]);
  //     $accessory->save();
  //   }

  //   $consumables = Consumable::get();
  //   foreach($consumables as $consumable)
  //   {
  //     $product->form_data = json_encode([
  //       [
  //         "SUPPLIER_ID_GLN" => "7611971000000", 
  //         "MANUFACTURER_PID" => $consumable->article_no, 
  //         "MANUFACTURER_TYPE_DESCR" => $consumable->subtitle, 
  //         "INTERNATIONAL_PID" => "1234567890128", 
  //         "DESCRIPTION_SHORT" => $consumable->subtitle, 
  //         "PRICE_AMOUNT" => "0.00",
  //         "CURRENCY" => "CHF",
  //         "PRICE_QUANTITY" => "1", 
  //         "UDX.EDXF.DISCOUNT_GROUP_MANUFACTURER" => "D123", 
  //         "QUANTITY" => "1.00",
  //         "ORDER_UNIT" => "C62",
  //         "VALIDITY_END" => "2025-12-31",
  //       ],
  //     ]);
  //     $consumable->save();
  //   }

  //   $tools = Tool::get();
  //   foreach($tools as $tool)
  //   {
  //     $tool->form_data = json_encode([
  //       [
  //         "SUPPLIER_ID_GLN" => "7611971000000", 
  //         "MANUFACTURER_PID" => $tool->article_no, 
  //         "MANUFACTURER_TYPE_DESCR" => $tool->subtitle, 
  //         "INTERNATIONAL_PID" => "1234567890128", 
  //         "DESCRIPTION_SHORT" => $tool->subtitle, 
  //         "PRICE_AMOUNT" => "0.00",
  //         "CURRENCY" => "CHF",
  //         "PRICE_QUANTITY" => "1", 
  //         "UDX.EDXF.DISCOUNT_GROUP_MANUFACTURER" => "D123", 
  //         "QUANTITY" => "1.00",
  //         "ORDER_UNIT" => "C62",
  //         "VALIDITY_END" => "2025-12-31",
  //       ],
  //     ]);
  //     $tool->save();
  //   }
  // }
}
