<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\User;
use App\Model\Role;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    protected $folder   = 'admin.user';
    protected $rdr      = 'admin/user';
    public function index()
    {
      $users  = User::all();
      return view($this->folder.'.index', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      $roles   = Role::all();
      return view($this->folder.'.create', compact('roles'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if($request->hasFile('photo'))
        {
          $photo            = $request->file('photo');
          $path            = $photo->store('public/users_img');
          $user            = new User;
          $user->photo      = $path;
          $user->name      = $request->name;
          $user->email     = $request->email;
          $user->password  = bcrypt($request->password);
          $user->role_id   = $request->role;
          $user->save();
        }
        else
        {
          $user            = new User;
          $user->name      = $request->name;
          $user->email     = $request->email;
          $user->password  = bcrypt($request->password);
          $user->role_id   = $request->role;
          $user->save();
        }
        return redirect($this->rdr)->with('success','Data berhasil ditambahkan!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $users  = User::find($id);
        $roles  = Role::all();
        return view($this->folder.'.edit',compact('users','roles'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
      $pass   = $request->password;
      $expass = User::find($id);
      if(empty($pass))
      {
        $pass = $request->password2;
      }
      else {
        $pass = bcrypt($request->password);
      }
      if($request->hasFile('photo'))
      {
        $photo            = $request->file('photo');
        $path            = $photo->store('public/users_img');
      }
      else{
        $path = $request->file('photo');
      }
      $request->merge([
        'password' => $pass,
        'photo' => $path,
      ]);
      User::find($id)->update($request->all());
      return redirect($this->rdr)->with('success','Data berhasil diubah!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        User::find($id)->delete();
        return redirect($this->rdr)->with('success', 'Data berhasil dihapus!');
    }
}
