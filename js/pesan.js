// ambil parameter GET
const params = new URLSearchParams(window.location.search);
const pesan = params.get("pesan");
const alert = document.querySelector(".alert");
setTimeout(function () {
  history.replaceState({}, "", window.location.pathname);
}, 1);

// cek jika parameter get nilai gagal munculkan pesan
if (pesan == "gagal") {
  alert.classList.add("active");
  alert.innerHTML = "username atau password salah";
  alert.style.background = "#e53232";
  alert.style.color = "#880606";
} else if (pesan == "daftar") {
  alert.classList.add("active");
  alert.innerHTML = "Data Berhasil Ditambahkan Silahkan Login";
  alert.style.background = "#25d366";
  alert.style.color = "#0e5328";
} else if (pesan == "logout") {
  alert.classList.add("active");
  alert.innerHTML = "Logout Berhasil";
  alert.style.background = "#25d366";
  alert.style.color = "#0e5328";
} else if (pesan == "belumlogin") {
  alert.classList.add("active");
  alert.innerHTML = "halan di batasi";
  alert.style.background = "#ff9720";
  alert.style.color = "#653b0c";
}

// setelah 3 detik hilangkan pesan
setTimeout(function () {
  alert.classList.remove("active");
}, 3000);
