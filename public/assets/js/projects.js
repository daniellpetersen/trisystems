const projectItems = document.querySelectorAll('.reveal')

const projectObserver = new IntersectionObserver(
  entries => {
    entries.forEach(entry => {
      if (entry.isIntersecting) {
        entry.target.classList.add('visible')
        projectObserver.unobserve(entry.target)
      }
    })
  },
  { rootMargin: '-100px' }
)

projectItems.forEach(item => projectObserver.observe(item))

document.querySelectorAll('[data-target]').forEach(btn => {
  btn.addEventListener('click', () => {
    const target = document.getElementById(btn.dataset.target)
    if (target) {
      target.scrollIntoView({ behavior: 'smooth' })
    }
  })
})
