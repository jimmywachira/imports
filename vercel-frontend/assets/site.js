(function () {
  const cfg = window.XPLORE_CONFIG || {};
  const backendOrigin = (cfg.backendOrigin || "").replace(/\/$/, "");

  function byId(id) {
    return document.getElementById(id);
  }

  function bindFooterYear() {
    const yearNode = byId("year");
    if (yearNode) {
      yearNode.textContent = String(new Date().getFullYear());
    }
  }

  function bindBackendLinks() {
    if (!backendOrigin || backendOrigin.includes("your-laravel-domain.com")) {
      return;
    }

    document.querySelectorAll("[data-backend-path]").forEach(function (node) {
      const path = node.getAttribute("data-backend-path") || "/";
      node.setAttribute("href", backendOrigin + path);
    });

    const contactForm = byId("contact-form");
    if (contactForm) {
      contactForm.setAttribute("action", backendOrigin + "/contact/public-submit");
      const returnTo = byId("return_to");
      if (returnTo) {
        returnTo.value = window.location.origin + "/contact?status=sent";
      }
    }
  }

  function showContactStatus() {
    const statusNode = byId("contact-status");
    if (!statusNode) {
      return;
    }

    const params = new URLSearchParams(window.location.search);
    const status = params.get("status");

    if (status === "sent") {
      statusNode.hidden = false;
      statusNode.textContent = "Thank you. Your message was sent successfully.";
      statusNode.className = "status success";
    }

    if (status === "error") {
      statusNode.hidden = false;
      statusNode.textContent = "Something went wrong when submitting your message. Please try again.";
      statusNode.className = "status error";
    }
  }

  bindFooterYear();
  bindBackendLinks();
  showContactStatus();
})();
