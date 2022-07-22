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
    // Accessory
    $data = Accessory::get();
    foreach($data as $d)
    {
      $d->e_no = $d->article_no;
      $d->save();
    }
    // Consumable
    $data = Consumable::get();
    foreach($data as $d)
    {
      $d->e_no = $d->article_no;
      $d->save();
    }
    dd('d');
  }

}
