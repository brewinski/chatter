<?php

class ProductController extends \BaseController {

  /**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */

  public static $rules = array(
    'name' => 'required|min:5',
    'price' => 'required'
    );

    public function index()
    {
      $products = Product::all();
      return View::make('product.index', compact('products'));
    }


    /**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
    public function create()
    {
      //
    }


    /**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
    public function store()
    {
      //
    }


    /**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */

  public function show($id)
  {
    $product = Product::find($id);

    return View::make('product.show')->withProduct($product);
  }


  /**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
  public function edit($id)
  {
    $product = Product::find($id);

    return View::make('product.edit', compact('product'));
  }


  /**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
  public function update($id)
  {
    $product = Product::find($id);

    $input = Input::all();

    $v = Validator::make($input, ProductController::$rules);

    if ($v->passes())
    {
      $product->name = $input['name'];
      $product->price = $input['price'];
      $product->save();

      return Redirect::route('product.show', $product->id); 
    }
    else
    {
      // Show validation errors
      return Redirect::action('product.edit', $product->id)->withErrors($v); 
    }
  }


  /**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
  public function destroy($id)
  {
    //
  }


}
