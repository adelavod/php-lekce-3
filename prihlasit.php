<?php

// nastartování session
session_start();

// identifikátor session - ten má uživatel v prohlížeči
var_dump(session_id());

$_SESSION ['loggedIn']=true;

