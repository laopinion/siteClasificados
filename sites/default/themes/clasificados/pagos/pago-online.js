
$(document).ready(function() {
  $("#form-anuncio").submit(function() {
    var nombres = $("#nombres").val();
    var apellidos = $("#apellidos").val();
    $("#payerFullName").val(nombres + " " + apellidos);
  });

  $("#packages #package_1").click(function() {
    // console.log("okk");
    $("#formulario").slideDown();

    $("html, body").animate(
      {
        scrollTop: $("#formulario").offset().top
      },
      2000
    );

    cleanOptions();

    $("#formulario #package_option option[value='1']").attr(
      "selected",
      true
    );
    $("#amount").val("12000");
    $("#description").val("0 - 5 Palabras 4 días");
    signature("12000");
  });

  $("#packages #package_2").click(function() {
    $("#formulario").slideDown();

    $("html, body").animate(
      {
        scrollTop: $("#formulario").offset().top
      },
      2000
    );

    cleanOptions();
    // console.log("dos");
    $("#formulario #package_option option[value='2']").attr(
      "selected",
      true
    );
    $("#amount").val("18000");
    $("#description").val("6 - 10 Palabras 4 días");
    signature("18000");
  });

  $("#packages #package_3").click(function() {
    $("#formulario").slideDown();

    $("html, body").animate(
      {
        scrollTop: $("#formulario").offset().top
      },
      2000
    );

    cleanOptions();

    $("#formulario #package_option option[value='3']").attr(
      "selected",
      true
    );
    $("#amount").val("41000");
    $("#description").val("11 - 20 Palabras 4 días");
    signature("41000");
  });

  $("#packages #package_4").click(function() {
    $("#formulario").slideDown();

    $("html, body").animate(
      {
        scrollTop: $("#formulario").offset().top
      },
      2000
    );

    cleanOptions();

    $("#formulario #package_option option[value='4']").attr(
      "selected",
      true
    );
    $("#amount").val("65000");
    $("#description").val("21 - 30 Palabras 4 días");
    signature("65000");
  });

  $("#packages #package_5").click(function() {
    $("#formulario").slideDown();

    $("html, body").animate(
      {
        scrollTop: $("#formulario").offset().top
      },
      2000
    );

    cleanOptions();

    $("#formulario #package_option option[value='5']").attr(
      "selected",
      true
    );
    $("#amount").val("22000");
    $("#description").val(
      "Facebook mascotas 1 publicación feed + historia"
    );
    signature("22000");
  });

  $("#packages #package_6").click(function() {
    // console.log("okk");
    $("#formulario").slideDown();

    $("html, body").animate(
      {
        scrollTop: $("#formulario").offset().top
      },
      2000
    );

    cleanOptions();

    $("#formulario #package_option option[value='6']").attr(
      "selected",
      true
    );
    $("#amount").val("24000");
    $("#description").val("0 - 5 Palabras 8 días");
    signature("24000");
  });

  $("#packages #package_7").click(function() {
    $("#formulario").slideDown();

    $("html, body").animate(
      {
        scrollTop: $("#formulario").offset().top
      },
      2000
    );

    cleanOptions();
    // console.log("dos");
    $("#formulario #package_option option[value='7']").attr(
      "selected",
      true
    );
    $("#amount").val("36000");
    $("#description").val("6 - 10 Palabras 8 días");
    signature("36000");
  });

  $("#packages #package_8").click(function() {
    $("#formulario").slideDown();

    $("html, body").animate(
      {
        scrollTop: $("#formulario").offset().top
      },
      2000
    );

    cleanOptions();

    $("#formulario #package_option option[value='8']").attr(
      "selected",
      true
    );
    $("#amount").val("48000");
    $("#description").val("0 - 5 Palabras 15 días");
    signature("48000");
  });

  $("#packages #package_9").click(function() {
    $("#formulario").slideDown();

    $("html, body").animate(
      {
        scrollTop: $("#formulario").offset().top
      },
      2000
    );

    cleanOptions();

    $("#formulario #package_option option[value='9']").attr(
      "selected",
      true
    );
    $("#amount").val("20000");
    $("#description").val("Avisos Facebook e Instagram");
    signature("20000");
  });

  $("#packages #package_10").click(function() {
    $("#formulario").slideDown();

    $("html, body").animate(
      {
        scrollTop: $("#formulario").offset().top
      },
      2000
    );

    cleanOptions();

    $("#formulario #package_option option[value='10']").attr(
      "selected",
      true
    );
    $("#amount").val("29000");
    $("#description").val("Aviso + Redes Impreso (La Opinión y Q'hubo) + Facebook e Instagram - 4 días");
    signature("29000");
  });

  $("#packages #package_11").click(function() {
    $("#formulario").slideDown();

    $("html, body").animate(
      {
        scrollTop: $("#formulario").offset().top
      },
      2000
    );

    cleanOptions();

    $("#formulario #package_option option[value='18']").attr(
      "selected",
      true
    );
    $("#amount").val("9500");
    $("#description").val("Busco empleo 25 días Profesión + Telefóno + Correo electrónico");
    signature("9500");
  });

  $("#packages #package_12").click(function() {
    $("#formulario").slideDown();

    $("html, body").animate(
      {
        scrollTop: $("#formulario").offset().top
      },
      2000
    );

    cleanOptions();

    $("#formulario #package_option option[value='19']").attr(
      "selected",
      true
    );
    $("#amount").val("25000");
    $("#description").val("Aviso + Redes Impreso (La Opinión o Q'hubo) + Facebook e Instagram - 4 días");
    signature("25000");
  });

  $("#packages #package_1_1").click(function() {
    // console.log("okk");
    $("#formulario").slideDown();

    $("html, body").animate(
      {
        scrollTop: $("#formulario").offset().top
      },
      2000
    );

    cleanOptions();

    $("#formulario #package_option option[value='11']").attr(
      "selected",
      true
    );
    $("#amount").val("14000");
    $("#description").val("0 - 5 Palabras 4 días - impreso (La Opinión + Q'hubo)");
    signature("14000");
  });

  $("#packages #package_2_1").click(function() {
    // console.log("okk");
    $("#formulario").slideDown();

    $("html, body").animate(
      {
        scrollTop: $("#formulario").offset().top
      },
      2000
    );

    cleanOptions();

    $("#formulario #package_option option[value='12']").attr(
      "selected",
      true
    );
    $("#amount").val("20000");
    $("#description").val("6 - 10 Palabras 4 días - impreso (La Opinión + Q'hubo)");
    signature("20000");
  });

  $("#packages #package_3_1").click(function() {
    // console.log("okk");
    $("#formulario").slideDown();

    $("html, body").animate(
      {
        scrollTop: $("#formulario").offset().top
      },
      2000
    );

    cleanOptions();

    $("#formulario #package_option option[value='13']").attr(
      "selected",
      true
    );
    $("#amount").val("43000");
    $("#description").val("11 - 20 Palabras 4 días Qhubo - La opinión");
    signature("43000");
  });

  $("#packages #package_4_1").click(function() {
    // console.log("okk");
    $("#formulario").slideDown();

    $("html, body").animate(
      {
        scrollTop: $("#formulario").offset().top
      },
      2000
    );

    cleanOptions();

    $("#formulario #package_option option[value='14']").attr(
      "selected",
      true
    );
    $("#amount").val("67000");
    $("#description").val("21 - 30 Palabras 4 días Qhubo - La opinión");
    signature("67000");
  });

  $("#packages #package_6_1").click(function() {
    // console.log("okk");
    $("#formulario").slideDown();

    $("html, body").animate(
      {
        scrollTop: $("#formulario").offset().top
      },
      2000
    );

    cleanOptions();

    $("#formulario #package_option option[value='15']").attr(
      "selected",
      true
    );
    $("#amount").val("26000");
    $("#description").val("0 - 5 Palabras 8 días - impreso (La Opinión + Q'hubo)");
    signature("26000");
  });

  $("#packages #package_7_1").click(function() {
    // console.log("okk");
    $("#formulario").slideDown();

    $("html, body").animate(
      {
        scrollTop: $("#formulario").offset().top
      },
      2000
    );

    cleanOptions();

    $("#formulario #package_option option[value='16']").attr(
      "selected",
      true
    );
    $("#amount").val("38000");
    $("#description").val("6 - 10 Palabras 8 días - impreso (La Opinión + Q'hubo)");
    signature("38000");
  });

  $("#packages #package_8_1").click(function() {
    // console.log("okk");
    $("#formulario").slideDown();

    $("html, body").animate(
      {
        scrollTop: $("#formulario").offset().top
      },
      2000
    );

    cleanOptions();

    $("#formulario #package_option option[value='17']").attr(
      "selected",
      true
    );
    $("#amount").val("50000");
    $("#description").val("0 - 5 Palabras 15 días Qhubo - La opinión");
    signature("50000");
  });

  $("#packages #package_13").click(function() {
    // console.log("okk");
    $("#formulario").slideDown();

    $("html, body").animate(
      {
        scrollTop: $("#formulario").offset().top
      },
      2000
    );

    cleanOptions();

    $("#formulario #package_option option[value='20']").attr(
      "selected",
      true
    );
    $("#amount").val("43000");
    $("#description").val("Aviso + Redes Impreso (La Opinión o Q'hubo) + Facebook e Instagram - 8 días");
    signature("43000");
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
      $("#amount").val("12000");
      $("#description").val("0 - 5 Palabras 4 días");
      signature("12000");
    } else if (option == 2) {
      $("#amount").val("18000");
      $("#description").val("6 - 10 Palabras 4 días");
      signature("18000");
    } else if (option == 3) {
      $("#amount").val("41000");
      $("#description").val("11 - 20 Palabras 4 días");
      signature("41000");
    } else if (option == 4) {
      $("#amount").val("65000");
      $("#description").val("21 - 30 Palabras 4 días");
      signature("65000");
    } else if (option == 5) {
      $("#amount").val("22000");
      $("#description").val(
        "Facebook mascotas 1 publicación feed + historia"
      );
      signature("22000");
    } else if (option == 6) {
      $("#amount").val("24000");
      $("#description").val("0 - 5 Palabras 8 días");
      signature("24000");
    } else if (option == 7) {
      $("#amount").val("36000");
      $("#description").val("6 - 10 Palabras 8 días");
      signature("36000");
    } else if (option == 8) {
      $("#amount").val("48000");
      $("#description").val("0 - 5 Palabras 15 días");
      signature("48000");
    } else if (option == 9) {
      $("#amount").val("20000");
      $("#description").val("Avisos Facebook e Instagram");
      signature("20000");
    } else if (option == 10) {
      $("#amount").val("29000");
      $("#description").val("Aviso + Redes Impreso (La Opinión y Q'hubo) + Facebook e Instagram - 4 días");
      signature("29000");
    } else if (option == 11) {
      $("#amount").val("14000");
      $("#description").val("0 - 5 Palabras 4 días - impreso (La Opinión + Q'hubo)");
      signature("14000");
    } else if (option == 12) {
      $("#amount").val("20000");
      $("#description").val("6 - 10 Palabras 4 días - impreso (La Opinión + Q'hubo)");
      signature("20000");
    } else if (option == 13) {
      $("#amount").val("43000");
      $("#description").val("11 - 20 Palabras 4 días Qhubo - La opinión");
      signature("43000");
    } else if (option == 14) {
      $("#amount").val("67000");
      $("#description").val("21 - 30 Palabras 4 días Qhubo - La opinión");
      signature("67000");
    } else if (option == 15) {
      $("#amount").val("26000");
      $("#description").val("0 - 5 Palabras 8 días - impreso (La Opinión + Q'hubo)");
      signature("26000");
    } else if (option == 16) {
      $("#amount").val("38000");
      $("#description").val("6 - 10 Palabras 8 días - impreso (La Opinión + Q'hubo)");
      signature("38000");
    } else if (option == 17) {
      $("#amount").val("50000");
      $("#description").val("0 - 5 Palabras 15 días Qhubo - La opinión");
      signature("50000");
    } else if (option == 18) {
      $("#amount").val("9500");
      $("#description").val("Busco empleo 25 días Profesión + Telefóno + Correo electrónico");
      signature("9500");
    } else if (option == 19) {
      $("#amount").val("25000");
      $("#description").val("Aviso + Redes Impreso (La Opinión o Q'hubo) + Facebook e Instagram - 4 días");
      signature("25000");
    } else if (option == 20) {
      $("#amount").val("43000");
      $("#description").val("Aviso + Redes Impreso (La Opinión o Q'hubo) + Facebook e Instagram - 8 días");
      signature("43000");
    }
  }

  const package_option = document.getElementById("package_option");
  if (package_option != null) {
    package_option.addEventListener("change", changePackage.bind(package_option))
  }

  function  cleanOptions() {
    const data = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19]
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