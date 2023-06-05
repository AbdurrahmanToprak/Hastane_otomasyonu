<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Giriş Yap</title>
    <link rel="stylesheet" href="{{url('css/userlogin/login.css')}}">
</head>
<body>
<div class="login-box">

    <img src="https://upload.wikimedia.org/wikipedia/tr/archive/9/9e/20200316220122%21Saglikbakanligi_logo.png" width="100" height="100"  alt="logo">

    <h2>Giriş Yap</h2>
    @if (session('error'))
        <div class="alert alert-error">
            <ul>
                <li>{{session('error')}}</li>
            </ul>
        </div>
    @endif
    <form action="{{route('login')}}" method="post"> <!-- action kısmı problem sebebiyle silindi-->
        @csrf
        <div class="user-box">
            <input type="text" name="tc_identity" maxlength="11"   required="">
            <label>TC KİMLİK NUMARASI</label>

        </div>
        <div class="user-box">
            <input type="password" name="password" required="">
            <label>Şifre</label>
        </div>

        <div>
            <input type='checkbox' name='remember_me' value='on' style="margin-top: 20px;">
            <label style="color: white">Beni Hatırla</label>
        </div>

        <button type="submit" style="background-color:rgb(20,30,48);color:white;width:90px; height:35px; font-size: 16px;
        border: solid 7px rgb(20,30,48); cursor: pointer; outline: none; border-radius: 30px;"> Gönder </button>
        <a href="register">
            Kayıt Ol
        </a>




    </form>


</div>

</body>
</html>
