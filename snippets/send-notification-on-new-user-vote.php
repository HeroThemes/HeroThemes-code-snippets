<?php
/**
* Notification of user vote on an article
* Code snippet by @HeroThemes (https://herothemes.com) - Knowledge Base Themes and Plugins for WordPress
* HeroThemes - Happier Customers, Fewer Support Tickets
*/

//add to ht_voting_vote_post_action
add_action('ht_voting_vote_post_action', 'send_email_on_comment_snippet', 10, 3);

//ht_voting_vote_post_action - $users_vote, $post_id, $direction
function send_email_on_comment_snippet($users_vote, $post_id, $direction){
    //var_dump($users_vote);
    $title = get_the_title($post_id);
    $content = sprintf('A new %s vote was made on %s', $direction, $title);
    wp_mail('test@example.com', 'Vote Cast', $content);
    return $users_vote;
}