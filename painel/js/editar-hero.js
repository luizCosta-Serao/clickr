export default function editarHero() {
  $('#editar-hero').submit(function(e) {
    e.preventDefault();
    var formData = new FormData(this); // Cria um objeto FormData

    $.ajax({
      url: 'http://localhost/clickr/ajax/editar-hero.php',
      method: 'post',
      data: formData,
      dataType: 'text',
      contentType: false,
      processData: false,
    }).done(function(data) {
      console.log(data)
      $('#atualizar-site').after(`<p class="sucesso">${data}</p>`)
    })
  })
}

