
<?php
  $posts = array(
            array('date' => '27 Jan 2014', 'message' => 'Take me back!', 'image' => 'snowboard.jpg'),
            array('date' => '28 Jan 2014', 'message' => 'Just going thru some photos this was one of my favorites I think it was the boys New Zealand school ski trip they look so young hey xx Thinking of you xx', 'image' => ''),
            array('date' => '29 Jan 2014', 'message' => 'Beer for the arvo..', 'image' => 'beer-aroma.jpg'),
          );
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
  <html xmlns="http://www.w3.org/1999/xhtml" lang="en" xml:lang="en">
    <head>
      <title>Proflie Page</title>
      <meta name="niewport" content="width=device-width" />
      <link rel="stylesheet" type="text/css" href="style.css" />
    </head>

    <body>

      <div id="head-wrapper">

        <div id="headder-navigation-bar">
          <div id="headder-navigation-logo">
            <img src="logos.jpg" alt="Logo Image"/>
          </div>
          <div id="headder-navigation-global">
          </div>
        </div>

      </div>

      <div id="body-wrapper">

        <div id="profile-navigation">
          <div class="profile-details">
            <img src="snowboard.jpg" height="175" width="175" alt="profile picture"/>
            <p><b>Christopher Brewin</b></p>
          </div>
          <div id="profile-detail-navigation">
            <ul>
              <li><a href="">Posts</a></li>
              <li><a href="">Friends</a></li>
              <li><a href="">Photos</a></li>
            </ul>
          </div>
        </div>

        <!-- Post List (Prints a list of posts made by user) -->
        <div id="posts-container">
          <?php foreach($posts as $post) { ?>
          <div class="post-container">
            <div class="post-user-details">
              <img src="snowboard.jpg" height="75" width="75" alt="post image"/>
              <p><b>Christopher Brewin</b></p>
              <p><?= $post['date'] ?></p>
            </div>
            <div class="post-comment-information">
              <?php if ($post['image'] != '') { ?>
                <img src="<?= $post['image'] ?>" alt="Image Posted By User" />
              <?php } ?>
              <p><?= $post['message'] ?></p>
            </div>
            <div class="post-clear"> </div>
          </div>
          <?php } ?>
        </div>
        <div class="post-clear">
        </div>

      </div>

      <div id="footer">

      </div>

    </body>

  </html>
