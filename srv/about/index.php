<?php
header("X-Frame-Options: DENY");
header("Frame-Options: DENY");
header("Content-Security-Policy: connect-src 'self'; script-src 'none'");

function abort()
{
  header('Location: https://noscript.net/');
  exit();
}

function e($s)
{
  return htmlspecialchars($s, ENT_QUOTES, 'UTF-8');
}



$m = array();
if (!preg_match('|.*?/about/([\w\.\-%:/]+);([\w\.\-]*)|', $_SERVER['REQUEST_URI'], $m)) abort();

$utf8 = preg_replace('|[^\w\.\-\?/=&\x{0080}-\x{ffff}:]|u', '', urldecode($m[1]));
if (!$utf8 ) abort();

$ace = $m[2] ? $m[2] : $utf8;
$eutf8 = e($utf8);
$eace = e($ace);


if (strpos($utf8, ':') > 0)
{
  $mandatory = "chrome: about: about:config about:neterror about:certerror about:plugins about:privatebrowsing about:sessionrestore resource: about:blocked";
  if (strpos($mandatory, $utf8) !== false) {
    $response = "<strong>$eutf8</strong> is an internal browser resource, mandatory for it to work.";
  } else if (strpos($utf8, 'about:') === 0)
  {
    $response = "<strong>about:xyz</strong> are internal browser or browser extension resources, usually safe to allow.";
  } else {
    $response = "No info is currently available about <strong>$eutf8</strong>";
  }
}

$title = "Security and Privacy Info";
$url = (preg_match('@^https?://@i', $utf8) ? $eutf8 : "https://$eutf8");
$link = '<a href="' . $url . '" target="_blank" rel="nofollow external"
  onclick="return confirm(&quot;Are you sure you want to open '
  . $url . ' directly?&quot;)">' . $eutf8 . '</a>';

$template = file_get_contents("../index.html");

ob_start();
?>
<style type="text/css" >
main > h2:first-of-type {
  margin-top: 0;
}

#privacy h4 {
  margin-bottom: .5em;
}
#privacy p {
  margin: 0;
  font-style: italic;
}

#buttons-container > button {
  font-size: 16px;
}

.allow > span, .forbid > span, #distrust-button > span {
  background: no-repeat center left;
  padding: 0 0 0 24px;
}

#allow-button.allow > span {
  background-image: url(/noscript/yes16.png);
}

#allow-button.forbid > span {
  background-image: url(/noscript/no16.png);
}
#distrust-button > span {
  background-image: url(/noscript/untrusted16.png);
}
</style>
<h2><?= $eutf8 ?></h1>
<h3><?= $title ?></h2>

<?php if (isset($response)): ?>
<p id="response"><?= $response ?></p>
<?php else: ?>
<p>Here we list some 3<sup>rd</sup> party services which may help assess the trustworthiness of <?= $link ?>:</p>
<ul id="resources">
  <li><a href="https://www.siteadvisor.com/sites/<?= $eace ?>" target="_blank" rel="nofollow external">McAfee SiteAdvisor&reg; rating</a> for <?= $eutf8 ?></li>
  <li><a href="https://transparencyreport.google.com/safe-browsing/search?url=<?= $eace ?>" target="_blank" rel="nofollow external">Google's Safe Browsing Diagnostic</a> on <?= $eutf8 ?></li>
  <li><a href="http://www.urlvoid.com/scan/<?= $eace ?>" target="_blank" rel="nofollow external">URLVoid Scan</a> on <?= $eutf8 ?></li>
  <li><a href="https://themarkup.org/blacklight?url=<?= $eace ?>" target="_blank" rel="nofollow external">BlackLight Real-Time Privacy Inspector</a> on <?= $eutf8 ?></li>
  <li><a href="https://www.virustotal.com/gui/domain/<?= $eace ?>" target="_blank" rel="nofollow external">virustotal </a> <?= $eutf8 ?> URL submission</li>
<li><a href="http://www.wmtips.com/tools/info/?url=<?= $eace ?>" target="_blank" rel="nofollow external">Webmaster Tips Site Information</a> about <?= $eutf8 ?></li>

</ul>
<div id="buttons-container">
<button id="allow-button" style="display: none"><span></span></button>
<button id="distrust-button" style="display: none"><span></span></button>
</div>
<p>We hope to keep adding new tools and features over the time, making trust-based decisions easier for NoScript users.</p>
<?php endif ?>
</div>


<div id="privacy">
<h4>Privacy Disclaimer</h4>
<p><?= e(strtoupper($_SERVER['HTTP_HOST'])) ?> does not retain any personal-identifiable record about your "Security and Privacy Info" queries.</p>
</div>
<?php
$content = ob_get_contents();
ob_end_clean();
$output = $template;
$output = preg_replace('@(?<=<title>)[\s\S]*(?=</title>)@', "$eutf8 - $title", $output);
$output = str_replace('<li class="active">', '<li>', $output);
$output = preg_replace('@(<main[^>]*>)[\s\S]*(?=</main>)@', '\1' . $content, $output);

echo $output;
?>
