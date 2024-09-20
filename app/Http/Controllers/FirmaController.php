<?php

namespace App\Http\Controllers;
use App\Models\Firma;
use DB;
use Illuminate\Http\Request;



class FirmaController extends Controller
{
    public function goster(){
      $data['firma']=DB::table('firmas')->get();
      return view('admin.firma',$data);
    }
    public function kaydet(Request $request)
   {
       $firmas = new Firma;
       $firmas->adi = $request->input('adi');
       $firmas->slogani = $request->input('slogani');
       $firmas->konumu = $request->input('konumu');
       $firmas->saatleri = $request->input('saatleri');
       $firmas->maili = $request->input('maili');
       $firmas->telefonu = $request->input('telefonu');
       $firmas->key = $request->input('key');



       if($request->hasfile('restorant_image'))
       {
           $file = $request->file('restorant_image');
           $extenstion = $file->getClientOriginalExtension();
           $filename = time().'.'.$extenstion;
           $file->move('uploads/restorant/', $filename);
           $firmas->restorant_image = $filename;
       }

       $firmas->save();
       return redirect()->back()->with('message','Firma Bilgileri Eklendi');
   }

    public function update(Request $request,  $id)
        {
            $data = Firma::find($id);
            $data->adi = $request->input('adi');
            $data->slogani =  $request->input('slogani');
            $data->konumu = $request->input('konumu');
            $data->saatleri = $request->input('saatleri');
            $data->maili = $request->input('maili');
            $data->telefonu = $request->input('telefonu');
            $data->key = $request->input('key');
            if ($request->file('restorant_image')!=null)
            {
              $file = $request->file('restorant_image');
              $extenstion = $file->getClientOriginalExtension();
              $filename = time().'.'.$extenstion;
              $file->move('uploads/restorant/', $filename);
              $data->restorant_image = $filename;
            }
            if ($request->file('kapak_image')!=null)
            {
              $file = $request->file('kapak_image');
              $extenstion = $file->getClientOriginalExtension();
              $filename = 'hero-bg'.'.'.$extenstion;
              $file->move('uploads/cover/', $filename);
              $data->kapak_image = $filename;
            }
            $data->update();
            return redirect('/admin/restorant')->with('status','Bilgiler güncellendi');

        }
}
