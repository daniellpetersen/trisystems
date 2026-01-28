const revealElements = document.querySelectorAll('.reveal')

const observer = new IntersectionObserver(
  entries => {
    entries.forEach(entry => {
      if (entry.isIntersecting) {
        entry.target.classList.add('visible')
        observer.unobserve(entry.target)
      }
    })
  },
  { rootMargin: '-100px' }
)

revealElements.forEach(el => observer.observe(el))
