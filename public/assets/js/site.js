document.addEventListener('DOMContentLoaded', function () {
  var loader = document.getElementById('de-loader');
  if (loader) {
    loader.style.display = 'none';
    loader.style.opacity = '0';
    loader.style.visibility = 'hidden';
    loader.remove();
  }

  var wowElements = document.querySelectorAll('.wow');
  wowElements.forEach(function (element) {
    element.style.visibility = 'visible';
    element.style.opacity = '1';
    element.classList.add('animated');
  });

  var scrollTopLink = document.querySelector('.float-text a');
  if (scrollTopLink) {
    scrollTopLink.addEventListener('click', function (event) {
      event.preventDefault();
      window.scrollTo({ top: 0, behavior: 'smooth' });
    });
  }
});
