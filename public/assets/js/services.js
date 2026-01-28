const serviceItems = document.querySelectorAll('.reveal')

const serviceObserver = new IntersectionObserver(
  entries => {
    entries.forEach(entry => {
      if (entry.isIntersecting) {
        entry.target.classList.add('visible')
        serviceObserver.unobserve(entry.target)
      }
    })
  },
  { rootMargin: '-100px' }
)

serviceItems.forEach(item => serviceObserver.observe(item))
