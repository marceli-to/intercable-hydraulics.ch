<?php
namespace App\Http\Controllers;
use App\Models\Product;
use App\Http\Requests\CallbackFormRequest;
use App\Http\Requests\TrainingFormRequest;
use App\Http\Requests\PresentationFormRequest;
use App\Mail\CallbackUser;
use App\Mail\CallbackOwner;
use App\Mail\TrainingUser;
use App\Mail\TrainingOwner;
use App\Mail\PresentationUser;
use App\Mail\PresentationOwner;
use Illuminate\Support\Facades\Mail;
use App\Http\Controllers\BaseController;
use Illuminate\Http\Request;

class FormController extends BaseController
{
  protected $viewPath = 'web.pages.forms.';

  public function __construct(Product $product)
  {
    parent::__construct();
    $this->product = $product;
  }

  /**
   * Page: 'Contact > Callback'
   * 
   * @param String $slug
   * @param Product $product
   * @return \Illuminate\Http\Response
   */

  public function callback($slug = NULL, Product $product = NULL)
  { 
    return view($this->viewPath . 'callback', ['product' => $product]);
  }

  /**
   * Page: 'Contact > Callback submit'
   *
   * @param  \Illuminate\Http\Request $request
   * @return \Illuminate\Http\Response
   */

  public function callbackSubmit(CallbackFormRequest $request)
  { 
    $data = $request->all();
    Mail::to($data['email'])->send(new CallbackUser($data));
    Mail::to(\Config::get('custom.email.recipient'))->send(new CallbackOwner($data));
    return $this->thankYou(\App::getLocale());
  }

  /**
   * Page: 'Contact > Training'
   * 
   * @param String $slug
   * @param Product $product
   * @return \Illuminate\Http\Response
   */

  public function training($slug = NULL, Product $product = NULL)
  { 
    return view($this->viewPath . 'training', ['product' => $product]);
  }

  /**
   * Page: 'Contact > Training submit'
   *
   * @param  \Illuminate\Http\Request $request
   * @return \Illuminate\Http\Response
   */

  public function trainingSubmit(TrainingFormRequest $request)
  { 
    $data = $request->all();
    Mail::to($data['email'])->send(new TrainingUser($data));
    Mail::to(\Config::get('custom.email.recipient'))->send(new TrainingOwner($data));
    return $this->thankYou(\App::getLocale());
  }

  /**
   * Page: 'Contact > Presentation'
   * 
   * @param String $slug
   * @param Product $product
   * @return \Illuminate\Http\Response
   */

  public function presentation($slug = NULL, Product $product = NULL)
  { 
    return view($this->viewPath . 'presentation', ['product' => $product]);
  }

  /**
   * Page: 'Contact > Presentation submit'
   *
   * @param  \Illuminate\Http\Request $request
   * @return \Illuminate\Http\Response
   */

  public function presentationSubmit(PresentationFormRequest $request)
  { 
    $data = $request->all();
    Mail::to($data['email'])->send(new PresentationUser($data));
    Mail::to(\Config::get('custom.email.recipient'))->send(new PresentationOwner($data));
    return $this->thankYou(\App::getLocale());
  }

  /**
   * Page: 'Contact > Thank you'
   *
   * @return \Illuminate\Http\Response
   */

  public function thankYou($lang = 'de')
  {
	  \App::setLocale($lang);
    return view($this->viewPath . 'thank-you');
  }
}
