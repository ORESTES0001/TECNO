document.querySelector("#login").addEventListener("submit", function (e) {
    e.preventDefault();
    login();
  });
  
  async function login() {
  window.location.href = "https://tecnoagro.azurewebsites.net/Dashboard";
  }
  
