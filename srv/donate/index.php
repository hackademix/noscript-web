<?php
$paypal = 'https://www.paypal.com/donate/?hosted_button_id=';
$destinations = array(
  'USD' => $paypal . '9ERKTU5MBH4EW',
  'EUR' => $paypal . 'MMQ8J8A79QDZ2',
  'BTC' => 'bitcoin:1Kupnx5isBdAJ5ki2BEVF6sBuYmkYigWPU',
);

function ln2lc($ln, $geo)
{
   static $map;

   $parts = explode('-', $ln);

   if (count($parts) > 1)
      return strtoupper($parts[1]);

   if (!isset($map))
   {
      $map = array(
         'af' => 'ZA',
         'ar' => 'EG',
         'ca' => 'ES',
         'cs' => 'CZ',
         'cy' => 'GB',
         'da' => 'DK',
         'de' => 'DE',
         'el' => 'GR',
         'eu' => 'BS',
         'fa' => 'IR',
         'fi' => 'FI',
         'fr' => 'FR',
         'he' => 'IL',
         'hu' => 'HU',
         'id' => 'ID',
         'it' => 'IT',
         'ja' => 'JP',
         'ko' => 'KR',
         'mn' => 'MN',
         'nl' => 'NL',
         'pl' => 'PL',
         'ro' => 'RO',
         'ru' => 'RU',
         'sq' => 'AL',
         'sr' => 'CS',
         'tr' => 'TR',
         'uk' => 'UK',
         'vi' => 'VI',
         );
   }

   return isset($map[$ln]) ? $map[$ln] : '';
}

$currency = @$_GET['c'];
if (!$currency)
{
  $lang = @$_GET['lang'];
  if(!$lang)
  {
    $ip = @$_SERVER['HTTP_X_REAL_IP'];
    if (!preg_match('/[\[\]0-9a-f\.:]{8,64}/i', $ip))
      $ip = $_SERVER['REMOTE_ADDR'];
    $locale = @geoip_country_code_by_name($ip);

    $lang = preg_replace('/[,;-].*/', '', @$_SERVER['HTTP_ACCEPT_LANGUAGE']);
  } else {
    $locale = '';
  }

  if(!$locale)
  {
    $locale = ln2lc($lang, false);
    $lang = $locale == 'US' ? 'en' : substr($lang, 0, 2);
  }

  if (!$locale) $locale = 'US';

  $currency = $locale === 'US' ? 'USD' : ($locale == 'JP' ? 'JPY' : ($locale == 'GB' ? 'GBP' : 'EUR'));
} else {
  $currency = strtoupper($currency);
  if ($currency === 'BTC') {
    $url = 'bitcoin:1Kupnx5isBdAJ5ki2BEVF6sBuYmkYigWPU';
  }
}

$destination = isset($destinations[$currency]) ? $destinations[$currency] : $destinations['EUR'];

header("Location: $destination");
exit();