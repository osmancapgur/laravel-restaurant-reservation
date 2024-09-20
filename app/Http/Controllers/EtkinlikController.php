<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Etkinlik;
use DB;
class EtkinlikController extends Controller
{
  public function kaydet(Request $request)
 {
     $etkinliks = new Etkinlik;
     $etkinliks->title = $request->input('title');
     $etkinliks->content = $request->input('content');
     $etkinliks->price = $request->input('price');


     if($request->hasfile('etkinlik_image'))
     {
         $file = $request->file('etkinlik_image');
         $extenstion = $file->getClientOriginalExtension();
         $filename = time().'.'.$extenstion;
         $file->move('uploads/etkinlik/', $filename);
         $etkinliks->etkinlik_image = $filename;
     }

     $etkinliks->save();
     return redirect()->back()->with('message','Etkinlik Oluşturuldu');
 }
     public function index(){
       return view('admin.etkinlik_add');
     }
     public function insert(){
       $data['etkinlik']=DB::table('etkinliks')->get();
       return view('admin.etkinlik_show',$data);
     }
     public function sil($id)
       {
             DB::table('etkinliks')->where('id', '=', $id)->delete();

             return redirect('/admin/etkinlikler')->with('status','Etkinlik Silindi');
       }
       public function edit($id)
     {
         $data['etkinlik']=DB::table('etkinliks')->where('id', '=', $id)->get();
         return view('admin.etkinlik_edit',$data);
     }
       public function update(Request $request,  $id)
           {
               $data = Etkinlik::find($id);
               $data->title = $request->input('title');
               $data->content =  $request->input('content');
               $data->price = $request->input('price');
               if ($request->hasfile('etkinlik_image'))
               {
                 $file = $request->file('etkinlik_image');
                 $extenstion = $file->getClientOriginalExtension();
                 $filename = $data->etkinlik_image.'.'.$extenstion;
                 $file->move('uploads/etkinlik/', $filename);
                 $data->etkinlik_image = $filename;
                 $data->update(['etkinlik_image' => $filename]);
               }
               $data->update();

               return redirect('/admin/etkinlikler')->with('status','Etkinlik güncellendi');

           }


}
