document.addEventListener("DOMContentLoaded", function (event) {
  $(".mega-menu-wrap").addClass("active");
  $(".parent").addClass("dark-text");
  $(".header").addClass("reverse-colors");
  $(".header").addClass("active");
  $(".toggle-search").addClass("dark-text")
});

(function () { var a = window.mutiny = window.mutiny || {}; if (!window.mutiny.client) { a.client = { _queue: {} }; var b = ["identify", "trackConversion"]; var c = [].concat(b, ["defaultOptOut", "optOut", "optIn"]); var d = function factory(c) { return function () { for (var d = arguments.length, e = new Array(d), f = 0; f < d; f++) { e[f] = arguments[f] } a.client._queue[c] = a.client._queue[c] || []; if (b.includes(c)) { return new Promise(function (b, d) { a.client._queue[c].push({ args: e, resolve: b, reject: d }); setTimeout(d, 500) }) } else { a.client._queue[c].push({ args: e }) } } }; c.forEach(function (b) { a.client[b] = d(b) }) } })();

window.getCookie = function (name) {
  var match = document.cookie.match(new RegExp('(^| )' + name + '=([^;]+)'));
  if (match) return match[2];
}

window.lazyLoadOptions = [{
  elements_selector: "img[data-lazy-src],.rocket-lazyload,iframe[data-lazy-src]",
  data_src: "lazy-src",
  data_srcset: "lazy-srcset",
  data_sizes: "lazy-sizes",
  class_loading: "lazyloading",
  class_loaded: "lazyloaded",
  threshold: 300,
  callback_loaded: function (element) {
    if (element.tagName === "IFRAME" && element.dataset.rocketLazyload == "fitvidscompatible") {
      if (element.classList.contains("lazyloaded")) {
        if (typeof window.jQuery != "undefined") {
          if (jQuery.fn.fitVids) {
            jQuery(element).parent().fitVids();
          }
        }
      }
    }
  }
}, {
  elements_selector: ".rocket-lazyload",
  data_src: "lazy-src",
  data_srcset: "lazy-srcset",
  data_sizes: "lazy-sizes",
  class_loading: "lazyloading",
  class_loaded: "lazyloaded",
  threshold: 300,
}];
window.addEventListener('LazyLoad::Initialized', function (e) {
  var lazyLoadInstance = e.detail.instance;

  if (window.MutationObserver) {
    var observer = new MutationObserver(function (mutations) {
      var image_count = 0;
      var iframe_count = 0;
      var rocketlazy_count = 0;

      mutations.forEach(function (mutation) {
        for (var i = 0; i < mutation.addedNodes.length; i++) {
          if (typeof mutation.addedNodes[i].getElementsByTagName !== 'function') {
            continue;
          }

          if (typeof mutation.addedNodes[i].getElementsByClassName !== 'function') {
            continue;
          }

          images = mutation.addedNodes[i].getElementsByTagName('img');
          is_image = mutation.addedNodes[i].tagName == "IMG";
          iframes = mutation.addedNodes[i].getElementsByTagName('iframe');
          is_iframe = mutation.addedNodes[i].tagName == "IFRAME";
          rocket_lazy = mutation.addedNodes[i].getElementsByClassName('rocket-lazyload');

          image_count += images.length;
          iframe_count += iframes.length;
          rocketlazy_count += rocket_lazy.length;

          if (is_image) {
            image_count += 1;
          }

          if (is_iframe) {
            iframe_count += 1;
          }
        }
      });

      if (image_count > 0 || iframe_count > 0 || rocketlazy_count > 0) {
        lazyLoadInstance.update();
      }
    });

    var b = document.getElementsByTagName("body")[0];
    var config = { childList: true, subtree: true };

    observer.observe(b, config);
  }
}, false);


function launchLightbox(val) {
  var player = VidyardV4.api.getPlayersByUUID(val)[0];
  player.showLightbox();
}
window['onVidyardAPI'] = (vyApi) => {
  vyApi.api.renderPlayer({
    uuid: 'rFW4SfsabR7C8PGUeHoV6N',
    container: document.getElementById('link-one'),
    type: 'lightbox',
    aspect: 'landscape',
  });
}

// JavaScript to cycle through the links and image groups every 20 seconds,
// using an opacity transition to fade and toggling display to "none" after fade-out.
const links = document.querySelectorAll('.animated-link');
const groups = document.querySelectorAll('.image-group');
let currentActive = 0;
const totalItems = links.length;
const interval = 5000;   // 20 seconds for the full cycle
const fadeDuration = 1000; // Fade duration in milliseconds

setInterval(() => {
  // Get the currently active group and link
  const currentGroup = groups[currentActive];
  const currentLink = links[currentActive];

  // Remove the active class from the link
  currentLink.classList.remove('active');
  // Start fade-out by removing the active class on the group (which reduces opacity to 0)
  currentGroup.classList.remove('active');
  currentGroup.style.opacity = 0;

  // After the fade-out transition, set display to none.
  setTimeout(() => {
    currentGroup.style.display = 'none';
  }, fadeDuration);

  // Calculate the next active index
  currentActive = (currentActive + 1) % totalItems;
  const nextGroup = groups[currentActive];
  const nextLink = links[currentActive];

  // Prepare the next group: set display to block so that it can be faded in.
  nextGroup.style.display = 'block';
  // Force a reflow to ensure the browser registers the display change.
  void nextGroup.offsetWidth;
  // Add the active class to trigger the fade-in (opacity goes to 1).
  nextGroup.classList.add('active');
  nextGroup.style.opacity = 1;
  // Also update the link class for the underline animation.
  nextLink.classList.add('active');
}, interval);


