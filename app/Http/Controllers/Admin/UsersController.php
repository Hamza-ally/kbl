<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\UsersStoreRequest;
use App\Http\Requests\Admin\UsersUpdateRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Spatie\Permission\Models\Role;

class UsersController extends Controller
{

    public function show(){
        $query = "
            SELECT usr.name, usr.email, usr.created_at, r.name AS 'role_name' FROM
            users usr
            INNER JOIN model_has_roles as mhr ON usr.id = mhr.model_id
            INNER JOIN roles as r ON r.id = mhr.role_id
            WHERE r.name != 'admin'
            ORDER BY usr.id DESC;
        ";

        $users = collect(DB::select($query))->toArray();
        return view('admin/users/view', compact('users'));
    }

    public function create(){
        return view('admin/users/create');
    }

    public function store(UsersStoreRequest $request){
        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = bcrypt($request->password);

        if($user->save())
            if($user->assignRole($request->role))
                return redirect()->route('admin.dashboard')
                ->with('message', 'User created!')
                ->with('type', 'success')
                ->with('status', 'success')
                ->with('code', 200);
            else{
                $user->delete();
                return redirect()->route('admin.dashboard')
                ->with('message', 'User not created, issue with role!')
                ->with('type', 'warning')
                ->with('status', 'warning')
                ->with('code', 409);
            }
        else
            return redirect()->route('admin.dashboard')
            ->with('message', 'User not created!')
            ->with('type', 'warning')
            ->with('status', 'warning')
            ->with('code', 409);

        return redirect()->back()
        ->with('message', 'Internal server error!')
        ->with('type', 'error')
        ->with('status', 'danger')
        ->with('code', 409);
    }

    public function edit(string $id){
        $query = "
            SELECT usr.id, usr.name, usr.email, r.name AS 'role_name' FROM
            users usr
            INNER JOIN model_has_roles as mhr ON usr.id = mhr.model_id
            INNER JOIN roles as r ON r.id = mhr.role_id
            WHERE usr.id = ?
            LIMIT 1;
        ";
        $user = collect(DB::select($query, [$id])[0])->toArray();

        return view('admin/users/edit', compact('user'));
    }

    // UsersUpdateRequest
    public function update (Request $request){
        $user = User::where('id', $request->user_id)->first();

        if($request->has('name'))
            $user->name = $request->name;
        
        if($request->has('email'))
            $user->email = $request->email;
        
        if($request->has('password'))
            $user->password = bcrypt($request->password);
        
        if($request->has('role'))
            $user->syncRoles([$request->role]);
        
        if($user->save())
            return redirect()->route('admin.dashboard')
            ->with('message', 'User updated!')
            ->with('type', 'success')
            ->with('status', 'success')
            ->with('code', 200);
        
        return redirect()->back()
        ->with('message', 'Internal server error!')
        ->with('type', 'error')
        ->with('status', 'danger')
        ->with('code', 409);
    }
}
