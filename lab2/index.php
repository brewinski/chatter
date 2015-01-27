<?php
$posts = array(
            array('date' => '27 Jan 2014', 'message' => 'Take me back!', 'image' => 'snowboard.jpg'),       
            array('date' => '28 Jan 2014', 'message' => 'Just going thru some photos this was one of my favorites I think it was the boys New Zealand school ski trip they look so young hey xx Thinking of you xx', 'image' => ''),       
            array('date' => '29 Jan 2014', 'message' => 'Beer for the arvo..', 'image' => 'beer-aroma.jpg'),     
          );
?>

<DOCTYPE html>
  <html>
    <head>
      <meta charset="utf-8">
      <meta name="niewport" content="width=device-width">
      <style type="text/css">
        @font-face{
          font-family: "Myriad-Pro";  
          src: url(http://www.anaveer.in/honda/font/MYRIADPRO-REGULAR.OTF) format("truetype");
        }
        html {
          background: lightgrey;
        }
        body {
          font-family: Myriad-Pro;
        }
        #body-wrapper {
          width: 1150px;
          margin: 0 auto;
          position: relative;
        }
        .post-container {
          width: 800px;
          margin-top: 25px;
          padding: 10px;
          
	        background-color: #fff;
	        -webkit-box-shadow: 0 0 4px rgba(0, 0, 0, 0.2), inset 0 0 50px rgba(0, 0, 0, 0.1);
	        -moz-box-shadow: 0 0 4px rgba(0, 0, 0, 0.2), inset 0 0 50px rgba(0, 0, 0, 0.1);
	        box-shadow: 0 0 5px rgba(0, 0, 0, 0.2), inset 0 0 50px rgba(0, 0, 0, 0.1);
        }
        .post-user-details {
          width: 170px;
          border-right: 1px solid lightgrey;
          float: left;
          margin-right: 20px;
        }
        .post-comment-information {
          width: 600px; 
          float: left;
        }
        .post-clear {
          clear: both;
        }
        .post-container .post-comment-information img {
          max-width: 600px;
          margin: auto;
        }
        #posts-container {
          float: left;
        }
        #profile-navigation {
          float: left;
          width: 300px;
          margin-top: 25px;
          margin-right: 10px;
          padding: 10px;
          
	        background-color: #fff;
	        -webkit-box-shadow: 0 0 4px rgba(0, 0, 0, 0.2), inset 0 0 50px rgba(0, 0, 0, 0.1);
	        -moz-box-shadow: 0 0 4px rgba(0, 0, 0, 0.2), inset 0 0 50px rgba(0, 0, 0, 0.1);
	        box-shadow: 0 0 5px rgba(0, 0, 0, 0.2), inset 0 0 50px rgba(0, 0, 0, 0.1);
        }
        #profile-navigation #profile-detail-navigation li {
          background: lightgrey;
        }
      </style>
    </head>
      
    <body>
      <div id="head-wrapper">
        
      </div>
      
      <div id="body-wrapper">

        <div id="profile-navigation">
          <div class="profile-details">
            <img src="snowboard.jpg" height="175" width="175" />
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
              <img src="snowboard.jpg" height="75" width="75"/>
              <p><?= $post['date'] ?></p>
            </div>
            <div class="post-comment-information">
              <?php if ($post['image'] != '') { ?>
                <img src="<?= $post['image'] ?>" />
              <?php } ?>
              <p><?= $post['message'] ?></p>
            </div>
            <div class="post-clear"> </div>
          </div>
          <?php } ?>
        </div>
        <div class="post-clear"> </div>
      </div>
      
      <div id="footer">
        
      </div>
    </body>
   
  </html>