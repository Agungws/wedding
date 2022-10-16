// $access_token = "EAAAAAYsX7TsBAH1efzbZAhqJREQfwzZCNIZBgGVbpxoLaoZBOVx4KminpzqkiczMC19pVdjqX6fVj3jIxxdGaROSyr04ZCYmhSe59UMZAwZAKH5YJ7dnawHwgYSLvbJa4TV8kqAkO6l5mcgVIVfeE6trgm7hh01RJ7SB0hDc7scQ8YineE0exabZCmuYOvnldngEopPEYBZAZBVCZC4knDHGNZCKwk0fj36526MZD";


// function getFacebookIdFromUrlandUsername($url,$access_token) {
// /**
//  * Taken from https://www.allautoliker.com/find_id, the valid formats are:
//  * dr.p.pareek
//  * https://www.facebook.com/leloweb
//  * https://m.facebook.com/dr.p.pareek
//  * https://www.facebook.com/profile.php?id=100001148755604
//  */
// $correctURLPattern = '/^https?:\/\/(?:www|m)\.facebook.com\/(?:profile\.php\?id=)?([a-zA-Z0-9\.]+)$/';
// if (!preg_match($correctURLPattern, $url, $matches)) {
//     $getinf = 'https://graph.facebook.com/' .$url.'/?access_token='.$access_token;
//     $info = json_decode(file_get_contents($getinf), true);
//     return $info;
// }else{
//     $getinf = 'https://graph.facebook.com/' .$matches[1].'/?access_token='.$access_token;
//     $info = json_decode(file_get_contents($getinf), true);
//     return $info;
// }
// }
// $find_id = "dr.p.pareek";
// $user = getFacebookIdFromUrlandUsername($find_id,$access_token);
//  //echo '<pre>';
// //print_r($user);

// echo $user['id'];


window.fbAsyncInit = function () {
    FB.init({
        appId: '{your-app-id}',
        cookie: true,
        xfbml: true,
        version: '{api-version}'
    });

    FB.AppEvents.logPageView();

};

(function (d, s, id) {
    var js, fjs = d.getElementsByTagName(s)[0];
    if (d.getElementById(id)) { return; }
    js = d.createElement(s); js.id = id;
    js.src = "https://connect.facebook.net/en_US/sdk.js";
    fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));

