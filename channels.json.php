<?php header('Access-Control-Allow-Origin: *') ?>
{
   "station" : {
     "overall_title" : "Bagel Tech TV",
     "overall_description" : "Bagel Tech TV is...",
     "overall_image" : "http://localhost/scrap/bttv/BTNLogoText.png"
    },
   "channels" : [
      { 
          "title" : "Bagel Tech Mac", 
          "icon_image"  : "http://localhost/scrap/bttv/bageltechmac-small.png", 
          "rss_feed_url":"http://....", 
          "description" : "All the Mac news",
          "enabled" : "true"
      },
      { 
          "title" : "Bagel Tech Foto", 
          "icon_image"  : "http://localhost/scrap/bttv/bageltechfoto-small.png", 
          "rss_feed_url":"http://....", 
          "description" : "All the Foto news",
          "enabled" : "true"
      },
      { 
          "title" : "Bagel Tech Trek", 
          "icon_image"  : "http:\\......", 
          "rss_feed_url":"http:\\....", 
          "description" : "All the Trek news",
          "enabled" : "false"
      }]
}
