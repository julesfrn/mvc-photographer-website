const images = document.querySelectorAll('.v-series__images-container img')

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


function getRand(a, b) {
  return Math.floor(Math.random() * (b - a + 1) + a)
}

function arrayRotate(arr) {
  arr.unshift(arr.pop())
}

let options = [
  {
    index: 600,
    z: 100
  },
  {
    index: 400,
    z: -300
  },
  {
    index: 500,
    z: -100
  }
]

for (let i = 0; i < images.length; i += 1) {
  imgStyle = images[i].style
  imgStyle.top = `${getRand(0, 30)}%`
  imgStyle.right = `${getRand(10, 30)}%`
}

document.querySelector('.container').addEventListener('click', () => {
  for (let i = 0; i < images.length; i += 1) {
    gsap.to(images[i], { duration: 1, ease: "power2.out", z: options[i].z, zIndex: options[i].index})
  }
  arrayRotate(options)
})
