export default function adicionarCategoria() {
  $('#form-categoria').submit(function(e) {
    e.preventDefault();
    var formData = new FormData(this);

    $.ajax({
      url: 'http://localhost/clickr/ajax/adicionar-categoria.php',
      method: 'post',
      data: formData,
      contentType: false,
      processData: false
    }).done(function(data) {
      console.log(data)
      $('#adicionar-depoimento').after(`<p class="sucesso">ok</p>`)
    })
  })
}