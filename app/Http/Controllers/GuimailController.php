<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail as FacadesMail;
use Redirect,Response,DB,Config;
use Mail;
use Illuminate\Support\Facades\Session;
class GuimailController extends Controller {
    function guimaillienhe(Request $request){
        $input = $request->all();
          FacadesMail::send('mauthulienhe', 
            array(  'name'=>$input["name"],
                    'email'=>$input["email"], 
                    'content'=>$input['message'],
                    'phone'=>$input['phone'],
                    'title'=>$input['title'],
                   
             ), 
             
            function($message){
                $message
                ->from('nmtran666@gmail.com','Từ ứng dụng website')
                ->to('nmtran333@gmail.com', 'Ban quan tri')
                //->attach('img/a.png') // gửi đính kèm file nếu muốn
                ->subject('Thư liên hệ');
            //     if (FacadesMail::failures()) {
            //       return response()->Fail('Sorry! Please try again latter');
            //  }else{
            //       return response()->success('Great! Successfully send in your mail');
            //     } 
            }
            
          );
        
          Session::flash('thongbao', 'Đã gửi mail thành công');     
        // print_r($_POST);
        // echo "gửi mail thành công" ;
        return view("");
      }  
}
