const item = document.querySelectorAll('[data-anime]')

const animeScroll = () => {
  const windowTop = window.pageYOffset
  item.forEach(element => {
    if (windowTop > element.offsetTop + window.innerHeight * -0.6) {
      element.classList.add('animete')
    } else {
      element.classList.remove('animate')
    }
  })
}

animeScroll()

window.addEventListener('scroll', () => {
  animeScroll()
})
