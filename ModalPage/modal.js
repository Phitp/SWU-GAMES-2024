$(document).ready(function () {
  // Open the modal when the button is clicked
  $('#openModal').on('click', function () {
      $('#pdfModal').modal('show');
  });

  // Optional: Add a log or cleanup when the modal is hidden
  $('#pdfModal').on('hidden.bs.modal', function () {
      console.log('Modal has been closed.');
  });
});
