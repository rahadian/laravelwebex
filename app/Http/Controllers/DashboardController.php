<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use DB;
class DashboardController extends Controller
{
    public function index()
    {
    	$kategori = DB::table('t_page')
            // ->where('id_supsection', '=', 0)
            // ->where('status', '=', 1)
            ->limit(5)
            ->offset(0)
            // ->orderBy('position', 'asc')
            // ->whereNotIn('id_section', [34])
            ->select('t_page.*')
            ->get();


        $page       = 'Dashboard';
	    $config     = 'http://localhost/yahya2/';
	    $css        = $config.'public/css/';
	    $js         = $config.'public/js/';
	    $font       = $config.'public/font/';
	    $images     = $config.'public/images/';
	    // $timthumb   = $config.'/timthumb.php?src=';
	    // $upload     = 'http://dev.utakatikotak.com/watyutink.com/upload/';
	    // $mimin      = 'http://dev.utakatikotak.com/static/mimin/';
	    return view('dashboard.index',
    	 ['page'        => $page,
         'kategori'     => $kategori,
         'css'		    => $css,
    	 'js'		    => $js,
    	 'font'		    => $font,
         'config'       => $config,
    	 'images'	    => $images
       	]);
    }
}
