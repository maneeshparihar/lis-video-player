<head>

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
    integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <link href="https://vjs.zencdn.net/7.7.5/video-js.css" rel="stylesheet" />
  <link href="styles.css" rel="stylesheet">
  <!-- If you'd like to support IE8 (for Video.js versions prior to v7) -->
  <!-- <script src="https://vjs.zencdn.net/ie8/1.1.2/videojs-ie8.min.js"></script> -->

</head>

<body>

<div class="container">
  <?php
    /* Search the directory and loop through returned array containing the matched files */
    foreach(glob("videos/*.mp4") as $file){
        // echo basename($file) . " (size: " . filesize($file) . " bytes)" . "<br>";
         ?>
    
    <div class="row mt-3">
      <div class="mx-auto">
      <h4><?php echo basename($file)?></h4>
      <video id="my-video" class="video-js" controls preload="auto" width="640" height="264"
          data-setup="{}">
          <source src="<?php echo basename($file)?>" type="video/mp4" />
          <!-- <p class="vjs-no-js"> To view this video please enable JavaScript, and consider upgrading to a
            web browser that <a href="https://videojs.com/html5-video-support/" target="_blank">supports HTML5 video</a>
          </p> -->
      </video>
      </div>
    </div>

  <?php } ?>

 
    <!-- <div class="row mt-3">

      <video id="my-video" class="video-js" controls preload="auto" width="640" height="264"
        poster="MY_VIDEO_POSTER.jpg" 
        data-setup="{}">
        <source src="zag-qxpo-gqm (2020-04-06 at 23_56 GMT-7).mp4" type="video/mp4" />
        <p class="vjs-no-js"> To view this video please enable JavaScript, and consider upgrading to a
          web browser that <a href="https://videojs.com/html5-video-support/" target="_blank">supports HTML5 video</a>
        </p>
      </video>
    </div>
    <div class="row mt-3">
      <video class="video-js" controls preload="auto" width="640" height="264" data-setup="{}">
        <source src="zag-qxpo-gqm (2020-04-07 at 22_28 GMT-7).mp4" type="video/mp4" />
      </video>
    </div> -->

  </div>


  <script src="https://vjs.zencdn.net/7.7.5/video.js"></script>
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
    integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
    crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
    integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
    crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
    integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
    crossorigin="anonymous"></script>

  <script>
    window.onload = function () {
      //html5 - prevent simultaneous video playback - pauses other playing videos upon play
      $('audio,video').bind('play', function () {
        activated = this;
        $('audio,video').each(function () {
          if (this != activated) this.pause();
        });
      });
    }
  </script>

</body>