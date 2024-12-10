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
      <h2>นี่คือ Modal</h2>
      <p>คุณสามารถเพิ่มเนื้อหาที่นี่ได้</p>
      <button class="close-btn" id="closeModal">ปิด</button>
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