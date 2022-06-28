<?php

use App\Models\trabalhador;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
/*
Route::get('/', function () {
    return view('welcome');
});
Route::get('minhaprimeiraview', function () {
    return view('segundaview');
});
*/

Route::get('/', function () {
    return view('inicio');
});

Route::post('/cadastrar-trabalhador', function(Request $request){
	//dd($request->all());
    trabalhador::create([
        'nome'=>$request->nome,
        'profissao'=>$request->profissao,
        'salario'=>$request->salario,
    ]);

    echo "trabalhador criado com sucesso!";
});


Route::get('/listar-trabalhador/{id}', function($id){
    //dd(trabalhador::find($id)); //debug and die
    $trabalhador = trabalhador::find($id);
    return view('listar', ['trabalhador' => $trabalhador]);
    //a view em questao está nomeada como formulario
});

Route::get('/editar-trabalhador/{id}', function($id){
    //dd(trabalhador::find($id)); //debug and die
    $trabalhador = trabalhador::find($id);
    return view('editar', ['trabalhador' => $trabalhador]);
});

Route::post('/editar-trabalhador/{id}', function(Request $request, $id){
    //dd($request->all());
    $trabalhador = trabalhador::find($id);
    $trabalhador->update([
        'nome' => $request->nome,
        'profissao' => $request->profissao,
        'salario' => $request->salario
    ]);
    echo "trabalhador editado com sucesso!";
});

Route::get('/excluir-trabalhador/{id}',function($id){
    //dd($request->all());
    $trabalhador = trabalhador::find($id);
    $trabalhador->delete();

    echo "trabalhador excuido com sucesso!";
});
