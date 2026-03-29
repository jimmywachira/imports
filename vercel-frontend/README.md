# Vercel Frontend (Phase 1)

This folder contains a standalone frontend for Vercel with the following pages:

- /
- /about
- /contact
- /testimonials
- /privacy-policy
- /terms-of-service

## 1) Configure backend URL

Edit assets/config.js and set backendOrigin to your Laravel production origin.

Example:

window.XPLORE_CONFIG = {
siteName: "Xplore Cars Imports",
backendOrigin: "https://api.xplorecarsimports.com"
};

## 2) Required Laravel endpoint for contact submit

This frontend posts Contact form data to:

POST /contact/public-submit

A matching backend route/controller endpoint is included in this repo changes.

## 3) Deploy on Vercel

- Import this repository into Vercel.
- Set Root Directory to vercel-frontend.
- Framework Preset: Other.
- Build Command: leave empty.
- Output Directory: leave empty.
- Deploy.

## 4) Domain split recommendation

- Main site frontend: Vercel domain (for example www.xplorecarsimports.com)
- Laravel backend: API subdomain (for example api.xplorecarsimports.com)

## 5) Temporary dynamic links

Buttons marked for live inventory point to your Laravel backend /cars route using backendOrigin from assets/config.js.
