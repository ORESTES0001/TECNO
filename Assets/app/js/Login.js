document.querySelector("#login").addEventListener("submit", function (e) {
    e.preventDefault();
    login();
  });
  
  async function login() {
    let login = document.querySelector("#login");
    const datos = new FormData(login);
    try {
      const url = `${base_url}/Register/ingresar`;
      const respuesta = await fetch(url, {
        method: "POST",
        body: datos,
      });
      const resultado = await respuesta.json();
  
      if (resultado.error) {
  
      } else {      
      }
    } catch (err) {
      console.log(err);
    }
  }
  