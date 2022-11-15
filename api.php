<?php
// singleton database instance
class Database
{
    // my class variables 

    public static function instance()
    {
        static $instance = null;
        if ($instance === null) $instance = new Database();
        return $instance;
    }
    private function __construct()
    {
        // connecting to the database
        $this->conn = mysqli_connect("wheatley.cs.up.ac.za", "u20485001", "HM25O3NPZMZLSZVGPUXAP3CPPHYJOUFQ", "u20485001");
    }
    public function __destruct()
    {
        // terminating the connection to the database
        mysqli_close($this->conn);
    }
    public function retrieveUser($username)
    {
        // retrieving the user from the database

        $query = "SELECT * FROM users WHERE name='$username'";
        $result = $this->conn->query($query);

        return $result;
    }
}
$db = Database::instance();

$key = '';
$type = '';
$title = '';
$author = '';
$date = '';
$return = [];

$body = file_get_contents('php://input');
$body = json_decode($body, true);



if (array_key_exists('key', $body)) {
    $key =  $body["key"];
}
if (array_key_exists('type', $body)) {
    $type =  $body["type"];
} else {
    echo '<script>alert("Type parameter is required in the url")</script>';
    exit;
}
if (array_key_exists('title', $body)) {
    $title =  $body["title"];
}
if (array_key_exists('author', $body)) {
    $author =  $body["author"];
}
if (array_key_exists('date', $body)) {
    $date =  $body["date"];
    $date = strtotime($date('Y-m-d H:i:s'));
}
if (array_key_exists('return', $body)) {
    $return =  $body["return"];
}

// basic authentication

if (!isset($_SERVER['PHP_AUTH_USER'])) {
    header('WWW-Authenticate: Basic realm="My Realm"');
    header('HTTP/1.0 401 Unauthorized');
    echo "<h1 style='text-align: center'>Login Failed, Please login to continue using this api</h1>";
    exit;
} else {
    // making a simple user authenticatoin

    $user = $db->retrieveUser($_SERVER['PHP_AUTH_USER']);
    if (!empty($user) && $user->num_rows > 0) {
        // the user exists
        foreach ($user as $rec) {
            if (password_verify($_SERVER['PHP_AUTH_PW'], $rec['password'])) {
                echo "<script>console.log('logged in')</script>";
                continue;
            } else {
                echo "<script>console.log('user not found')</script>";
                exit;
            }
        }
    } else {
        // is the username is not found

    }
}
// the user not found
$query = "SELECT * FROM users WHERE apiKey='$key'";
$result = $db->conn->query($query);

if (!empty($result) && $result->num_rows > 0) {


    // searching the data from the newapi's
    if ($type == 'info') {
        if (!($return == null)) {

            // if the user wants to return anything
            if ($return == '*') {

                // the gnews api
                $gnewsAPIString = http_build_query([
                    'token' => '14bf5a678275db0ecf21c86aefe12773',
                    'title' => $title,
                    'author' => $author,
                    'publishedAt' => $date,
                    'max' => 100,
                    'lang' => 'en'
                ]);
                $gnewsCurl = curl_init(sprintf('%s?%s', 'https://gnews.io/api/v4/top-headlines', $gnewsAPIString));
                curl_setopt($gnewsCurl,CURLOPT_RETURNTRANSFER,true );
                $gnewsData = curl_exec($gnewsCurl);
                curl_close($gnewsCurl);

                $gnewsData = json_decode($gnewsData, true);

                // the news api
                $queryString = http_build_query([
                    'api_token' => '6PrT5g1tOc5vhk594pZxFwJkHMHXOZhviMc3MK7z',
                    'title' => $title,
                    'author' => $author,
                    'published_at' => $date,
                    'limit' => 5,
                    'language' => 'en'
                ]);

                $ch = curl_init(sprintf('%s?%s', 'https://api.thenewsapi.com/v1/news/all', $queryString));
                curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

                $json = curl_exec($ch);     // the response json object from the newsDataAPI

                curl_close($ch);

                $apiResult = json_decode($json, true);

                // searching for the required data in the json string


                $response_object = array(
                    'status' => 'success',
                    'timestamp' => strtotime(date('Y-m-d H:i:s')),
                    'data' => array_merge($apiResult['data'],$gnewsData['articles'])
                );

                $response_object = json_encode($response_object);
                echo $response_object;
            } else {

                // the gnews api
                $gnewsAPIString = http_build_query([
                    'token' => '14bf5a678275db0ecf21c86aefe12773',
                    'title' => $title,
                    'author' => $author,
                    'publishedAt' => $date,
                    'max' => 100,
                    'lang' => 'en'
                ]);
                $gnewsCurl = curl_init(sprintf('%s?%s', 'https://gnews.io/api/v4/top-headlines', $gnewsAPIString));
                curl_setopt($gnewsCurl,CURLOPT_RETURNTRANSFER,true );
                $gnewsData = curl_exec($gnewsCurl);
                curl_close($gnewsCurl);

                $gnewsData = json_decode($gnewsData, true);

                // the news api

                $queryString = http_build_query([
                    'api_token' => '6PrT5g1tOc5vhk594pZxFwJkHMHXOZhviMc3MK7z',
                    'title' => $title,
                    'author' => $author,
                    'published_at' => $date,
                    'limit' => 5,
                    'language' => 'en'
                ]);

                // if return has some elements inside it
                $ch = curl_init(sprintf('%s?%s', 'https://api.thenewsapi.com/v1/news/all', $queryString));
                curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

                $json = curl_exec($ch);     // the response json object from the newsDataAPI

                curl_close($ch);

                $apiResult = json_decode($json, true);

                $apiResult = array_merge($apiResult['data'],$gnewsData['articles']);    // the news articles
                $wantedData = [];
                $tempArr = [];
                foreach ($apiResult as $article) {
                    foreach ($return as $returnField) {
                        if (array_key_exists($returnField, $article)) {
                            $tempArr[$returnField] = $article[$returnField];
                        }
                    }
                    $wantedData = array_merge($wantedData, [$tempArr]);
                    $tempArr = array();
                }
                $response_object = array(
                    'status' => 'success',
                    'timestamp' => strtotime(date('Y-m-d H:i:s')),
                    'data' => $wantedData
                );

                $response_object = json_encode($response_object);
                echo $response_object;
            }
        } else {

            // when the return param is not defined then treat it as *
            $response_object = array(
                'status' => 'failed',
                'timestamp' => strtotime(date('Y-m-d H:i:s')),
                'data' => [array('message' => 'API return value required!')]
            );



            // converting the response object to json
            $response_object = json_encode($response_object);

            echo $response_object;
        }
    } else {
        $response_object = array(
            'status' => 'failed',
            'timestamp' => strtotime(date('Y-m-d H:i:s')),
            'data' => [array('message' => 'API type ' . $type . ' does not exist')]
        );



        // converting the response object to json
        $response_object = json_encode($response_object);

        echo $response_object;
        exit;
    }
} else {

    $response_object = array(
        'status' => 'failed',
        'timestamp' => strtotime(date('Y-m-d H:i:s')),
        'data' => [array('message' => 'API key authentication failed failed, please check your api validation')]
    );

    // converting the response object to json
    $response_object = json_encode($response_object);

    echo $response_object;
    exit;
}
    
    // validating if the user exists in the database
