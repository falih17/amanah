<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>OPF Playlist</title>
  <link rel="stylesheet" href="./css/plyr.css">
  <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
  <link rel="stylesheet" href="<?php echo base_url('assets_front/player');?>/css/style.min.css">
  <link href="<?php echo base_url('assets_front/player');?>/css/simplebar.min.css" rel="stylesheet" type="text/css" />

</head>

<body>
  <header>
    <div class="menu-container">
      <div class="row">
        <div class="row-inner">
          <div class="menu-horizontal menu-dd-shadow-lg"></div>
        </div>
      </div>
    </div>
  </header>

  <div class="container row">
    <div class="col col-sm-12 left">
      <div class="player_container">
        <a class="player_text" href="" target="_blank">
          <span class="text_title"></span>
          <span class="text_group"></span>
        </a>
        <div class="playlist-icon"></div>
        <div class="plyr__video-embed js-playerx" id="">
          <iframe src="https://www.youtube.com/embed/A6XUVjK9W4o" frameborder="0" allowfullscreen></iframe>
        </div>
      </div>
    </div>


    <div class="col-sm-12 right">
      <div class="filter-menu">
        <div class="accordion">
          <div class="accordion-button">All</div>
          <div class="accordion-content" id="acc-content">
            <div class="filter-button active" data-category=";all">All</div>
          </div>
        </div>
      </div>

      <div class="playlist-wrapper">
        <div id="playlist" class="playlist">
          <div class="playlist_item" data-title="View From A Blue Moon - HTML5" data-author="John Florence"
            data-purl="./mp4/Blue_Moon_1080.mp4"
            data-video="./mp4/Blue_Moon_1080.mp4"
            data-type="video" data-category=";HTML5;upacara;acara resmi">
            <div class="item_wrapper">
              <div class="item_thumb_container">
                <img class="item_thumb"
                  src="thumb1.png">
                <div class="item_thumb_play"></div>
                <div class="item_thumb_restart"></div>
              </div>
              <div class="item_details">
                <span class="item_title">View From A Blue Moon - HTML5</span>
                <span class="item_director">John Florence</span>
              </div>
            </div>
          </div>
         
          
        </div>
      </div>

      <div class="search-container">
        <div class="search-input-wrapper">
          <div class="search-icon"></div>
          <input type="text" id="searchInput" placeholder="Search...">
        </div>
      </div>

    </div>
  </div>
  <script src="<?php echo base_url('assets_front/player');?>/js/plyr.min.js"></script>
  <script src="<?php echo base_url('assets_front/player');?>/js/app.js" referrerpolicy="no-referrer"></script>
  <script src="<?php echo base_url('assets_front/player');?>/js/simplebar.min.js"></script>
</body>

</html>