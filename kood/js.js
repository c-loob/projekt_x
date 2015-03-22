function appPropagation() {
    //"use strict";
	"use Transitional;"
    $.ajax({
        url: 'login.php',
        dataType: 'json',
        success: function (data) {
            console.log(data);
                // do whatever you want.
                // data.status: bool, true => login
                // [data.message: string]
                // [data.more: string]
            
        }
    });
}

function login() {
    //"use strict";
	"use Transitional;"
    document.cookie = 'fb_token=' + FB.getAuthResponse().accessToken;
    appPropagation();
   
}

function logout() {
    //"use strict";
	"use Transitional;"
    document.cookie = 'fb_token=; expires=Thu, 01 Jan 1970 00:00:01 GMT;';
    appPropagation()
    
    
}

function loginStatusChangeCallback(response) {
   // "use strict";
	"use Transitional;"


    if (response.status === 'connected') {
        login();
    } else {
        logout();
    }
}

function checkLoginState() {
   // "use strict";
	"use Transitional;"

    FB.getLoginStatus(function (response) {
        loginStatusChangeCallback(response);
    });
}

window.fbAsyncInit = function () {
   // "use strict";
	"use Transitional;"

    FB.init({
        appId      : '1604288763142467',
        cookie     : true,
        xfbml      : true,
        version    : 'v2.0'
    });

    checkLoginState();
    

};

(function (d, s, id) {
   // "use strict";
	"use Transitional;"

    var js, fjs = d.getElementsByTagName(s)[0];
    if (d.getElementById(id)) {
        return;
    }
    js = d.createElement(s);
    js.id = id;
    js.src = "//connect.facebook.net/en_US/sdk.js";
    fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));
