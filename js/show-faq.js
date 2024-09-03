export default function showFaq() {
  $('.faq .faq-title').click(function() {
    const p = this.nextElementSibling;
    $(p).toggleClass('active');
    $(this).toggleClass('active');
  })
}