<?php

namespace App\Http\Controllers;
use App\Models\Galery;
use DB;
use Illuminate\Http\Request;


class GaleryController extends Controller
{
    public function goster(){
      $data['galeri']=DB::table('galeries')->get();
      return view('admin.galeri',$data);
    }
    public function kaydet(Request $galeries)
   {
     if($galeries->hasfile('galeri_image'))
      {
          $file = $galeries->file('galeri_image');
          $extenstion = $file->getClientOriginalExtension();
          $filename = time().'.'.$extenstion;
          $file->move('uploads/galeri/', $filename);
          $galeries->galeri_image = $filename;
      }

         $galeri_image=$galeries->galeri_image;
       Galery::create(["galeri_image"=>$galeri_image,]);
       return redirect()->back()->with('status','Resim Eklendi');
   }
   public function eklegoster(){

     return view('admin.galeri_ekle');
   }
   public function sil($galeri_image)
     {
           DB::table('galeries')->where('galeri_image', '=', $galeri_image)->delete();

           return redirect('/admin/galeri')->with('status','Resim Silindi');
     }
     public function update(Request $request,  $id)
         {
             $data = Galery::find($id);

             if ($request->file('galeri_image')!=null)
             {
               $file = $request->file('galeri_image');
               $extenstion = $file->getClientOriginalExtension();
               $filename = time().'.'.$extenstion;
               $file->move('uploads/galeri/', $filename);
               $data->galeri_image = $filename;
             }
             $data->update();
             return redirect('/admin/galeri')->with('status','Resim güncellendi');

         }


}
