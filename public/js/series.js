function getRand(a, b) {
  return Math.floor(Math.random() * (b - a + 1) + a)
}

function arrayRotate(arr) {
  arr.unshift(arr.pop())
}

document.querySelector('.v-series__button').addEventListener('click', () => {
  gsap.to('.v-series__menu', {
    duration: 1,
    ease: 'power2.out',
    x: 0
  })
  gsap.to('.v-series__button', {
    duration: 1,
    ease: 'power2.out',
    opacity: 0
  })
})
document.querySelector('.v-series__menu img').addEventListener('click', () => {
  gsap.to('.v-series__menu', {
    duration: 1,
    ease: 'power2.out',
    x: '100%'
  })
  gsap.to('.v-series__button', {
    duration: 1,
    ease: 'power2.out',
    opacity: 1
  })
})


const images = document.querySelectorAll('.v-series__images-container img')

let imagesOptions = []

for (let i = 0; i < images.length; i += 1) {
  imgStyle = images[i].style
  imgStyle.zIndex = `${500 - i}`
  imgStyle.top = `${getRand(0, 30)}%`
  imgStyle.right = `${getRand(10, 30)}%`
  if (3 >= i) {
    imgStyle.opacity = '1'
  } else {
    imgStyle.opacity = '0' 
  }
  imagesOptions.push(i)
}

document.querySelector('.container').addEventListener('click', () => {
  arrayRotate(imagesOptions)
  for (let i = 0; i < images.length; i += 1) {
    if (3 < imagesOptions[i]) {
      gsap.to(images[i], { duration: 1, ease: "power2.out", opacity: 0 })
    } else {
      gsap.to(images[i], { duration: 1, ease: "power2.out", opacity: 1 })
    }
    gsap.to(images[i], { duration: 1, ease: "power2.out", z: 100 - (imagesOptions[i] * 25)})
    gsap.to(images[i], { delay: 1, duration: 1, ease: "power2.out", zIndex: 500 - imagesOptions[i]})
  }
})
