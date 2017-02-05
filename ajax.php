<?php
require_once("simple_html_dom.php");
$url = $_POST["jkanimeurl"];
$playertype = $_POST["playertype"]; // 1 ? 2

function curl($url) {
	/**
	 * @param string $url URL de JKANIME
	 * @return  string HTML completo de la página
	 */
    $curl = curl_init();
    curl_setopt ($curl, CURLOPT_URL, $url);
    curl_setopt ($curl, CURLOPT_USERAGENT, "Mozilla/5.0 (X11; Linux i686) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/55.0.2883.75 Safari/537.36");
    curl_setopt ($curl, CURLOPT_REFERER, $url);
    curl_setopt ($curl, CURLOPT_FOLLOWLOCATION, true);
    curl_setopt ($curl, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt ($curl, CURLOPT_SSL_VERIFYPEER, 0);
    curl_setopt ($curl, CURLOPT_ENCODING, "");
    $data = curl_exec ($curl);
    curl_close ($curl);
    return $data;
}
function getVideo_iframe($response) {
	/**
	 * @param string $response HTML devuelto por Curl
	 * @return string URL del iframe que contiene el reproductor de JKANIME
	 */
	$html=str_get_html($response);
	foreach ($html->find('#the_video-1 iframe.player_conte') as $e) {
		 $e->src;
	}
	$iframe_url = $e->src;
	return $iframe_url;
}
function get_Video($url) {
	/**
	 * @param string URL del iframe que contiene el reproductor de JKANIME
	 * @return string Sección del código HTML que contiene las variables flash del reproductor
	 */
	$html=str_get_html($url);
	foreach ($html->find('embed.player_conte') as $e) {

	$flashvars = $e->flashvars;
	}
	return $flashvars;
}

$response = curl($url);
$iframe_url = getVideo_iframe($response);
$response2 = curl($iframe_url);
$flashvars = get_Video($response2);
$subject = $flashvars;
$pattern = '#file=http://jkanime.net/stream/(.*)$#'; //limpia la cadena para dejar solo la URL del mp4
preg_match($pattern, $subject, $match);
$url = str_replace('file=', '', $match[0]);

$output = ($playertype == 1) ? printf(
'<div id="jwreproductor">Cargando...</div>
<script type="text/javascript">
	jwplayer("jwreproductor").setup({
  		"file": "%1$s",
  		"height": 450,
  		"width": 800,
  		"autostart": false,
  		"type": "video/mp4"
	});
</script>', $url) : printf(
'<div class="html5player">
	<video controls="controls">
		<source src="%1$s" type="video/mp4">
	</video>
</div>', $url);
echo $output;
?>
