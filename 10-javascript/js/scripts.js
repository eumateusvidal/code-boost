const accordion = document.querySelectorAll('.js-accordion')

accordion.forEach(acc => {
    acc.addEventListener('click', () => {
      let pai = acc.parentElement;

      pai.classList.toggle('active')
    })
})