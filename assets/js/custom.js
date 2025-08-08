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

hbspt.forms.create({
  portalId: "2123903",
  formId: "3b336f1e-2293-47ee-86a1-5cdc6625c435",

  onFormReady: function ($form) {
    window.initCustomForms($form);
    console.log("Demo Form - onFormReady");
  },
  onFormSubmitted: function ($form) {
    console.log("Demo Form - onFormSubmitted");
    analytics.track("Demo Form", {});
  },
  onFormSubmit: function ($form) {
    document.querySelector('input[name=wt1_id]').value = getCookie("__wt1vic");
  },
  onFormReady: function () {

    jcf.setOptions({
      wrapNative: false,
      fakeDropInBody: false,
      maxVisibleItems: 6,
      useCustomScroll: true
    });

    jcf.replaceAll();
  }
});

// banner

