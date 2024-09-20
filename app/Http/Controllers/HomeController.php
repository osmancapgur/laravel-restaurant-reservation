<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;
use DB;
use App\Models\Firma;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }
    public function show()
    {
      //  $a = Firma::where('id',2)->first();
        //$a = Firma::find(2);


        $data['firma']=DB::table('firmas')->get();
        $data['rezervasyon']=DB::table('rezervasyons')->select(DB::raw('count(*) as rez_count'))->get();
        $data['yemekler']=DB::table('yemeklers')->select(DB::raw('count(*) as yemek_count'))->get();
        $data['etkinlikler']=DB::table('etkinliks')->select(DB::raw('count(*) as etkinlik_count'))->get();
        $data['appointments']=DB::table('rezervasyons')->get();
        $data['resimsay']=DB::table('galeries')->select(DB::raw('count(*) as res_count'))->get();
        $data['date'] = Carbon::now()->format('Y-m-d');
        $data['rzgrafik']=DB::table('rezervasyons')->whereBetween('date', [Carbon::now()->startOfWeek(),Carbon::now()->endOfWeek()])->groupby('date')->select(DB::raw('count(*) as rg_count'))->get();
        $data['oldrzgrafik']=DB::table('rezervasyons')->whereBetween('date', [Carbon::now()->subDays(7)->startOfWeek(),Carbon::now()->subDays(7)->endOfWeek()])->groupby('date')->select(DB::raw('count(*) as rg_oldcount'))->get();

        $data['rezgetir']=DB::table('rezervasyons')->get();
        $data['mesajsayisi']=DB::table('iletisims')->select(DB::raw('count(*) as mesaj_count'))->get();
        $data['iletisim']=DB::table('iletisims')->orderBy('id', 'desc')->get();
        return view('admin.dashboards',$data);
    }


}
