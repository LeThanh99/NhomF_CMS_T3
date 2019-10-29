<?php
$url_host = 'http://'.$_SERVER['HTTP_HOST'];
$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');
$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);
$url_path = $url_host . $matches[1][0];
$url_path = str_replace('\\', '/', $url_path);
?>

<!DOCTYPE html>

<html>
<head>
    <title>module 25</title>
    <meta charset="UTF-8">
    
</head>

<body>   
    <div class="type-25">
        <div class="container">
            <div class="title-logo">
                <div class="name-logo">
                    <h2 class="the-title">Latest journal</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                </div>
                <div class="logo-btn">
                    <button type="submit" class="btn btn-viewall">VIEW ALL POST</button>
                </div>
            </div>
        </div>
    </div> 

</body>
</html>                                    
