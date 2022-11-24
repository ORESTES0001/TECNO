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
        new Noty({
          type: "error",
          text: `${resultado.error}`,
          layout: "topCenter",
          theme: "metroui",
          timeout: 1500,
        }).show();
      } else {      
          new Noty({
        type: "success",
        text: `${resultado.msg}`,
        layout: "topCenter",
        theme: "metroui",
        timeout: 1000,
      }).show();
      setTimeout(() =>{

        window.location.href = `${base_url}/dashboard   `;
      },1500)
      }
    } catch (err) {
      console.log(err);
    }
  }
  