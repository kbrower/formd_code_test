<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Analytics extends Controller_Template {

 public function before(){
   $this->template = View::factory('frame');
 }
 
 public function action_index() {
   
   $content_pattern = array(
    'discussion'  => '?id=',
    'admin'     =>  '/admin',
    'group'     =>  '/g/',
    'profile'   => '/u/' || '/profile',
    'search'    =>  '/search/',
    'settings'  =>  '/settings',
    'static'    =>  'our-solution' || 'terms-of-service' || 'about-us' || 'careers' || 'faq' || 'privacy-policy'
   );
   
   // VISITORS (SITE WIDE):
   // * Visits (Total Number of Visits)
   // * Unique Visits (Unique Users that Visited the Site)
   // * Page Views (Total Number of Pages Viewed)
   // * Time On Site (Total Time Spent on the Site)

   // CONTENT (BY CONTENT TYPE):
   // * Content Type (Type of Content Based on $content_pattern and Page Path - Non Pattern Matches are 'feed' type)
   // * Unique Visits (Unique Visitors that Viewed this Content Type)
   // * Page Views (Total Views for this Content Type)
   // * Total Time On Page (Total Time Spent on this Content Type)

   // TECHNOLOGY (BY BROWSER / BROWSER VERSION):
   // * Broswer (Combination of Browser and Broswer Version)
   // * Visits (Total Number of Visits of each Browser)
   // * Percent of Total (Percentage of Total Visits)
     
   $data = array(
      'visitors'   => array(
        'Visits'             =>  '',
        'Unique Visits'      =>  '',
        'Page Views'         =>  '',
        'Total Time On Site' =>  ''
      ),
      'content'    => array(),
      'technology' => array()
    );
   $this->template->content = View::factory('analytics');
   $this->template->content->data = $data;
 }

} // End Analytics