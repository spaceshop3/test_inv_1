
  document.addEventListener('DOMContentLoaded', function () {
    const internalAnchors = document.querySelectorAll('a[href^="#"]');

    internalAnchors.forEach(anchor => {
      anchor.addEventListener('click', function (e) {
        const target = anchor.getAttribute('href');
        const onMainPage = window.location.pathname.endsWith('mainpage.php') || window.location.pathname === '/';

        if (!onMainPage) {
          e.preventDefault();
          window.location.href = 'mainpage.php' + target;
        }
      });
    });
  });
