<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cli extends CI_Controller {

    public function __construct() {
        parent::__construct();
        // Only allow CLI access
        if (!$this->input->is_cli_request()) {
            show_error('Direct access forbidden');
        }
    }

    public function generate_api_key() {
        // Generate a random 40-character API key
        $key = bin2hex(random_bytes(20)); // 40 characters

        echo "Generated API Key: " . $key . PHP_EOL;
        echo "Copy this key to use in your API requests." . PHP_EOL;
    }
}
