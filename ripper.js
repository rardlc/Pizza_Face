      window.fbAsyncInit = function() {
        FB.init({
          appId      : '389715768118347',
          cookie     : true,
          xfbml      : true,
          version    : 'v2.11'
        });


        FB.getLoginStatus(function(response) {
          statusChangeCallback(response);
        });

      };

      (function(d, s, id){
         var js, fjs = d.getElementsByTagName(s)[0];
         if (d.getElementById(id)) {return;}
         js = d.createElement(s); js.id = id;
         js.src = "https://connect.facebook.net/en_US/sdk.js";
         fjs.parentNode.insertBefore(js, fjs);
       }(document, 'script', 'facebook-jssdk'));

       function statusChangeCallback(response){
         if(responce.status === 'connected'){
           console.log('logged in and authenticated');
         }
         else{
           console.log('Not authenticated');
         }


       }