const teamItems = document.querySelectorAll('.reveal')

const teamObserver = new IntersectionObserver(
  entries => {
    entries.forEach(entry => {
      if (entry.isIntersecting) {
        entry.target.classList.add('visible')
        teamObserver.unobserve(entry.target)
      }
    })
  },
  { rootMargin: '-100px' }
)

teamItems.forEach(item => teamObserver.observe(item))
