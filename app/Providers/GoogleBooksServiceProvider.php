<?php namespace blackoutsLibManager\Providers;

use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Config;

class GoogleBooksServiceProvider {

    protected $client;

    protected $service;

    function __construct() {
        /* Get config variables */
        $client_id = Config::get('google.client_id');
        $service_account_name = Config::get('google.service_account_name');
        $key_file_location = base_path() . Config::get('google.key_file_location');

        $this->client = new \Google_Client();
        $this->client->setApplicationName("blackouts");
        $this->service = new \Google_Service_Books($this->client);

        /* If we have an access token */
        if (Cache::has('service_token')) {
          $this->client->setAccessToken(Cache::get('service_token'));
        }

        $key = json_decode(file_get_contents($key_file_location),true);
        /* Add the scopes you need */
        $scopes = array('https://www.googleapis.com/auth/books');
        $cred = array(
            $service_account_name,
            $scopes,
            $key
        );
        
      //  var_dump($key); exit;

        $this->client->setAuthConfig($key);
       
        //Cache::forever('service_token', $this->client->getAccessToken());
    }

    public function get()
    {
        echo("<pre>");
        var_dump($this->service->);
        echo("</pre>");
        //dd($results);
    }
}
