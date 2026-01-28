const container = document.querySelector('.particles')

for (let i = 0; i < 28; i++) {
  const p = document.createElement('div')
  p.className = 'particle'
  p.style.left = Math.random() * 100 + '%'
  p.style.top = Math.random() * 100 + '%'
  p.style.width = p.style.height = Math.random() * 4 + 2 + 'px'
  p.style.animationDuration = Math.random() * 20 + 12 + 's'
  container.appendChild(p)
}
