(()=>{"use strict";new class{constructor(){this.events()}events(){document.addEventListener("click",(t=>this.checkClickedElement(t)))}checkClickedElement(t){let e=t.target.closest("button.quickwebp-single-optimization-btn"),n=t.target.closest("button.quickwebp-undo-single-optimization-btn");e?this.startOptimization(t,e):n&&this.undoOptimization(t,n)}startOptimization(t,e){t.preventDefault(),this.showSpinner(e);let n=new FormData;n.append("action","single_optimizition_ajax"),n.append("nonce",QUICKWEBP_ADMIN_ATTACHMENT.nonce),n.append("attachment_id",t.target.dataset.attachmentId);let i={method:"POST",body:n,redirect:"follow"};fetch(QUICKWEBP_ADMIN_ATTACHMENT.ajaxUrl,i).then((t=>t.json())).then((t=>{if(this.hideSpinner(e),t.success){let n=e.closest("td");n.innerHTML="",n.innerHTML=t.data}else{let n=e.nextElementSibling;n.classList.contains("quickwebp-single-optimization-msg")&&(n.innerHTML=t.data,n.classList.add("show"))}})).catch((t=>{console.log("ERROR: ",t),this.hideSpinner(e)}))}undoOptimization(t,e){t.preventDefault(),this.showSpinner(e);let n=e.nextElementSibling;n.innerHTML="";let i=new FormData;i.append("action","undo_single_optimizition_ajax"),i.append("nonce",QUICKWEBP_ADMIN_ATTACHMENT.nonce),i.append("attachment_id",t.target.dataset.attachmentId);let s={method:"POST",body:i,redirect:"follow"};fetch(QUICKWEBP_ADMIN_ATTACHMENT.ajaxUrl,s).then((t=>t.json())).then((t=>{if(this.hideSpinner(e),t.success){let n=e.closest("td");n.innerHTML="",n.innerHTML=t.data}else n.classList.contains("quickwebp-single-optimization-msg")&&(n.innerHTML=t.data,n.classList.add("show"))})).catch((t=>{console.log("ERROR: ",t),this.hideSpinner(e)}))}showSpinner(t){t.classList.add("show-spinner")}hideSpinner(t){t.classList.remove("show-spinner")}}})();