GartnerPI_Widget({
  size: "small",
  theme: "light",
  sourcingLink: "",
  widget_id: "YzNiMDAwOGItZTUxNC00MjhlLTk2ZGEtMzljMTY5ODNjNmJi",
  version: "2",
  container: document.querySelector("#myNodeContainer")
})
function launchLightbox(val) {
  var players = VidyardV4.api.getPlayersByUUID(val);
  var player = players[0];
  player.showLightbox();
}

GartnerPI_Widget({
  size: "line",
  theme: "light",
  sourcingLink: "",
  widget_id: "NTc0MTljY2UtMjhhYS00YTlkLTkxNDQtNDA4OWVkMmRhNGNj",
  version: "2",
  container: document.querySelector("#myNodeContainer")
})

document.addEventListener('DOMContentLoaded', function() {
    const contactForm = document.getElementById('contactForm');
    const formStatus = document.getElementById('form-status');
    const submitButton = contactForm.querySelector('.submit-button');
    const buttonText = submitButton.querySelector('.button-text');
    const buttonLoader = submitButton.querySelector('.button-loader');

    // Form submission handler
    contactForm.addEventListener('submit', function(e) {
        e.preventDefault();
        
        // Show loading state
        setLoadingState(true);
        hideStatus();
        
        // Get form data
        const formData = new FormData(contactForm);
        
        // Validate form
        if (!validateForm(formData)) {
            setLoadingState(false);
            showStatus('Please fill in all required fields.', 'error');
            return;
        }
        
        // Submit form
        fetch('contact.php', {
            method: 'POST',
            body: formData
        })
        .then(response => response.json())
        .then(data => {
            setLoadingState(false);
            
            if (data.success) {
                showStatus(data.message, 'success');
                contactForm.reset();
            } else {
                showStatus(data.message, 'error');
            }
        })
        .catch(error => {
            setLoadingState(false);
            showStatus('An error occurred. Please try again later.', 'error');
            console.error('Form submission error:', error);
        });
    });

    // Input validation and styling
    const inputs = contactForm.querySelectorAll('input, textarea');
    inputs.forEach(input => {
        input.addEventListener('blur', function() {
            validateField(this);
        });

        input.addEventListener('input', function() {
            if (this.classList.contains('error')) {
                this.classList.remove('error');
            }
        });
    });

    // Functions
    function setLoadingState(loading) {
        if (loading) {
            submitButton.disabled = true;
            buttonText.style.display = 'none';
            buttonLoader.style.display = 'inline';
        } else {
            submitButton.disabled = false;
            buttonText.style.display = 'inline';
            buttonLoader.style.display = 'none';
        }
    }

    function validateForm(formData) {
        const requiredFields = ['name', 'email', 'subject', 'message'];
        let isValid = true;

        requiredFields.forEach(field => {
            const value = formData.get(field);
            const input = contactForm.querySelector(`[name="${field}"]`);
            
            if (!value || value.trim() === '') {
                markFieldError(input);
                isValid = false;
            }
        });

        // Validate email format
        const email = formData.get('email');
        const emailInput = contactForm.querySelector('[name="email"]');
        if (email && !isValidEmail(email)) {
            markFieldError(emailInput);
            isValid = false;
        }

        return isValid;
    }

    function validateField(field) {
        const value = field.value.trim();
        
        if (field.hasAttribute('required') && value === '') {
            markFieldError(field);
            return false;
        }
        
        if (field.type === 'email' && value && !isValidEmail(value)) {
            markFieldError(field);
            return false;
        }
        
        markFieldValid(field);
        return true;
    }

    function isValidEmail(email) {
        const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
        return emailRegex.test(email);
    }

    function markFieldError(field) {
        field.classList.add('error');
        field.style.borderColor = '#e53e3e';
        field.style.backgroundColor = '#fed7d7';
    }

    function markFieldValid(field) {
        field.classList.remove('error');
        field.style.borderColor = '#e2e8f0';
        field.style.backgroundColor = '#f8fafc';
    }

    function showStatus(message, type) {
        formStatus.textContent = message;
        formStatus.className = `form-status ${type}`;
        formStatus.style.display = 'block';
        
        // Auto hide after 5 seconds for success messages
        if (type === 'success') {
            setTimeout(() => {
                hideStatus();
            }, 5000);
        }
    }

    function hideStatus() {
        formStatus.style.display = 'none';
        formStatus.className = 'form-status';
    }

    // Smooth scrolling for any anchor links (if needed)
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function (e) {
            e.preventDefault();
            const target = document.querySelector(this.getAttribute('href'));
            if (target) {
                target.scrollIntoView({
                    behavior: 'smooth',
                    block: 'start'
                });
            }
        });
    });

    // Add animation to office cards on scroll (if Intersection Observer is supported)
    if ('IntersectionObserver' in window) {
        const cards = document.querySelectorAll('.office-card');
        const cardObserver = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.style.opacity = '1';
                    entry.target.style.transform = 'translateY(0)';
                }
            });
        }, {
            threshold: 0.1,
            rootMargin: '0px 0px -50px 0px'
        });

        cards.forEach(card => {
            card.style.opacity = '0';
            card.style.transform = 'translateY(20px)';
            card.style.transition = 'opacity 0.6s ease, transform 0.6s ease';
            cardObserver.observe(card);
        });
    }
});

