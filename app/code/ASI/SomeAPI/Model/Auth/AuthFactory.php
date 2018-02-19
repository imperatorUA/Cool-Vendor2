<?php
namespace ASI\SomeAPI\Model\Auth;

require_once 'Auth.php';

use ASI\SomeAPI\Model\Auth\Auth;

class AuthFactory {
    private $bearer_token;

    public function __construct() {

    }

    public function create($bearer_token, \ASI\SomeAPI\Model\BearerTokensFactory $bearer_tokens_factory) {
        return new Auth($bearer_token, $bearer_tokens_factory);
    }
}