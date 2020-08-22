<script>
<?php
function youtubescrapper($ch_id){
    libxml_use_internal_errors(true);
    $doc = new DOMDocument();
    $doc->loadHTMLFile("http://www.youtube.com/channel/$ch_id/live");
    foreach($doc->getElementsByTagName('script') as $table){     
	   echo $tables = $table->lastChild->textContent;
	}
}
 youtubescrapper('UCSJ4gkVC6NrvII8umztf0Ow');	 
?>

//['currentVideoEndpoint']['watchEndpoint']['videoId'] // video id
//['contents']['twoColumnWatchNextResults']['results']['results']['contents'][0]['videoPrimaryInfoRenderer']['title']['runs'][0]['text'] // video title
//['contents']['twoColumnWatchNextResults']['results']['results']['contents'][0]['videoPrimaryInfoRenderer']['viewCount']['videoViewCountRenderer']['viewCount']['simpleText'] // view count
//['contents']['twoColumnWatchNextResults']['results']['results']['contents'][0]['videoPrimaryInfoRenderer']['dateText']['simpleText']// date published

yt_data_viewCount = window["ytInitialData"].contents.twoColumnWatchNextResults.results.results.contents[0].videoPrimaryInfoRenderer.viewCount.videoViewCountRenderer.viewCount.runs[0].text;
yt_data_title = window["ytInitialData"].contents.twoColumnWatchNextResults.results.results.contents[0].videoPrimaryInfoRenderer.title.runs[0].text;
yt_latest_title = yt_data_title.replace(/[\u{0080}-\u{FFFF}]/gu,"");

alert(yt_data_viewCount + " \n"  +  yt_latest_title);
</script>
