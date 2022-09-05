<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Yemekler;
use DB;
class YemekController extends Controller
{
  public function post(Request $request){
    $form=$request->post();
    print_r($form);
}
  public function ekleme(Request $yemeklers){
    $adi=$yemeklers->adi;
    $icerik=$yemeklers->icerik;
    $turu=$yemeklers->turu;
    $fiyati=$yemeklers->fiyati;

    if($yemeklers->hasfile('yemek_image'))
     {
         $file = $yemeklers->file('yemek_image');
         $extenstion = $file->getClientOriginalExtension();
         $filename = time().'.'.$extenstion;
         $file->move('uploads/yemekler/', $filename);
         $yemeklers->yemek_image = $filename;
     }

        $yemek_image=$yemeklers->yemek_image;
        /*    $y = new yemekler;
                 $y->fill($yemeklers);
                 $y->save();
                             */
      yemekler::create(["adi"=>$adi,"icerik"=>$icerik,"turu"=>$turu,"fiyati"=>$fiyati,"yemek_image"=>$yemek_image,]);
    return redirect('/admin/yemek')->with('status','Yemek Eklendi');

  }
  public function show(){
    $data['firma']=DB::table('firmas')->get();
    $data['galeri']=DB::table('galeries')->get();
    $data['hepsi']=DB::table('yemeklers')->join('turlers','title','=','turu')->get();
    $data['turler']=DB::table('turlers')->get();
    $data['etkinlik']=DB::table('etkinliks')->get();
    return view('welcome',$data);
  }
  public function index(){
    $data['turler']=DB::table('turlers')->get();
    return view('admin.yemek_add',$data);
  }
  public function goster(){
    $data['hepsi']=DB::table('yemeklers')->join('turlers','title','=','turu')->get();
    $data['turler']=DB::table('turlers')->get();
    return view('admin.yemek_show',$data);
  }
  public function sil($id)
    {
          DB::table('yemeklers')->where('id', '=', $id)->delete();

          return redirect('/admin/yemekler')->with('status','Yemek Silindi');
    }



}
