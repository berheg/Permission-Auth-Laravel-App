<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\Role;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Illuminate\Support\Facades\DB;

class SettingController extends Controller
{
  /**
   * Display the registration view.
   *
   * @return \Illuminate\View\View
   */
  public function create()
  {
      return view('setting');
  }

  /**
   * Handle an incoming registration request.
   *
   * @param  \Illuminate\Http\Request  $request
   * @return \Illuminate\Http\RedirectResponse
   *
   * @throws \Illuminate\Validation\ValidationException

   */
  public function store(Request $request)
  {
      $request->validate([

          'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
          'role_id' => ['required', 'number'],
      ]);
      error_log($request->email);
      error_log($request->role_id);
      $user_id = DB::table('users')->where('email',  $request->email)->value('id');
      /*$user = User::where('email', $request->email)->get();
      $user = User::findOrFail('email', $request->email);*/
      //$user = DB::table('users')->where('email',  $request->email)->first();
      //$user->attachRole($request -> role_id);
      DB::table('role_user')->insert([
    'role_id' => $request -> role_id, 'user_id' => $user_id
]);

      event(new Registered($user));
      Auth::login($user);

      return redirect(RouteServiceProvider::HOME);
}
}
