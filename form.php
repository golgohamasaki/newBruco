<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>unko</title>
</head>
<body>
  <div class="main">
    <?php echo "helloworld"; ?>
    <?php if(isset($_REQUEST['user'])){
      if (mail("yuto3838.sas@icloud.com", "TEST MAIL", "This is a test message.", "From: from@example.com")) {
        echo "メールが送信されました。";
      } else {
        echo "メールの送信に失敗しました。";
      }
      header('Location: index.php');
      exit();
} 
?>
  </div>
</body>
</html>