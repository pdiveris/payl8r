<?php

namespace App\Controllers;

use \Core\View;
/**
 * Home controller
 *
 * PHP version 7.0
 */
class Home extends \Core\Controller
{
    static $redis;
    
    public function __construct(array $route_params)
    {
      /*
      parent::__construct($route_params);
      self::$redis = new Redis();
      self::$redis->connect('127.0.0.1');
      */
    }
  
  /**
     * Show the index page
     *
     * @return void
     */
    public function indexAction()
    {
      
      // 60 = 22
      // 3600 = 1920
      
      
      // 1. Get a cache
      $redis = new \Predis\Client();
      
      // try to get.
      $timeData = $redis->get("timeData");
      
      if (null == $timeData) {
        $timeData = new \DateTime();
        $redis->set("timeData", serialize($timeData));
        
      } else {
        $timeData = unserialize($timeData);
      }
      
      $thisTime = new \DateTime();
  
      var_dump($timeData);
      var_dump($thisTime);
  
      
      $dateDiff = $thisTime->diff($timeData);
      var_dump($dateDiff);
      
      $hours = $dateDiff->h * 0.53333;
      $minutes = $dateDiff->m;
      $seconds = $dateDiff->s * 0.366666;
      

      echo "<h1>{$hours} hours {$minutes} minutes {$seconds} seconds</h1>";
      
      
      ///  View::renderTemplate('Home/index.html');
    }
  
  /**
   * Show the index page
   *
   * @return void
   */
  public function testAction()
  {
    View::renderTemplate('Home/test.html');
  }
  
  
}
