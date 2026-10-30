<?php 
declare(strict_types = 1);

const STORAGE_PATH = __DIR__ . DIRECTORY_SEPARATOR . 'storage' ;
const USER_FILE = STORAGE_PATH . '/user.json';

if(!is_dir(STORAGE_PATH)) {
    mkdir(STORAGE_PATH,0750,true);
}
if(!file_exists(USER_FILE)) {  //file_put__content pour ajouter un fichier dans le terminal 
    file_put_contents(USER_FILE,[],LOCK_EX);        //file_contents pour verifier ce qui se trouve dans le fichier
}

$ishttps = (!empty('HTTPS')) && $_SERVER['https'] !== 'off' ||($_SERVER['SERVER_PORT'] ?? '')  === 443 ;

ini_set('session.use_strict_mode' , '1'); 
ini_set('session.use_only_cookies' , '1');

session_name('APPLICATION');

session_set_cookie_params(
    [
        'lifetime' => 0,
        'path' => '/',
        'domain' => $ishttps,
        'secure' => true ,
        'httponly' => 'LAX'
    ]
);
