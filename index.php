<?php 
  session_start();
  if(isset($_SESSION['unique_id'])){
    header("location: users.php");
  }
?>

<?php include_once "header.php"; ?>
<body>
  <div class="wrapper">
    <section class="form signup">
      <header>ثبت نام در چت روم</header>
      <form action="#" method="POST" enctype="multipart/form-data" autocomplete="off">
        <div class="error-text"></div>
        <div class="name-details">
          <div class="field input">
            <label>اسم</label>
            <input type="text" name="fname" placeholder="اسم" required>
          </div>
          <div class="field input">
            <label>نام خانوادگی</label>
            <input type="text" name="lname" placeholder="نام خانوادگی" required>
          </div>
        </div>
        <div class="field input">
          <label>آدرس ایمیل</label>
          <input type="text" name="email" placeholder="ایمیل خود را وارد کنید" required>
        </div>
        <div class="field input">
          <label>رمز عبور</label>
          <input type="password" name="password" placeholder="رمز عبور خود را وارد کنید" required>
          <i class="fas fa-eye"></i>
        </div>
        <div class="field image">
          <label>عکس پروفایل</label>
          <input type="file" name="image" accept="image/x-png,image/gif,image/jpeg,image/jpg" required>
        </div>
        <div class="field button">
          <input type="submit" name="submit" value="ادامه به چت">
        </div>
      </form>
      <div class="link">قبلاً ثبت نام کرده اید؟ <a href="login.php">اکنون وارد شوید</a></div>
      <div class="link">طراحی توسط <a href="https://netcopy.ir">نت کپی</a></div>
    </section>
  </div>

  <script src="javascript/pass-show-hide.js"></script>
  <script src="javascript/signup.js"></script>

</body>
</html>
