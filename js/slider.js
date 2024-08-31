export default function sliderTestimonials() {
  let itemAtivo = 0;
  const $quantidadeItens = $('.testimonial-single').length;
  const gap = 240

  $('#next-slide').click(function() {
    const $totalWidth = $('.testimonials').width();
    if (itemAtivo < $quantidadeItens - 1) {
      itemAtivo += 1
      $('.testimonials').css({
        transform: `translateX(-${($totalWidth * itemAtivo) + (gap * itemAtivo)}px)`,
        transition: '2s',
      })
      $('.controller-slide p').text(`${itemAtivo + 1} of ${$quantidadeItens}`)
    }
  })

  $('#prev-slide').click(function() {
    const $totalWidth = $('.testimonials').width();
    if (itemAtivo > 0) {
      itemAtivo -= 1
      $('.testimonials').css({
        transform: `translateX(-${($totalWidth * itemAtivo) + (gap * itemAtivo)}px)`,
        transition: '3s',
      })
      $('.controller-slide p').text(`${itemAtivo + 1} of ${$quantidadeItens}`)
    }
  })

  $(window).resize(function() {
    const $totalWidth = $('.testimonials').width();
    itemAtivo = 0
    $('.testimonials').css({
      transform: `translateX(-${($totalWidth * itemAtivo) + ((gap * 0.75) * itemAtivo)}px)`,
      transition: '1s',
    })
    $('.controller-slide p').text(`${itemAtivo + 1} of ${$quantidadeItens}`)
  })
}