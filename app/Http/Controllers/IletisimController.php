<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Iletisim;
use DB;
class IletisimController extends Controller
{
  public function ekleme(Request $iletisims){
    $name=$iletisims->name;
    $email=$iletisims->email;
    $subject=$iletisims->subject;
    $message=$iletisims->message;
  //  iletisim::create(["name"=>$name,"email"=>$email,"subject"=>$subject,"message"=>$message]);
    $modelIletisim = new Iletisim;
    $modelIletisim->name = $name;
    $modelIletisim->email = $email;
    $modelIletisim->subject = $subject;
    $modelIletisim->message = $message;
    $modelIletisim->save();
    //$data['iletisim']=DB::table('iletisims')->orderBy('id','desc')->take(1)->get();
    $data['firma']=DB::table('firmas')->get();
    return view('iletisim',compact("modelIletisim"),$data);
    echo "Mesajınız İletildi";
  }
  public function sil($id)
    {
          DB::table('iletisims')->where('id', '=', $id)->delete();

          return redirect('/admin/dashboard')->with('status','Mesaj Silindi');
    }
    public function show(){
      $data['firma']=DB::table('firmas')->get();
      return view('iletisim',$data);
    }

}
