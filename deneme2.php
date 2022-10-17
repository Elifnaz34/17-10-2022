<?php
$uyeler= array 
(
array ("adi"=> "Yusuf", "yasi"=>25, "memleket"=>"Cankiri"), 
array ("adi"=> "Ahmet", "yasi"=>20, "memleket"=>"Van"),
array ("adi"=> "Hamza", "yasi"=>46,"memleket"=>"Erzurum"), 
array ("adi"=> "Mehmet","yasi"=>26, "memleket"=>"Bursa"), 
array ("adi"=> "Omer", "yasi"=>36, "memleket"=>"Mersin"),
);
for ($i=0; $i<count($uyeler); $i++)
{
	echo $uyeler [$i] ["adi"]."-".$uyeler [$i] ["yasi"]."-".$uyeler[$i] ["memleket"]."<br>";
}
?>