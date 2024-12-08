<style>
  .login-container {
    width: 500px;
    height: 350px;
    margin: 100px auto;
    margin-top: 135px;
    padding: 20px;
    background: transparent;
    border: 2px solid #fff;
    border-radius: 10px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
    backdrop-filter: blur(14px);
    text-align: center;
  }

  h1 {
    font-size: 30px;
    margin-bottom: 20px;
    text-align: center;
    color: #ffffff;
  }

  /* Input Group Styling */
  .input-group {
    margin-bottom: 15px;
    text-align: left;
  }

  .input-group label {
    display: block;
    font-size: 18px;
    color: #ffffff;
    margin-bottom: 10px;
  }

  .input-wrapper {
    position: relative;
    display: flex;
    justify-content: space-between;
    align-items: center;
  }

  input {
    width: 450px;
    padding: 10px 15px;
    margin: 0;
    font-size: 20px;
    border: 1px solid #ccc;
    border-radius: 20px;
  }

  .input-wrapper i {
    position: absolute;
    font-size: 20px;
    right: 45px;
  }

  .eye {
    cursor: pointer;
  }

  input:focus {
    border-color: #007bff;
    outline: none;
  }

  /* Button Styling */
  .loginBtn {
    width: 100%;
    padding: 14px;
    font-size: 18px;
    color: #fff;
    background: #007bff;
    border: none;
    border-radius: 15px;
    margin-top: 10px;
    cursor: pointer;
  }

  .loginBtn:hover {
    background: #0056b3;
  }
</style>

<div class="login-style">
  <div class="login-container">
    <h1>เข้าสู่ระบบ</h1>
    <form action="check_login.php" method="post">
      <div class="input-group">
        <label>รหัสนิสิต 13 หลัก</label>
        <div class="input-wrapper">
          <input name="user_account" type="text" placeholder="เช่น: 67xxxxxxxxxxx" required>
          <i class="fa-regular fa-user"></i>
        </div>
      </div>
      <div class="input-group">
        <label>รหัสผ่าน</label>
        <div class="input-wrapper password">
          <input name="password_account" type="password" placeholder="กรอกรหัสผ่านของคุณ" required>
          <i class="fa-regular fa-eye-slash eye" id="eyeIcon"></i>
        </div>
      </div>
      <button class="loginBtn" type="submit">เข้าสู่ระบบ</button>
    </form>
  </div>
</div>