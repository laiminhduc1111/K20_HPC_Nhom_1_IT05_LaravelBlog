<?php
namespace App\Http\Services\menu;

use App\Models\Menu;
use App\Models\User;
use Illuminate\Contracts\Session\Session;
use Illuminate\Support\Facades\Session as FacadesSession;
use PhpParser\Node\Stmt\TryCatch;

class MenuService
{
    public function create($request)
    {
        try{
            User::create([
                'name'=>(string)$request->input('name'),
                'email'=>(string)$request->input('email'),
                'password'=>(string)$request->input('password'),
                
            

            ]);
           FacadesSession::flash('success','Tạo tài khoảnc thành công');
        }
        catch(\Exception $err)
        {
            FacadesSession::flash('error',$err->getMessage());
            return false;
        }
        return true;

    }
    

}