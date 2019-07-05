<?php
#echo 111;exit;
$serv = new swoole_server('0.0.0.0',9510);

$serv->on('connect',function($serv,$fd) {
    echo "client: connect.\n";
});

$serv->on('receive',function($serv,$fd,$from_id,$data) {
    $serv->send($fd,'server:'.$data);
});

$serv->on('close',function($serv,$fd) {
    echo "client:close.\n";
});

$serv->start();
