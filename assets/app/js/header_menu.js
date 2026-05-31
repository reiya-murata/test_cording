export const headerMenu = () => {
  const button = document.querySelector(".js-header-menu");
  const panel = document.querySelector(".js-header-menu-panel");

  if (!button || !panel) {
    return;
  }

  const closeMenu = () => {
    button.classList.remove("is-open");
    panel.classList.remove("is-open");
    button.setAttribute("aria-expanded", "false");
  };

  button.addEventListener("click", () => {
    const isOpen = button.classList.toggle("is-open");
    panel.classList.toggle("is-open", isOpen);
    button.setAttribute("aria-expanded", String(isOpen));
  });

  panel.querySelectorAll("a").forEach((link) => {
    link.addEventListener("click", closeMenu);
  });

  document.addEventListener("keydown", (event) => {
    if (event.key === "Escape") {
      closeMenu();
    }
  });
};
