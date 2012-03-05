<?php header('Access-Control-Allow-Origin: *') ?>
{
   "station" : {
     "overall_title" : "Bagel Tech TV",
     "overall_description" : "Bagel Tech TV is...",
     "overall_image" : "http://www.bageltechnews.com/wp-content/themes/bageltechnews2011/images/BTNLogoText.png",
     "content_url_rootx" : "http://localhost/scrap/bttv/",
     "content_url_root" : "http://bttv.kimptoc.net/Smart-TV-BTTV-Config/"
    },
   "channels" : [
      { 
          "title" : "Bagel Tech Mac", 
          "icon_image"  : "http://www.bageltechnews.com/images/features/bageltechmac-small.png", 
          "rss_feed_urly":"http://localhost/scrap/bttv/samples/bageltechmac_rss.xml.php",
          "rss_feed_urlx":"http://feeds.feedburner.com/BagelTechMacVideo",
          "rss_feed_name":"BagelTechMacVideo",
          "description" : "All the Mac news",
          "enabled" : "true"
      },
      { 
          "title" : "Bagel Tech Foto", 
          "icon_image"  : "http://www.bageltechnews.com/images/features/bageltechfoto-small.png", 
          "rss_feed_url":"http://feeds.feedburner.com/BagelTechFotoVideo",
          "rss_feed_name":"BagelTechFotoVideo",
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
