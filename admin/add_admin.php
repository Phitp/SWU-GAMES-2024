<?php
error_reporting(E_ALL ^ E_NOTICE);
session_start();
$open_connect = 1;
require('../connect.php');

// Handle POST request for updating or adding user data
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  if (isset($_POST['add_data'])) {
    // Check if the form was already submitted
    if (!isset($_SESSION['form_submitted'])) {
      $_SESSION['form_submitted'] = true;

      // Add new user
      $username = $_POST['username'];
      $password = $_POST['password'];
      $initial = $_POST['initial'];
      $first_name = $_POST['first_name'];
      $last_name = $_POST['last_name'];
      $full_name = $_POST['full_name'];
      $year = $_POST['year'];
      $status = $_POST['status'];
      $sport_name = $_POST['sport_name'];
      $img_profile = $_POST['img_profile'];

      $sql = "INSERT INTO account (username, password, first_name, last_name, faculty_id, year, status, sport_id, img_profile, user_initial) 
                    VALUES ('$username', '$password', '$first_name', '$last_name', '$full_name', '$year', '$status', '$sport_name', '$img_profile', '$initial')";
      if (mysqli_query($connect, $sql)) {
        echo "<script>alert('เพิ่มข้อมูลสำเร็จ');</script>";
      } else {
        echo "<script>alert('เกิดข้อผิดพลาด: " . mysqli_error($connect) . "');</script>";
      }
    }
  } else {
    // Update existing user
    $user_id = $_POST['user_id'];
    $password = $_POST['password'];
    $initial = $_POST['initial'];
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $full_name = $_POST['full_name'];
    $year = $_POST['year'];
    $status = $_POST['status'];
    $sport_name = $_POST['sport_name'];
    $img_profile = $_POST['img_profile'];

    $sql = "UPDATE account SET password = '$password', first_name = '$first_name', last_name = '$last_name', faculty_id = '$full_name', year = '$year', status = '$status', sport_id = '$sport_name', img_profile = '$img_profile', user_initial = '$initial'
                WHERE user_id = $user_id";
    if (mysqli_query($connect, $sql)) {
      echo "<script>alert('ข้อมูลอัปเดตสำเร็จ');</script>";
    } else {
      echo "<script>alert('เกิดข้อผิดพลาด: " . mysqli_error($connect) . "');</script>";
    }
  }
}

// Reset the form submission status on page load
if ($_SERVER['REQUEST_METHOD'] != 'POST') {
  unset($_SESSION['form_submitted']);
}
?>

<!DOCTYPE html>
<html lang="th">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>บัตรประจำตัวนักกีฬา</title>
  <style>
    .modal {
      display: none;
      position: fixed;
      top: 50%;
      left: 50%;
      transform: translate(-50%, -50%);
      width: 80%;
      background-color: white;
      border: 1px solid #ccc;
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
      z-index: 1000;
      padding: 20px;
    }

    .modal-overlay {
      position: fixed;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      background: rgba(0, 0, 0, 0.5);
      z-index: 999;
    }

    .add-data-section {
      margin: 20px 0;
    }

    .add-data-section form {
      display: flex;
      flex-direction: column;
      gap: 10px;
    }
  </style>
  <script>
    function openModal(id) {
      document.getElementById(`modal${id}`).style.display = 'block';
    }

    function closeModal(id) {
      document.getElementById(`modal${id}`).style.display = 'none';
    }

    // window.onclick = function(event) {
    //   var modals = document.querySelectorAll('.modal');
    //   modals.forEach(function(modal) {
    //     if (event.target === modal) {
    //       modal.style.display = 'none';
    //     }
    //   });
    // }

    function openAddModal() {
      document.getElementById('addModal').style.display = 'block';
    }

    function closeAddModal() {
      document.getElementById('addModal').style.display = 'none';
    }
  </script>
</head>

