<?php

require_once '/vendor/autoload.php';

$es = new Elasticsearch\Client([
    'hosts' => ['192.168.0.157:9200']
]);

