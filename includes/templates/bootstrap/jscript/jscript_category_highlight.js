function highlightCategoryFromFragment() {
  const fragment = window.location.hash.substring(1); // např. "m2"
  if (!fragment.startsWith("m")) return;

  const id = fragment.substring(1); // "2"
  document.querySelectorAll('.category-tab').forEach(el => {
    // Resetuje všechny na původní stav
    el.innerHTML = el.textContent;
  });

  const target = document.querySelector(`.category-tab[data-id="${id}"]`);
  if (target) {
    target.innerHTML = `<u>${target.textContent}</u>`;
  }
}

// Spustí se při načtení
window.addEventListener('load', highlightCategoryFromFragment);

// Spustí se pokaždé, když se změní fragment v URL
window.addEventListener('hashchange', highlightCategoryFromFragment);
