<?php
$url_host = 'http://' . $_SERVER['HTTP_HOST'];
$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');
$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);
$url_path = $url_host . $matches[1][0];
$url_path = str_replace('\\', '/', $url_path);

?>
<body>
    <div class="type-9 container">
        <div class="loginn">
            <img src="./images/login.svg" alt="login" class="login">
        </div>
        <h2 class="text">Sign In</h2>
        <div class="text1">create new account or log in</div>
        
            <div class="btn-facbook">
                <button class ="dsViFc facebook">
                    <div class="iWbuuZ">
                        <img width="32" height="32" src="./images/fblogo.jpeg" alt="facebook-logo">
                    </div>
                    <div class="ertcLt">Continue with Facebook</div>
                </button>
            </div>

            <div class="btn-huawei">
                <button class ="dsViFc githup">
                    <div class="iWbuuZ">
                        <img width="32" height="32" src="./images/githuplogo.jpeg" alt="githup-logo">
                    </div>
                    <div class="ertcLt">Sign in with GITHUP</div>
                </button>
            </div> 

            <div class="btn-google">
                <button class ="dsViFc google">
                <div class="iWbuuZ">
                    <img width="32" height="32" src="./images/logogoogle.jpeg" alt="google-logo">
                </div>
                <div class="ertcLt">Sign in with Google</div>
                </button>
            </div>
        
        <div style="margin-top: 60px;">
            <h2 class="text">WELLCOME!</h2>
        </div>
    </div>
</body>
</html>