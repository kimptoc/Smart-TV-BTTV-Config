<?php header('Access-Control-Allow-Origin: *') ?>
div[class="all_content"]
  div[class="header"]
    img[src=@overall_image class="overall_logo"]
    h2 @overall_title
    @overall_description
  div[class="channels"]
    ul
      - collection @channels
        li[class="reset_floats channel_item"]
          a[href="#" event:click=handleChannelClicked]
            img[src=@icon_image class="channel_logo"]
            b @title
            " : " @description
