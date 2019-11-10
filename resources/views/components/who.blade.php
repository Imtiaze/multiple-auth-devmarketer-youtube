@if (Auth::guard('web')->check())
    <p class="text-success">You are logged In as User !</p>
@else
    <p class="text-danger">You are log Out in as User !</p>
@endif

@if (Auth::guard('admin')->check())
    <p class="text-success">You are logged In as Admin !</p>
@else
    <p class="text-danger">You are log Out in as Admin !</p>
@endif
