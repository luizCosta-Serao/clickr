export default function loginPainel() {
  $('.login-painel #login').click(function(e) {
    e.preventDefault();
    const $user = $('.login-painel #user').val();
    const $password = $('.login-painel #password').val();
    
    $.ajax({
      url: 'http://localhost/clickr/ajax/login-painel.php',
      method: 'get',
      data: {
        'user': $user,
        'password': $password
      },
      dataType: 'text'
    }).done(function(data) {
      if (data === 'true') {
        window.location.reload();
      } else {
        $('.login-painel #login').after(`<p>User or password invalid, try again</p>`)
      }
    })
  })
}