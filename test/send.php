
<!doctype html>
<html lang="en">
  <head>
    <meta charset="UTF-8"/>
    <title>Document</title>
  </head>
  <body>
    <form method="post" action="mail.php">
      <p> あなたのメールアドレス
      <input name="email" size="60"/>
      </p>
      <p>メッセージ<br>
      <textarea cols="60"  name="message" rows="8">
      </textarea>
      <input type="submit" value="送る"/>
      <input type="reset" value="消去"/>
      </p>
    </form>
<?php 
if(@$_POST['email'] != "" && @$_POST['message'] != ""){
  mb_send_mail(
    "*********@gmail.com",
    "フォームからのメッセージ",
    $_POST['message'],
    "From:{$_POST['email']}",
    "-f *******@********");
echo "<p>メールを送りました</p>";
}

?>



  </body>
</html>
