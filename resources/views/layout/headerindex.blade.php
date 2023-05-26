<div class="header" style="top: 0px;">
            <div class="brand">
                <h1 class="red">Music</h1>
                <h1 class="red">Online</h1>
            </div>
            <div class="main-nav">
                <a href="{{ route('index')}}" class="button-container">
                    <h2>Home</h2>
                </a>
                <a href="#" class="button-container">
                    <h2>Music</h2>
                </a>
                <a href="#" class="button-container">
                    <h2>Trending</h2>
                </a>
                <a href="#" class="button-container">
                    <h2>Releases</h2>
                </a>
                <a href="#" class="button-container">
                    <h2>Search</h2>
                </a>
            </div>
            @if ($user)
<div class="avatar">
  <!-- <img src="{{ $user->avatar_url }}" alt="AVATAR" class="avatar-img" onclick="toggleAccountInfo()"> -->
  <img src="http://windows79.com/wp-content/uploads/2021/02/Thay-the-hinh-dai-dien-tai-khoan-nguoi-dung-mac.png" alt="AVATAR" class="avatar-img" onclick="toggleAccountInfo()" style="margin-left: 100px"><a style="margin-left: 10px;"
>{{ $user->display_name }}</a>
<div id="account-info" class="account-info show" style="height: 205px;margin-left: 100px;">
    <p class="info">Display Name: {{ $user->display_name }}</p>
    <p class="info">Username: {{ $user->username }}</p>
    <p class="info">Email: {{ $user->email }}</p>
    <p class="info">Role: {{ $user->role }}</p>


    <form method="POST" action="{{ route('logout') }}">
      @csrf

      <button type="submit" class="logout-btn" style="font-size:20px">Logout</button>
    </form>
  </div>
</div>
@else
            <div class="right-nav">
                <div class="button-container login">
                    <a href="{{ route('login')}}">User Login</a>
                </div>
                <div class="button-container create">
                    <a href="{{ route('register')}}">Create Account</a>
                </div>
                <div class="button-container admin">
                    <a href="{{ route('adminlogin')}}">Admin Login</a>
@endif
                </div>
            </div>
            </div>
            </div>









