const navbar = document.getElementById('navbar')
const mobileMenu = document.getElementById('mobileMenu')
const mobileToggle = document.getElementById('mobileToggle')
const scrollTopBtn = document.getElementById('logoScrollTop')

window.addEventListener('scroll', () => {
  navbar.classList.toggle('scrolled', window.scrollY > 50)
})

mobileToggle.addEventListener('click', () => {
  mobileMenu.classList.toggle('open')
})

document.querySelectorAll('[data-target]').forEach(btn => {
  btn.addEventListener('click', () => {
    const target = document.getElementById(btn.dataset.target)
    if (target) {
      target.scrollIntoView({ behavior: 'smooth' })
      mobileMenu.classList.remove('open')
    }
  })
})

scrollTopBtn.addEventListener('click', () => {
  window.scrollTo({ top: 0, behavior: 'smooth' })
})
