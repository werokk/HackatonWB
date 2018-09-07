<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1 ">
    <link rel="stylesheet" type="text/css" href="style.css">
    <meta charset="utf-8">
    <title></title>
  </head>
  <body >
<h1 align="center">Hackaton</h1>
  <div class="reg">
    <form action="registration.php" method="post" enctype="multipart/form-data">

      <input  type="text" spellcheck="false" class="text-line"  id="username" name="username" placeholder="Username">

      <input style="float:right; " type="password" spellcheck="false" class="text-line"  id="password" name="password" placeholder="password">

      <input  style="margin-top:50px;"type="password" spellcheck="false" class="text-line"  id="password1" name="password1" placeholder="password1">

      <input  style="float:right; margin-top:50px;" type="text" spellcheck="false" class="text-line"  id="email" name="email" placeholder="email">
      <div class="inputbutton">
       <div style="margin-left:150px;margin-top:75px;background-image: url(Add_picture.png);width: 420px;height:  239px;">
            <input type="file" id="image" alt="Login"
           src="Add_picture.png" style="
    margin-top:  0;
    opacity:  0;
"/></div>

        <img src="" id="profile-img-tag" width="100px" />
           <script type="text/javascript">
                                        function readURL(input) {
                                            if (input.files && input.files[0]) {
                                                var reader = new FileReader();

                                                reader.onload = function (e) {
                                                    $('#profile-img-tag').attr('src', e.target.result);
                                                }
                                                reader.readAsDataURL(input.files[0]);
                                            }
                                        }
                                        $("#profile-img").change(function(){
                                            readURL(this);
                                        });
                                    </script><br>

      </div>
      <!-- <input style="margin-top:60px;margin-left:87px;"type="image" placeholder="password"src="Add_picture.png" placeholder="password">
 -->

      <button class="btn"> Register</button>
    </form>
  </div>


  </body>
  
</html>
