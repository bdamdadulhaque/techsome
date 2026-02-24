# Showing CharityGlow Plugin Details and Selling via Freemius

This guide explains how to show CharityGlow plugin (and theme) details on your site and let customers order through Freemius using the Techsome theme.

---

## 1. Set up Freemius (in your CharityGlow plugin)

Freemius runs inside your **CharityGlow plugin**, not in the theme:

1. Integrate the [Freemius SDK](https://freemius.com/help/documentation/wordpress-sdk/) in your CharityGlow plugin.
2. In the [Freemius Dashboard](https://dashboard.freemius.com/), get your **Pricing** or **Checkout** URL for the plugin (and theme if you sell it too).  
   Example: `https://charityglow.com/checkout/` or a Freemius-hosted URL.

You do **not** need to develop anything in the theme for Freemius itself; the theme only needs the URLs so it can link to your checkout/pricing pages.

---

## 2. Add checkout URLs in the theme (Customizer)

1. Go to **Appearance → Customize**.
2. Open **Products & Checkout (Freemius)**.
3. Enter:
   - **CharityGlow Plugin – Checkout / Pricing URL**: your Freemius pricing or checkout page for the plugin (e.g. `https://charityglow.com/checkout/` or the URL from Freemius).
   - **CharityGlow Theme – Checkout / Pricing URL**: your sales/checkout URL for the theme (if you sell it).
4. Click **Publish**.

These URLs are used for “Get the Plugin” and “Get the Theme” buttons across the site (homepage, product pages, shortcodes).

---

## 3. Create a product page for the CharityGlow plugin

1. **Pages → Add New**.
2. Title: e.g. **CharityGlow Plugin**.
3. Add your content:
   - Short intro (tagline) in the **Excerpt** field.
   - **Featured image**: plugin screenshot or hero image.
   - In the **Content** area: features, screenshots, benefits, testimonials, etc. You can use blocks or the “Product hero” / “Feature grid” / “Pricing table” patterns (Insert → Patterns → Techsome).
4. In the **Page Attributes** or **Template** dropdown, choose **Product Landing**.
5. In the **Product type (checkout link)** meta box (sidebar):
   - Select **CharityGlow Plugin (use Plugin checkout URL)**.  
   The main CTA on the page will then link to the URL you set in Customizer for the plugin.
6. **Publish**.

Optionally create a similar page for **CharityGlow Theme**, choose **Product Landing**, and set Product type to **CharityGlow Theme**.

---

## 4. Link from the menu and homepage

- Add the new “CharityGlow Plugin” (and “CharityGlow Theme”) pages to **Appearance → Menus** so they appear in the header/footer.
- If your homepage uses the **Product-focused** or **Split** layout, the “Get the Plugin” and “Get the Theme” buttons there already use the URLs from **Products & Checkout (Freemius)**. No extra setup needed.

You can also set **Settings → Reading** to use a static **Homepage** and choose the page that uses the product-focused front page template.

---

## 5. Optional: use shortcodes in any page

You can place checkout links or buttons anywhere (e.g. in content or a sidebar):

| Shortcode | Output |
|-----------|--------|
| `[techsome_plugin_checkout_url]` | The plugin checkout URL (for use in your own link). |
| `[techsome_theme_checkout_url]` | The theme checkout URL (for use in your own link). |
| `[techsome_plugin_checkout_button]` | A “Get the Plugin” button linking to the plugin URL. |
| `[techsome_theme_checkout_button]` | A “Get the Theme” button linking to the theme URL. |

Examples:

- Button with default label: `[techsome_plugin_checkout_button]`
- Custom label: `[techsome_plugin_checkout_button text="Buy the Plugin"]`
- Your own link: `<a href="[techsome_plugin_checkout_url]">Purchase</a>` (use a shortcode-in-html plugin if your editor doesn’t run shortcodes inside `href`; or put the URL in Customizer and type the link manually).

---

## Summary

| Goal | What to do |
|------|------------|
| Show plugin details | Create a page with **Product Landing** template, add content (features, screenshots, etc.), set **Product type** to **CharityGlow Plugin**. |
| Let customers order via Freemius | Add your Freemius **checkout/pricing URL** in **Appearance → Customize → Products & Checkout (Freemius)** for the plugin (and theme if needed). |
| Buttons go to correct URL | Product Landing page uses the meta box “Product type”; homepage product/split sections and shortcodes use the URLs from that Customizer section. |

No theme development is required for Freemius; you only configure the plugin (Freemius SDK) and the theme (Customizer URLs + Product Landing pages and optional shortcodes).
