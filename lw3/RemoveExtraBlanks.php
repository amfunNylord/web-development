<?php
header("Content-Type: text/plain");
echo implode(' ', explode(' ', $_GET['text']));