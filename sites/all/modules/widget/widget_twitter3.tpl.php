<?php
Global $base_url;
$twitter_username = $settings['widget_twitter3_username'];
$tweets_count = 1;

include_once(drupal_get_path('module', 'widget').'/yeah_tweety/twitteroauth/twitteroauth.php');
/** user sirdoan94 **/
$twitter_customer_key           = 'QL6WNVJ3nxGZZvLawgmK2KSHL';
$twitter_customer_secret        = '4MdcX3GgAZEBwqs8nI2YU2W9NDb1LMqJNCToOfjN8QJSC1hR0K';
$twitter_access_token           = '2582428909-kCmwKFhDFXXTcdAT7ZP0yqkiQrRNQsois1crvor';
$twitter_access_token_secret    = 'ihMqIijfcysqBIrpXdSpJcuqvFKiezulI3V1GpNfBc8PD';
/**********************************************************************************/
$connection = new TwitterOAuth($twitter_customer_key, $twitter_customer_secret, $twitter_access_token, $twitter_access_token_secret);

$my_tweets = $connection->get('statuses/user_timeline', array('screen_name' => $twitter_username, 'count' => $tweets_count));
$out = '';
$out .= '<div class="sidebar__twitterwidget__autor"><img src="#" alt="image">
       
        <div class="sidebar__twitterwidget__autor__name">Admin Themes</div>
        <a href="https://twitter.com/intent/follow?original_referer=http%3A%2F%2Fdomain.com%2F&amp;ref_src=twsrc%5Etfw&amp;region=follow_link&amp;screen_name=admin&amp;tw_p=followbutton" title="Follow Drupal on Twitter" class="sidebar__twitterwidget__autor__btn">
        <i class="fa fa-twitter"></i>
        <span>Follow <b>Drupal</b></span>
        </a>
        </div>';
foreach ($my_tweets as $key => $value) {
	if(isset($my_tweets->errors))
	{           
	    $out .= '<li>Error :'. $my_tweets->errors[$key]->code. ' - '. $my_tweets->errors[$key]->message.'</li>';
	}else{
		//profile_image_url
		$profile_image_url = $my_tweets[$key]->user->profile_image_url;
		//STATUS
		$status = $my_tweets[$key]->text;
		//created
		$created = $my_tweets[$key]->created_at;


		//output custom here
		$out .= makeClickableLinks3('<div class="sidebar__twitterwidget__text"><i class="fa fa-twitter"></i><span>'.$status.' <span class="sidebar__twitterwidget__text__date"> '.twitter3_time($created).'</span></span></div>');
	}
}

$out .= '';
print $out;
//GET TIME AGO
function twitter3_time($a) {
    //get current timestampt
    $b = strtotime("now"); 
    //get timestamp when tweet created
    $c = strtotime($a);
    //get difference
    $d = $b - $c;
    //calculate different time values
    $minute = 60;
    $hour = $minute * 60;
    $day = $hour * 24;
    $week = $day * 7;
        
    if(is_numeric($d) && $d > 0) {
        //if less then 3 seconds
        if($d < 3) return "right now";
        //if less then minute
        if($d < $minute) return floor($d) . " seconds ago";
        //if less then 2 minutes
        if($d < $minute * 2) return "about 1 minute ago";
        //if less then hour
        if($d < $hour) return floor($d / $minute) . " minutes ago";
        //if less then 2 hours
        if($d < $hour * 2) return "about 1 hour ago";
        //if less then day
        if($d < $day) return floor($d / $hour) . " hours ago";
        //if more then day, but less then 2 days
        if($d > $day && $d < $day * 2) return "yesterday";
        //if less then year
        if($d < $day * 365) return floor($d / $day) . " days ago";
        //else return more than a year
        return "over a year ago";
    }
}

//function to convert text url into links.
function makeClickableLinks3($s) {
  return preg_replace('@(https?://([-\w\.]+[-\w])+(:\d+)?(/([\w/_\.#-]*(\?\S+)?[^\.\s])?)?)@', '<a rel="nofollow" href="$1" target="_blank">$1</a>', $s);
}
?>