<body>
  <?php include("../sidebar_m.php"); ?>
  <?php include("../navbar_m.php"); ?>
  <?php include("../content.php"); ?>

  <div class="content">
    <div class="container">
      <button type="button" onclick="openAddModal()">เพิ่มข้อมูล</button>
      <div id="addModal" class="modal">
        <h3>เพิ่มข้อมูล</h3>
        <form method="POST">
          <label for="username">username</label>
          <input type="text" name="username" required>

          <label for="password">password</label>
          <input type="text" name="password" placeholder="ถ้าเป็นนิสิตไม่ต้องกรอก">

          <label for="status">สถานะ</label>
          <select name="status" required>
            <option value="">--- เลือก ---</option>
            <option value="Soswu">องค์กรนิสิต</option>
            <option value="Committee">กรรมการ</option>
            <option value="Smo">สโมสรนิสิต</option>
            <option value="User">นิสิต</option>
          </select>

          <label for="initial">คำนำหน้า</label>
          <select name="initial" required>
            <option value="">-- เลือก --</option>
            <option value="นาย">นาย</option>
            <option value="นาง">นาง</option>
            <option value="นางสาว">นางสาว</option>
          </select>

          <label for="first_name">ชื่อ</label>
          <input type="text" name="first_name" required>

          <label for="last_name">นามสกุล</label>
          <input type="text" name="last_name" required>

          <div id="box-fac"></div>

          <label for="year">ชั้นปี</label>
          <select name="year">
            <option value="">--- เลือก ---</option>
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
            <option value="5">5</option>
          </select>

          <div id="box-sport"></div>

          <input type="file" name="img_profile">

          <?php // คณะ

          $strSQL = "SELECT * 
            FROM faculty";
          $objQuery = mysqli_query($connect, $strSQL);

          while ($row_fac = mysqli_fetch_assoc($objQuery)) {
            $dataArray_faculty[] = [
              "id" => $row_fac["id"],
              "facultyname" => $row_fac["full_name"],
            ];
          }

          $jsonData_faculty = json_encode($dataArray_faculty);

          echo "<script>let faculty = $jsonData_faculty;</script>";

          ?>

          <script>
            var selectfacTxt = '';
            var optiontxt = '';

            faculty.forEach(fa => {
              optiontxt += `
                  <option value="${fa.id}">${fa.facultyname}</option>`;
            });

            selectfacTxt += `<label for="full_name">คณะ/วิทยาลัย</label>
          <select name="full_name">
                              <option value="">-------------------- เลือกคณะ/วิทยาลัย --------------------</option>` +
              optiontxt +
              `</select>`;

            document.getElementById('box-fac').innerHTML = selectfacTxt;
          </script>

          <?php // กีฬา

          $strSQL = "SELECT * 
            FROM sport";
          $objQuery = mysqli_query($connect, $strSQL);

          while ($row = mysqli_fetch_assoc($objQuery)) {
            $dataArray_sport[] = [
              "id" => $row["id"],
              "sportname" => $row["sport_name"],
            ];
          }

          $jsonData_sport = json_encode($dataArray_sport);

          echo "<script>let sport = $jsonData_sport;</script>";

          ?>

          <script>
            var selectspTxt = '';
            var optiontxt = '';

            sport.forEach(sp => {
              optiontxt += `
                  <option value="${sp.id}">${sp.sportname}</option>
                  `;
            });

            selectspTxt += `<label for="sport_name">ประเภทกีฬา</label>
          <select name="sport_name">
                                    <option value="">เลือกกีฬา</option>` +
              optiontxt +
              `</select>`
            document.getElementById('box-sport').innerHTML = selectspTxt;
          </script>

        <button type="submit" name="add_data">บันทึก</button>
        <button type="button" onclick="closeAddModal()">ปิด</button>
        </form>
      </div>

      <form>
        <input type="text" placeholder="search">
        <button>ค้นหา</button>
      </form>

      <?php
      $strSQL = "SELECT * 
            FROM account
            LEFT JOIN faculty
            ON account.faculty_id = faculty.id
            LEFT JOIN sport
            ON account.sport_id = sport.id
            WHERE status != 'Admin'
            ORDER BY account.time DESC ";
      $objQuery = mysqli_query($connect, $strSQL);

      echo "<table border='1'>";
      echo "<tr>
                    <th>รหัสนิสิต</th>
                    <th>ชื่อ-สกุล</th>
                    <th>ชื่อคณะ</th>
                    <th>ชั้นปี</th>
                    <th>สถานะ</th>
                    <th>ประเภทกีฬา</th>
                    <th>แก้ไขข้อมูล</th>
                </tr>";

      while ($row = mysqli_fetch_assoc($objQuery)) {
        echo "<tr>
                        <td>{$row['username']}</td>
                        <td>{$row['user_initial']} {$row['first_name']} {$row['last_name']}</td>
                        <td>{$row['full_name']}</td>
                        <td>{$row['year']}</td>
                        <td>{$row['status']}</td>
                        <td>{$row['sport_name']}</td>
                        <td><button type='button' onclick='openModal({$row['id']})'>แก้ไขข้อมูล</button></td>
                        <td><button type='button' onclick='delete({$row['id']})'>ลบ</button></td>
                    </tr>";

        echo "<div id='modal{$row['id']}' class='modal'>
                        <h3>แก้ไขข้อมูล</h3>
                        <form method='POST'>
                            <input type='hidden' name='user_id' value='{$row['id']}'>
                            <label>ชื่อผู้ใช้:</label>
                            <input type='text' name='password' value='" . (isset($row['username']) ? htmlspecialchars($row['username']) : '') . "'><br>
                            <label>รหัสผ่าน:</label>
                            <input type='text' name='password' value='" . (isset($row['password']) ? htmlspecialchars($row['password']) : '') . "'><br>
                            <label>ชื่อ:</label>
                            <input type='text' name='first_name' value='" . (isset($row['first_name']) ? htmlspecialchars($row['first_name']) : '') . "'><br>
                            <label>นามสกุล:</label>
                            <input type='text' name='last_name' value='" . (isset($row['last_name']) ? htmlspecialchars($row['last_name']) : '') . "'><br>
                            <label>ชื่อคณะ:</label>
                            <input type='text' name='full_name' value='" . (isset($row['full_name']) ? htmlspecialchars($row['full_name']) : '') . "'><br>
                            <label>ชั้นปี:</label>
                            <input type='text' name='year' value='" . (isset($row['year']) ? htmlspecialchars($row['year']) : '') . "'><br>
                            <label>สถานะ:</label>
                            <input type='text' name='status' value='" . (isset($row['status']) ? htmlspecialchars($row['status']) : '') . "'><br>
                            <label>ชื่อกีฬา:</label>
                            <input type='text' name='sport_name' value='" . (isset($row['sport_name']) ? htmlspecialchars($row['sport_name']) : '') . "'><br>
                            <label>รูปโปรไฟล์:</label>
                            <input type='file' name='img_profile' value='" . (isset($row['img_profile']) ? htmlspecialchars($row['img_profile']) : '') . "'><br>
                            <button type='submit'>บันทึก</button>
                            <button type='button' onclick='closeModal({$row['id']})'>ปิด</button>
                        </form>
                    </div>";
      }

      echo "</table>";
      ?>
    </div>
  </div>
</body>

</html>