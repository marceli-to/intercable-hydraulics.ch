<?php
namespace App\Http\Controllers\Api;
use App\Http\Controllers\Controller;
use App\Http\Resources\DataCollection;
use App\Models\Accessory;
use App\Models\AccessoryProduct;
use App\Models\AccessoryImage;
use App\Http\Requests\AccessoryStoreRequest;
use Illuminate\Http\Request;

class AccessoryController extends Controller
{
  public function __construct(Accessory $accessory, AccessoryImage $accessoryImage)
  {
    $this->accessory       = $accessory;
    $this->accessoryImage  = $accessoryImage;
  }

  /**
   * Get a list of accessory
   * 
   * @return \Illuminate\Http\Response
   */
  public function get()
  {
    return new DataCollection($this->accessory->with('products.category')->orderBy('order')->get());
  }

  /**
   * Get a single accessory for a given accessory or authenticated accessory
   * 
   * @param Accessory $accessory
   * @return \Illuminate\Http\Response
   */
  public function find(Accessory $accessory)
  {
    $accessory = $this->accessory->with('images', 'category', 'products.category')->findOrFail($accessory->id);
    return response()->json($accessory);
  }

  /**
   * Store a newly created Accessory
   *
   * @param  \Illuminate\Http\Request $request
   * @return \Illuminate\Http\Response
   */
  public function store(AccessoryStoreRequest $request)
  {
    // Store accessory
    $accessory = new Accessory([
      'article_no' => $request->input('article_no'),
      'e_no' => $request->input('e_no'),
      'title' => [
        'de' => $request->input('title.de'),
        'fr' => $request->input('title.fr'),
        'it' => $request->input('title.it'),
      ],
      'subtitle' => [
        'de' => $request->input('subtitle.de'),
        'fr' => $request->input('subtitle.fr'),
        'it' => $request->input('subtitle.it'),
      ],
      'description' => [
        'de' => $request->input('description.de'),
        'fr' => $request->input('description.fr'),
        'it' => $request->input('description.it'),
      ],
      'link_shop' => [
        'de' => $request->input('link_shop.de'),
        'fr' => $request->input('link_shop.fr'),
        'it' => $request->input('link_shop.it'),
      ],
      'link_shop_em' => [
        'de' => $request->input('link_shop_em.de'),
        'fr' => $request->input('link_shop_em.fr'),
        'it' => $request->input('link_shop_em.it'),
      ],
      'diameter' => $request->input('diameter'),
      'accessory_category_id' => $request->input('accessory_category_id'),
      'publish' => $request->input('publish'),
    ]);
    $accessory->save();

    // Store images
    if (!empty($request->images))
    {
      foreach($request->images as $i)
      {
        $image = new AccessoryImage([
          'accessory_id'   => $accessory->id,
          'name'         => $i['name'],
          'caption'      => $i['caption'],
          'coords_w'     => $i['coords_w'] ? round($i['coords_w'], 12) : NULL,
          'coords_h'     => $i['coords_h'] ? round($i['coords_h'], 12) : NULL,
          'coords_x'     => $i['coords_x'] ? round($i['coords_x'], 12) : NULL,
          'coords_y'     => $i['coords_y'] ? round($i['coords_y'], 12) : NULL,
          'preview'      => $i['preview'] ? $i['preview'] : 0,
          'publish'      => $i['publish'] ? $i['publish'] : 0,
          'orientation'  => $i['orientation'] ? $i['orientation'] : NULL,
        ]);
        $image->save();
      }
    }

    // Store products
    if ($request->products)
    {
      $accessory->products()->detach();
      foreach($request->products as $product)
      { 
        $accessory_product = new AccessoryProduct([
          'product_id' => $product['id'],
          'accessory_id' => $accessory->id
        ]);
        $accessory_product->save();
      }
    }  

    return response()->json(['accessoryId' => $accessory->id]);
  }

