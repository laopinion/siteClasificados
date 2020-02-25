
$(document).ready(function() {
  $("#form-anuncio").submit(function() {
    var nombres = $("#nombres").val();
    var apellidos = $("#apellidos").val();
    $("#payerFullName").val(nombres + " " + apellidos);
  });

  $("#packages li").click(function() {
    // console.log("okk");
    $("#formulario").slideDown();

    $("html, body").animate(
      {
        scrollTop: $("#formulario").offset().top
      },
      2000
    );

    cleanOptions();
  });

  // Finca raíz
  $("#packages #finca #package_1").click(function() {
    // console.log("okk");
    $("#formulario #package_option option[value='1']").attr(
      "selected",
      true
    );
    $("#amount").val("417000");
    $("#description").val("3 avisos - 1 proyecto Finca Raíz");
    signature("417000");
  });

  $("#packages #finca #package_2").click(function() {
    // console.log("dos");
    $("#formulario #package_option option[value='2']").attr(
      "selected",
      true
    );
    $("#amount").val("1307000");
    $("#description").val("10 avisos - 3 proyectos Finca Raíz");
    signature("1307000");
  });

  $("#packages #finca #package_3").click(function() {
    $("#formulario #package_option option[value='3']").attr(
      "selected",
      true
    );
    $("#amount").val("1920000");
    $("#description").val("50 avisos - 5 proyectos Finca Raíz");
    signature("1920000");
  });

  $("#packages #finca #package_4").click(function() {
    $("#formulario #package_option option[value='4']").attr(
      "selected",
      true
    );
    $("#amount").val("3450000");
    $("#description").val("100 avisos - 10 proyectos Finca Raíz");
    signature("3450000");
  });

  // Vehículos
  $("#packages #vehiculo #package_1").click(function() {
    $("#formulario #package_option option[value='5']").attr(
      "selected",
      true
    );
    $("#amount").val("45000");
    $("#description").val("1 aviso Vehículos");
    signature("45000");
  });

  $("#packages #vehiculo #package_2").click(function() {
    // console.log("okk");
    $("#formulario #package_option option[value='6']").attr(
      "selected",
      true
    );
    $("#amount").val("122000");
    $("#description").val("3 avisos Vehículos");
    signature("122000");
  });

  $("#packages #vehiculo #package_3").click(function() {
    // console.log("dos");
    $("#formulario #package_option option[value='7']").attr(
      "selected",
      true
    );
    $("#amount").val("180000");
    $("#description").val("5 avisos Vehículos");
    signature("180000");
  });

  $("#packages #vehiculo #package_4").click(function() {
    $("#formulario #package_option option[value='8']").attr(
      "selected",
      true
    );
    $("#amount").val("315000");
    $("#description").val("10 avisos Vehículos");
    signature("315000");
  });

  // Empleos
  $("#packages #empleo #package_1").click(function() {
    $("#formulario #package_option option[value='9']").attr(
      "selected",
      true
    );
    $("#amount").val("70000");
    $("#description").val("1 aviso Empleo");
    signature("70000");
  });

  $("#packages #empleo #package_2").click(function() {
    $("#formulario #package_option option[value='10']").attr(
      "selected",
      true
    );
    $("#amount").val("189000");
    $("#description").val("3 avisos Empleo");
    signature("189000");
  });

  $("#packages #empleo #package_3").click(function() {
    $("#formulario #package_option option[value='11']").attr(
      "selected",
      true
    );
    $("#amount").val("315000");
    $("#description").val("5 avisos Empleo");
    signature("315000");
  });

  $("#packages #empleo #package_4").click(function() {
    $("#formulario #package_option option[value='12']").attr(
      "selected",
      true
    );
    $("#amount").val("630000");
    $("#description").val("10 avisos Empleo");
    signature("630000");
  });

  function signature(amount) {
    let nuevoAmount = amount;
    const domain = window.location.origin

    $.ajax({
      type: "POST",
      url: `${domain}/sites/default/themes/clasificados/signature.php`,
      data: { amount: nuevoAmount },
      success: function(data) {
        const separador = " "; // un espacio en blanco
        const limite = 2;
        const arreglo = data.split(separador, limite);

        $("#signature").val(arreglo[0]);
        $("#referenceCode").val(arreglo[1]);
      },
      error: function() {
        console.log("Error en crear la signature...");
      }
    });
  }

  function changePackage() {
    const option = this.value;
    // console.log(option)
    if (option == 1) {
      $("#amount").val("417000");
      $("#description").val("3 avisos - 1 proyecto Finca Raíz");
      signature("417000");
    } else if (option == 2) {
      $("#amount").val("1307000");
      $("#description").val("10 avisos - 3 proyectos Finca Raíz");
      signature("1307000");
    } else if (option == 3) {
      $("#amount").val("1920000");
      $("#description").val("50 avisos - 5 proyectos Finca Raíz");
      signature("1920000");
    } else if (option == 4) {
      $("#amount").val("3450000");
      $("#description").val("100 avisos - 10 proyectos Finca Raíz");
      signature("3450000");
    } else if (option == 5) {
      $("#amount").val("45000");
      $("#description").val("1 aviso Vehículos");
      signature("45000");
    } else if (option == 6) {
      $("#amount").val("122000");
      $("#description").val("3 avisos Vehículos");
      signature("122000");
    } else if (option == 7) {
      $("#amount").val("180000");
      $("#description").val("5 avisos Vehículos");
      signature("180000");
    } else if (option == 8) {
      $("#amount").val("315000");
      $("#description").val("10 avisos Vehículos");
      signature("315000");
    } else if (option == 9) {
      $("#amount").val("70000");
      $("#description").val("1 aviso Empleo");
      signature("70000");
    } else if (option == 10) {
      $("#amount").val("189000");
      $("#description").val("3 avisos Empleo");
      signature("189000");
    } else if (option == 11) {
      $("#amount").val("315000");
      $("#description").val("5 avisos Empleo");
      signature("315000");
    } else if (option == 12) {
      $("#amount").val("630000");
      $("#description").val("10 avisos Empleo");
      signature("630000");
    }
  }

  const package_option = document.getElementById("package_option");
  if (package_option != null) {
    package_option.addEventListener("change", changePackage.bind(package_option))
  }

  function  cleanOptions() {
    const data = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12]
    // const length_packages = document.getElementById('package_option').length

    // https://developer.mozilla.org/es/docs/Web/JavaScript/Referencia/Objetos_globales/Array/from
    // const data = Array.from({length: length_packages}, (v, i) =>  i  = i + 1);
    // console.log(data)
    data.map(function (value) {
      // console.log(value)
      $(`#formulario #package_option option[value='${value}']`).attr(
        "selected",
        false
      );
    })
  }

  const $waves = document.getElementById("btn__submit");
  // console.log($waves);
  // const $wavesRipple = document.querySelector('#btn .waves-ripple')

  function wavesRipple(e) {
    // e.preventDefault();
    let _this = this;

    let $child = document.querySelector(".waves-ripple");
    if ($child != null) {
      // console.log($child)
      _this.removeChild($child);
    }

    let posX = _this.offsetLeft,
      posY = _this.offsetTop,
      buttonWidth = _this.offsetWidth,
      buttonHeight = _this.offsetHeight;

    const el = document.createElement("span");
    el.setAttribute("class", "waves-ripple");
    _this.appendChild(el);

    if (buttonWidth >= buttonHeight) {
      buttonHeight = buttonWidth;
    } else {
      buttonWidth = buttonHeight;
    }

    let x = e.pageX - posX - buttonWidth / 2;
    let y = e.pageY - posY - buttonHeight / 2;

    const $ripple = document.querySelector(".waves-ripple");

    // $ripple.setAttribute('style', `width: ${buttonWidth}px; height: ${buttonHeight}px; top: ${y}px; left: ${x}px; `);
    $ripple.style.width = buttonWidth + "px";
    $ripple.style.height = buttonHeight + "px";
    $ripple.style.top = y + "px";
    $ripple.style.left = x + "px";
    $ripple.classList.add("waves-animate");
    // console.log($ripple);
  }

  if ($waves != null) {
    $waves.addEventListener("click", wavesRipple);
  }

});