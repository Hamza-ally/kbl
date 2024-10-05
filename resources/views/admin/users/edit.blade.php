<form action="{{ route('admin.users.edit') }}" method="POST">
    @csrf
    <input type="hidden" name="user_id" value="{{$user['id']}}">
    <div class="form-group">
        <label for="name">Name</label>
        <input type="text" id="name" name="name" value="{{$user['name']}}">
        @if ($errors->has('name'))
            <div class="alert alert-danger" role="alert">
                {{$errors->first('name')}}
            </div>
        @endif
    </div>
    <div class="form-group">
        <label for="email">Email</label>
        <input type="email" id="email" name="email" value="{{$user['email']}}">
        @if ($errors->has('email'))
            <div class="alert alert-danger" role="alert">
                {{$errors->first('email')}}
            </div>
        @endif
    </div>
    <div class="form-group">
        <label for="password">Password</label>
        <input type="password" id="password" name="password">
        @if ($errors->has('password'))
            <div class="alert alert-danger" role="alert">
                {{$errors->first('password')}}
            </div>
        @endif
    </div>
    <div class="form-group">
        <label for="role">Role</label>
        <select id="role" name="role">
            <option>Select</option>
            <option value="admin" @if($user['role_name'] === 'admin') selected @endif>Admin</option>
            <option value="manager" @if($user['role_name'] === 'manager') selected @endif>Manager</option>
            <option value="user" @if($user['role_name'] === 'user') selected @endif>User</option>
        </select>
        @if ($errors->has('role'))
            <div class="alert alert-danger" role="alert">
                {{$errors->first('role')}}
            </div>
        @endif
    </div>
    <button type="submit" class="submit-btn">Create User</button>
</form>