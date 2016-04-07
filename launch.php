<?php

set_time_limit(0);

require_once 'Elemental.php';

define('BOT_TOKEN', 'Token');

$bot = new PollBot(BOT_TOKEN, 'PollBotChat');
$bot->runLongpoll();
