<script>
<?php
  $ytid = $user->youtubeid;
  $doc = new DOMDocument();
  $doc->loadHTMLFile("http://www.youtube.com/channel/UCv9Edl_WbtbPeURPtFDo-uA/live");
  $doc_s = $doc->getElementsByTagName('script');	
  $tables = array();
  foreach($doc_s as $table){     
     $tables[] = $table->nodeValue;
   }
  echo $tables[31];
?>	
yt_data_viewCount = window["ytInitialData"].contents.twoColumnWatchNextResults.results.results.contents[0].videoPrimaryInfoRenderer.viewCount.videoViewCountRenderer.viewCount.runs[0].text;
yt_data_title = window["ytInitialData"].contents.twoColumnWatchNextResults.results.results.contents[0].videoPrimaryInfoRenderer.title.runs[0].text;
yt_latest_title = yt_data_title.replace(/[\u{0080}-\u{FFFF}]/gu,"");

$(document).ready(function(){
    $("ytdata").html(yt_data_title);
});
//alert(yt_data_viewCount + " \n"  +  yt_latest_title);

console.log(window["ytInitialData"]); 

</script>
<ytdata><ytdata> <!-- prints data-->
