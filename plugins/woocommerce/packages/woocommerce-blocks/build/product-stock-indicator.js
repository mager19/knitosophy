(window.webpackWcBlocksJsonp=window.webpackWcBlocksJsonp||[]).push([[34],{327:function(o,c,t){"use strict";t.r(c),t.d(c,"Block",(function(){return l}));var e=t(0),n=t(1),s=t(4),r=t.n(s),a=t(23),i=t(100),b=t(87),k=t(42);t(355);const l=o=>{const{className:c}=o,{parentClassName:t}=Object(a.useInnerBlockLayoutContext)(),{product:s}=Object(a.useProductDataContext)(),k=Object(i.a)(o),l=Object(b.a)(o);if(!s.id||!s.is_purchasable)return null;const u=!!s.is_in_stock,d=s.low_stock_remaining,p=s.is_on_backorder;return Object(e.createElement)("div",{className:r()(c,k.className,"wc-block-components-product-stock-indicator",{[t+"__stock-indicator"]:t,"wc-block-components-product-stock-indicator--in-stock":u,"wc-block-components-product-stock-indicator--out-of-stock":!u,"wc-block-components-product-stock-indicator--low-stock":!!d,"wc-block-components-product-stock-indicator--available-on-backorder":!!p}),style:{...k.style,...l.style}},d?(o=>Object(n.sprintf)(
/* translators: %d stock amount (number of items in stock for product) */
Object(n.__)("%d left in stock","woocommerce"),o))(d):((o,c)=>c?Object(n.__)("Available on backorder","woocommerce"):o?Object(n.__)("In Stock","woocommerce"):Object(n.__)("Out of Stock","woocommerce"))(u,p))};c.default=Object(k.withProductDataContext)(l)},355:function(o,c){}}]);