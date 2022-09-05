<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Turler;
use App\Models\Yemekler;
use DB;
class TurController extends Controller
{
  public function ekleme(Request $turlers){
    $title=$turlers->title;
    turler::create(["title"=>$title,]);
    return redirect('/admin/yemek')->with('status','Yemek Türü Eklendi');

  }
  public function sil($title)
    {
          DB::table('turlers')->where('title', '=', $title)->delete();
          DB::table('yemeklers')->where('turu', '=', $title)->delete();

          return redirect('/admin/yemek')->with('status','Yemek Türü Silindi');
    }
    public function goster(){
      $data['sectur']=DB::table('turlers')->get();
      return redirect('/admin/yemek')->with($data);
    }
    public function edit($id)
  {
      $data['turler']=DB::table('turlers')->get();
      $data['sectur']=DB::table('turlers')->where('id', '=', $id)->get();
      return view('admin.tur_edit',$data);
  }
  public function update(Request $request, $title)
    {
        $turu=$request->title;
        $titles=$request->title;
        DB::table('turlers')->where('title', '=', $title)->update(['title' => $titles]);
        DB::table('yemeklers')->where('turu', '=', $title)->update(['turu' => $turu]);
        return redirect('/admin/yemek')->with('status','Yemek Türü Değiştirildi');
    }
  }
