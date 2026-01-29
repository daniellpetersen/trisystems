document.addEventListener('DOMContentLoaded', () => {
  const year = new Date().getFullYear()
  const copyright = document.getElementById('copyright')

  if (copyright) {
    copyright.textContent = `© ${year} TriSystems. Todos os direitos reservados.`
  }

  const scrollTopBtn = document.getElementById('scrollTop')

  if (scrollTopBtn) {
    scrollTopBtn.addEventListener('click', () => {
      window.scrollTo({ top: 0, behavior: 'smooth' })
    })
  }

  document.querySelectorAll('[data-target]').forEach(btn => {
    btn.addEventListener('click', () => {
      const target = document.getElementById(btn.dataset.target)
      if (target) {
        target.scrollIntoView({ behavior: 'smooth' })
      }
    })
  })

  const cookieBanner = document.getElementById('cookieBanner')
  const acceptCookies = document.getElementById('acceptCookies')

  if (!cookieBanner || !acceptCookies) return

  const accepted = localStorage.getItem('cookiesAccepted')

  if (!accepted) {
    cookieBanner.style.display = 'flex'
  }

  acceptCookies.addEventListener('click', () => {
    localStorage.setItem('cookiesAccepted', 'true')
    cookieBanner.style.display = 'none'
  })
})
