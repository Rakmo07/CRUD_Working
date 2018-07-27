
<?php
use App\Models\Product;
use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/

$app->get('/', function () use ($app) {
      return "Dev in Progress";
    //return response()->json(Product::all());
    // $product=["Peter"=>"35", "Ben"=>"37", "Joe"=>"43"];
    // return $app->version();
});

$app->get('/retrive','RequestController@retrive');
$app->get('/select/{id}','RequestController@select');
$app->put('/update/{id}','RequestController@update');
$app->post('/insert','RequestController@insert');
$app->delete('/delete/{id}','RequestController@delete');

// $app->post('customer', [
//     'as' => 'customer.store', 'uses' => 'App\Http\Controllers\CustomerController@store'
// ]);
