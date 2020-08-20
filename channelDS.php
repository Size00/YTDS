<script>
<?php
function ch_scrape($ch_id){
    libxml_use_internal_errors(true);
    $doc = new DOMDocument();
    $doc->loadHTMLFile("http://www.youtube.com/channel/$ch_id/live");
    foreach($doc->getElementsByTagName('script') as $table){     
	   echo $tables = $table->lastChild->textContent; 
	}
}
 ch_scrape('UCSJ4gkVC6NrvII8umztf0Ow');	 
?>

console.log(window["ytInitialData"]);

</script>
