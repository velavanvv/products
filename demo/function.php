<?php
 function fetch(){
$ch=curl_init();
curl_setopt($ch,CURLOPT_URL,"https://jsonplaceholder.typicode.com/posts");
curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);
$response=curl_exec($ch);
if(curl_errno($ch)){
    echo "error".curl_error($ch);
    return null;
}
curl_close($ch);
$posts=json_decode($response,true);
return $posts;
}

function createPost($title, $body, $userId) {
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, "https://jsonplaceholder.typicode.com/posts");
    curl_setopt($ch, CURLOPT_POST, true);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json'));

    $data = json_encode([
        'title' => $title,
        'body' => $body,
        'userId' => $userId
    ]);
    curl_setopt($ch, CURLOPT_POSTFIELDS, $data);

    $response = curl_exec($ch);

    if(curl_errno($ch)) {
        echo 'cURL Error: ' . curl_error($ch);
        return null;
    }

    curl_close($ch);
    return json_decode($response, true);
}

?>

