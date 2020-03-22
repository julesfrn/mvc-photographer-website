const canvas = document.querySelector('#wave')
const c = canvas.getContext('2d')

canvas.width = 50
canvas.height = 35

const wave = {
  y: canvas.height / 2,
  length: 0.25,
  amplitude: 16,
  frequency: 0
}

let increment = wave.frequency
function animate() {
  requestAnimationFrame(animate)
  
  c.clearRect(0, 0, canvas.width, canvas.height)
  c.lineWidth = 1.3
  c.beginPath()
  c.moveTo(0, canvas.height / 2)
  for (let i = 0; i < canvas.width; i++) {
    c.lineTo(i, wave.y + Math.sin(i * wave.length + increment) * wave.amplitude)
  }
  c.lineWidth = 3;
  c.stroke()
  increment += wave.frequency
  c.fillStyle = '#fff'
  c.fillRect(0, 0, 3, canvas.height)
}
animate()

canvas.addEventListener('mouseover', () => {
  wave.frequency = 0.06
})
canvas.addEventListener('mouseleave', () => {
  wave.frequency = 0
})
