<?php

class UsersController extends BaseController {

    public function index()
    {
        if (Auth::user() && Auth::user()->role == 'customer') {
            $downloads = Download::all();
            
            return View::make('downloads.index')->with('downloads', $downloads);
        }elseif (Auth::user() && Auth::user()->role == 'administrator') {
            $users = User::all();
            return View::make('users.index')->with('users', $users);
        }
        return View::make('login');
    }

    public function login()
    {
        return View::make('login');
    }

    public function do_login()
    {
        $username = Input::get('username');
        $password = Input::get('password');

        $login = array('username' => $username, 'password' => $password);

        if (Auth::attempt($login)) {
            return Redirect::to('/');
        }
        return Redirect::to('/');
    }

    public function edit_profile($username){
        if (Auth::user() && Auth::user()->role == 'administrator'){
        $user = User::where('username', '=', $username)->first();
        return View::make('users.user_account')->with('user', $user);
        }
        return Redirect::to('login');
    }

    public function do_edit_profile($username){
        $newemail = Input::get('email');
        $newusername = Input::get('username');
        $newpassword = Input::get('password');
        $userid = Input::get('user_id');

        $user = User::find($userid);
        $user->email = $newemail;
        $user->username = $newusername;
        $user->password = Hash::make($newpassword);
        $user->save();

        return Redirect::to('/edit/'.$newusername);

    }

    public function add_download($username){
        if (Auth::user() && Auth::user()->role == 'administrator') {
            $user = User::where('username', '=', $username)->first();
            $downloads = Download::lists('dname', 'did');
            // $download = UserUpload::where('fid', '=', $any)->first();
            $adds = Add::where('did_id', '=', Download::lists('did'));

            return View::make('users.add_download')->with('user', $user)->with('downloads', $downloads)->with('adds', $adds);
        }
        return Redirect::to('login');
    }

    public function do_add_download($username){
        if (Auth::user() && Auth::user()->role == 'administrator') {
            $did_id = Input::get('download');
            $user_id = Input::get('user_id');
            $fromdate = Input::get('fromdate');
            $todate = Input::get('todate');

            $download = new Add(array('did_id' => $did_id, 'user_id' => $user_id, 'created_at' => $fromdate, 'updated_at' => $todate));
            $download->save();
            return Redirect::to('/add/'.$username);
        }
    }

    public function do_download($file){
        //return Str::random(100);
    if (Auth::check()) {
        // return Redirect::to('https://www.sugarsync.com/pf/D9604663_69636075_6847618?directDownload=true');

        $pathToFile = '/Users/myalienvirus/Sites/downloads/public/downloads/';
        return Response::download($pathToFile.'office11.Mac.iso');
    }
    return Redirect::to('/');
    }

}


