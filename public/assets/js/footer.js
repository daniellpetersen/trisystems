const year = new Date().getFullYear()
document.getElementById('copyright').textContent =
  `© ${year} TriSystems. Todos os direitos reservados.`

document.getElementById('scrollTop').addEventListener('click', () => {
  window.scrollTo({ top: 0, behavior: 'smooth' })
})

document.querySelectorAll('[data-target]').forEach(btn => {
  btn.addEventListener('click', () => {
    const target = document.getElementById(btn.dataset.target)
    if (target) {
      target.scrollIntoView({ behavior: 'smooth' })
    }
  })
})
