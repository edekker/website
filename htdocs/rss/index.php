<?php require('simplepie.inc'); ?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="urf-8">
        <title>Reading My Twitter Feed</title>
    </head>
    <body>
        <?php
            $feed = new SimplePie();
            $feed->set_feed_url('http://twitter.com/statuses/user_timeline/120208073.rss');
            $feed->enable_cache(false); //Wouldn't use this on an actual site; on live site, need place on server to store cached feeds
            $feed->init();
            echo '<h1><a href="'.$feed->get_link().'">'.$feed->get_title().'</a></h1>';
            $myitems = $feed->get_items(0,5);
            foreach ($myitems as $item) {
                echo '<p>'.$item->get_title().'</p>';

            }
        ?>
    </body>
</html>

