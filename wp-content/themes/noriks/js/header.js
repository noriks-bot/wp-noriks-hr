function toggleMobileMenu() {
  const menu = document.getElementById('mobileMenu');
  const back = document.getElementById('mobileMenuBackdrop');
  const open = menu.classList.toggle('active');
  if (back) { back.classList.toggle('is-open', open); }
  document.body.classList.toggle('nmm-open', open);
}

/* Esc zatvara izbornik. */
document.addEventListener('keydown', function (e) {
  if (e.key !== 'Escape') { return; }
  const menu = document.getElementById('mobileMenu');
  if (menu && menu.classList.contains('active')) { toggleMobileMenu(); }
});

function openLanguageModal() {
  document.getElementById("languageModal").style.display = "flex";
}

function closeLanguageModal() {
  document.getElementById("languageModal").style.display = "none";
}

window.addEventListener("click", function(e) {
  const modal = document.getElementById("languageModal");
  if (e.target === modal) {
    closeLanguageModal();
  }
});
