<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Iletisim;
use DB;
class IletisimController extends Controller
{

  public function post(Request $request){
    $form=$request->post();
    print_r($form);
}
  public function ekleme(Request $iletisims){
    $name=$iletisims->name;
    $email=$iletisims->email;
    $subject=$iletisims->subject;
    $message=$iletisims->message;
    iletisim::create(["name"=>$name,"email"=>$email,"subject"=>$subject,"message"=>$message,]);
    $data['iletisim']=DB::table('iletisims')->orderBy('id','desc')->take(1)->get();
    return view('iletisim',$data);
    echo "Mesajınız İletildi";
  }
  public function sil($id)
    {
          DB::table('iletisims')->where('id', '=', $id)->delete();

          return redirect('/admin/dashboard')->with('status','Mesaj Silindi');
    }

}
