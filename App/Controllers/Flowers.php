<?php
  
  namespace App\Controllers;
  
  use \Core\View;
  
  /**
   * Flowers controller
   *
   * PHP version 7.0
   */
  class Flowers extends \Core\Controller
  {
    
    /**
     * Show the index page
     *
     * @return void
     */
    public function bouquetAction()
    {
      View::renderTemplate('Home/flowers.html');
    }
  }
