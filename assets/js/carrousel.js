const allCards = document.getElementById('caroussel');
const cards = document.getElementsByClassName('testimonial-one__single');
const cardsText = document.getElementsByClassName('testimonial-one__text-2');

Array.from(cards).forEach(card => {
    const text = card.querySelector('.testimonial-one__text-2');

    card.addEventListener('mouseover', () => {
        text.classList.add('activeCard');
        console.log('test');
    });

    card.addEventListener('mouseout', () => {
        text.classList.remove('activeCard');
    });
});
