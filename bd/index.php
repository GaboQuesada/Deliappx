<?php

include_once '../../db/connectctrl.php';

$outco = new bdconect();
 echo $outco->getDbname();
