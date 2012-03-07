<?php header('Access-Control-Allow-Origin: *') ?>
div#stationPage.all_content
  div.header
    img[src=@overall_image class="overall_logo"]
    b @overall_title
    div @overall_description
  div[class="channels"]
    div
      - collection @channels
        span[class="reset_floats channel_item"]
          a[id=@buid href="#" event:click="handleChannelClicked"]
            img[src=@icon_image class="channel_logo channel_logo_notselected"]
            b @titlex
            @description
