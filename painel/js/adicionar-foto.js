export default function adicionarFoto() {
  $('#form-fotos').submit(function(e) {
    e.preventDefault();
    var formData = new FormData(this);

    $.ajax({
      url: 'http://localhost/clickr/ajax/adicionar-foto.php',
      method: 'post',
      data: formData,
      dataType: 'text',
      contentType: false,
      processData: false,
    }).done(function(data) {
      console.log(formData)
      $('#adicionar-depoimento').after(`<p class="sucesso">${data}</p>`)
    })
  })
}