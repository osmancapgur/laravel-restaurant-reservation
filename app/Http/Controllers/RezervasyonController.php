<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Rezervasyon;
use DB;
class RezervasyonController extends Controller
{
  public function post(Request $request){
    $form=$request->post();
    print_r($form);
}
  public function ekleme(Request $rezervasyons){
    $name=$rezervasyons->name;
    $email=$rezervasyons->email;
    $phone=$rezervasyons->phone;
    $date=$rezervasyons->date;
    $time=$rezervasyons->time;
    $visitors=$rezervasyons->visitors;
    $message=$rezervasyons->message;
    rezervasyon::create(["name"=>$name,"email"=>$email,"phone"=>$phone,"date"=>$date,"time"=>$time,"visitors"=>$visitors,"message"=>$message,]);
    $data['rezsayi']=DB::table('rezervasyons')->where("id",">",0)->count();
    $data['rezervasyon']=DB::table('rezervasyons')->orderBy('id','desc')->take(1)->get();
    return view('rezervasyon',$data);

  }
  public function add(Request $rezervasyons){
    $name=$rezervasyons->name;
    $email=$rezervasyons->email;
    $phone=$rezervasyons->phone;
    $date=$rezervasyons->date;
    $time=$rezervasyons->time;
    $visitors=$rezervasyons->visitors;
    $message=$rezervasyons->message;
    rezervasyon::create(["name"=>$name,"email"=>$email,"phone"=>$phone,"date"=>$date,"time"=>$time,"visitors"=>$visitors,"message"=>$message,]);
    return redirect('/admin/rezervasyonekle')->with('message','Rezervasyonunuz İletildi');

  }
  public function goster(){
    $data['rezervasyon']=DB::table('rezervasyons')->orderBy('id', 'desc')->get();
    return view('admin.rezervasyon_show',$data);
  }
  public function sil($id)
    {
          DB::table('rezervasyons')->where('id', '=', $id)->delete();

          return redirect('/admin/rezervasyonlar')->with('status','Rezervasyon Silindi');
    }
    public function insert(Request $rezervasyons){
      return view('admin.rezervasyon_add');
    }


    public function update(Request $request,  $id)
        {
            $data = Rezervasyon::find($id);
            $data->name = $request->input('name');
            $data->email =  $request->input('phone');
            $data->date = $request->input('date');
            $data->time = $request->input('time');
            $data->visitors = $request->input('visitors');
            $data->phone = $request->input('phone');
            $data->message = $request->input('message');
            $data->update();
            return redirect('/admin/rezervasyonlar')->with('status','Rezervasyon güncellendi');

        }
        public function edit($id)
      {
          $data['secrez']=DB::table('rezervasyons')->where('id', '=', $id)->get();
          return view('admin.rezervasyon_edit',$data);
      }



}
