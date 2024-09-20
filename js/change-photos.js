export default function changePhotos() {
  $('.photos-categories a')[0].classList.add('active')
  const slug = $('.photos-categories a')[0].getAttribute('slug')

  const $categoria = $('.gallery li')
  $.each($categoria, function (index, element) { 
    $(`.gallery li#${slug}`).addClass('active')
  });

  $('.photos-categories a').click(function(e) {
    // Prevenindo comportamento padrao da tag "a"
    e.preventDefault();
    let $slug = $(this).attr('slug')

    // Alterando estilo da categoria ativa
    $('.photos-categories a').removeClass('active');
    $(this).addClass('active');

    // Alterando imagens da galeria

    $('.gallery li').removeClass('active')
    $.each($categoria, function (index, element) { 
      $(`.gallery li#${$slug}`).addClass('active')
    });
  })
}