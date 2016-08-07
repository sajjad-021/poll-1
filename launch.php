<?php

set_time_limit(0);

require_once 'Elemental.php';

define('BOT_TOKEN', '252071655:AAEnn9q9ogA-c3NFhRXlSRzTtlBOR2sHUAQ');

$bot = new PollBot(BOT_TOKEN, 'PollBotChat');
$bot->runLongpoll();
