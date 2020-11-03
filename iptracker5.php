
<?php
$green  = "\033[1;32m";
$yellow ="\033[1;33m";
$normal = "\033[0m";

system("clear");

echo "\n$green

$green  ██╗██████╗     ████████╗██████╗  █████╗  ██████╗██╗  ██╗███████╗██████╗    $normal
$green  ██║██╔══██╗    ╚══██╔══╝██╔══██╗██╔══██╗██╔════╝██║ ██╔╝██╔════╝██╔══██╗   $normal
$green  ██║██████╔╝       ██║   ██████╔╝███████║██║     █████╔╝ █████╗  ██████╔╝   $normal
$green  ██║██╔═══╝        ██║   ██╔══██╗██╔══██║██║     ██╔═██╗ ██╔══╝  ██╔══██╗   $normal
$green  ██║██║            ██║   ██║  ██║██║  ██║╚██████╗██║  ██╗███████╗██║  ██║   $normal
$green  ╚═╝╚═╝            ╚═╝   ╚═╝  ╚═╝╚═╝  ╚═╝ ╚═════╝╚═╝  ╚═╝╚══════╝╚═╝  ╚═╝   $normal ";



           
echo "\n     $yellow     Author : Rahat Khan Tusar(RKT)     $normal";
echo "\n     $yellow     Github : https://github.com/r3k4t  ================> ";

$ip = file_get_contents("ip.txt");
system("wget ipinfo.io/{$ip}");
$ip2 = file_get_contents("ip2.txt");
system("wget ipinfo.io/{$ip2}");
$ip3 = file_get_contents("ip3.txt");
system("wget ipinfo.io/{$ip3}");
$ip4 = file_get_contents("ip4.txt");
system("wget ipinfo.io/{$ip4}");
$ip5 = file_get_contents("ip5.txt");
system("wget ipinfo.io/{$ip5}");

?>
