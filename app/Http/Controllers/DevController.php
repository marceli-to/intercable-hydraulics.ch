<?php
namespace App\Http\Controllers;
use App\Models\Accessory;
use App\Models\Consumable;
use App\Models\Product;
use App\Http\Controllers\BaseController;
use Illuminate\Http\Request;

class DevController extends BaseController
{

  public function __construct()
  {
    parent::__construct();
  }


  public function copy()
  { 
    // Products
    $products = Product::get();
    foreach($products as $p)
    {
      $p->e_no = $p->article_no;
      $p->save();
    }
    dd($products);
  }

}
