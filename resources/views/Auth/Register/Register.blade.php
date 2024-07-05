<link rel="stylesheet" href="{{ asset('css/Auth/Register/RegisterStyle.css') }}">
<meta name="csrf-token" content="{{ csrf_token() }}">

<div class="form-container">
    <p class="title">Register</p>
    <form class="form">
        <div class="input-group">
            <label for="username">Username</label>
            <input type="text" name="username" id="username" placeholder="">
        </div>
        <div class="input-group">
            <label for="password">Password</label>
            <input type="password" name="password" id="password" placeholder="">
            <label for="confirmPassword">Confirm Password</label>
            <input type="password" name="confirmPassword" id="confirmPassword" placeholder="">
        </div>
        <button class="sign" type="button" onclick="register()">Register</button>
    </form>

</div>

@include('auth.js');
