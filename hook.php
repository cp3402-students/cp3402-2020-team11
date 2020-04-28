<?php

/**
 * Github webhook handler
 *
 * @see  https://developer.github.com/webhooks/
 */

$stageURI = '/var/www/html/stage/';
$prodURI = '/var/www/html/prod';


$hookSecret = $_SERVER["SECRET_TOKEN"];

set_error_handler(function($severity, $message, $file, $line) {
    throw new \ErrorException($message, 0, $severity, $file, $line);
});

set_exception_handler(function($e) {
    header('HTTP/1.1 500 Internal Server Error');
    echo "Error on line {$e->getLine()}: " . htmlSpecialChars($e->getMessage());
    die();
});

$rawPost = NULL;
if ($hookSecret !== NULL) {
    if (!isset($_SERVER['HTTP_X_HUB_SIGNATURE'])) {
        throw new \Exception("HTTP header 'X-Hub-Signature' is missing.");
    } elseif (!extension_loaded('hash')) {
        throw new \Exception("Missing 'hash' extension to check the secret code validity.");
    }

    list($algo, $hash) = explode('=', $_SERVER['HTTP_X_HUB_SIGNATURE'], 2) + array('', '');
    if (!in_array($algo, hash_algos(), TRUE)) {
        throw new \Exception("Hash algorithm '$algo' is not supported.");
    }

    $rawPost = file_get_contents('php://input');
    if ($hash !== hash_hmac($algo, $rawPost, $hookSecret)) {
        throw new \Exception('Hook secret does not match.');
    }
};

if (!isset($_SERVER['CONTENT_TYPE'])) {
    throw new \Exception("Missing HTTP 'Content-Type' header.");
} elseif (!isset($_SERVER['HTTP_X_GITHUB_EVENT'])) {
    throw new \Exception("Missing HTTP 'X-Github-Event' header.");
}

switch ($_SERVER['CONTENT_TYPE']) {
    case 'application/json':
        $json = $rawPost ?: file_get_contents('php://input');
        break;

    case 'application/x-www-form-urlencoded':
        $json = $_POST['payload'];
        break;

    default:
        throw new \Exception("Unsupported content type: $_SERVER[CONTENT_TYPE]");
}

# Payload structure depends on triggered event
# https://developer.github.com/v3/activity/events/types/
$payload = json_decode($json);

switch (strtolower($_SERVER['HTTP_X_GITHUB_EVENT'])) {
    case 'ping':
        echo 'pong';
        exec('cd '.$stageURI. ';sudo git pull');
        //echo $payload->{'zen'};
        break;

    //https://developer.github.com/v3/activity/events/types/#pullrequestevent
    case 'pull_request':
        switch ($payload->{'state'}){
            case 'opened':
            case 'closed':
                exec('cd '.$stageURI. ';sudo git pull');
                break;

        }
        break;

//	case 'push':
//		break;

//	case 'create':
//		break;

    default:
        header('HTTP/1.0 404 Not Found');
        echo "Event:$_SERVER[HTTP_X_GITHUB_EVENT] Payload:\n";
        print_r($payload); # For debug only. Can be found in GitHub hook log.
        die();
}