const revealContact = document.querySelectorAll('.reveal')

const contactObserver = new IntersectionObserver(
  entries => {
    entries.forEach(entry => {
      if (entry.isIntersecting) {
        entry.target.classList.add('visible')
        contactObserver.unobserve(entry.target)
      }
    })
  },
  { rootMargin: '-100px' }
)

revealContact.forEach(el => contactObserver.observe(el))

const form = document.getElementById('contactForm')
const success = document.getElementById('successMessage')
const sendAnother = document.getElementById('sendAnother')
const submitBtn = form.querySelector('button')

form.addEventListener('submit', e => {
  e.preventDefault()
  submitBtn.classList.add('loading')

  setTimeout(() => {
    form.classList.add('hidden')
    success.classList.remove('hidden')
    submitBtn.classList.remove('loading')
    form.reset()
  }, 1500)
})

sendAnother.addEventListener('click', () => {
  success.classList.add('hidden')
  form.classList.remove('hidden')
})
