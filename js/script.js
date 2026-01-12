// Burger Menu Toggle
document.addEventListener("DOMContentLoaded", () => {
  const burgerBtn = document.getElementById("burgerBtn")
  const mobileMenu = document.getElementById("mobileMenu")

  if (burgerBtn && mobileMenu) {
    burgerBtn.addEventListener("click", () => {
      mobileMenu.classList.toggle("hidden")
    })
  }

  // Cookie Popup
  const cookiePopup = document.getElementById("cookiePopup")
  const acceptCookies = document.getElementById("acceptCookies")

  if (cookiePopup && acceptCookies) {
    // Check if user has already accepted cookies
    if (!localStorage.getItem("cookiesAccepted")) {
      setTimeout(() => {
        cookiePopup.classList.remove("translate-y-full")
      }, 1000)
    }

    acceptCookies.addEventListener("click", () => {
      localStorage.setItem("cookiesAccepted", "true")
      cookiePopup.classList.add("translate-y-full")
    })
  }

  // Contact Form Validation (light validation, doesn't block POST)
  const contactForm = document.getElementById("contactForm")

  if (contactForm) {
    contactForm.addEventListener("submit", (e) => {
      const name = document.getElementById("name")
      const email = document.getElementById("email")
      const message = document.getElementById("message")
      const policy = document.querySelector('input[name="policy"]')

      let isValid = true

      // Simple validation feedback (doesn't prevent submission)
      if (name && name.value.trim() === "") {
        name.classList.add("border-red-500")
        isValid = false
      } else if (name) {
        name.classList.remove("border-red-500")
      }

      if (email && email.value.trim() === "") {
        email.classList.add("border-red-500")
        isValid = false
      } else if (email) {
        email.classList.remove("border-red-500")
      }

      if (message && message.value.trim() === "") {
        message.classList.add("border-red-500")
        isValid = false
      } else if (message) {
        message.classList.remove("border-red-500")
      }

      if (policy && !policy.checked) {
        policy.classList.add("border-red-500")
        isValid = false
      } else if (policy) {
        policy.classList.remove("border-red-500")
      }

      // Light validation - shows errors but doesn't prevent POST
      if (!isValid) {
        // Visual feedback only, form still submits
        console.log("[v0] Form validation warnings shown")
      }
    })

    // Remove error styling on input
    const inputs = contactForm.querySelectorAll("input, textarea")
    inputs.forEach((input) => {
      input.addEventListener("input", function () {
        this.classList.remove("border-red-500")
      })
    })
  }

  // Smooth scroll for anchor links
  const anchorLinks = document.querySelectorAll('a[href^="#"]')

  anchorLinks.forEach((link) => {
    link.addEventListener("click", function (e) {
      const targetId = this.getAttribute("href")

      if (targetId === "#") return

      const targetElement = document.querySelector(targetId)

      if (targetElement) {
        e.preventDefault()

        const headerOffset = 80
        const elementPosition = targetElement.getBoundingClientRect().top
        const offsetPosition = elementPosition + window.pageYOffset - headerOffset

        window.scrollTo({
          top: offsetPosition,
          behavior: "smooth",
        })
      }
    })
  })

  // Flip card interaction
  const flipCards = document.querySelectorAll("[data-flip-card]")
  flipCards.forEach((card) => {
    card.addEventListener("click", function () {
      this.classList.toggle("flipped")
    })
  })

  // Expand card functionality
  const expandCards = document.querySelectorAll("[data-expand-card]")
  expandCards.forEach((card) => {
    card.addEventListener("click", function (e) {
      if (e.target.tagName === "A") return
      this.classList.toggle("expanded")
    })
  })

  // FAQ accordion functionality
  const faqItems = document.querySelectorAll("[data-faq-item]")
  faqItems.forEach((item) => {
    const trigger = item.querySelector("[data-faq-trigger]")
    const content = item.querySelector(".faq-content")
    const icon = trigger.querySelector("svg")

    trigger.addEventListener("click", () => {
      const isOpen = !content.classList.contains("hidden")

      faqItems.forEach((otherItem) => {
        const otherContent = otherItem.querySelector(".faq-content")
        const otherIcon = otherItem.querySelector("[data-faq-trigger] svg")
        otherContent.classList.add("hidden")
        otherIcon.style.transform = "rotate(0deg)"
      })

      if (!isOpen) {
        content.classList.remove("hidden")
        icon.style.transform = "rotate(45deg)"
      }
    })
  })
})
