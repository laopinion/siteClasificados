import $ from './jquery';
const path = window.location.origin;

/* Mailchimp Form */
const $form = document.getElementById('form_newsletter');
// console.info($form);

const syncMailchimp = function (event) {
  event.preventDefault();
  // console.log('hola mundo');
  const data = new FormData($form);
  const email = data.get('email');
  const fname = data.get('fname');
  const lname = data.get('lname');
  const categoria = data.get('categoria');
  const terminos = data.get('terminos');
  let url;

  if (path == 'http://docker.clasificados.com'){
    url = 'http://docker.clasificados.com/sites/default/themes/clasificados/mailchimpApi.php';
  } else {
    url = 'http://mejoresempresas.laopinion.com.co/sites/default/themes/clasificados/mailchimpApi.php';
  }

  console.log('This is url -> ' + url)

  $.post(url, { 
    email: email, 
    fname: fname, 
    lname: lname,
    categoria: categoria,
    terminos: terminos
  }, function (data, status) {
    console.log(data);
    console.log(status);
    if (status == 'success') {
      // $('#message').show();
      if (data == 200) {
        $('#form_newsletter').hide();
        $('#newsletter').html('<h3>Gracias por suscribirte.</h3>');
      } else {
        $('#newsletter').html('<h3 class=message>Algo salio mal!</h3>');
      }
    } else {
      // $('#message').show();
      $('#newsletter').html('<h3 class=message>Algo salio mal!</h3>');
    }
  });
}

if ($form != null) {
  $form.addEventListener('submit', syncMailchimp);
}