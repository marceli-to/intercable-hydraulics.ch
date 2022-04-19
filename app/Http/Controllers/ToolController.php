<?php
namespace App\Http\Controllers;
use App\Models\Tool;
use App\Http\Controllers\BaseController;
use Illuminate\Http\Request;

class ToolController extends BaseController
{
  protected $viewPath = 'web.pages.tool.';

  public function __construct(Tool $tool)
  {
    parent::__construct();
    $this->tool = $tool;
  }


  /**
   * Page: 'Tool detail'
   *
   * @param String $slug
   * @param Tool $tool
   * @return \Illuminate\Http\Response
   */

  public function show($slug = NULL, Tool $tool)
  { 
    $tool = $this->tool->with('previewImage', 'publishedImages')->findOrFail($tool->id);
    return view($this->viewPath . 'show', ['tool' => $tool]);
  }

}
