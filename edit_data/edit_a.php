<?php 
error_reporting(E_ALL ^ E_NOTICE);
session_start();
$open_connect = 1;
require('../connect.php');

if ($_SESSION['status1'] == 'Admin') {

} else {
  echo "<meta http-equiv='refresh' content='0;url=http://127.0.0.1/SWU-GAMES-2024/index.php'>";
}

$id=$_GET['id'];

?>
<style>
  /* สไตล์สำหรับ Background เมื่อ Modal แสดง */
  .modal-overlay {
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: rgba(0, 0, 0, 0.5);
    display: none;
    justify-content: center;
    align-items: center;
  }

  /* สไตล์สำหรับ Modal */
  .modal {
    background: #fff;
    padding: 20px;
    border-radius: 10px;
    max-width: 400px;
    width: 100%;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
    text-align: center;
  }

  /* ปุ่มปิด Modal */
  .close-btn {
    background: red;
    color: #fff;
    border: none;
    border-radius: 5px;
    padding: 10px 20px;
    cursor: pointer;
  }

  .close-btn:hover {
    background: darkred;
  }

  /* แสดง Modal เมื่อมีคลาส active */
  .modal-overlay.active {
    display: flex;
  }
</style>

<button id="openModal">เพิ่มข้อมูล</button>

<!-- โครงสร้าง Modal -->
<div id="modalOverlay" class="modal-overlay">
  <div class="modal">
    <div class="modal_form">

      <form action="../insert_data/insert_po.php" method="post">
        <label for="username_in">username</label>
        <input type="text" name="username_in" required>

        <label for="password_in">password</label>
        <input type="text" name="password_in" placeholder="ถ้าเป็นนิสิตไม่ต้องกรอก">

        <label for="status_in">สถานะ</label>
        <select name="status_in" required>
          <option value="">--- เลือก ---</option>
          <option value="Soswu">องค์กรนิสิต</option>
          <option value="Committee">กรรมการ</option>
          <option value="Smo">สโมสรนิสิต</option>
          <option value="User">นิสิต</option>
        </select>

        <label for="initial_in">คำนำหน้า</label>
        <select name="initial_in" required>
          <option value="">-- เลือก --</option>
          <option value="นาย">นาย</option>
          <option value="นาง">นาง</option>
          <option value="นางสาว">นางสาว</option>
        </select>

        <label for="first_in">ชื่อ</label>
        <input type="text" name="first_in" required>

        <label for="last_in">นามสกุล</label>
        <input type="text" name="last_in" required>

        <div id="box-fac"></div>

        <label for="year_in">ชั้นปี</label>
        <select name="year_in">
          <option value="">--- เลือก ---</option>
          <option value="1">1</option>
          <option value="2">2</option>
          <option value="3">3</option>
          <option value="4">4</option>
          <option value="5">5</option>
        </select>

        <div id="box-sport"></div>

        <input type="file" name="file_img">

        <button class="" type="submit">บันทึก</button>
        <button class="close-btn" id="closeModal">ปิด</button>

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

          selectfacTxt += `<label for="faculty_in">คณะ/วิทยาลัย</label>
          <select name="faculty_in">
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

          selectspTxt += `<label for="sport_in">ประเภทกีฬา</label>
          <select name="sport_in">
                                    <option value="">เลือกกีฬา</option>` +
            optiontxt +
            `</select>`
          document.getElementById('box-sport').innerHTML = selectspTxt;
        </script>

      </form>
    </div>

  </div>
</div>

<script>
  // ดึง Element
  const modalOverlay = document.getElementById('modalOverlay');
  const openModalBtn = document.getElementById('openModal');
  const closeModalBtn = document.getElementById('closeModal');

  // ฟังก์ชันเปิด Modal
  openModalBtn.addEventListener('click', () => {
    modalOverlay.classList.add('active');
  });

  // ฟังก์ชันปิด Modal
  closeModalBtn.addEventListener('click', () => {
    modalOverlay.classList.remove('active');
  });

  // ปิด Modal เมื่อคลิกที่พื้นหลัง
  modalOverlay.addEventListener('click', (e) => {
    if (e.target === modalOverlay) {
      modalOverlay.classList.remove('active');
    }
  });
</script>