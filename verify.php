<?php
$access_token = 'UOeO9ZUwN4dTOpFqTnduO6vtbNy2+4+dpPbggF6b/fXpN5KQJunVpHLbbR8kSzOlKvbceXmLJREc2uSSkRFmvR2MfEkZnlG/vy4vxg9ptFjK2+NpPcKH4RkGV1TyMdHV1+gCjrsrs5CwGNjgwQuxKgdB04t89/1O/w1cDnyilFU=';
$url = 'https://api.line.me/v1/oauth/verify';
$headers = array('Authorization: Bearer ' . $access_token);
$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$result = curl_exec($ch);
curl_close($ch);
echo $result;