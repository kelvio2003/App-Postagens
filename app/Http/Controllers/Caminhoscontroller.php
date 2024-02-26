<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Postes;

class Caminhoscontroller extends Controller
{
   public function index(){

$pesquisar= request('pesquisar');
      if($pesquisar){

         $postes=Postes::where('titolos','like','%'.$pesquisar.'%');
         return view('welcome',['postes'=>$postes,'pesquisar'=>$pesquisar])->get();

      }else{
         $postes=Postes::all();
         return view('welcome',['postes'=>$postes]);

      }


   }

   public function criar(){
      return view('criar');

   }

   public function store(Request $request){

$postes= new Postes();

$postes->titolo=$request->titolo;
$postes->descricao=$request->descricao;
$postes->data=$request->data;
$postes->imagem=$request->imagem;
$postes->oferta=$request->oferta;


if($request->hasFile('image') && $request->file('image')->isvalid()){

$requestImage->image->extension();

$request->image->$extension;

$imageName=md5($requestImage->clientOrigiNalname(). totime("now")).".".$extension;

$requestImage->move(public_path('img/fotos'));

$postes->image.$imageName;


}


$postes->save();
return redirect('/')->with('sms','Nova postagem feita com sucesso');

   }


   public function ver($id)
   {
      $postes=  Postes::find($id);

      return view('ver',['postes'=>$postes]);

   }

   public function deletar($id){

      $postes = Postes::findOrFail($id)->delete();

      return redirect('/');

   }

   public function editar($id){

      $postes = Postes::findOrFail($id);

      return view('/edit',['postes'=>$postes]);

   }

   public function update(Request $request){

     $postes=Postes:: findOrFail($request->id)->update($request->all()); 

      return view('/criar',['postes'=>$postes]);

   }


   
}
