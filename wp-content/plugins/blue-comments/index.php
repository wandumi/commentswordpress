<?php
ob_start();
/**
 * Plugin Name: Blue Beetle Comments Plugin
 * Description: Sends the comments to an external API 
 * Version: 1.0
 * Author: Wandumi Munandi Sichali
 * Author URI: https://www.linkedin.com/in/wandumi-munandi-sichali-a83771133/
 */

function blue_comments_plugin()
{
    $contents = '';
    $contents .= '<h4>Leave a comment</h4>';
    $contents .= '<form method="post" action="" >';

    $contents .= '<div class="form-group mb-3">';
    $contents .= '<label for="name">Name</label>';
    $contents .= '<input type="text" name="name" id="name" class="form-control">';
    $contents .= '</div>';

    $contents .= '<div class="form-group mb-3">';
    $contents .= '<label for="email">Email</label>';
    $contents .= '<input type="email" name="email" id="email" class="form-control">';
    $contents .= '</div>';

    $contents .= '<div class="form-group mb-3">';
    $contents .= '<label for="comment">Comment</label>';
    $contents .= '<textarea name="comment" id="comment" cols="30" rows="5" class="form-control"></textarea>';
    $contents .= '</div>';

    $contents .= '<div class="d-grid mb-3">';
    $contents .= '<input type="submit" name="submit_comment" id="submit_comment" class="btn btn-secondary">';
    $contents .= '</div>';

    $contents .= '</form>';

    return $contents;
}

add_shortcode('blue_comments', 'blue_comments_plugin');

function blue_bettle_submit()
{


    if (isset($_POST['submit_comment'])) {

        $name = sanitize_text_field($_POST['name']);
        $email = sanitize_text_field($_POST['email']);
        $comment = sanitize_textarea_field($_POST['comment']);

        // Construct API request
        $api_data = array(
            'name' => $name,
            'email' => $email,
            'comment' => $comment,
        );

        // Add headers or authentication credentials
        $headers = array(
            'Authorization' => 'Bearer YOUR_API_KEY',
            // ...add other headers
        );

        // Send API request
        $response = wp_remote_post('http://localhost:8000/api/v1/comments', array(
            'method' => 'POST',
            'headers' => $headers,
            'body' => $api_data,
        ));

        if ($response['response']['code'] == 201) {
            wp_redirect('http://localhost/comments/thank-you/');

            ob_end_flush();
            exit;
        } else {

            wp_redirect('http://localhost/comments/error-page/');

            ob_end_flush();
            exit;
        }
    }
}

add_action('wp_head', 'blue_bettle_submit');
