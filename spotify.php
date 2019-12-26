<?PHP
    // error_reporting(E_ALL); ini_set('display_errors', 1);

    require_once("spotifyapi.php");

    function writeSpotifyJSON($newData) {
        file_put_contents("spotify.json", json_encode($newData, JSON_UNESCAPED_UNICODE));
    }

    function emptySpotifyJSON() {
        $newData = array();
        $newData["initialized"] = false;
        $newData["access_token"] = null;
        $newData["expires_on"] = 0;
        $newData["refresh_token"] = null;
        file_put_contents("spotify.json", json_encode($newData, JSON_UNESCAPED_UNICODE));
    }

    if (!file_exists("spotify.json")) {
        emptySpotifyJSON();
    }

    $spotifyData = json_decode(file_get_contents("spotify.json"), true);

    if (isset($_GET['code']) && $spotifyData["initialized"] === false) {
        // first setup
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL,"https://accounts.spotify.com/api/token");
        curl_setopt($ch, CURLOPT_POST, 1);
        // $spotifyClientId and $spotifyClientId are set in spotifyapi.php
        curl_setopt($ch, CURLOPT_USERPWD, $spotifyClientId.":".$spotifyClientId);
        curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query(array('grant_type' => 'authorization_code', 'code' => $_GET['code'], 'redirect_uri' => "https://freekb.es/spotify.php")));
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        $response = curl_exec($ch);
        curl_close($ch);
        
        if ($response !== false ) {
            $jsonResponse = json_decode($response, true);
            // echo json_encode($jsonResponse, JSON_UNESCAPED_UNICODE|JSON_PRETTY_PRINT);
            $newData["initialized"] = true;
            $newData["access_token"] = $jsonResponse["access_token"];
            $newData["expires_on"] = time() + intval($jsonResponse["expires_in"]);
            $newData["refresh_token"] = $jsonResponse["refresh_token"];
            writeSpotifyJSON($newData);
            echo '200 initialized';
            http_response_code(200);
        }
        else {
            emptySpotifyJSON();
            echo '503 error';
            http_response_code(503);
        }
    }
    else {
        echo '403 forbidden';
        http_response_code(403);
        die();
    }
?>