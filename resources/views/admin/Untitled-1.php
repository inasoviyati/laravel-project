$user = User::all();
        
return view('home',[
 'users' => $user,
]);
