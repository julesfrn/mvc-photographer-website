let isMenuToggled = false

document.querySelector('.menu__burger-wrapper img').addEventListener('click', () => {
  if (isMenuToggled === false) {
    document.querySelector('.menu__burger-wrapper img').style.opacity = '.5'
    gsap.to('.menu__nav', {
      duration: 1,
      ease: 'power2.out',
      x: 0
    })
  } else {
    document.querySelector('.menu__burger-wrapper img').style.opacity = ''
    gsap.to('.menu__nav', {
      duration: 1,
      ease: 'power2.out',
      x: '-100%'
    })
  }
  isMenuToggled = !isMenuToggled
})
