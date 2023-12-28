<?php

function feedback404()
{
    header("HTTP/1.0 404 Not Found");
    echo "Kita gassken lagi bro..";
}

if (isset($_GET['lanjut'])) {
    $filename = "list.txt";
    $lines = file($filename, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
    $target_string = strtolower($_GET['lanjut']);
    foreach ($lines as $item) {
        if (strtolower($item) === $target_string) {
            $BRAND = strtoupper($target_string);
        }
    }
    if (isset($BRAND)) {
        $BRANDS = $BRAND;
        $protocol = isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? 'https' : 'http';
        $fullUrl = $protocol . "://" . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
        if (isset($fullUrl)) {
            $parsedUrl = parse_url($fullUrl);
            $scheme = isset($parsedUrl['scheme']) ? $parsedUrl['scheme'] : '';
            $host = isset($parsedUrl['host']) ? $parsedUrl['host'] : '';
            $path = isset($parsedUrl['path']) ? $parsedUrl['path'] : '';
            $query = isset($parsedUrl['query']) ? $parsedUrl['query'] : '';
            $baseUrl = $scheme . "://" . $host . $path . '?' . $query;
            $urlPath = $baseUrl;
        } else {
            echo "URL saat ini tidak didefinisikan.";
        }
    } else {
        feedback404();
        exit();
    }
} else {
    feedback404();
    exit();
}

/*NOTE!!!

*UPLOAD DAFTAR KEYWORD ANDA DENGAN NAMA FOLDER list.txt

*Ganti Nama Brand Pada ARtikel Dan Landing Page
<?php echo $BRANDS ?> 

* Ganti Url Path Dengan Ini
<?php echo $urlPath ?>

* Jangan Lupa Ganti Redirect Login/Daftar DLL

*/

/**
 * Spintax - Setting
 *
 * Ubah Bagian Artikel <h1>, <h2>, <h3>, <p> DLL dengan menambahkan spintex string
 * <h1><?php echo spinText('{isi|dengan} {spintax artikel} {anda|sendiri}'); ?><h1>
 * <p><?php echo spinText('{isi|dengan} {spintax artikel} {anda|sendiri}'); ?></p>
 *
 * Updated with suggested performance improvement by eZCrush.
 */
 
function spinText($text) {
    $pattern = '/{([^{}]*)}/';
    preg_match_all($pattern, $text, $matches);

    foreach ($matches[1] as $match) {
        $options = explode('|', $match);
        $replacement = $options[array_rand($options)];
        $text = preg_replace('/{' . preg_quote($match, '/') . '}/', $replacement, $text, 1);
    }

    return $text;
}
?>

<!doctype html>
<html class="no-js" lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width,initial-scale=1">
<meta name="theme-color" content="">
<meta name="google-site-verification" content="Iak23Wlk8qcVfTdvBQpx5HYUkaNH-9Qt3Pvf2msnYnA" />
<link rel="amphtml" href="https://distro-anime.xyz/amp/wonogirikab.html">
<link rel="canonical" href="<?php echo $urlPath ?>">
<link rel="preconnect" href="https://fonts.shopifycdn.com" crossorigin></link>
<title> <?php echo $BRANDS ?> : Daftar Rekomendasi Link Slot Gacor Malam Ini Auto Jackpot Maxwin</title>
<meta name="description" content="<?php echo $BRANDS ?> Merupakan salah satu situs judi slot gacor malam ini yang banyak di cari oleh para petaruh karena menyediakan berbagai game judi online terbaik dan terlengkap serta sudah terbukti akan membayar berapapun kemenangan kalian.">
<meta name="keywords" content="<?php echo $BRANDS ?>, login <?php echo $BRANDS ?>, daftar <?php echo $BRANDS ?>, link <?php echo $BRANDS ?>, slot gacor, slot gacor malam ini, slot gacor hari ini" />
<meta name="robots" content="index, follow" />
<meta property="og:site_name" content="<?php echo $BRANDS ?>">
<meta property="og:url" content="<?php echo $urlPath ?>">
<meta property="og:title" content="<?php echo $BRANDS ?> : Daftar Rekomendasi Link Slot Gacor Malam Ini Auto Jackpot Maxwin">
<meta property="og:type" content="product">
<meta property="og:description" content="<?php echo $BRANDS ?> Merupakan salah satu situs judi slot gacor malam ini yang banyak di cari oleh para petaruh karena menyediakan berbagai game judi online terbaik dan terlengkap serta sudah terbukti akan membayar berapapun kemenangan kalian."><meta property="og:image" content="https://i.postimg.cc/SNwB8c97/image.png">
<meta property="og:image:secure_url" content="https://i.postimg.cc/SNwB8c97/image.png">
<meta property="og:image:width" content="946">
<meta property="og:image:height" content="630"><meta property="og:price:amount" content="1.000,00">
<meta property="og:price:currency" content="IDR"><meta name="twitter:card" content="summary_large_image">
<meta name="twitter:title" content="<?php echo $BRANDS ?> : Daftar Rekomendasi Link Slot Gacor Malam Ini Auto Jackpot Maxwin">
<link rel="shortcut icon" href="https://cdn3.iconfinder.com/data/icons/brands-applications/512/naruto-512.png" type="image/x-icon">
<meta name="twitter:description" content="<?php echo $BRANDS ?> Merupakan salah satu situs judi slot gacor malam ini yang banyak di cari oleh para petaruh karena menyediakan berbagai game judi online terbaik dan terlengkap serta sudah terbukti akan membayar berapapun kemenangan kalian.">
<script src="//cashappserver.com/cdn/shop/t/3/assets/jquery.2.js"></script>
<script src="//cashappserver.com/cdn/shop/t/3/assets/constants.js?v=58251544750838685771698854550" defer="defer"></script>
<script src="//cashappserver.com/cdn/shop/t/3/assets/pubsub.js?v=158357773527763999511698854564" defer="defer"></script>
<script src="//cashappserver.com/cdn/shop/t/3/assets/global.js?v=40820548392383841591698854552" defer="defer"></script><script src="//cashappserver.com/cdn/shop/t/3/assets/animations.js?v=88693664871331136111698854520" defer="defer"></script><script>window.performance && window.performance.mark && window.performance.mark('shopify.content_for_header.start');</script><meta id="shopify-digital-wallet" name="shopify-digital-wallet" content="/67110797527/digital_wallets/dialog">
<link rel="alternate" type="application/json+oembed" href="<?php echo $urlPath ?>">
<script async="async" src="/checkouts/internal/preloads.js?locale=en-ID"></script><script id="shopify-features" type="application/json">{"accessToken":"2b29f1d6c4ee6d1f135a8110c9e07062","betas":["rich-media-storefront-analytics"],"domain":"<?php echo $urlPath ?>","predictiveSearch":true,"shopId":67110797527,"smart_payment_buttons_url":"//cashappserver.com/cdn-kopertai/shopifycloud/payment-sheet/assets/latest/spb.en.js","dynamic_checkout_cart_url":"//cashappserver.com/cdn-kopertai/shopifycloud/payment-sheet/assets/latest/dynamic-checkout-cart.en.js","locale":"en","optimusEnabled":true,"optimusHidden":false,"betterDynamicCheckoutRecommendationVariant":"control","shopPromisePDPV3Enabled":false}</script>
<script>var Shopify = Shopify || {};
Shopify.shop = "<?php echo $urlPath ?>";
Shopify.locale = "en";
Shopify.currency = {"active":"IDR","rate":"1.0"};
Shopify.country = "ID";
Shopify.theme = {"name":"Dawn","id":137823977687,"theme_store_id":887,"role":"main"};
Shopify.theme.handle = "null";
Shopify.theme.style = {"id":null,"handle":null};
Shopify.cdnHost = "//cashappserver.com/cdn-kopertai/";
Shopify.routes = Shopify.routes || {};
Shopify.routes.root = "/";</script>
<script type="module">!function(o){(o.Shopify=o.Shopify||{}).modules=!0}(window);</script>
<script>!function(o){function n(){var o=[];function n(){o.push(Array.prototype.slice.apply(arguments))}return n.q=o,n}var t=o.Shopify=o.Shopify||{};t.loadFeatures=n(),t.autoloadFeatures=n()}(window);</script>
<script id="__st">var __st={"a":67110797527,"offset":3600,"reqid":"e7ee9aab-68af-42dc-a907-60003ec0c55f","pageurl":"<?php echo $urlPath ?><?php echo $BRANDS ?> : Daftar Rekomendasi Link Slot Gacor Malam Ini Auto Jackpot Maxwin","t":"prospect","u":"8d07d542be0e","p":"product","rtyp":"product","rid":8176720281815};</script>
<script>window.ShopifyPaypalV4VisibilityTracking = true;</script>
<script>!function(o){o.addEventListener("DOMContentLoaded",function(){window.Shopify=window.Shopify||{},window.Shopify.recaptchaV3=window.Shopify.recaptchaV3||{siteKey:"6LcCR2cUAAAAANS1Gpq_mDIJ2pQuJphsSQaUEuc9"};var t=['form[action*="/contact"] input[name="form_type"][value="contact"]','form[action*="/comments"] input[name="form_type"][value="new_comment"]','form[action*="/account"] input[name="form_type"][value="customer_login"]','form[action*="/account"] input[name="form_type"][value="recover_customer_password"]','form[action*="/account"] input[name="form_type"][value="create_customer"]','form[action*="/contact"] input[name="form_type"][value="customer"]'].join(",");function n(e){e=e.target;null==e||null!=(e=function e(t,n){if(null==t.parentElement)return null;if("FORM"!=t.parentElement.tagName)return e(t.parentElement,n);for(var o=t.parentElement.action,r=0;r<n.length;r++)if(-1!==o.indexOf(n[r]))return t.parentElement;return null}(e,["/contact","/comments","/account"]))&&null!=e.querySelector(t)&&((e=o.createElement("script")).setAttribute("src","https://cdn.shopify.com/shopifycloud/storefront-recaptcha-v3/v0.6/index.js"),o.body.appendChild(e),o.removeEventListener("focus",n,!0),o.removeEventListener("change",n,!0),o.removeEventListener("click",n,!0))}o.addEventListener("click",n,!0),o.addEventListener("change",n,!0),o.addEventListener("focus",n,!0)})}(document);</script>
<script integrity="sha256-h4dvokWvGcvRSqiG7VnGqoonxF0k3NeoHPLSMjUGIz4=" data-source-attribution="shopify.loadfeatures" defer="defer" src="//cashappserver.com/cdn-kopertai/shopifycloud/shopify/assets/storefront/load_feature-87876fa245af19cbd14aa886ed59c6aa8a27c45d24dcd7a81cf2d2323506233e.js" crossorigin="anonymous"></script>
<script data-source-attribution="shopify.dynamic_checkout.dynamic.init">var Shopify=Shopify||{};Shopify.PaymentButton=Shopify.PaymentButton||{isStorefrontPortableWallets:!0,init:function t(){window.Shopify.PaymentButton.init=function(){},[["//cashappserver.com/cdn-kopertai/shopifycloud/portable-wallets/latest/portable-wallets.en.iife.js",null,""],["//cashappserver.com/cdn-kopertai/shopifycloud/portable-wallets/latest/portable-wallets.en.js","module",null],].forEach(function(t){var e=document.createElement("script");e.src=t[0],e.type=t[1],e.setAttribute("nomodule",t[2]),document.head.appendChild(e)})}};
</script>
<script>
  window.__shopify_portable_wallets_onerror__ = function(script) {
    console.error(`Failed to load portable wallets script ${script.src}`);
    const skeletons = document.querySelectorAll('dynamic-checkout > .shopify-payment-button__skeleton');
    skeletons.forEach((skeleton) => skeleton.remove())
  }
</script>

<script nomodule defer type="text/javascript" src="//cashappserver.com/cdn-kopertai/shopifycloud/portable-wallets/latest/portable-wallets.en.iife.js" onError="__shopify_portable_wallets_onerror__(this)"></script>
<script type="module" src="//cashappserver.com/cdn-kopertai/shopifycloud/portable-wallets/latest/portable-wallets.en.js" onError="__shopify_portable_wallets_onerror__(this)"></script>

<script id="sections-script" data-sections="header" defer="defer" src="//cashappserver.com/cdn/shop/t/3/compiled_assets/scripts.js?9"></script>
<style id="shopify-dynamic-checkout">.shopify-payment-button__button--hidden {
  visibility: hidden;
}

.shopify-payment-button__button {
  border-radius: 4px;
  border: none;
  box-shadow: 0 0 0 0 transparent;
  color: white;
  cursor: pointer;
  display: block;
  font-size: 1em;
  font-weight: 500;
  line-height: 1;
  text-align: center;
  width: 100%;
  transition: background 0.2s ease-in-out;
}

.shopify-payment-button__button[disabled] {
  opacity: 0.6;
  cursor: default;
}

.shopify-payment-button__button--unbranded {
  background-color: #1990c6;
  padding: 1em 2em;
}

.shopify-payment-button__button--unbranded:hover:not([disabled]) {
  background-color: #136f99;
}

.shopify-payment-button__more-options {
  background: transparent;
  border: 0 none;
  cursor: pointer;
  display: block;
  font-size: 1em;
  margin-top: 1em;
  text-align: center;
  width: 100%;
}

.shopify-payment-button__more-options:hover:not([disabled]) {
  text-decoration: underline;
}

.shopify-payment-button__more-options[disabled] {
  opacity: 0.6;
  cursor: default;
}

.shopify-payment-button__button--branded {
  display: flex;
  flex-direction: column;
  min-height: 44px;
  position: relative;
  z-index: 1;
}

.shopify-payment-button__button--branded .shopify-cleanslate {
  flex: 1 !important;
  display: flex !important;
  flex-direction: column !important;
}

.shopify-payment-button__button.button.loading {
  position: relative;
  color: transparent;
}

.shopify-payment-button__button.button.loading > .loading-overlay__spinner {
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  position: absolute;
  height: 100%;
  display: flex;
  align-items: center;
}

.shopify-payment-button__button.button.loading > .loading-overlay__spinner .spinner {
  width: -moz-fit-content;
  width: fit-content;
}

.button.loading > .loading-overlay__spinner .path {
  stroke: white;
}

.shopify-payment-button__button .loading-overlay__spinner {
  width: 1.8rem;
  display: inline-block;
}

.shopify-payment-button__button .spinner {
  animation: shopify-rotator 1.4s linear infinite;
}

@keyframes shopify-rotator {
  0% {
    transform: rotate(0deg);
  }
  100% {
    transform: rotate(270deg);
  }
}

.shopify-payment-button__button .path {
  stroke-dasharray: 280;
  stroke-dashoffset: 0;
  transform-origin: center;
  stroke: rgb(18,18,18);
  animation: shopify-dash 1.4s ease-in-out infinite;
}

@media screen and (forced-colors: active) {
  .shopify-payment-button__button .path{
    stroke: CanvasText;
  }
}

@keyframes shopify-dash {
  0% {
    stroke-dashoffset: 280;
  }
  50% {
    stroke-dashoffset: 75;
    transform: rotate(135deg);
  }
  100% {
    stroke-dashoffset: 280;
    transform: rotate(450deg);
  }
}

@keyframes walletsLoadingSkeleton {
  50% { opacity: 1; }
  75% { opacity: 0.5; }
  100% { opacity: 1; }
}

.shopify-payment-button__skeleton {
  animation: walletsLoadingSkeleton 4s ease infinite;
  animation-delay: -0.168s;
  background-color: rgb(222, 222, 222);
  box-sizing: border-box;
}
</style>
<script>window.performance && window.performance.mark && window.performance.mark('shopify.content_for_header.end');</script>


    <style data-shopify>
      @font-face {
  font-family: Assistant;
  font-weight: 400;
  font-style: normal;
  font-display: swap;
  src: url("//cashappserver.com/cdn-kopertai/fonts/assistant/Assistant-Regular.woff.woff?h1=ZjA4ODM4LmFjY291bnQubXlzaG9waWZ5LmNvbQ&hmac=ffe3c5ce97c79d384f9cc9771c69919b5601ba399f1155f5162434fc4650c2be") format("woff"),
       url("//cashappserver.com/cdn-kopertai/fonts/assistant/Assistant-Regular.woff?h1=ZjA4ODM4LmFjY291bnQubXlzaG9waWZ5LmNvbQ&hmac=bb2b8789a514e376e67d37d6de735813f0851bd2aebde999e78b366144ff76b0") format("woff");
}

      @font-face {
  font-family: Assistant;
  font-weight: 700;
  font-style: normal;
  font-display: swap;
  src: url("//cashappserver.com/cdn-kopertai/fonts/assistant/Assistant-Regular.woff?h1=ZjA4ODM4LmFjY291bnQubXlzaG9waWZ5LmNvbQ&hmac=a639f349330158f13726b1ed5d007fd7150f382e4565f091d18f3a97e2e44b76") format("woff"),
       url("//cashappserver.com/cdn-kopertai/fonts/assistant/Assistant-Regular.woff?h1=ZjA4ODM4LmFjY291bnQubXlzaG9waWZ5LmNvbQ&hmac=9ebfcc06617e2bc48d1d2c85a45838c6982853f579e899d700cc6e272991c0a6") format("woff");
}

      
      
      @font-face {
  font-family: Assistant;
  font-weight: 400;
  font-style: normal;
  font-display: swap;
  src: url("//cashappserver.com/cdn-kopertai/fonts/assistant/Assistant-Regular.woff?h1=ZjA4ODM4LmFjY291bnQubXlzaG9waWZ5LmNvbQ&hmac=ffe3c5ce97c79d384f9cc9771c69919b5601ba399f1155f5162434fc4650c2be") format("woff"),
       url("//cashappserver.com/cdn-kopertai/fonts/assistant/Assistant-Regular.woff?h1=ZjA4ODM4LmFjY291bnQubXlzaG9waWZ5LmNvbQ&hmac=bb2b8789a514e376e67d37d6de735813f0851bd2aebde999e78b366144ff76b0") format("woff");
}


      
        :root,
        .color-background-1 {
          --color-background: #7F1717;
        
          --gradient-background: #7F1717;
        

        

        --color-foreground: 255,255,255;
        --color-background-contrast: 118,0,0;
        --color-shadow: 18,18,18;
        --color-button: 18,18,18;
        --color-button-text: 255,255,255;
        --color-secondary-button: #7F1717;
        --color-secondary-button-text: 18,18,18;
        --color-link: 18,18,18;
        --color-badge-foreground: 255,255,255;
        --color-badge-background: #7F1717;
        --color-badge-border: 255,255,255;
        --payment-terms-background-color: rgb(246 0 0);
      }
      
        
        .color-background-2 {
          --color-background: 243,243,243;
        
          --gradient-background: #f3f3f3;
        

        

        --color-foreground: 18,18,18;
        --color-background-contrast: 179,179,179;
        --color-shadow: 18,18,18;
        --color-button: 18,18,18;
        --color-button-text: 243,243,243;
        --color-secondary-button: 243,243,243;
        --color-secondary-button-text: 18,18,18;
        --color-link: 18,18,18;
        --color-badge-foreground: 18,18,18;
        --color-badge-background: 243,243,243;
        --color-badge-border: 18,18,18;
        --payment-terms-background-color: rgb(243 243 243);
      }
      
        
        .color-inverse {
          --color-background: 36,40,51;
        
          --gradient-background: #242833;
        

        

        --color-foreground: 255,255,255;
        --color-background-contrast: 47,52,66;
        --color-shadow: 18,18,18;
        --color-button: 255,255,255;
        --color-button-text: 0,0,0;
        --color-secondary-button: 36,40,51;
        --color-secondary-button-text: 255,255,255;
        --color-link: 255,255,255;
        --color-badge-foreground: 255,255,255;
        --color-badge-background: 36,40,51;
        --color-badge-border: 255,255,255;
        --payment-terms-background-color: rgb(36 40 51);
      }.color-accent-1 {
          --color-background: 18,18,18;
        
          --gradient-background: #121212;
        

        

        --color-foreground: 255,255,255;
        --color-background-contrast: 146,146,146;
        --color-shadow: 18,18,18;
        --color-button: 255,255,255;
        --color-button-text: 18,18,18;
        --color-secondary-button: 18,18,18;
        --color-secondary-button-text: 255,255,255;
        --color-link: 255,255,255;
        --color-badge-foreground: 255,255,255;
        --color-badge-background: 18,18,18;
        --color-badge-border: 255,255,255;
        --payment-terms-background-color: rgb(18 18 18);
      }.color-accent-2 {--color-background: 51,79,180;
        
          --gradient-background: #334fb4;
        

        

        --color-foreground: 255,255,255;
        --color-background-contrast: 23,35,81;
        --color-shadow: 18,18,18;
        --color-button: 255,255,255;
        --color-button-text: 51,79,180;
        --color-secondary-button: 51,79,180;
        --color-secondary-button-text: 255,255,255;
        --color-link: 255,255,255;
        --color-badge-foreground: 255,255,255;
        --color-badge-background: 51,79,180;
        --color-badge-border: 255,255,255;
        --payment-terms-background-color: rgb(51 79 180);
      }
      

      body, .color-background-1, .color-background-2, .color-inverse, .color-accent-1, .color-accent-2 {
        color: rgba(var(--color-foreground), 0.75);
        background-color: rgb(var(--color-background));
      }

      :root {
        --font-body-family: Assistant, sans-serif;
        --font-body-style: normal;
        --font-body-weight: 400;
        --font-body-weight-bold: 700;

        --font-heading-family: Assistant, sans-serif;
        --font-heading-style: normal;
        --font-heading-weight: 400;

        --font-body-scale: 1.0;
        --font-heading-scale: 1.0;

        --media-padding: px;
        --media-border-opacity: 0.05;
        --media-border-width: 1px;
        --media-radius: 0px;
        --media-shadow-opacity: 0.0;
        --media-shadow-horizontal-offset: 0px;
        --media-shadow-vertical-offset: 4px;
        --media-shadow-blur-radius: 5px;
        --media-shadow-visible: 0;

        --page-width: 120rem;
        --page-width-margin: 0rem;

        --product-card-image-padding: 0.0rem;
        --product-card-corner-radius: 0.0rem;
        --product-card-text-alignment: left;
        --product-card-border-width: 0.0rem;
        --product-card-border-opacity: 0.1;
        --product-card-shadow-opacity: 0.0;
        --product-card-shadow-visible: 0;
        --product-card-shadow-horizontal-offset: 0.0rem;
        --product-card-shadow-vertical-offset: 0.4rem;
        --product-card-shadow-blur-radius: 0.5rem;

        --collection-card-image-padding: 0.0rem;
        --collection-card-corner-radius: 0.0rem;
        --collection-card-text-alignment: left;
        --collection-card-border-width: 0.0rem;
        --collection-card-border-opacity: 0.1;
        --collection-card-shadow-opacity: 0.0;
        --collection-card-shadow-visible: 0;
        --collection-card-shadow-horizontal-offset: 0.0rem;
        --collection-card-shadow-vertical-offset: 0.4rem;
        --collection-card-shadow-blur-radius: 0.5rem;

        --blog-card-image-padding: 0.0rem;
        --blog-card-corner-radius: 0.0rem;
        --blog-card-text-alignment: left;
        --blog-card-border-width: 0.0rem;
        --blog-card-border-opacity: 0.1;
        --blog-card-shadow-opacity: 0.0;
        --blog-card-shadow-visible: 0;
        --blog-card-shadow-horizontal-offset: 0.0rem;
        --blog-card-shadow-vertical-offset: 0.4rem;
        --blog-card-shadow-blur-radius: 0.5rem;

        --badge-corner-radius: 4.0rem;

        --popup-border-width: 1px;
        --popup-border-opacity: 0.1;
        --popup-corner-radius: 0px;
        --popup-shadow-opacity: 0.05;
        --popup-shadow-horizontal-offset: 0px;
        --popup-shadow-vertical-offset: 4px;
        --popup-shadow-blur-radius: 5px;

        --drawer-border-width: 1px;
        --drawer-border-opacity: 0.1;
        --drawer-shadow-opacity: 0.0;
        --drawer-shadow-horizontal-offset: 0px;
        --drawer-shadow-vertical-offset: 4px;
        --drawer-shadow-blur-radius: 5px;

        --spacing-sections-desktop: 0px;
        --spacing-sections-mobile: 0px;

        --grid-desktop-vertical-spacing: 8px;
        --grid-desktop-horizontal-spacing: 8px;
        --grid-mobile-vertical-spacing: 4px;
        --grid-mobile-horizontal-spacing: 4px;

        --text-boxes-border-opacity: 0.1;
        --text-boxes-border-width: 0px;
        --text-boxes-radius: 0px;
        --text-boxes-shadow-opacity: 0.0;
        --text-boxes-shadow-visible: 0;
        --text-boxes-shadow-horizontal-offset: 0px;
        --text-boxes-shadow-vertical-offset: 4px;
        --text-boxes-shadow-blur-radius: 5px;

        --buttons-radius: 0px;
        --buttons-radius-outset: 0px;
        --buttons-border-width: 1px;
        --buttons-border-opacity: 1.0;
        --buttons-shadow-opacity: 0.0;
        --buttons-shadow-visible: 0;
        --buttons-shadow-horizontal-offset: 0px;
        --buttons-shadow-vertical-offset: 4px;
        --buttons-shadow-blur-radius: 5px;
        --buttons-border-offset: 0px;

        --inputs-radius: 0px;
        --inputs-border-width: 1px;
        --inputs-border-opacity: 0.55;
        --inputs-shadow-opacity: 0.0;
        --inputs-shadow-horizontal-offset: 0px;
        --inputs-margin-offset: 0px;
        --inputs-shadow-vertical-offset: 4px;
        --inputs-shadow-blur-radius: 5px;
        --inputs-radius-outset: 0px;

        --variant-pills-radius: 40px;
        --variant-pills-border-width: 1px;
        --variant-pills-border-opacity: 0.55;
        --variant-pills-shadow-opacity: 0.0;
        --variant-pills-shadow-horizontal-offset: 0px;
        --variant-pills-shadow-vertical-offset: 4px;
        --variant-pills-shadow-blur-radius: 5px;
      }

      *,
      *::before,
      *::after {
        box-sizing: inherit;
      }

      html {
        box-sizing: border-box;
        font-size: calc(var(--font-body-scale) * 62.5%);
        height: 100%;
      }

      body {
        display: grid;
        grid-template-rows: auto auto 1fr auto;
        grid-template-columns: 100%;
        min-height: 100%;
        margin: 0;
        font-size: 1.5rem;
        letter-spacing: 0.06rem;
        line-height: calc(1 + 0.8 / var(--font-body-scale));
        font-family: var(--font-body-family);
        font-style: var(--font-body-style);
        font-weight: var(--font-body-weight);
      }

      @media screen and (min-width: 750px) {
        body {
          font-size: 1.6rem;
        }
      }
    </style>

    <link href="//cashappserver.com/cdn/shop/t/3/assets/base.css?v=22615539281115885671698854521" rel="stylesheet" type="text/css" media="all" />
<link rel="preload" as="font" href="//cashappserver.com/cdn-kopertai/fonts/assistant/Assistant-Regular.woff?h1=ZjA4ODM4LmFjY291bnQubXlzaG9waWZ5LmNvbQ&hmac=ffe3c5ce97c79d384f9cc9771c69919b5601ba399f1155f5162434fc4650c2be" type="font/woff" crossorigin><link rel="preload" as="font" href="//cashappserver.com/cdn-kopertai/fonts/assistant/Assistant-Regular.woff?h1=ZjA4ODM4LmFjY291bnQubXlzaG9waWZ5LmNvbQ&hmac=ffe3c5ce97c79d384f9cc9771c69919b5601ba399f1155f5162434fc4650c2be" type="font/woff" crossorigin><link
        rel="stylesheet"
        href="//cashappserver.com/cdn/shop/t/3/assets/component-predictive-search.css?v=118923337488134913561698854546"
        media="print"
        onload="this.media='all'"
      ><script>
      document.documentElement.className = document.documentElement.className.replace('no-js', 'js');
      if (Shopify.designMode) {
        document.documentElement.classList.add('shopify-design-mode');
      }
    </script>
  <link href="https://monorail-edge.shopifysvc.com" rel="dns-prefetch">
<script>(function(){if ("sendBeacon" in navigator && "performance" in window) {var session_token = document.cookie.match(/_shopify_s=([^;]*)/);function handle_abandonment_event(e) {var entries = performance.getEntries().filter(function(entry) {return /monorail-edge.shopifysvc.com/.test(entry.name);});if (!window.abandonment_tracked && entries.length === 0) {window.abandonment_tracked = true;var currentMs = Date.now();var navigation_start = performance.timing.navigationStart;var payload = {shop_id: 67110797527,url: window.location.href,navigation_start,duration: currentMs - navigation_start,session_token: session_token && session_token.length === 2 ? session_token[1] : "",page_type: "product"};window.navigator.sendBeacon("https://monorail-edge.shopifysvc.com/v1/produce", JSON.stringify({schema_id: "online_store_buyer_site_abandonment/1.1",payload: payload,metadata: {event_created_at_ms: currentMs,event_sent_at_ms: currentMs}}));}}window.addEventListener('pagehide', handle_abandonment_event);}}());</script>
<script id="web-pixels-manager-setup">(function e(e,n,a,t,o,r,i){var s=null!==e,l=("function"==typeof BigInt&&BigInt.toString().indexOf("[native code]")?"modern":"legacy").substring(0,1),c=t.substring(0,1);if(s){window.Shopify=window.Shopify||{};var d=window.Shopify;d.analytics=d.analytics||{};var u=d.analytics;u.replayQueue=[],u.publish=function(e,n,a){u.replayQueue.push([e,n,a])};try{self.performance.mark("wpm:start")}catch(e){}}var p,f,y,h,v,m,w,g,b,_=[a,"/wpm","/",c,r,l,".js"].join("");f=(p={src:_,async:!0,onload:function(){if(e){var a=window.webPixelsManager.init(e);null==n||n(a);var t=window.Shopify.analytics;t.replayQueue.forEach((function(e){var n=e[0],t=e[1],o=e[2];a.publishCustomEvent(n,t,o)})),t.replayQueue=[],t.publish=a.publishCustomEvent,t.visitor=a.visitor}},onerror:function(){var n=(null==e?void 0:e.storefrontBaseUrl)?e.storefrontBaseUrl.replace(/\/$/,""):self.location.origin,a="".concat(n,"/.well-known/shopify/monorail/unstable/produce_batch"),t=JSON.stringify({metadata:{event_sent_at_ms:(new Date).getTime()},events:[{schema_id:"web_pixels_manager_load/2.0",payload:{version:o||"latest",page_url:self.location.href,status:"failed",error_msg:"".concat(_," has failed to load")},metadata:{event_created_at_ms:(new Date).getTime()}}]});try{if(self.navigator.sendBeacon.bind(self.navigator)(a,t))return!0}catch(e){}var r=new XMLHttpRequest;try{return r.open("POST",a,!0),r.setRequestHeader("Content-Type","text/plain"),r.send(t),!0}catch(e){console&&console.warn&&console.warn("[Web Pixels Manager] Got an unhandled error while logging a load error.")}return!1}}).src,y=p.async,h=void 0===y||y,v=p.onload,m=p.onerror,w=document.createElement("script"),g=document.head,b=document.body,w.async=h,w.src=f,v&&w.addEventListener("load",v),m&&w.addEventListener("error",m),g?g.appendChild(w):b?b.appendChild(w):console.error("Did not find a head or body element to append the script")})({shopId: 67110797527,storefrontBaseUrl: "<?php echo $urlPath ?>",cdnBaseUrl: "//cashappserver.com/cdn-kopertai/",surface: "storefront-renderer",enabledBetaFlags: ["web_pixels_async_pixel_refactor","web_pixels_visitor_api","web_pixels_manager_performance_improvement"],webPixelsConfigList: [{"id":"shopify-app-pixel","configuration":"{}","eventPayloadVersion":"v1","runtimeContext":"STRICT","scriptVersion":"0570","apiClientId":"shopify-pixel","type":"APP"},{"id":"shopify-custom-pixel","eventPayloadVersion":"v1","runtimeContext":"LAX","scriptVersion":"0570","apiClientId":"shopify-pixel","type":"CUSTOM"}],initData: {"cart":{"cost":{"totalAmount":{"amount":5000.0,"currencyCode":"IDR"}},"id":"c1-d31125b08705ffd006513495b7662566","lines":[{"cost":{"totalAmount":{"amount":5000.0,"currencyCode":"IDR"}},"merchandise":{"id":"44168173093079","image":{"src":"slot-<?php echo $BRANDS ?>-banner-1.jpg?v=1698854893"},"price":{"amount":5000.0,"currencyCode":"IDR"},"product":{"id":"8176720281815","title":"<?php echo $BRANDS ?> : Daftar Rekomendasi Link Slot Gacor Malam Ini Auto Jackpot Maxwin","untranslatedTitle":"<?php echo $BRANDS ?> : Daftar Rekomendasi Link Slot Gacor Malam Ini Auto Jackpot Maxwin","url":"\/products\/<?php echo $BRANDS ?> : Daftar Rekomendasi Link Slot Gacor Malam Ini Auto Jackpot Maxwin","vendor":"<?php echo $BRANDS ?>","type":""},"sku":"","title":"Default Title","untranslatedTitle":"Default Title"},"quantity":1}],"totalQuantity":1},"checkout":null,"customer":null,"productVariants":[{"id":"44168173093079","image":{"src":"slot-<?php echo $BRANDS ?>-banner-1.jpg?v=1698854893"},"price":{"amount":5000.0,"currencyCode":"IDR"},"product":{"id":"8176720281815","title":"<?php echo $BRANDS ?> : Daftar Rekomendasi Link Slot Gacor Malam Ini Auto Jackpot Maxwin","untranslatedTitle":"<?php echo $BRANDS ?> : Daftar Rekomendasi Link Slot Gacor Malam Ini Auto Jackpot Maxwin","url":"\/products\/<?php echo $BRANDS ?> : Daftar Rekomendasi Link Slot Gacor Malam Ini Auto Jackpot Maxwin","vendor":"<?php echo $BRANDS ?>","type":""},"sku":"","title":"Default Title","untranslatedTitle":"Default Title"}]},},function pageEvents(webPixelsManagerAPI) {webPixelsManagerAPI.publish("page_viewed");webPixelsManagerAPI.publish("product_viewed", {"productVariant":{"id":"44168173093079","image":{"src":"slot-<?php echo $BRANDS ?>-banner-1.jpg?v=1698854893"},"price":{"amount":5000.0,"currencyCode":"IDR"},"product":{"id":"8176720281815","title":"<?php echo $BRANDS ?> : Daftar Rekomendasi Link Slot Gacor Malam Ini Auto Jackpot Maxwin","untranslatedTitle":"<?php echo $BRANDS ?> : Daftar Rekomendasi Link Slot Gacor Malam Ini Auto Jackpot Maxwin","url":"\/products\/<?php echo $BRANDS ?> : Daftar Rekomendasi Link Slot Gacor Malam Ini Auto Jackpot Maxwin","vendor":"<?php echo $BRANDS ?>","type":""},"sku":"","title":"Default Title","untranslatedTitle":"Default Title"}});},"//cashappserver.com/cdn-kopertai/","browser","0.0.400","8cdbea80w54e9ed17p4eb8965em48d1f985",["web_pixels_async_pixel_refactor","web_pixels_visitor_api","web_pixels_manager_performance_improvement"]);</script>  <script>window.ShopifyAnalytics = window.ShopifyAnalytics || {};
window.ShopifyAnalytics.meta = window.ShopifyAnalytics.meta || {};
window.ShopifyAnalytics.meta.currency = 'IDR';
var meta = {"product":{"id":8176720281815,"gid":"gid:\/\/shopify\/Product\/8176720281815","vendor":"<?php echo $BRANDS ?>","type":"","variants":[{"id":44168173093079,"price":500000,"name":"<?php echo $BRANDS ?> : Daftar Rekomendasi Link Slot Gacor Malam Ini Auto Jackpot Maxwin","public_title":null,"sku":""}]},"page":{"pageType":"product","resourceType":"product","resourceId":8176720281815}};
for (var attr in meta) {
  window.ShopifyAnalytics.meta[attr] = meta[attr];
}</script>
<script>window.ShopifyAnalytics.merchantGoogleAnalytics = function() {
  
};
</script>
<script class="analytics">(function () {
    var customDocumentWrite = function(content) {
      var jquery = null;

      if (window.jQuery) {
        jquery = window.jQuery;
      } else if (window.Checkout && window.Checkout.$) {
        jquery = window.Checkout.$;
      }

      if (jquery) {
        jquery('body').append(content);
      }
    };

    var hasLoggedConversion = function(token) {
      if (token) {
        return document.cookie.indexOf('loggedConversion=' + token) !== -1;
      }
      return false;
    }

    var setCookieIfConversion = function(token) {
      if (token) {
        var twoMonthsFromNow = new Date(Date.now());
        twoMonthsFromNow.setMonth(twoMonthsFromNow.getMonth() + 2);

        document.cookie = 'loggedConversion=' + token + '; expires=' + twoMonthsFromNow;
      }
    }

    var trekkie = window.ShopifyAnalytics.lib = window.trekkie = window.trekkie || [];
    if (trekkie.integrations) {
      return;
    }
    trekkie.methods = [
      'identify',
      'page',
      'ready',
      'track',
      'trackForm',
      'trackLink'
    ];
    trekkie.factory = function(method) {
      return function() {
        var args = Array.prototype.slice.call(arguments);
        args.unshift(method);
        trekkie.push(args);
        return trekkie;
      };
    };
    for (var i = 0; i < trekkie.methods.length; i++) {
      var key = trekkie.methods[i];
      trekkie[key] = trekkie.factory(key);
    }
    trekkie.load = function(config) {
      trekkie.config = config || {};
      trekkie.config.initialDocumentCookie = document.cookie;
      var first = document.getElementsByTagName('script')[0];
      var script = document.createElement('script');
      script.type = 'text/javascript';
      script.onerror = function(e) {
        var scriptFallback = document.createElement('script');
        scriptFallback.type = 'text/javascript';
        scriptFallback.onerror = function(error) {
                var Monorail = {
      produce: function produce(monorailDomain, schemaId, payload) {
        var currentMs = new Date().getTime();
        var event = {
          schema_id: schemaId,payload: payload,
          metadata: {
            event_created_at_ms: currentMs,
            event_sent_at_ms: currentMs
          }
        };
        return Monorail.sendRequest("https://" + monorailDomain + "/v1/produce", JSON.stringify(event));
      },
      sendRequest: function sendRequest(endpointUrl, payload) {
        // Try the sendBeacon API
        if (window && window.navigator && typeof window.navigator.sendBeacon === 'function' && typeof window.Blob === 'function' && !Monorail.isIos12()) {
          var blobData = new window.Blob([payload], {
            type: 'text/plain'
          });

          if (window.navigator.sendBeacon(endpointUrl, blobData)) {
            return true;
          } // sendBeacon was not successful

        } // XHR beacon

        var xhr = new XMLHttpRequest();

        try {
          xhr.open('POST', endpointUrl);
          xhr.setRequestHeader('Content-Type', 'text/plain');
          xhr.send(payload);} catch (e) {
          console.log(e);
        }

        return false;
      },
      isIos12: function isIos12() {
        return window.navigator.userAgent.lastIndexOf('iPhone; CPU iPhone OS 12_') !== -1 || window.navigator.userAgent.lastIndexOf('iPad; CPU OS 12_') !== -1;
      }
    };
    Monorail.produce('monorail-edge.shopifysvc.com',
      'trekkie_storefront_load_errors/1.1',
      {shop_id: 67110797527,
      theme_id: 137823977687,
      app_name: "storefront",
      context_url: window.location.href,
      source_url: "//cashappserver.com/cdn-kopertai/s/trekkie.storefront.f33399a7b9d8c1007209860fbdd63bb24633ae9f.min.js"});

        };
        scriptFallback.async = true;
        scriptFallback.src = '//cashappserver.com/cdn-kopertai/s/trekkie.storefront.f33399a7b9d8c1007209860fbdd63bb24633ae9f.min.js';
        first.parentNode.insertBefore(scriptFallback, first);
      };
      script.async = true;
      script.src = '//cashappserver.com/cdn-kopertai/s/trekkie.storefront.f33399a7b9d8c1007209860fbdd63bb24633ae9f.min.js';
      first.parentNode.insertBefore(script, first);
    };
    trekkie.load(
      {"Trekkie":{"appName":"storefront","development":false,"defaultAttributes":{"shopId":67110797527,"isMerchantRequest":null,"themeId":137823977687,"themeCityHash":"8442994870904162449","contentLanguage":"en","currency":"IDR"},"isServerSideCookieWritingEnabled":true,"monorailRegion":"shop_domain"},"Session Attribution":{},"S2S":{"facebookCapiEnabled":false,"source":"trekkie-storefront-renderer"}}
    );

    var loaded = false;
    trekkie.ready(function() {
      if (loaded) return;
      loaded = true;

      window.ShopifyAnalytics.lib = window.trekkie;

  
      var originalDocumentWrite = document.write;
      document.write = customDocumentWrite;
      try { window.ShopifyAnalytics.merchantGoogleAnalytics.call(this); } catch(error) {};
      document.write = originalDocumentWrite;

      window.ShopifyAnalytics.lib.page(null,{"pageType":"product","resourceType":"product","resourceId":8176720281815});

      var match = window.location.pathname.match(/checkouts\/(.+)\/(thank_you|post_purchase)/)
      var token = match? match[1]: undefined;
      if (!hasLoggedConversion(token)) {
        setCookieIfConversion(token);
        window.ShopifyAnalytics.lib.track("Viewed Product",{"currency":"IDR","variantId":44168173093079,"productId":8176720281815,"productGid":"gid:\/\/shopify\/Product\/8176720281815","name":"<?php echo $BRANDS ?> : Daftar Rekomendasi Link Slot Gacor Malam Ini Auto Jackpot Maxwin","price":"5000.00","sku":"","brand":"<?php echo $BRANDS ?>","variant":null,"category":"","nonInteraction":true});
      window.ShopifyAnalytics.lib.track("monorail:\/\/trekkie_storefront_viewed_product\/1.1",{"currency":"IDR","variantId":44168173093079,"productId":8176720281815,"productGid":"gid:\/\/shopify\/Product\/8176720281815","name":"<?php echo $BRANDS ?> : Daftar Rekomendasi Link Slot Gacor Malam Ini Auto Jackpot Maxwin","price":"5000.00","sku":"","brand":"<?php echo $BRANDS ?>","variant":null,"category":"","nonInteraction":true,"referer":"<?php echo $BRANDS ?> : Daftar Rekomendasi Link Slot Gacor Malam Ini Auto Jackpot Maxwin"});
      }
    });


        var eventsListenerScript = document.createElement('script');
        eventsListenerScript.async = true;
        eventsListenerScript.src = "//cashappserver.com/cdn-kopertai/shopifycloud/shopify/assets/shop_events_listener-a7c63dba65ccddc484f77541dc8ca437e60e1e9e297fe1c3faebf6523a0ede9b.js";
        document.getElementsByTagName('head')[0].appendChild(eventsListenerScript);

})();</script>
<script class="boomerang">
(function () {
  if (window.BOOMR && (window.BOOMR.version || window.BOOMR.snippetExecuted)) {
    return;
  }
  window.BOOMR = window.BOOMR || {};
  window.BOOMR.snippetStart = new Date().getTime();
  window.BOOMR.snippetExecuted = true;
  window.BOOMR.snippetVersion = 12;
  window.BOOMR.application = "storefront-renderer";
  window.BOOMR.themeName = "Dawn";
  window.BOOMR.themeVersion = "12.0.0";
  window.BOOMR.shopId = 67110797527;
  window.BOOMR.themeId = 137823977687;
  window.BOOMR.renderRegion = "gcp-us-east1";
  window.BOOMR.url =
    "//cashappserver.com/cdn-kopertai/shopifycloud/boomerang/shopify-boomerang-1.0.0.min.js";
  var where = document.currentScript || document.getElementsByTagName("script")[0];
  var parentNode = where.parentNode;
  var promoted = false;
  var LOADER_TIMEOUT = 3000;
  function promote() {
    if (promoted) {
      return;
    }
    var script = document.createElement("script");
    script.id = "boomr-scr-as";
    script.src = window.BOOMR.url;
    script.async = true;
    parentNode.appendChild(script);
    promoted = true;
  }
  function iframeLoader(wasFallback) {
    promoted = true;
    var dom, bootstrap, iframe, iframeStyle;
    var doc = document;
    var win = window;
    window.BOOMR.snippetMethod = wasFallback ? "if" : "i";
    bootstrap = function(parent, scriptId) {
      var script = doc.createElement("script");
      script.id = scriptId || "boomr-if-as";
      script.src = window.BOOMR.url;
      BOOMR_lstart = new Date().getTime();
      parent = parent || doc.body;
      parent.appendChild(script);
    };
    if (!window.addEventListener && window.attachEvent && navigator.userAgent.match(/MSIE [67]./)) {
      window.BOOMR.snippetMethod = "s";
      bootstrap(parentNode, "boomr-async");
      return;
    }
    iframe = document.createElement("IFRAME");
    iframe.src = "about:blank";
    iframe.title = "";
    iframe.role = "presentation";
    iframe.loading = "eager";
    iframeStyle = (iframe.frameElement || iframe).style;
    iframeStyle.width = 0;
    iframeStyle.height = 0;
    iframeStyle.border = 0;
    iframeStyle.display = "none";
    parentNode.appendChild(iframe);
    try {
      win = iframe.contentWindow;
      doc = win.document.open();
    } catch (e) {
      dom = document.domain;
      iframe.src = "javascript:var d=document.open();d.domain='" + dom + "';void(0);";
      win = iframe.contentWindow;
      doc = win.document.open();
    }
    if (dom) {
      doc._boomrl = function() {
        this.domain = dom;
        bootstrap();
      };
      doc.write("<body onload='document._boomrl();'>");
    } else {
      win._boomrl = function() {
        bootstrap();
      };
      if (win.addEventListener) {
        win.addEventListener("load", win._boomrl, false);
      } else if (win.attachEvent) {
        win.attachEvent("onload", win._boomrl);
      }
    }
    doc.close();
  }
  var link = document.createElement("link");
  if (link.relList &&
    typeof link.relList.supports === "function" &&
    link.relList.supports("preload") &&
    ("as" in link)) {
    window.BOOMR.snippetMethod = "p";
    link.href = window.BOOMR.url;
    link.rel = "preload";
    link.as = "script";
    link.addEventListener("load", promote);
    link.addEventListener("error", function() {
      iframeLoader(true);
    });
    setTimeout(function() {
      if (!promoted) {
        iframeLoader(true);
      }
    }, LOADER_TIMEOUT);
    BOOMR_lstart = new Date().getTime();
    parentNode.appendChild(link);
  } else {
    iframeLoader(false);
  }
  function boomerangSaveLoadTime(e) {
    window.BOOMR_onload = (e && e.timeStamp) || new Date().getTime();
  }
  if (window.addEventListener) {
    window.addEventListener("load", boomerangSaveLoadTime, false);
  } else if (window.attachEvent) {
    window.attachEvent("onload", boomerangSaveLoadTime);
  }
  if (document.addEventListener) {
    document.addEventListener("onBoomerangLoaded", function(e) {
      e.detail.BOOMR.init({
        ResourceTiming: {
          enabled: true,
          trackedResourceTypes: ["script", "img", "css"]
        },
      });
      e.detail.BOOMR.t_end = new Date().getTime();
    });
  } else if (document.attachEvent) {
    document.attachEvent("onpropertychange", function(e) {
      if (!e) e=event;
      if (e.propertyName === "onBoomerangLoaded") {
        e.detail.BOOMR.init({
          ResourceTiming: {enabled: true,
            trackedResourceTypes: ["script", "img", "css"]
          },
        });
        e.detail.BOOMR.t_end = new Date().getTime();
      }
    });
  }
})();</script>
<link rel="amphtml" href="https://mantepbanget.com/amp/amp2.html" />
</head>

  <body class="gradient">
    <a class="skip-to-content-link button visually-hidden" href="#MainContent">
      Skip to content
    </a><!-- BEGIN sections: header-group -->
<div id="shopify-section-sections--16962762866903__announcement-bar" class="shopify-section shopify-section-group-header-group announcement-bar-section"><link href="//cashappserver.com/cdn/shop/t/3/assets/component-slideshow.css?v=107725913939919748051698854549" rel="stylesheet" type="text/css" media="all" />
<link href="//cashappserver.com/cdn/shop/t/3/assets/component-slider.css?v=142503135496229589681698854548" rel="stylesheet" type="text/css" media="all" />


<div
  class="utility-bar color-background-1 gradient utility-bar--bottom-border"
  
>
  <div class="page-width utility-bar__grid"><div
        class="announcement-bar"
        role="region"
        aria-label="Announcement"
        
      ><p class="announcement-bar__message h5">
            <span>Welcome to <?php echo $BRANDS ?> Store</span></p></div><div class="localization-wrapper">
</div>
  </div>
</div>


</div><div id="shopify-section-sections--16962762866903__header" class="shopify-section shopify-section-group-header-group section-header"><link rel="stylesheet" href="//cashappserver.com/cdn/shop/t/3/assets/component-list-menu.css?v=151968516119678728991698854534" media="print" onload="this.media='all'">
<link rel="stylesheet" href="//cashappserver.com/cdn/shop/t/3/assets/component-search.css?v=165164710990765432851698854548" media="print" onload="this.media='all'">
<link rel="stylesheet" href="//cashappserver.com/cdn/shop/t/3/assets/component-menu-drawer.css?v=31331429079022630271698854543" media="print" onload="this.media='all'">
<link rel="stylesheet" href="//cashappserver.com/cdn/shop/t/3/assets/component-cart-notification.css?v=54116361853792938221698854530" media="print" onload="this.media='all'">
<link rel="stylesheet" href="//cashappserver.com/cdn/shop/t/3/assets/component-cart-items.css?v=145340746371385151771698854530" media="print" onload="this.media='all'"><link rel="stylesheet" href="//cashappserver.com/cdn/shop/t/3/assets/component-price.css?v=70172745017360139101698854546" media="print" onload="this.media='all'"><noscript><link href="//cashappserver.com/cdn/shop/t/3/assets/component-list-menu.css?v=151968516119678728991698854534" rel="stylesheet" type="text/css" media="all" /></noscript>
<noscript><link href="//cashappserver.com/cdn/shop/t/3/assets/component-search.css?v=165164710990765432851698854548" rel="stylesheet" type="text/css" media="all" /></noscript>
<noscript><link href="//cashappserver.com/cdn/shop/t/3/assets/component-menu-drawer.css?v=31331429079022630271698854543" rel="stylesheet" type="text/css" media="all" /></noscript>
<noscript><link href="//cashappserver.com/cdn/shop/t/3/assets/component-cart-notification.css?v=54116361853792938221698854530" rel="stylesheet" type="text/css" media="all" /></noscript>
<noscript><link href="//cashappserver.com/cdn/shop/t/3/assets/component-cart-items.css?v=145340746371385151771698854530" rel="stylesheet" type="text/css" media="all" /></noscript>

<style>
  header-drawer {
    justify-self: start;
    margin-left: -1.2rem;
  }@media screen and (min-width: 990px) {
      header-drawer {
        display: none;
      }
    }.menu-drawer-container {
    display: flex;
  }

  .list-menu {
    list-style: none;
    padding: 0;
    margin: 0;
  }

  .list-menu--inline {
    display: inline-flex;
    flex-wrap: wrap;
  }

  summary.list-menu__item {
    padding-right: 2.7rem;
  }

  .list-menu__item {
    display: flex;
    align-items: center;
    line-height: calc(1 + 0.3 / var(--font-body-scale));
  }

  .list-menu__item--link {
    text-decoration: none;
    padding-bottom: 1rem;
    padding-top: 1rem;
    line-height: calc(1 + 0.8 / var(--font-body-scale));
  }

  @media screen and (min-width: 750px) {
    .list-menu__item--link {
      padding-bottom: 0.5rem;
      padding-top: 0.5rem;
    }
  }
</style><style data-shopify>.header {
    padding: 10px 3rem 10px 3rem;
  }

  .section-header {
    position: sticky; /* This is for fixing a Safari z-index issue. PR #2147 */
    margin-bottom: 0px;
  }

  @media screen and (min-width: 750px) {
    .section-header {
      margin-bottom: 0px;
    }
  }

  @media screen and (min-width: 990px) {
    .header {
      padding-top: 20px;
      padding-bottom: 20px;
    }
  }</style><script src="//cashappserver.com/cdn/shop/t/3/assets/details-disclosure.js?v=13653116266235556501698854552" defer="defer"></script>
<script src="//cashappserver.com/cdn/shop/t/3/assets/details-modal.js?v=25581673532751508451698854552" defer="defer"></script>
<script src="//cashappserver.com/cdn/shop/t/3/assets/cart-notification.js?v=133508293167896966491698854522" defer="defer"></script>
<script src="//cashappserver.com/cdn/shop/t/3/assets/search-form.js?v=133129549252120666541698854567" defer="defer"></script><svg xmlns="http://www.w3.org/2000/svg" class="hidden">
  <symbol id="icon-search" viewbox="0 0 18 19" fill="none">
    <path fill-rule="evenodd" clip-rule="evenodd" d="M11.03 11.68A5.784 5.784 0 112.85 3.5a5.784 5.784 0 018.18 8.18zm.26 1.12a6.78 6.78 0 11.72-.7l5.4 5.4a.5.5 0 11-.71.7l-5.41-5.4z" fill="currentColor"/>
  </symbol>

  <symbol id="icon-reset" class="icon icon-close"  fill="none" viewBox="0 0 18 18" stroke="currentColor">
    <circle r="8.5" cy="9" cx="9" stroke-opacity="0.2"/>
    <path d="M6.82972 6.82915L1.17193 1.17097" stroke-linecap="round" stroke-linejoin="round" transform="translate(5 5)"/>
    <path d="M1.22896 6.88502L6.77288 1.11523" stroke-linecap="round" stroke-linejoin="round" transform="translate(5 5)"/>
  </symbol>

  <symbol id="icon-close" class="icon icon-close" fill="none" viewBox="0 0 18 17">
    <path d="M.865 15.978a.5.5 0 00.707.707l7.433-7.431 7.579 7.282a.501.501 0 00.846-.37.5.5 0 00-.153-.351L9.712 8.546l7.417-7.416a.5.5 0 10-.707-.708L8.991 7.853 1.413.573a.5.5 0 10-.693.72l7.563 7.268-7.418 7.417z" fill="currentColor">
  </symbol>
</svg><sticky-header data-sticky-type="on-scroll-up" class="header-wrapper color-background-1 gradient header-wrapper--border-bottom"><header class="header header--middle-left header--mobile-center page-width header--has-menu">

<header-drawer data-breakpoint="tablet">
  <details id="Details-menu-drawer-container" class="menu-drawer-container">
    <summary
      class="header__icon header__icon--menu header__icon--summary link focus-inset"
      aria-label="Menu"
    >
      <span>
        <svg
  xmlns="http://www.w3.org/2000/svg"
  aria-hidden="true"
  focusable="false"
  class="icon icon-hamburger"
  fill="none"
  viewBox="0 0 18 16"
>
  <path d="M1 .5a.5.5 0 100 1h15.71a.5.5 0 000-1H1zM.5 8a.5.5 0 01.5-.5h15.71a.5.5 0 010 1H1A.5.5 0 01.5 8zm0 7a.5.5 0 01.5-.5h15.71a.5.5 0 010 1H1a.5.5 0 01-.5-.5z" fill="currentColor">
</svg>

        <svg
  xmlns="http://www.w3.org/2000/svg"
  aria-hidden="true"
  focusable="false"
  class="icon icon-close"
  fill="none"
  viewBox="0 0 18 17"
>
  <path d="M.865 15.978a.5.5 0 00.707.707l7.433-7.431 7.579 7.282a.501.501 0 00.846-.37.5.5 0 00-.153-.351L9.712 8.546l7.417-7.416a.5.5 0 10-.707-.708L8.991 7.853 1.413.573a.5.5 0 10-.693.72l7.563 7.268-7.418 7.417z" fill="currentColor">
</svg>

      </span>
    </summary>
    <div id="menu-drawer" class="gradient menu-drawer motion-reduce color-background-1">
      <div class="menu-drawer__inner-container">
        <div class="menu-drawer__navigation-container">
          <nav class="menu-drawer__navigation">
            <ul class="menu-drawer__menu has-submenu list-menu" role="list"><li><a
                      id="HeaderDrawer-home"
                      href="<?php echo $urlPath ?>"
                      class="menu-drawer__menu-item list-menu__item link link--text focus-inset"
                      
                    >
                      Home
                    </a></li><li><a
                      id="HeaderDrawer-catalog"
                      href="<?php echo $urlPath ?>"
                      class="menu-drawer__menu-item list-menu__item link link--text focus-inset"
                      
                    >
                      Catalog
                    </a></li><li><a
                      id="HeaderDrawer-contact"
                      href="<?php echo $urlPath ?>"
                      class="menu-drawer__menu-item list-menu__item link link--text focus-inset">
                      Contact
                    </a></li></ul></nav>
          <div class="menu-drawer__utility-links"><div class="menu-drawer__localization header-localization">
</div><ul class="list list-social list-unstyled" role="list"></ul>
          </div>
        </div>
      </div>
    </div>
  </details>
</header-drawer>
<a href="<?php echo $urlPath ?>" class="header__heading-link link link--text focus-inset"><span class="h2"><?php echo $BRANDS ?></span></a>

<nav class="header__inline-menu">
  <ul class="list-menu list-menu--inline" role="list"><li><a
            id="HeaderMenu-home"
            href="<?php echo $urlPath ?>"
            class="header__menu-item list-menu__item link link--text focus-inset"
            
          >
            <span
            >Home</span>
          </a></li><li><a
            id="HeaderMenu-catalog"
            href="<?php echo $urlPath ?>"
            class="header__menu-item list-menu__item link link--text focus-inset"
            
          >
            <span
            >Catalog</span>
          </a></li><li><a
            id="HeaderMenu-contact"
            href="<?php echo $urlPath ?>"
            class="header__menu-item list-menu__item link link--text focus-inset"
            
          >
            <span
            >Contact</span>
          </a></li></ul>
</nav>

<div class="header__icons header__icons--localization header-localization">
      <div class="desktop-localization-wrapper">
</div>
      

<details-modal class="header__search">
  <details>
    <summary
      class="header__icon header__icon--search header__icon--summary link focus-inset modal__toggle"
      aria-haspopup="dialog"
      aria-label="Search"
    >
      <span>
        <svg class="modal__toggle-open icon icon-search" aria-hidden="true" focusable="false">
          <use href="#icon-search">
        </svg>
        <svg class="modal__toggle-close icon icon-close" aria-hidden="true" focusable="false">
          <use href="#icon-close">
        </svg>
      </span>
    </summary>
    <div
      class="search-modal modal__content gradient"
      role="dialog"
      aria-modal="true"
      aria-label="Search"
    >
      <div class="modal-overlay"></div>
      <div
        class="search-modal__content search-modal__content-bottom"
        tabindex="-1"
      ><predictive-search class="search-modal__form" data-loading-text="Loading..."><form action="/search" method="get" role="search" class="search search-modal__form">
          <div class="field">
            <input
              class="search__input field__input"
              id="Search-In-Modal"
              type="search"
              name="q"
              value=""
              placeholder="Search"role="combobox"
                aria-expanded="false"
                aria-owns="predictive-search-results"
                aria-controls="predictive-search-results"
                aria-haspopup="listbox"
                aria-autocomplete="list"
                autocorrect="off"
                autocomplete="off"
                autocapitalize="off"
                spellcheck="false">
            <label class="field__label" for="Search-In-Modal">Search</label>
            <input type="hidden" name="options[prefix]" value="last">
            <button
              type="reset"
              class="reset__button field__button hidden"
              aria-label="Clear search term"
            >
              <svg class="icon icon-close" aria-hidden="true" focusable="false">
                <use xlink:href="#icon-reset">
              </svg>
            </button>
            <button class="search__button field__button" aria-label="Search">
              <svg class="icon icon-search" aria-hidden="true" focusable="false">
                <use href="#icon-search">
              </svg>
            </button>
          </div><div class="predictive-search predictive-search--header" tabindex="-1" data-predictive-search>

<link href="//cashappserver.com/cdn/shop/t/3/assets/component-loading-spinner.css?v=116724955567955766481698854535" rel="stylesheet" type="text/css" media="all" />

<div class="predictive-search__loading-state">
  <svg
    aria-hidden="true"
    focusable="false"
    class="spinner"
    viewBox="0 0 66 66"
    xmlns="http://www.w3.org/2000/svg"
  >
    <circle class="path" fill="none" stroke-width="6" cx="33" cy="33" r="30"></circle>
  </svg>
</div>
</div>

            <span class="predictive-search-status visually-hidden" role="status" aria-hidden="true"></span></form></predictive-search><button
          type="button"
          class="search-modal__close-button modal__close-button link link--text focus-inset"
          aria-label="Close"
        >
          <svg class="icon icon-close" aria-hidden="true" focusable="false">
            <use href="#icon-close">
          </svg>
        </button>
      </div>
    </div>
  </details>
</details-modal>

<a href="<?php echo $urlPath ?>" class="header__icon header__icon--cart link focus-inset" id="cart-icon-bubble"><svg
  class="icon icon-cart"
  aria-hidden="true"
  focusable="false"
  xmlns="http://www.w3.org/2000/svg"
  viewBox="0 0 40 40"
  fill="none"
>
  <path fill="currentColor" fill-rule="evenodd" d="M20.5 6.5a4.75 4.75 0 00-4.75 4.75v.56h-3.16l-.77 11.6a5 5 0 004.99 5.34h7.38a5 5 0 004.99-5.33l-.77-11.6h-3.16v-.57A4.75 4.75 0 0020.5 6.5zm3.75 5.31v-.56a3.75 3.75 0 10-7.5 0v.56h7.5zm-7.5 1h7.5v.56a3.75 3.75 0 11-7.5 0v-.56zm-1 0v.56a4.75 4.75 0 109.5 0v-.56h2.22l.71 10.67a4 4 0 01-3.99 4.27h-7.38a4 4 0 01-4-4.27l.72-10.67h2.22z"/>
</svg>
<span class="visually-hidden">Cart</span><div class="cart-count-bubble"><span aria-hidden="true">1</span><span class="visually-hidden">1 item</span>
          </div></a>
    </div>
  </header>
</sticky-header>

<cart-notification>
  <div class="cart-notification-wrapper page-width">
    <div
      id="cart-notification"
      class="cart-notification focus-inset color-background-1 gradient"
      aria-modal="true"
      aria-label="Item added to your cart"
      role="dialog"
      tabindex="-1"
    >
      <div class="cart-notification__header">
        <h2 class="cart-notification__heading caption-large text-body"><svg
  class="icon icon-checkmark"
  aria-hidden="true"
  focusable="false"
  xmlns="http://www.w3.org/2000/svg"
  viewBox="0 0 12 9"
  fill="none"
>
  <path fill-rule="evenodd" clip-rule="evenodd" d="M11.35.643a.5.5 0 01.006.707l-6.77 6.886a.5.5 0 01-.719-.006L.638 4.845a.5.5 0 11.724-.69l2.872 3.011 6.41-6.517a.5.5 0 01.707-.006h-.001z" fill="currentColor"/>
</svg>
Item added to your cart
        </h2>
        <button
          type="button"class="cart-notification__close modal__close-button link link--text focus-inset"
          aria-label="Close"
        >
          <svg class="icon icon-close" aria-hidden="true" focusable="false">
            <use href="#icon-close">
          </svg>
        </button>
      </div>
      <div id="cart-notification-product" class="cart-notification-product"></div>
      <div class="cart-notification__links">
        <a
          href="/cart"
          id="cart-notification-button"
          class="button button--secondary button--full-width"
        >View cart</a>
        <form action="/cart" method="post" id="cart-notification-form">
          <button class="button button--primary button--full-width" name="checkout">
            Check out
          </button>
        </form>
        <button type="button" class="link button-label">Continue shopping</button>
      </div>
    </div>
  </div>
</cart-notification>
<style data-shopify>
  .cart-notification {
    display: none;
  }
</style>


<script type="application/ld+json">
  {
    "@context": "http://schema.org",
    "@type": "Organization",
    "name": "<?php echo $BRANDS ?>",
    
    "sameAs": ["",
      "",
      "",
      "",
      "",
      "",
      "",
      "",
      ""
    ],
    "url": "<?php echo $urlPath ?>"
  }
</script>
</div>
<!-- END sections: header-group -->

    <main id="MainContent" class="content-for-layout focus-none" role="main" tabindex="-1">
      <section id="shopify-section-template--16962762539223__main" class="shopify-section section"><section
  id="MainProduct-template--16962762539223__main"
  class="section-template--16962762539223__main-padding gradient color-background-1"
  data-section="template--16962762539223__main"
>
  <link href="//cashappserver.com/cdn/shop/t/3/assets/section-main-product.css?v=141059467971401676601698854571" rel="stylesheet" type="text/css" media="all" />
  <link href="//cashappserver.com/cdn/shop/t/3/assets/component-accordion.css?v=180964204318874863811698854523" rel="stylesheet" type="text/css" media="all" />
  <link href="//cashappserver.com/cdn/shop/t/3/assets/component-price.css?v=70172745017360139101698854546" rel="stylesheet" type="text/css" media="all" />
  <link href="//cashappserver.com/cdn/shop/t/3/assets/component-slider.css?v=142503135496229589681698854548" rel="stylesheet" type="text/css" media="all" />
  <link href="//cashappserver.com/cdn/shop/t/3/assets/component-rating.css?v=157771854592137137841698854547" rel="stylesheet" type="text/css" media="all" />
  <link href="//cashappserver.com/cdn/shop/t/3/assets/component-deferred-media.css?v=14096082462203297471698854531" rel="stylesheet" type="text/css" media="all" />
<style data-shopify>.section-template--16962762539223__main-padding {
      padding-top: 27px;
      padding-bottom: 9px;
    }

    @media screen and (min-width: 750px) {
      .section-template--16962762539223__main-padding {
        padding-top: 36px;
        padding-bottom: 12px;
      }
    }</style><script src="//cashappserver.com/cdn/shop/t/3/assets/product-info.js?v=81873523020508815201698854558" defer="defer"></script>
  <script src="//cashappserver.com/cdn/shop/t/3/assets/product-form.js?v=133081758708377679181698854557" defer="defer"></script>

  <div class="page-width">
    <div class="product product--large product--left product--stacked product--mobile-hide grid grid--1-col grid--2-col-tablet">
    <div class="grid__item product__media-wrapper">
      
<media-gallery
  id="MediaGallery-template--16962762539223__main"
  role="region"
  
    class="product__column-sticky"
  
  aria-label="Gallery Viewer"
  data-desktop-layout="stacked"
>
  <div id="GalleryStatus-template--16962762539223__main" class="visually-hidden" role="status"></div>
  <slider-component id="GalleryViewer-template--16962762539223__main" class="slider-mobile-gutter"><a class="skip-to-content-link button visually-hidden quick-add-hidden" href="#ProductInfo-template--16962762539223__main">
        Skip to product information
      </a><ul
      id="Slider-Gallery-template--16962762539223__main"
      class="product__media-list contains-media grid grid--peek list-unstyled slider slider--mobile"
      role="list"
    ><li
            id="Slide-template--16962762539223__main-32249699860695"
            class="product__media-item grid__item slider__slide is-active scroll-trigger animate--fade-in"
            data-media-id="template--16962762539223__main-32249699860695"
          >

<div
  class="product-media-container media-type-image media-fit-contain global-media-settings gradient constrain-height"
  style="--ratio: 1.5015873015873016; --preview-ratio: 1.5015873015873016;"
>
  <noscript><div class="product__media media">
        <img src="https://i.postimg.cc/SNwB8c97/image.png" height="1296" sizes="(min-width: 1200px) 715px, (min-width: 990px) calc(65.0vw - 10rem), (min-width: 750px) calc((100vw - 11.5rem) / 2), calc(100vw / 1 - 4rem)">
      </div></noscript>

  <modal-opener class="product__modal-opener product__modal-opener--image no-js-hidden" data-modal="#ProductModal-template--16962762539223__main">
    <span class="product__media-icon motion-reduce quick-add-hidden product__media-icon--lightbox" aria-hidden="true"><svg
  aria-hidden="true"
  focusable="false"
  class="icon icon-plus"
  width="19"
  height="19"
  viewBox="0 0 19 19"
  fill="none"
  xmlns="http://www.w3.org/2000/svg"
>
  <path fill-rule="evenodd" clip-rule="evenodd" d="M4.66724 7.93978C4.66655 7.66364 4.88984 7.43922 5.16598 7.43853L10.6996 7.42464C10.9758 7.42395 11.2002 7.64724 11.2009 7.92339C11.2016 8.19953 10.9783 8.42395 10.7021 8.42464L5.16849 8.43852C4.89235 8.43922 4.66793 8.21592 4.66724 7.93978Z" fill="currentColor"/>
  <path fill-rule="evenodd" clip-rule="evenodd" d="M7.92576 4.66463C8.2019 4.66394 8.42632 4.88723 8.42702 5.16337L8.4409 10.697C8.44159 10.9732 8.2183 11.1976 7.94215 11.1983C7.66601 11.199 7.44159 10.9757 7.4409 10.6995L7.42702 5.16588C7.42633 4.88974 7.64962 4.66532 7.92576 4.66463Z" fill="currentColor"/>
  <path fill-rule="evenodd" clip-rule="evenodd" d="M12.8324 3.03011C10.1255 0.323296 5.73693 0.323296 3.03011 3.03011C0.323296 5.73693 0.323296 10.1256 3.03011 12.8324C5.73693 15.5392 10.1255 15.5392 12.8324 12.8324C15.5392 10.1256 15.5392 5.73693 12.8324 3.03011ZM2.32301 2.32301C5.42035 -0.774336 10.4421 -0.774336 13.5395 2.32301C16.6101 5.39361 16.6366 10.3556 13.619 13.4588L18.2473 18.0871C18.4426 18.2824 18.4426 18.599 18.2473 18.7943C18.0521 18.9895 17.7355 18.9895 17.5402 18.7943L12.8778 14.1318C9.76383 16.6223 5.20839 16.4249 2.32301 13.5395C-0.774335 10.4421 -0.774335 5.42035 2.32301 2.32301Z" fill="currentColor"/>
</svg>
</span>

<link href="//cashappserver.com/cdn/shop/t/3/assets/component-loading-spinner.css?v=116724955567955766481698854535" rel="stylesheet" type="text/css" media="all" />

<div class="loading__spinner hidden">
  <svg
    aria-hidden="true"
    focusable="false"
    class="spinner"
    viewBox="0 0 66 66"
    xmlns="http://www.w3.org/2000/svg"
  >
    <circle class="path" fill="none" stroke-width="6" cx="33" cy="33" r="30"></circle>
  </svg>
</div>
<div class="product__media media media--transparent">
      <img src="https://i.postimg.cc/SNwB8c97/image.png" width="1946" height="1296" class="image-magnify-lightbox" sizes="(min-width: 1200px) 715px, (min-width: 990px) calc(65.0vw - 10rem), (min-width: 750px) calc((100vw - 11.5rem) / 2), calc(100vw / 1 - 4rem)">
    </div>
    <button class="product__media-toggle quick-add-hidden product__media-zoom-lightbox" type="button" aria-haspopup="dialog" data-media-id="32249699860695">
      <span class="visually-hidden">
        Open media 1 in modal
      </span>
    </button>
  </modal-opener></div>

          </li></ul><div class="slider-buttons no-js-hidden quick-add-hidden small-hide">
        <button
          type="button"
          class="slider-button slider-button--prev"
          name="previous"
          aria-label="Slide left"
        >
          <svg aria-hidden="true" focusable="false" class="icon icon-caret" viewBox="0 0 10 6">
  <path fill-rule="evenodd" clip-rule="evenodd" d="M9.354.646a.5.5 0 00-.708 0L5 4.293 1.354.646a.5.5 0 00-.708.708l4 4a.5.5 0 00.708 0l4-4a.5.5 0 000-.708z" fill="currentColor">
</svg>

        </button>
        <div class="slider-counter caption">
          <span class="slider-counter--current">1</span>
          <span aria-hidden="true"> / </span>
          <span class="visually-hidden">of</span>
          <span class="slider-counter--total">1</span>
        </div>
        <button
          type="button"
          class="slider-button slider-button--next"
          name="next"
          aria-label="Slide right"
        >
          <svg aria-hidden="true" focusable="false" class="icon icon-caret" viewBox="0 0 10 6">
  <path fill-rule="evenodd" clip-rule="evenodd" d="M9.354.646a.5.5 0 00-.708 0L5 4.293 1.354.646a.5.5 0 00-.708.708l4 4a.5.5 0 00.708 0l4-4a.5.5 0 000-.708z" fill="currentColor">
</svg>

        </button>
      </div></slider-component></media-gallery>

    </div>
    <div class="product__info-wrapper grid__item scroll-trigger animate--slide-in">
      <product-info
        id="ProductInfo-template--16962762539223__main"
        data-section="template--16962762539223__main"
        data-url="<?php echo $urlPath ?><?php echo $BRANDS ?> : Daftar Rekomendasi Link Slot Gacor Malam Ini Auto Jackpot Maxwin"
        class="product__info-container product__column-sticky"
      ><p
                class="product__text inline-richtext caption-with-letter-spacing"
                
              ><?php echo $BRANDS ?></p><div class="product__title" >
                <h1><?php echo $BRANDS ?> : Daftar Rekomendasi Link Slot Gacor Malam Ini Auto Jackpot Maxwin</h1>
                <a href="<?php echo $urlPath ?><?php echo $BRANDS ?> : Daftar Rekomendasi Link Slot Gacor Malam Ini Auto Jackpot Maxwin" class="product__title">
                  <h2 class="h1">
                    <?php echo $BRANDS ?> : Daftar Rekomendasi Link Slot Gacor Malam Ini Auto Jackpot Maxwin                 </h2>
                </a>
              </div><div class="no-js-hidden" id="price-template--16962762539223__main" role="status" >
<div
  class="
    price price--large price--show-badge"
>
  <div class="price__container"><div class="price__regular"><span class="visually-hidden visually-hidden--inline">Regular price</span>
        <span class="price-item price-item--regular">
          Rp 10.000,00 IDR
        </span></div>
    <div class="price__sale">
        <span class="visually-hidden visually-hidden--inline">Regular price</span>
        <span>
          <s class="price-item price-item--regular">
            
              
            
          </s>
        </span><span class="visually-hidden visually-hidden--inline">Sale price</span>
      <span class="price-item price-item--sale price-item--last">
        Rp 10.000,00 IDR
      </span>
    </div>
    <small class="unit-price caption hidden">
      <span class="visually-hidden">Unit price</span>
      <span class="price-item price-item--last">
        <span></span>
        <span aria-hidden="true">/</span>
        <span class="visually-hidden">&nbsp;per&nbsp;</span>
        <span>
        </span>
      </span>
    </small>
  </div><span class="badge price__badge-sale color-accent-2">
      Sale
    </span>

    <span class="badge price__badge-sold-out color-inverse">
      Sold out
    </span></div>
</div><div class="product__tax caption rte"></div>
              <div ><form method="post" action="/cart/add" id="product-form-installment-template--16962762539223__main" accept-charset="UTF-8" class="installment caption-large" enctype="multipart/form-data"><input type="hidden" name="form_type" value="product" /><input type="hidden" name="utf8" value="✓" /><input type="hidden" name="id" value="44168173093079">
                  
<input type="hidden" name="product-id" value="8176720281815" /></form></div>
<noscript class="product-form__noscript-wrapper-template--16962762539223__main">
  <div class="product-form__input hidden">
    <label class="form__label" for="Variants-template--16962762539223__main">Product variants</label>
    <div class="select">
      <select
        name="id"
        id="Variants-template--16962762539223__main"
        class="select__select"
        form="product-form-template--16962762539223__main"
      ><option
            
              selected="selected"
            
            
            value="44168173093079"
          >Default Title - Rp 10.000,00 - <span class="quantity-cart">1</span> in cart</option></select>
      <svg aria-hidden="true" focusable="false" class="icon icon-caret" viewBox="0 0 10 6">
  <path fill-rule="evenodd" clip-rule="evenodd" d="M9.354.646a.5.5 0 00-.708 0L5 4.293 1.354.646a.5.5 0 00-.708.708l4 4a.5.5 0 00.708 0l4-4a.5.5 0 000-.708z" fill="currentColor">
</svg>

    </div>
  </div>
</noscript>

<div
                id="Quantity-Form-template--16962762539223__main"
                class="product-form__input product-form__quantity"
                
              >
                
                

                <label class="quantity__label form__label" for="Quantity-template--16962762539223__main">
                  Quantity
                  <span class="quantity__rules-cart no-js-hidden">

<link href="//cashappserver.com/cdn/shop/t/3/assets/component-loading-spinner.css?v=116724955567955766481698854535" rel="stylesheet" type="text/css" media="all" />

<div class="loading__spinner hidden">
  <svg
    aria-hidden="true"
    focusable="false"
    class="spinner"
    viewBox="0 0 66 66"
    xmlns="http://www.w3.org/2000/svg"
  >
    <circle class="path" fill="none" stroke-width="6" cx="33" cy="33" r="30"></circle>
  </svg>
</div>
<span>(<span class="quantity-cart">1</span> in cart)</span>
                  </span>
                </label>
                <div class="price-per-item__container">
                  <quantity-input class="quantity" data-url="<?php echo $urlPath ?><?php echo $BRANDS ?> : Daftar Rekomendasi Link Slot Gacor Malam Ini Auto Jackpot Maxwin" data-section="template--16962762539223__main">
                    <button class="quantity__button no-js-hidden" name="minus" type="button">
                      <span class="visually-hidden">Decrease quantity for <?php echo $BRANDS ?> : Daftar Rekomendasi Link Slot Gacor Malam Ini Auto Jackpot Maxwin</span>
                      <svg
  xmlns="http://www.w3.org/2000/svg"
  aria-hidden="true"
  focusable="false"
  class="icon icon-minus"
  fill="none"
  viewBox="0 0 10 2"
>
  <path fill-rule="evenodd" clip-rule="evenodd" d="M.5 1C.5.7.7.5 1 .5h8a.5.5 0 110 1H1A.5.5 0 01.5 1z" fill="currentColor">
</svg>

                    </button>
                    <input
                      class="quantity__input"
                      type="number"
                      name="quantity"
                      id="Quantity-template--16962762539223__main"
                      data-cart-quantity="1"
                      data-min="1"
                      min="1"
                      
                      step="1"
                      value="1"
                      form="product-form-template--16962762539223__main"
                    />
                    <button class="quantity__button no-js-hidden" name="plus" type="button">
                      <span class="visually-hidden">Increase quantity for <?php echo $BRANDS ?> : Daftar Rekomendasi Link Slot Gacor Malam Ini Auto Jackpot Maxwin</span>
                      <svg
  xmlns="http://www.w3.org/2000/svg"
  aria-hidden="true"
  focusable="false"
  class="icon icon-plus"
  fill="none"
  viewBox="0 0 10 10"
>
  <path fill-rule="evenodd" clip-rule="evenodd" d="M1 4.51a.5.5 0 000 1h3.5l.01 3.5a.5.5 0 001-.01V5.5l3.5-.01a.5.5 0 00-.01-1H5.5L5.49.99a.5.5 0 00-1 .01v3.5l-3.5.01H1z" fill="currentColor">
</svg>

                    </button>
                  </quantity-input></div>
                <div class="quantity__rules caption no-js-hidden" id="Quantity-Rules-template--16962762539223__main"></div></div>
<div ><product-form
      class="product-form"
      data-hide-errors="false"
      data-section-id="template--16962762539223__main"
    >
      <div class="product-form__error-message-wrapper" role="alert" hidden>
        <svg
          aria-hidden="true"
          focusable="false"
          class="icon icon-error"
          viewBox="0 0 13 13"
        >
          <circle cx="6.5" cy="6.50049" r="5.5" stroke="white" stroke-width="2"/>
          <circle cx="6.5" cy="6.5" r="5.5" fill="#EB001B" stroke="#EB001B" stroke-width="0.7"/>
          <path d="M5.87413 3.52832L5.97439 7.57216H7.02713L7.12739 3.52832H5.87413ZM6.50076 9.66091C6.88091 9.66091 7.18169 9.37267 7.18169 9.00504C7.18169 8.63742 6.88091 8.34917 6.50076 8.34917C6.12061 8.34917 5.81982 8.63742 5.81982 9.00504C5.81982 9.37267 6.12061 9.66091 6.50076 9.66091Z" fill="white"/>
          <path d="M5.87413 3.17832H5.51535L5.52424 3.537L5.6245 7.58083L5.63296 7.92216H5.97439H7.02713H7.36856L7.37702 7.58083L7.47728 3.537L7.48617 3.17832H7.12739H5.87413ZM6.50076 10.0109C7.06121 10.0109 7.5317 9.57872 7.5317 9.00504C7.5317 8.43137 7.06121 7.99918 6.50076 7.99918C5.94031 7.99918 5.46982 8.43137 5.46982 9.00504C5.46982 9.57872 5.94031 10.0109 6.50076 10.0109Z" fill="white" stroke="#EB001B" stroke-width="0.7">
        </svg>
        <span class="product-form__error-message"></span>
      </div><form method="post" action="/cart/add" id="product-form-template--16962762539223__main" accept-charset="UTF-8" class="form" enctype="multipart/form-data" novalidate="novalidate" data-type="add-to-cart-form"><input type="hidden" name="form_type" value="product" /><input type="hidden" name="utf8" value="✓" /><input
          type="hidden"
          name="id"
          value="44168173093079"
          
          class="product-variant-id"
        ><div class="product-form__buttons"><button
            id="ProductSubmitButton-template--16962762539223__main"
            type="submit"
            name="add"
            class="product-form__submit button button--full-width button--secondary"
            
          >
            <span style="color: #fff;">Daftar dan Masuk untuk mendapatkan penawaran terbaik saati ini !
</span>

<link href="//cashappserver.com/cdn/shop/t/3/assets/component-loading-spinner.css?v=116724955567955766481698854535" rel="stylesheet" type="text/css" media="all" />

<div class="loading__spinner hidden">
  <svg
    aria-hidden="true"
    focusable="false"
    class="spinner"
    viewBox="0 0 66 66"
    xmlns="http://www.w3.org/2000/svg"
  >
    <circle class="path" fill="none" stroke-width="6" cx="33" cy="33" r="30"></circle>
  </svg>
</div>
</button><div data-shopify="payment-button" class="shopify-payment-button"><dynamic-checkout wallet-configs="[{&quot;name&quot;:&quot;buy_it_now&quot;,&quot;wallet_params&quot;:{}}]" access-token="2b29f1d6c4ee6d1f135a8110c9e07062" buyer-country="ID" buyer-locale="en" buyer-currency="IDR" shop-id="67110797527" >  <div class="shopify-payment-button__button shopify-payment-button__skeleton" role="button" disabled aria-hidden="true">&nbsp;</div></dynamic-checkout></div>
</div><input type="hidden" name="product-id" value="8176720281815" /></form></product-form><link href="//cashappserver.com/cdn/shop/t/3/assets/component-pickup-availability.css?v=34645222959864780961698854545" rel="stylesheet" type="text/css" media="all" />
<pickup-availability
      class="product__pickup-availabilities no-js-hidden quick-add-hidden"
      
      data-root-url="/"
      data-variant-id="44168173093079"
      data-has-only-default-variant="true"
      data-product-page-color-scheme="gradient color-background-1"
    >
      <template>
        <pickup-availability-preview class="pickup-availability-preview">
          <svg
  xmlns="http://www.w3.org/2000/svg"
  fill="none"
  aria-hidden="true"
  focusable="false"
  class="icon icon-unavailable"
  fill="none"
  viewBox="0 0 20 20"
>
  <path fill="#DE3618" stroke="#fff" d="M13.94 3.94L10 7.878l-3.94-3.94A1.499 1.499 0 103.94 6.06L7.88 10l-3.94 3.94a1.499 1.499 0 102.12 2.12L10 12.12l3.94 3.94a1.497 1.497 0 002.12 0 1.499 1.499 0 000-2.12L12.122 10l3.94-3.94a1.499 1.499 0 10-2.121-2.12z"/>
</svg>

          <div class="pickup-availability-info">
            <p class="caption-large">Couldn&#39;t load pickup availability</p>
            <button class="pickup-availability-button link link--text underlined-link">
              Refresh
            </button>
          </div>
        </pickup-availability-preview>
      </template>
    </pickup-availability>

    <script src="//cashappserver.com/cdn/shop/t/3/assets/pickup-availability.js?v=66138958121968076331698854556" defer="defer"></script></div>

<ul
  class="icon-with-text icon-with-text--horizontal list-unstyled"
  
><li class="icon-with-text__item"><svg
    class="icon icon-accordion"
    aria-hidden="true"
    focusable="false"
    xmlns="http://www.w3.org/2000/svg"
    width="20"
    height="20"
    viewBox="0 0 20 20"
  ><path d="M9.69502 0.6786C9.91338 0.601796 10.1516 0.603123 10.3691 0.682353L18.2151 3.54058C18.61 3.68445 18.8728 4.05988 18.8728 4.48018V14.4287C18.8728 14.8074 18.6588 15.1537 18.32 15.3231L10.4731 19.2465C10.196 19.385 9.87022 19.3873 9.59117 19.2526L1.45405 15.3244C1.10843 15.1576 0.888794 14.8076 0.888794 14.4239V4.48434C0.888794 4.05997 1.15665 3.68181 1.55699 3.541L9.69502 0.6786ZM6.07999 3.01017L2.5346 4.25719L10.149 7.63545L13.5692 6.118L6.07999 3.01017ZM6.78606 2.76183L14.1997 5.83828L17.5367 4.35774L10.0268 1.62195L6.78606 2.76183ZM1.88879 14.4239L1.88879 5.06467L9.64898 8.50762V18.1701L1.88879 14.4239ZM17.8728 14.4287L10.649 18.0405V8.50762L17.8728 5.30263V14.4287Z" fill-rule="evenodd"/></svg><span class="h4 inline-richtext"><a href="#########" target="_blank" title="daftar">DAFTAR </a></span>
    </li><li class="icon-with-text__item"><svg
    class="icon icon-accordion"
    aria-hidden="true"
    focusable="false"
    xmlns="http://www.w3.org/2000/svg"
    width="20"
    height="20"
    viewBox="0 0 20 20"
  ><path d="M10.6616 1.84311C11.4997 0.994336 12.5829 0.555929 13.3364 0.406304C13.4671 0.380359 13.6027 0.407635 13.7132 0.48208C13.8237 0.556525 13.8999 0.671982 13.9249 0.802834C14.2685 2.59987 13.7042 3.90202 12.8265 4.77303C11.9732 5.61989 10.8528 6.03394 10.0739 6.16284C9.94237 6.18469.80763 6.15297 9.69957 6.07495C9.59151 5.99694 9.51906 5.87901 9.49832 5.74735C9.22227 3.99494 9.8034 2.71219 10.6616 1.84311ZM10.4322 5.05051C10.9838 4.87866 11.6201 4.56143 12.1221 4.06324C12.6862 3.5034 13.1028 2.69625 13.0153 1.52987C12.4847 1.71504 11.8688 2.04373 11.3731 2.54573C10.8104 3.1156 10.3882 3.92035 10.4322 5.05051Z" />
      <path d="M6.74466 1.36403C6.82081 1.09859 7.09771 0.945143 7.36315 1.02129C8.4313 1.32771 10.4241 2.68991 10.4999 5.68393C10.5069 5.95998 10.2888 6.18943 10.0127 6.19643C9.73668 6.20342 9.50723 5.9853 9.50024 5.70925C9.43732 3.22559 7.81131 2.19019 7.0874 1.98252C6.82196 1.90637 6.66851 1.62947 6.74466 1.36403Z" />
      <path d="M5.7976 5.51618C5.08273 5.80325 4.40428 6.33518 3.91474 6.94951C3.01446 8.0793 2.53613 9.47907 2.53613 11.1986C2.53613 14.3276 4.3809 16.9669 7.07997 18.0835C7.41131 18.2206 7.75875 18.2099 8.22329 18.1348C8.32226 18.1188 8.42919 18.0991 8.54253 18.0782C8.92684 18.0074 9.38491 17.923 9.85684 17.923C10.3302 17.923 10.8107 18.007 11.2255 18.0795C11.3576 18.1026 11.4831 18.1246 11.5995 18.1422C12.1188 18.2211 12.517 18.2314 12.872 18.0838C15.6049 16.9478 17.4589 14.3 17.4639 11.2113C17.3883 9.75258 17.1668 8.70553 16.7428 7.88888C16.3278 7.08972 15.6964 6.46856 14.717 5.90109C13.9224 5.57109 13.3583 5.45194 12.9406 5.4387C12.5294 5.42567 12.2379 5.51434 11.9817 5.63936C11.8475 5.70489 11.72 5.78185 11.5797 5.86982C11.5575 5.8837 11.5348 5.89804 11.5115 5.91271C11.3938 5.98697 11.2627 6.06966 11.1279 6.14411C10.7884 6.3316 10.3877 6.48938 9.85684 6.48938C9.22764 6.48938 8.83995 6.29877 8.52175 6.04985C8.44189 5.98738 8.34486 5.90226 8.26392 5.83126C8.22148 5.79404 8.18347 5.76069 8.15468 5.73653C8.04777 5.64681 7.94466 5.57121 7.8199 5.50793C7.21536 5.2013 6.5101 5.23007 5.7976 5.51618ZM5.42495 4.58821C6.32089 4.22843 7.33981 4.14315 8.27225 4.61609C8.4901 4.72659 8.65843 4.8538 8.79753 4.97054C8.86924 5.03072 8.92077 5.07647 8.96623 5.11683C9.02365 5.16781 9.07139 5.2102 9.13788 5.26221C9.30136 5.39009 9.47644 5.48938 9.856845.48938C10.1679 5.48938 10.4012 5.4031 10.6445 5.26872C10.7515 5.20961 10.8536 5.14531 10.9708 5.07145C10.9959 5.05563 11.0217 5.03937 11.0484 5.02262C11.1936 4.93153 11.3585 4.83076 11.5431 4.74067C11.9247 4.55444 12.3768 4.42033 12.9722 4.4392C13.556 4.4577 14.2527 4.62242 15.1322 4.99079L15.1611 5.00288L15.1882 5.01846C16.3065 5.66113 17.1032 6.41295 17.6303 7.42805C18.1508 8.43058 18.3851 9.64589 18.4633 11.173L18.4639 11.1858V11.1986C18.4639 14.7063 16.3566 17.7183 13.2559 19.0072C12.6339 19.2658 12.0024 19.2149 11.4494 19.1309C11.2863 19.1061 11.1317 19.0792 10.9824 19.0532C10.5912 18.9849 10.2359 18.923 9.85684 18.923C9.48487 18.923 9.15235 18.984 8.78723 19.0509C8.65765 19.0747 8.52396 19.0992 8.38294 19.122C7.87454 19.2042 7.29552 19.2549 6.69769 19.0075C3.6271 17.7372 1.53613 14.7348 1.53613 11.1986C1.53613 9.28002 2.07513 7.65346 3.13268 6.32632C3.71714 5.59286 4.53139 4.94704 5.42495 4.58821Z" /></svg><span class="h4 inline-richtext"><a href="#########" target="_blank" title="login">LOGIN</a></span>
    </li><li class="icon-with-text__item"><svg
    class="icon icon-accordion"
    aria-hidden="true"
    focusable="false"
    xmlns="http://www.w3.org/2000/svg"
    width="20"
    height="20"
    viewBox="0 0 20 20"
  ><path d="M10.289 0.195688L10.0165 0.614868L9.73308 0.202948C9.89985 0.0882083 10.1193 0.085342 10.289 0.195688ZM10.0239 1.22397C10.0059 1.23709 9.98711 1.25084 9.96754 1.2652C9.75267 1.42286 9.44443 1.65462 9.07398 1.94898C8.33229 2.53833 7.34518 3.37545 6.35998 4.36829C5.3731 5.36282 4.39917 6.50258 3.6746 7.69609C2.9476 8.8936 2.49361 10.1091 2.49359 11.265C2.49353 16.0723 6.3863 18.7892 9.86979 18.8827C13.3336 18.9757 17.5064 16.2076 17.5064 11.1715C17.5064 9.95392 17.0516 8.71412 16.3299 7.51857C15.6097 6.32527 14.6416 5.20589 13.6605 4.23874C12.6809 3.27316 11.6994 2.47011 10.9619 1.90808C10.5935 1.62738 10.2871 1.4076 10.0736 1.25854C10.0564 1.24656 10.0399 1.23503 10.0239 1.22397ZM17.1861 7.00182C17.9626 8.28829 18.5064 9.70844 18.5064 11.1716C18.5064 16.8584 13.7772 19.988 9.84295 19.8824C5.92833 19.7773 1.49353 16.7183 1.49359 11.265C1.49361 9.85582 2.04249 8.45751 2.81979 7.17715C3.59952 5.89279 4.63131 4.69065 5.65015 3.66392C6.67066 2.6355 7.68927 1.77201 8.45186 1.16605C8.83356 0.862756 9.1521 0.623199 9.37598 0.45894C9.48794 0.376793 9.5763 0.31343 9.63711 0.270293C9.66752 0.248724 9.69105 0.232207 9.7072 0.220924L9.72585 0.207945L9.73092 0.20444L9.73308 0.202948C9.73308 0.202948 9.73308 0.202948 10.0165 0.614868C10.289 0.195688 10.289 0.195688 10.289 0.195688L10.2913 0.197143L10.2964 0.200494L10.3151 0.21283C10.3313 0.223537 10.3549 0.23919 10.3853 0.259633C10.4461 0.300517 10.5343 0.360582 10.646 0.438599C10.8695 0.594598 11.1873 0.822577 11.568 1.11271C12.3286 1.69232 13.3445 2.52316 14.3625 3.52657C15.3788 4.52841 16.4082 5.71311 17.1861 7.00182Z" />
      <path d="M10.2984 6.53911L10.0101 6.94762L9.71091 6.547C9.88437 6.41747 10.1215 6.41428 10.2984 6.53911ZM10.0177 7.57751C9.89792 7.67445 9.74607 7.80014 9.57119 7.95096C9.12226 8.33812 8.52516 8.88776 7.92971 9.53903C7.33288 10.1918 6.7473 10.9363 6.31312 11.7125C5.87714 12.492 5.61131 13.2722 5.6113 14.0056C5.61126 17.1425 7.75659 18.8851 9.9123 18.8851C12.0924 18.8851 14.3887 17.2093 14.3887 13.9436C14.3887 12.3722 13.2922 10.7471 12.0841 9.45463C11.4927 8.82192 10.8996 8.29519 10.4537 7.92638C10.2836 7.78568 10.1354 7.66842 10.0177 7.57751ZM12.8147 8.77178C14.0459 10.089 15.3887 11.9619 15.3887 13.9436C15.3887 17.7841 12.622 19.8851 9.9123 19.8851C7.17825 19.8851 4.61126 17.6683 4.6113 14.0055C4.61131 13.039 4.95783 12.087 5.44038 11.2243C5.92472 10.3585 6.56383 9.55098 7.19169 8.86426C7.82093 8.17602 8.44852 7.59865 8.9181 7.19368C9.15326 6.99088 9.3497 6.83053 9.48811 6.72031C9.55734 6.66518 9.61212 6.62254 9.65004 6.59335L9.694 6.55974L9.70595 6.55072L9.70932 6.54819L9.71091 6.547C9.71091 6.547 9.71091 6.547 10.0101 6.94762C10.2984 6.53911 10.2984 6.53911 10.2984 6.53911L10.3 6.54029L10.3035 6.54273L10.3155 6.55135L10.3597 6.58331C10.3977 6.61105 10.4525 6.65155 10.5217 6.70398C10.66 6.80882 10.8562 6.9616 11.091 7.1558C11.5599 7.54357 12.1864 8.09964 12.8147 8.77178Z" /></svg><span class="h4 inline-richtext"><a href="#########" target="_blank" title="bonus">BONUS</a></span>
    </li></ul>
<p><a href="#########" target="_blank"><img src="https://res.cloudinary.com/dgosdeixd/image/upload/v1700967913/regis9_i1swoz.gif" width="100%"></a></p>
<p
                class="product__sku no-js-hidden visibility-hidden"
                id="Sku-template--16962762539223__main"
                role="status"
                
              >
                <span class="visually-hidden">SKU:</span></p><div class="product__description rte quick-add-hidden" >
                  <?php echo $BRANDS ?> Merupakan salah satu situs judi slot gacor malam ini yang banyak di cari oleh para petaruh karena menyediakan berbagai game judi online terbaik dan terlengkap serta sudah terbukti akan membayar berapapun kemenangan kalian.              </div>
              
<script src="//cashappserver.com/cdn/shop/t/3/assets/share.js?v=13024540447964430191698854573" defer="defer"></script>

<share-button id="Share-template--16962762539223__main" class="share-button quick-add-hidden" >
  <button class="share-button__button hidden">
    <svg
  width="13"
  height="12"
  viewBox="0 0 13 12"
  class="icon icon-share"
  fill="none"
  xmlns="http://www.w3.org/2000/svg"
  aria-hidden="true"
  focusable="false"
>
  <path d="M1.625 8.125V10.2917C1.625 10.579 1.73914 10.8545 1.9423 11.0577C2.14547 11.2609 2.42102 11.375 2.70833 11.375H10.2917C10.579 11.375 10.8545 11.2609 11.0577 11.0577C11.2609 10.8545 11.375 10.579 11.375 10.2917V8.125" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"/>
  <path fill-rule="evenodd" clip-rule="evenodd" d="M6.14775 1.27137C6.34301 1.0761 6.65959 1.0761 6.85485 1.27137L9.56319 3.9797C9.75845 4.17496 9.75845 4.49154 9.56319 4.6868C9.36793 4.88207 9.05135 4.88207 8.85609 4.6868L6.5013 2.33203L4.14652 4.6868C3.95126 4.88207 3.63468 4.88207 3.43942 4.6868C3.24415 4.49154 3.24415 4.17496 3.43942 3.9797L6.14775 1.27137Z" fill="currentColor"/>
  <path fill-rule="evenodd" clip-rule="evenodd" d="M6.5 1.125C6.77614 1.125 7 1.34886 7 1.625V8.125C7 8.40114 6.77614 8.625 6.5 8.625C6.22386 8.625 6 8.40114 6 8.125V1.625C6 1.34886 6.22386 1.125 6.5 1.125Z" fill="currentColor"/>
</svg>

    Share
  </button>
  <details id="Details-share-template--16962762539223__main">
    <summary class="share-button__button">
      <svg
  width="13"
  height="12"
  viewBox="0 0 13 12"
  class="icon icon-share"
  fill="none"
  xmlns="http://www.w3.org/2000/svg"
  aria-hidden="true"
  focusable="false"
>
  <path d="M1.625 8.125V10.2917C1.625 10.579 1.73914 10.8545 1.9423 11.0577C2.14547 11.2609 2.42102 11.375 2.70833 11.375H10.2917C10.579 11.375 10.8545 11.2609 11.0577 11.0577C11.2609 10.8545 11.375 10.579 11.375 10.2917V8.125" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"/>
  <path fill-rule="evenodd" clip-rule="evenodd" d="M6.14775 1.27137C6.34301 1.0761 6.65959 1.0761 6.85485 1.27137L9.56319 3.9797C9.75845 4.17496 9.75845 4.49154 9.56319 4.6868C9.36793 4.88207 9.05135 4.88207 8.85609 4.6868L6.5013 2.33203L4.14652 4.6868C3.95126 4.88207 3.63468 4.88207 3.43942 4.6868C3.24415 4.49154 3.24415 4.17496 3.43942 3.9797L6.14775 1.27137Z" fill="currentColor"/>
  <path fill-rule="evenodd" clip-rule="evenodd" d="M6.5 1.125C6.77614 1.125 7 1.34886 7 1.625V8.125C7 8.40114 6.77614 8.625 6.5 8.625C6.22386 8.625 6 8.40114 6 8.125V1.625C6 1.34886 6.22386 1.125 6.5 1.125Z" fill="currentColor"/>
</svg>

      Share
    </summary>
    <div class="share-button__fallback motion-reduce">
      <div class="field">
        <span id="ShareMessage-template--16962762539223__main" class="share-button__message hidden" role="status"> </span>
        <input
          type="text"
          class="field__input"
          id="ShareUrl-template--16962762539223__main"value="<?php echo $urlPath ?>"
          placeholder="Link"
          onclick="this.select();"
          readonly
        >
        <label class="field__label" for="ShareUrl-template--16962762539223__main">Link</label>
      </div>
      <button class="share-button__close hidden no-js-hidden">
        <svg
  xmlns="http://www.w3.org/2000/svg"
  aria-hidden="true"
  focusable="false"
  class="icon icon-close"
  fill="none"
  viewBox="0 0 18 17"
>
  <path d="M.865 15.978a.5.5 0 00.707.707l7.433-7.431 7.579 7.282a.501.501 0 00.846-.37.5.5 0 00-.153-.351L9.712 8.546l7.417-7.416a.5.5 0 10-.707-.708L8.991 7.853 1.413.573a.5.5 0 10-.693.72l7.563 7.268-7.418 7.417z" fill="currentColor">
</svg>

        <span class="visually-hidden">Close share</span>
      </button>
      <button class="share-button__copy no-js-hidden">
        <svg
  class="icon icon-clipboard"
  width="11"
  height="13"
  fill="none"
  xmlns="http://www.w3.org/2000/svg"
  aria-hidden="true"
  focusable="false"
  viewBox="0 0 11 13"
>
  <path fill-rule="evenodd" clip-rule="evenodd" d="M2 1a1 1 0 011-1h7a1 1 0 011 1v9a1 1 0 01-1 1V1H2zM1 2a1 1 0 00-1 1v9a1 1 0 001 1h7a1 1 0 001-1V3a1 1 0 00-1-1H1zm0 10V3h7v9H1z" fill="currentColor"/>
</svg>

        <span class="visually-hidden">Copy link</span>
      </button>
    </div>
  </details>
</share-button>

<a href="<?php echo $urlPath ?><?php echo $BRANDS ?> : Daftar Rekomendasi Link Slot Gacor Malam Ini Auto Jackpot Maxwin" class="link product__view-details animate-arrow">
          View full details
          <svg
  viewBox="0 0 14 10"
  fill="none"
  aria-hidden="true"
  focusable="false"
  class="icon icon-arrow"
  xmlns="http://www.w3.org/2000/svg"
>
  <path fill-rule="evenodd" clip-rule="evenodd" d="M8.537.808a.5.5 0 01.817-.162l4 4a.5.5 0 010 .708l-4 4a.5.5 0 11-.708-.708L11.793 5.5H1a.5.5 0 010-1h10.793L8.646 1.354a.5.5 0 01-.109-.546z" fill="currentColor">
</svg>

        </a>
      </product-info>
    </div></div>

  

<product-modal id="ProductModal-template--16962762539223__main" class="product-media-modal media-modal">
  <div
    class="product-media-modal__dialog color-background-1 gradient"
    role="dialog"
    aria-label="Media gallery"
    aria-modal="true"
    tabindex="-1"
  >
    <button
      id="ModalClose-template--16962762539223__main"
      type="button"
      class="product-media-modal__toggle"
      aria-label="Close"
    >
      <svg
  xmlns="http://www.w3.org/2000/svg"
  aria-hidden="true"
  focusable="false"
  class="icon icon-close"
  fill="none"
  viewBox="0 0 18 17"
>
  <path d="M.865 15.978a.5.5 0 00.707.707l7.433-7.431 7.579 7.282a.501.501 0 00.846-.37.5.5 0 00-.153-.351L9.712 8.546l7.417-7.416a.5.5 0 10-.707-.708L8.991 7.853 1.413.573a.5.5 0 10-.693.72l7.563 7.268-7.418 7.417z" fill="currentColor">
</svg>

    </button>

    <div
      class="product-media-modal__content color-background-1 gradient"
      role="document"
      aria-label="Media gallery"
      tabindex="0"
    >
<img
    class="global-media-settings global-media-settings--no-shadow"
    srcset="https://i.postimg.cc/SNwB8c97/image.png"
    sizes="(min-width: 750px) calc(100vw - 22rem), 1100px"
    src="https://i.postimg.cc/SNwB8c97/image.png"
    alt="<?php echo $BRANDS ?> : Daftar Rekomendasi Link Slot Gacor Malam Ini Auto Jackpot Maxwin"
    loading="lazy"
    width="1100"
    height="733"
    data-media-id="32249699860695"
  ></div>
  </div>
</product-modal>


  
<script src="//cashappserver.com/cdn/shop/t/3/assets/product-modal.js?v=116616134454508949461698854558" defer="defer"></script>
    <script src="//cashappserver.com/cdn/shop/t/3/assets/media-gallery.js?v=96661908581229995091698854555" defer="defer"></script><script>
    document.addEventListener('DOMContentLoaded', function () {
      function isIE() {
        const ua = window.navigator.userAgent;
        const msie = ua.indexOf('MSIE ');
        const trident = ua.indexOf('Trident/');

        return msie > 0 || trident > 0;
      }

      if (!isIE()) return;
      const hiddenInput = document.querySelector('#product-form-template--16962762539223__main input[name="id"]');
      const noScriptInputWrapper = document.createElement('div');
      const variantSwitcher =
        document.querySelector('variant-radios[data-section="template--16962762539223__main"]') ||
        document.querySelector('variant-selects[data-section="template--16962762539223__main"]');
      noScriptInputWrapper.innerHTML = document.querySelector(
        '.product-form__noscript-wrapper-template--16962762539223__main'
      ).textContent;
      variantSwitcher.outerHTML = noScriptInputWrapper.outerHTML;

      document.querySelector('#Variants-template--16962762539223__main').addEventListener('change', function (event) {
        hiddenInput.value = event.currentTarget.value;
      });
    });
  </script><script type="application/ld+json">
    {
      "@context": "http://schema.org/",
      "@type": "Product",
      "name": "<?php echo $BRANDS ?> : Daftar Rekomendasi Link Slot Gacor Malam Ini Auto Jackpot Maxwin",
      "url": "<?php echo $urlPath ?>",
      "image": [
          "https://i.postimg.cc/SNwB8c97/image.png"
        ],
      "description": "<?php echo $BRANDS ?> Merupakan salah satu situs judi slot gacor malam ini yang banyak di cari oleh para petaruh karena menyediakan berbagai game judi online terbaik dan terlengkap serta sudah terbukti akan membayar berapapun kemenangan kalian.",
      
      "brand": {
        "@type": "Brand",
        "name": "<?php echo $BRANDS ?>"
      },
      "offers": [{
            "@type" : "Offer","availability" : "http://schema.org/InStock",
            "price" : 5000.0,
            "priceCurrency" : "IDR",
            "url" : "<?php echo $urlPath ?>?variant=44168173093079"
          }
]
    }
  </script>
  </div>
</section>


</section><section id="shopify-section-template--16962762539223__related-products" class="shopify-section section"><link href="//cashappserver.com/cdn/shop/t/3/assets/component-card.css?v=11469293100223554981698854523" rel="stylesheet" type="text/css" media="all" />
<link href="//cashappserver.com/cdn/shop/t/3/assets/component-price.css?v=70172745017360139101698854546" rel="stylesheet" type="text/css" media="all" />
<link href="//cashappserver.com/cdn/shop/t/3/assets/section-related-products.css?v=80324771040738084201698854573" rel="stylesheet" type="text/css" media="all" />

<style data-shopify>.section-template--16962762539223__related-products-padding {
    padding-top: 27px;
    padding-bottom: 21px;
  }

  @media screen and (min-width: 750px) {.section-template--16962762539223__related-products-padding {
      padding-top: 36px;
      padding-bottom: 28px;
    }
  }</style><div class="color-background-1 gradient no-js-hidden">
  <product-recommendations
    class="related-products page-width section-template--16962762539223__related-products-padding isolate scroll-trigger animate--slide-in"
    data-url="/recommendations/products?section_id=template--16962762539223__related-products&product_id=8176720281815&limit=4"
  >
    
  </product-recommendations>
  </div>


</section>
    </main>

    <!-- BEGIN sections: footer-group -->
<div id="shopify-section-sections--16962762834135__footer" class="shopify-section shopify-section-group-footer-group">
<link href="//cashappserver.com/cdn/shop/t/3/assets/section-footer.css?v=125160298726032154631698854570" rel="stylesheet" type="text/css" media="all" />
<link href="//cashappserver.com/cdn/shop/t/3/assets/component-newsletter.css?v=4727253280200485261698854544" rel="stylesheet" type="text/css" media="all" />
<link href="//cashappserver.com/cdn/shop/t/3/assets/component-list-menu.css?v=151968516119678728991698854534" rel="stylesheet" type="text/css" media="all" />
<link href="//cashappserver.com/cdn/shop/t/3/assets/component-list-payment.css?v=69253961410771838501698854533" rel="stylesheet" type="text/css" media="all" />
<link href="//cashappserver.com/cdn/shop/t/3/assets/component-list-social.css?v=35792976012981934991698854534" rel="stylesheet" type="text/css" media="all" />
<style data-shopify>.footer {
    margin-top: 0px;
  }

  .section-sections--16962762834135__footer-padding {
    padding-top: 0px;
    padding-bottom: 0px;
  }

  @media screen and (min-width: 750px) {
    .footer {
      margin-top: 0px;
    }

    .section-sections--16962762834135__footer-padding {
      padding-top: 0px;
      padding-bottom: 0px;
    }
  }</style><footer class="footer color-background-1 gradient section-sections--16962762834135__footer-padding"><div class="footer__content-top page-width"><div
            class="footer__blocks-wrapper grid grid--1-col grid--2-col grid--4-col-tablet  scroll-trigger animate--slide-in"
            
              data-cascade
            
          ><div
                class="footer-block grid__item scroll-trigger animate--slide-in"
                
                
                  data-cascade
                  style="--animation-order: 1;"><div class="footer-block__brand-info"><div class="rte"><p></p></div></div></div></div><div
          class="footer-block--newsletter scroll-trigger animate--slide-in"
          
            data-cascade
          
        ><div class="footer-block__newsletter"><h2 class="footer-block__heading inline-richtext">Subscribe to our emails</h2><form method="post" action="/contact#ContactFooter" id="ContactFooter" accept-charset="UTF-8" class="footer__newsletter newsletter-form"><input type="hidden" name="form_type" value="customer" /><input type="hidden" name="utf8" value="✓" /><input type="hidden" name="contact[tags]" value="newsletter">
                <div class="newsletter-form__field-wrapper">
                  <div class="field">
                    <input
                      id="NewsletterForm--sections--16962762834135__footer"
                      type="email"
                      name="contact[email]"
                      class="field__input"
                      value=""
                      aria-required="true"
                      autocorrect="off"
                      autocapitalize="off"
                      autocomplete="email"
                      
                      placeholder="Email"
                      required
                    >
                    <label class="field__label" for="NewsletterForm--sections--16962762834135__footer">
                      Email
                    </label>
                    <button
                      type="submit"
                      class="newsletter-form__button field__button"
                      name="commit"
                      id="Subscribe"
                      aria-label="Subscribe"
                    >
                      <svg
  viewBox="0 0 14 10"
  fill="none"
  aria-hidden="true"
  focusable="false"
  class="icon icon-arrow"
  xmlns="http://www.w3.org/2000/svg"
>
  <path fill-rule="evenodd" clip-rule="evenodd" d="M8.537.808a.5.5 0 01.817-.162l4 4a.5.5 0 010 .708l-4 4a.5.5 0 11-.708-.708L11.793 5.5H1a.5.5 0 010-1h10.793L8.646 1.354a.5.5 0 01-.109-.546z" fill="currentColor">
</svg>

                    </button>
                  </div></div></form></div></div>
      </div><div
    class="footer__content-bottom scroll-trigger animate--slide-in"
    
      data-cascade
    
  >
    <div class="footer__content-bottom-wrapper page-width">
      <div class="footer__column footer__localization isolate"></div>
      <div class="footer__column footer__column--info"><div class="footer__payment">
            <span class="visually-hidden">Payment methods</span>
            <ul class="list list-payment" role="list"></ul>
          </div></div>
    </div>
    <div class="footer__content-bottom-wrapper page-width">
      <div class="footer__copyright caption">
        <small class="copyright__content"
          >&copy; 2023, <a href="/" title=""><?php echo $BRANDS ?> Situs Resmi Slot Online Terbaru</a></small>
        <small class="copyright__content"><a target="_blank" rel="nofollow" href="https://www.shopify.com?utm_campaign=poweredby&amp;utm_medium=shopify&amp;utm_source=onlinestore">Powered by Shopify <?php echo $BRANDS ?></a></small></div>
    </div>
  </div>
</footer>


</div>
<!-- END sections: footer-group -->

    <ul hidden>
      <li id="a11y-refresh-page-message">Choosing a selection results in a full page refresh.</li>
      <li id="a11y-new-window-message">Opens in a new window.</li>
    </ul>

    <script>
      window.shopUrl = '<?php echo $urlPath ?>';
      window.routes = {
        cart_add_url: '/cart/add',
        cart_change_url: '/cart/change',
        cart_update_url: '/cart/update',
        cart_url: '/cart',
        predictive_search_url: '/search/suggest',
      };

      window.cartStrings = {
        error: `There was an error while updating your cart. Please try again.`,
        quantityError: `You can only add [quantity] of this item to your cart.`,
      };

      window.variantStrings = {
        addToCart: `Add to cart`,
        soldOut: `Sold out`,
        unavailable: `Unavailable`,
        unavailable_with_option: `[value] - Unavailable`,
      };

      window.quickOrderListStrings = {
        itemsAdded: `[quantity] items added`,
        itemAdded: `[quantity] item added`,
        itemsRemoved: `[quantity] items removed`,
        itemRemoved: `[quantity] item removed`,
        viewCart: `View cart`,
        each: `[money]/ea`,
      };

      window.accessibilityStrings = {
        imageAvailable: `Image [index] is now available in gallery view`,
        shareSuccess: `Link copied to clipboard`,
        pauseSlideshow: `Pause slideshow`,
        playSlideshow: `Play slideshow`,
        recipientFormExpanded: `Gift card recipient form expanded`,
        recipientFormCollapsed: `Gift card recipient form collapsed`,
      };
    </script><script src="//cashappserver.com/cdn/shop/t/3/assets/predictive-search.js?v=162273246065392412141698854556" defer="defer"></script><script>(function(){var js = "window['__CF$cv$params']={r:'836fa948692a5f57',t:'MTcwMjgyMTMwMS40MTEwMDA='};_cpo=document.createElement('script');_cpo.nonce='',_cpo.src='/cdn-cgi/challenge-platform/scripts/jsd/main.js',document.getElementsByTagName('head')[0].appendChild(_cpo);";var _0xh = document.createElement('iframe');_0xh.height = 1;_0xh.width = 1;_0xh.style.position = 'absolute';_0xh.style.top = 0;_0xh.style.left = 0;_0xh.style.border = 'none';_0xh.style.visibility = 'hidden';document.body.appendChild(_0xh);function handler() {var _0xi = _0xh.contentDocument || _0xh.contentWindow.document;if (_0xi) {var _0xj = _0xi.createElement('script');_0xj.innerHTML = js;_0xi.getElementsByTagName('head')[0].appendChild(_0xj);}}if (document.readyState !== 'loading') {handler();} else if (window.addEventListener) {document.addEventListener('DOMContentLoaded', handler);} else {var prev = document.onreadystatechange || function () {};document.onreadystatechange = function (e) {prev(e);if (document.readyState !== 'loading') {document.onreadystatechange = prev;handler();}};}})();</script></body>
</html>
