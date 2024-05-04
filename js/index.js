const cards = document.querySelectorAll('.card_inner');

cards.forEach(card => {
  card.addEventListener('click', function() {
    this.classList.toggle('is-flipped');
  });
});
