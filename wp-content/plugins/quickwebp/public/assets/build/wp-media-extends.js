(()=>{"use strict";new class{constructor(){this.phpData=quickwebp_wp_media_extends,this.phpText=this.phpData.l10n,this.events()}events(){document.addEventListener("DOMContentLoaded",(()=>{wp.media.view.Modal.prototype.on("open",(()=>this.addTabButton())),wp.media.view.MediaFrame.Post.prototype.events.paste=e=>this.addImageFromClipboard(e)})),window.addEventListener("click",(e=>this.contentOutFocusMode(e)))}addTabButton(){let e=document.querySelectorAll(".media-modal .media-modal-content .media-frame-router .media-router"),t=document.querySelectorAll(".media-modal .media-modal-content .media-frame-content");if(0!=e.length&&0!=t.length)for(let a=0;a<e.length;a++){const n=e[a],i=t[a];if(i&&!n.querySelector("#menu-item-quickwebp-tab-media-paste")){let e=this.getButtonContent();n.insertAdjacentHTML("beforeend",e),n.addEventListener("click",(e=>this.tabsContainerClicked(e,n,i)))}}}tabsContainerClicked(e,t,a){let n=e.target.closest("#menu-item-quickwebp-tab-media-paste"),i=e.target.closest(".media-menu-item"),o=a.querySelector(".quickwebp-tab");if(n){if(n.classList.contains("active"))return;let e=this.getTabContent();a.insertAdjacentHTML("beforeend",e),a.addEventListener("click",(e=>this.contentInFocusMode(e))),a.setAttribute("aria-labelledby","quickwebp-tab-media-paste")}if(i){if(i.classList.contains("active"))return;this.highlightSelectedBtn(i,t),o&&o.remove()}}contentInFocusMode(e){let t=e.target.closest(".quickwebp-tab__paste");t&&t.classList.add("focus")}contentOutFocusMode(e){if(!e.target.closest(".quickwebp-tab__paste")){let e=document.querySelector(".media-modal .media-modal-content .media-frame-content .quickwebp-tab__paste");e&&e.classList.remove("focus")}}highlightSelectedBtn(e,t){t.querySelectorAll("button.media-menu-item").forEach((e=>{e.classList.remove("active"),e.setAttribute("aria-selected",!1),e.setAttribute("tabindex","-1")})),e.classList.add("active"),e.setAttribute("aria-selected",!0),e.removeAttribute("tabindex")}getButtonContent(){let e=this.phpData.tmpl_button_media_paste,t=["{{button_text}}"],a=[this.phpText.button_text];for(let n=0;n<t.length;n++){const i=new RegExp(t[n],"g");e=e.replace(i,a[n])}return e}getTabContent(){let e=this.phpData.tmpl_tab_media_paste,t=["{{click_paste}}"],a=[this.phpText.click_paste];for(let n=0;n<t.length;n++){const i=new RegExp(t[n],"g");e=e.replace(i,a[n])}return e}addImageFromClipboard(e){let t=e.target.tagName;if(["INPUT","TEXTAREA"].includes(t)&&!e.target.classList.contains("quickwebp-tab__paste__input"))return;let a=e.originalEvent.clipboardData.items,n=null;for(let e=0;e<a.length;e++)0===a[e].type.indexOf("image")&&(n=a[e].getAsFile());if(null===n)return;let i=prompt(this.phpText.prompt_text);if(null!==i){i=""===i?"image":i,n=new File([n],`${i}.png`,{type:"image/png",lastModified:Date.now()});var o=new FormData;o.append("async-upload",n),o.append("name",n.name),o.append("action","upload-attachment"),o.append("_wpnonce",this.phpData.nonce),fetch("/wp-admin/async-upload.php",{method:"POST",body:o,redirect:"follow"}).then((e=>e.json())).then((e=>{if(e.success){let t=e.data.id;wp.media.frame.content.get().collection?wp.media.frame.content.get().collection.props.set({ignore:+new Date}):wp.media.frame.library.props.set({ignore:+new Date}),this.phpData.is_upload_page||wp.media.frame.state().get("selection").add(wp.media.attachment(t))}})).catch((e=>{console.log("ERROR: ",e)}))}}}})();