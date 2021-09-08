<?php 
 
$r1="$(touser), $(user) quiere que le imbites 69 tacos KappaPride";
$r2="$(touser), $(user) quiere que le imbites 69 bongles KappaPride";
$r3="$(touser), $(user) quiere que le imbites 69 esquites KappaPride";
$r4="$(touser), $(user) quiere que le imbites 69 alitas KappaPride";
$r5="$(touser), $(user) quiere que le imbites 69 churros KappaPride";
$r6="$(touser), $(user) quiere que le imbites 69 tostadas KappaPride";
$r7="$(touser), $(user) quiere que le imbites 69 pambazos KappaPride";
$r8="$(touser), $(user) quiere que le imbites 69 donas KappaPride";
$r9="$(touser), $(user) quiere que le imbites 69 pozoles KappaPride";
 
$rm = array($r1,$r2,$r3,$r4,$r5,$r6,$r7,$r8,$r9);
 
$random_keys = array_rand($rm, 1);
 
echo$rm[$random_keys];
 
?>
