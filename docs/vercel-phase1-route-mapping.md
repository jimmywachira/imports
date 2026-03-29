# Vercel Phase 1 Route Mapping

## Exact frontend folder structure

vercel-frontend/

- assets/
    - config.js
    - site.js
    - styles.css
- index.html
- about.html
- contact.html
- testimonials.html
- privacy-policy.html
- terms-of-service.html
- vercel.json
- README.md

## Route-by-route migration mapping

| Public Route                  | Current Laravel Handler            | Phase 1 Host | Destination in Phase 1                    | Notes                                  |
| ----------------------------- | ---------------------------------- | ------------ | ----------------------------------------- | -------------------------------------- |
| /                             | Livewire Search                    | Vercel       | / (index.html)                            | Simple hero + links in Phase 1         |
| /about                        | Blade about                        | Vercel       | /about (about.html)                       | Static marketing page                  |
| /contact (GET)                | Blade contact                      | Vercel       | /contact (contact.html)                   | UI hosted on Vercel                    |
| /contact/public-submit (POST) | ContactFormController@submitPublic | Laravel      | Laravel backend                           | Form posts here from Vercel            |
| /testimonials                 | Blade testimonials                 | Vercel       | /testimonials (testimonials.html)         | Static social proof page               |
| /privacy-policy               | Blade privacy                      | Vercel       | /privacy-policy (privacy-policy.html)     | Static legal page                      |
| /terms-of-service             | Blade terms                        | Vercel       | /terms-of-service (terms-of-service.html) | Static legal page                      |
| /cars                         | Livewire Cars                      | Laravel      | Laravel backend                           | Linked from frontend via backendOrigin |
| /cars/{slug}                  | Livewire CarDetails                | Laravel      | Laravel backend                           | Keep dynamic details on backend        |
| /admin/\*                     | Livewire admin                     | Laravel      | Laravel backend                           | No change in Phase 1                   |
| /sitemap.xml                  | Generated from routes + vehicles   | Laravel      | Laravel backend                           | Keep dynamic sitemap source            |

## Suggested project-board cards

1. Configure frontend backendOrigin in assets/config.js for production.
2. Deploy vercel-frontend as Root Directory on Vercel.
3. Set production domain for Vercel frontend.
4. Point api subdomain to Laravel backend.
5. Verify contact submit redirect + persistence + email in production.
6. Keep /cars and /cars/{slug} on Laravel until Phase 2 migration.

## Final Production Cutover Checklist

1. Confirm [vercel-frontend/assets/config.js](vercel-frontend/assets/config.js) uses the live Laravel backend origin.
2. In Vercel project settings, confirm Root Directory is vercel-frontend and latest deployment is successful.
3. Point DNS for the main site domain to Vercel and point api subdomain to Laravel hosting.
4. In Laravel [.env](.env), verify APP_URL and mail settings are production-correct.
5. Submit a live test from /contact and confirm redirect lands on /contact?status=sent.
6. Confirm the submission exists in contacts table and email notification is delivered.
7. Smoke-check pages: /, /about, /contact, /testimonials, /privacy-policy, /terms-of-service.
8. Smoke-check backend links still work: /cars, /cars/{slug}, /admin, /sitemap.xml.
9. Rollback readiness: keep previous DNS records and prior Vercel deployment ready for quick revert.
