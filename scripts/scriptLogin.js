let eyeicon = document.getElementById('eyeIcon');
let userpassword = document.getElementById('Password');

eyeicon.onclick = function () {
  if (userpassword.type == "password") {
    userpassword.type = "text";
    eyeicon.classList.remove('fa-eye-slash');
    eyeicon.classList.add('fa-eye');
  } else {
    userpassword.type = "password";
    eyeicon.classList.add('fa-eye-slash');
    eyeicon.classList.remove('fa-eye');
  }
}