<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xmlns:og="http://ogp.me/ns#" xmlns:fb="http://www.facebook.com/2008/fbml">
<head>
  <title>Support Kerala Blasters</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="css/croppie.css" rel="stylesheet" async="async" />
  <link href="css/style.css" rel="stylesheet" async="async" />
  <script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
  <script src="js/croppie.min.js" async="async"></script>
  <script src="js/app.js" async="async"></script>
  <script src="js/fb.js" async="async"></script>

  <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" type="text/javascript"></script>
</head>
<body>
  <div id="container-fluid text-center">
    <div id="row">
      <div class="col-sm-6 text-center">
        <h1>Support Kerala Blasters!</h1>
        <p>Support Kerala Blasters by changing your profile picture</p>
        <div id="preview">
          <div id="crop-area">
            <img src="http://demos.subinsb.com/isl-profile-pic/image/person.png" id="profile-pic" />
          </div>
          <img src="frames/frame-1.png" id="fg" data-design="0" />
        </div>
        <p>
          <button id="download" disabled>Download Profile Picture</button>
          <button id="fb-set-pic" disabled>Set As <b>Facebook</b> Profile Picture</button>
        </p>
      </div>

      <div class="col-sm-6 text-center">
        <h2>Upload your image</h2>

        <label class="btn btn-primary">
          Browse <input type="file" hidden onchange="onFileChange(this)">
        </label>

        <h2>OR</h2>
        <div class="fb-login-button" data-scope="public_profile,publish_actions" onlogin="checkLoginState();" data-max-rows="5" data-size="large" data-show-faces="false" data-auto-logout-link="false"></div>
        <div id="status"></div>
        <h2>Design</h2>
        <div id="0">
          <img class="design active" src="frames/frame-0.png" data-design="0" />
          <img class="design" src="frames/frame-1.png" data-design="1" />
          <img class="design" src="frames/frame-2.png" data-design="2" />
        </div>
        <?php
        require_once __DIR__ . "/footer.php";
        ?>
      </div>

    </div>
  </div>
</body>
</html>