  /**
   * Update a Accessory for a given Accessory or authenticated Accessory
   *
   * @param Accessory $accessory
   * @param  \Illuminate\Http\Request $request
   * @return \Illuminate\Http\Response
   */
  public function update(Accessory $accessory, AccessoryStoreRequest $request)
  {
    // Get accessory
    $accessory = $this->accessory->findOrFail($accessory->id);
    
    // German
    $accessory->setTranslation('title', 'de', $request->input('title.de'));
    $accessory->setTranslation('subtitle', 'de', $request->input('subtitle.de'));
    $accessory->setTranslation('description', 'de', $request->input('description.de'));
    $accessory->setTranslation('link_shop', 'de', $request->input('link_shop.de'));
    $accessory->setTranslation('link_shop_em', 'de', $request->input('link_shop_em.de'));

    // French
    $accessory->setTranslation('title', 'fr', $request->input('title.fr'));
    $accessory->setTranslation('subtitle', 'fr', $request->input('subtitle.fr'));
    $accessory->setTranslation('description', 'fr', $request->input('description.fr'));
    $accessory->setTranslation('link_shop', 'fr', $request->input('link_shop.fr'));
    $accessory->setTranslation('link_shop_em', 'fr', $request->input('link_shop_em.fr'));

    // Italian
    $accessory->setTranslation('title', 'it', $request->input('title.it'));
    $accessory->setTranslation('subtitle', 'it', $request->input('subtitle.it'));
    $accessory->setTranslation('description', 'it', $request->input('description.it'));
    $accessory->setTranslation('link_shop', 'it', $request->input('link_shop.it'));
    $accessory->setTranslation('link_shop_em', 'it', $request->input('link_shop_em.it'));

    $accessory->article_no = $request->input('article_no');
    $accessory->e_no = $request->input('e_no');
    $accessory->diameter = $request->input('diameter');
    $accessory->publish = $request->input('publish');
    $accessory->accessory_category_id = $request->input('accessory_category_id');
    $accessory->save();

    // Update or add images
    if (!empty($request->images))
    {
      foreach($request->images as $i)
      {
        $image = AccessoryImage::updateOrCreate(
          ['id' => $i['id']], 
          [
            'accessory_id' => $accessory->id,
            'name'         => $i['name'],
            'caption'      => $i['caption'],
            'coords_w'     => $i['coords_w'] ? round($i['coords_w'], 12) : NULL,
            'coords_h'     => $i['coords_h'] ? round($i['coords_h'], 12) : NULL,
            'coords_x'     => $i['coords_x'] ? round($i['coords_x'], 12) : NULL,
            'coords_y'     => $i['coords_y'] ? round($i['coords_y'], 12) : NULL,
            'preview'      => $i['preview'] ? $i['preview'] : 0,
            'publish'      => $i['publish'] ? $i['publish'] : 0,
            'orientation'  => $i['orientation'] ? $i['orientation'] : NULL,
          ]
        );
      }
    }

    // Update products
    if ($request->products)
    {
      $accessory->products()->detach();
      foreach($request->products as $product)
      { 
        $accessory_product = new AccessoryProduct([
          'product_id' => $product['id'],
          'accessory_id' => $accessory->id
        ]);
        $accessory_product->save();
      }
    }
    else
    {
      $accessory->products()->detach();
    }  
    

    return response()->json('successfully updated');
  }

  /**
   * Update the order of the given accessories
   *
   * @param  \Illuminate\Http\Request  $request
   * @return \Illuminate\Http\Response
   */
  public function order(Request $request)
  {
    $accessories = $request->get('accessories');
    foreach($accessories as $accessory)
    {
      $p = $this->accessory->find($accessory['id']);
      $p->order = $accessory['order'];
      $p->save(); 
    }
    return response()->json('successfully updated');
  }

  /**
   * Toggle the status a given Accessory
   *
   * @param  Accessory $accessory
   * @return \Illuminate\Http\Response
   */
  public function toggle(Accessory $accessory)
  {
    $accessory->publish = $accessory->publish == 0 ? 1 : 0;
    $accessory->save();
    return response()->json($accessory->publish);
  }

  /**
   * Remove a Accessory
   *
   * @param  Accessory $accessory
   * @return \Illuminate\Http\Response
   */
  public function destroy(Accessory $accessory)
  {
    $accessory->delete();
    return response()->json('successfully deleted');
  }
}
