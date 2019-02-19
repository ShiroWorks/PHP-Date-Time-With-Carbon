<?php

use Carbon\Carbon;
use Project\Models\Post;

require 'vendor/autoload.php';

$post = (new Post)->getFirst();

echo "Post was created {$post->created->diffForHumans()}";