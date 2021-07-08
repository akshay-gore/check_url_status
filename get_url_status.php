<?php
$url = "https://in.bookmyshow.com";
function get_url_status($url)
{
    if(strpos(@get_headers($url,1)[0], "200"))
    {
        echo "Provided URL is a valid URL";
    }
    else
    {
        throw new \Exception("Provided URL is not a valid URL");
    }
}
try
{
    get_url_status($url);
}
catch (Exception $e)
{
    echo $e -> getMessage();
}
?>
