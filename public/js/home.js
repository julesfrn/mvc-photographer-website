const images = document.querySelectorAll('.v-home__images-container img')

document.querySelector('.v-home__new-box').addEventListener('click', () => {
  location.reload()
})

function getRand(a, b) {
  return Math.floor(Math.random() * (b - a + 1) + a)
}

function arrayRotate(arr, ) {
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

document.addEventListener('click', () => {
  for (let i = 0; i < images.length; i += 1) {
    gsap.to(images[i], { duration: 1, ease: "power2.out", z: options[i].z, zIndex: options[i].index})
  }
  arrayRotate(options)
})
// if ()
