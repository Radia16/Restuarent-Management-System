$(function () {
    function CheckItemExists(items, link_content) {
        if (link_content == "all_content") {
            items.forEach((item) => {
                item.parentElement.style.display = "block";
            });
        } else {
            items.forEach((item) => {
                if (item.classList.contains(`${link_content}`)) {
                    item.parentElement.style.display = "block";
                } else {
                    item.parentElement.style.display = "none";
                }
            });
        }
    }

    ///gallary filtering
    let AllItemContent = document.querySelectorAll(".item_img");
    let item_btns = document.querySelectorAll(".item-btn");
    item_btns.forEach((item_btn) => {
        item_btn.addEventListener("click", function (event) {
            let item = this.dataset.item;
            CheckItemExists(AllItemContent, `${item}_content`);
        });
    });
});

// function sum(a,b,callback){
//     let sum  = a+b;
//     return callback(sum);
// }

// sum(20,30,function(sum){
//     console.log(sum);

//     console.log('next job will do here ')
// })
