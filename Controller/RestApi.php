<?php

namespace Feed\Controller;

class RestApi extends \LimeExtra\Controller {
    
    // protected function before() {
        
        // $this->app->response->mime = 'rss';
        // $this->app->response->mime = 'atom';
        
    // }
    
    public function index() {
        
        if ($default = $this->app['feed']['default'] ?? false)
            return $this->get($default);
        
        else
            return "no default feed specified";
        
    }
    
    public function get($name = null) {
        
        return $this->module('feed')->feed($name);
        
    }
    
    public function listFeeds($output = 'json') {
        
        return $this->module('feed')->feeds($output);
        
    }
    
}