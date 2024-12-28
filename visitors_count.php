<?php

// make one hit
makeHit();

// add IP address if it doesn't exist in list
addUniqueIP();

// save total visitors
$total_visitors = getUniqueVisitor();
