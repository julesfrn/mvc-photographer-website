let isMenuToggled = false

document.querySelector('.menu__burger-wrapper img').addEventListener('click', () => {
  if (isMenuToggled === false) {
    document.querySelector('.menu__nav').style.display = 'flex'
    document.querySelector('.menu__burger-wrapper img').style.opacity = '.5'
  } else {
    document.querySelector('.menu__nav').style.display = ''
    document.querySelector('.menu__burger-wrapper img').style.opacity = ''
  }
  isMenuToggled = !isMenuToggled
})
