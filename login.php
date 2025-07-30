<?php 
  session_start();
  if(isset($_SESSION['unique_id'])){
    header("location: users.php");
  }
?>

<?php include_once "header.php"; ?>
<body>
  <div class="wrapper">
    <section class="form login">
      <header>ورود به چت روم</header>
      <form action="#" method="POST" enctype="multipart/form-data" autocomplete="off">
        <div class="error-text"></div>
        <div class="field input">
          <label>آدرس ایمیل</label>
          <input type="text" name="email" placeholder="ایمیل خود را وارد کنید" required>
        </div>
        <div class="field input">
          <label>رمز عبور</label>
          <input type="password" name="password" placeholder="رمز ورود خود را وارد کنید" required>
          <i class="fas fa-eye"></i>
        </div>
        <div class="field button">
          <input type="submit" name="submit" value="ورود به چت روم">
        </div>
      </form>
      <div class="link">هنوز ثبت نام نکرده اید؟ <a href="index.php">ثبت نام کن</a></div>
      <div class="link">طراحی توسط <a href="https://netcopy.ir">نت کپی</a></div>
    </section>
  </div>
  
  <script src="javascript/pass-show-hide.js"></script>
  <script src="javascript/login.js"></script>

</body>
</html>
