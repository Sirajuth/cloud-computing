const menu = document.querySelector('#mobile-menu');
const menuLinks = document.querySelector('.navbar__menu');
const navLogo = document.querySelector('#navbar__logo');


document.getElementById('bmiForm').addEventListener('submit', function(event) {
  const name = document.getElementById('name').value;
  const height = document.getElementById('height').value;
  const weight = document.getElementById('weight').value;

  if (!name || !height || !weight) {
      alert("Semua kolom harus diisi!");
      event.preventDefault();
  }
});
