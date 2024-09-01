export default function changePhotos() {
  $('.photos-categories a').click(function(e) {
    // Prevenindo comportamento padrao da tag "a"
    e.preventDefault();
    
    // Alterando estilo da categoria ativa
    $('.photos-categories a').removeClass('active');
    $(this).addClass('active');

    // Alterando imagens da galeria
    $('.gallery').removeClass('active');
    $(`#${this.innerText.toLocaleLowerCase()}`).addClass('active')
  })
}