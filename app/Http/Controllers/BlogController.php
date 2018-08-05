<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Exports\BladeExport;
use App\User as UserMod; 


class BlogController extends Controller
{
     public function index()
    {
        return "Method GET: Index";
    }

    public function demotwo()
    {
        return "Method POST: demotwo";
    }
    public function demothree()
    {
        return "Method GET, POST : demothree";
    }

    public function demofour()
    {
        return "Method GET, POST, PUT/PATCH, DELETE : demofour";
    }

    public function testlinenoti()
    {
        $line_noti_token = "z4YRiQ60kvVSOirFhqeqX0PpuUB43XC2w6O3nVimd7O";
        
        $message = array(
          'message' => "Hello World",//required message
          'stickerPackageId'=> 3,
          'stickerId'=> 34
        );
        
        notify_message($message,$line_noti_token);
        
        return 'ok';
    }
    public function testexcel(){
        $user = UserMod::all();
        return \Excel::download(new BladeExport($user->toArray()), 'invoices.xlsx');
 }



}
