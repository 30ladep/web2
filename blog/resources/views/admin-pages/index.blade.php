@extends('admin-layout.admin-layout')
@section('content')


<!-- <div>
    <fb:login-button 
        scope="public_profile,email"
        onlogin="checkLoginState();">
    </fb:login-button>
</div> -->
<script>
  //facebook login
    window.fbAsyncInit = function () {
      FB.init({
        appId: "1114114352401912",
        cookie: true,
        xfbml: true,
        version: "v10.0",
      });

      FB.AppEvents.logPageView();

      FB.getLoginStatus(function (response) {
        if (response.status == "connected") {
          $("#box").show();
          $("#login").hide();
          FB.api("/me?fields=picture", function (response) {
            $("img").attr("src", response.picture.data.url);
          });
          FB.api("/me", function (response) {
            $("#name").text("hi " + response.name);
          });
        }
        statusChangeCallback(response);
      });
    };

    (function (d, s, id) {
      var js,
        fjs = d.getElementsByTagName(s)[0];
      if (d.getElementById(id)) {
        return;
      }
      js = d.createElement(s);
      js.id = id;
      js.src = "https://connect.facebook.net/en_US/sdk.js";
      fjs.parentNode.insertBefore(js, fjs);
    })(document, "script", "facebook-jssdk");

    function checkLoginState() {
      FB.getLoginStatus(function (response) {
        if (response.status == "connected") {
          $("#box").show();
          $("#login").hide();
          FB.api("/me?fields=picture", function (response) {
            $("img").attr("src", response.picture.data.url);
          });
          FB.api("/me", function (response) {
            $("#name").text("hi " + response.name);
          });
        }
        statusChangeCallback(response);
      });
    }
  </script>
@endsection