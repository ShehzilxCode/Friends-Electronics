(itemid = 13),
    ClassicEditor.create(document.querySelector("#ckeditor-classic"))
        .then(function (e) {
            e.ui.view.editable.element.style.height = "200px";
        })
        .catch(function (e) {
            console.error(e);
        });
// Dropzone configuration
var dropzonePreviewNode = document.querySelector("#dropzone-preview-list");
var previewTemplate = dropzonePreviewNode.parentNode.innerHTML;
dropzonePreviewNode.parentNode.removeChild(dropzonePreviewNode);

var dropzone = new Dropzone(".dropzone", {
    url: "https://httpbin.org/post",
    method: "post",
    previewTemplate: previewTemplate,
    previewsContainer: "#dropzone-preview",
    autoProcessQueue: false,
    acceptedFiles: "image/*",
});


!(function () {
    "use strict";
    var e = document.querySelectorAll(".needs-validation"),
        l = new Date().toUTCString().slice(5, 16);
    function p() {
        var e = 12 <= new Date().getHours() ? "PM" : "AM",
            t = 12 < new Date().getHours() ? new Date().getHours() % 12 : new Date().getHours(),
            o = new Date().getMinutes() < 10 ? "0" + new Date().getMinutes() : new Date().getMinutes();
        return t < 10 ? "0" + t + ":" + o + " " + e : t + ":" + o + " " + e;
    }
    setInterval(p, 1e3),
        document.querySelector("#product-image-input").addEventListener("change", function () {
            var e = document.querySelector("#product-img"),
                t = document.querySelector("#product-image-input").files[0],
                o = new FileReader();
            o.addEventListener(
                "load",
                function () {
                    e.src = o.result;
                },
                !1
            ),
                t && o.readAsDataURL(t);
        });
    var m = new Choices("#choices-category-input", { searchEnabled: !1 }),
        g = sessionStorage.getItem("editInputValue");
    g &&
        ((g = JSON.parse(g)),
        (document.getElementById("formAction").value = "edit"),
        (document.getElementById("product-id-input").value = g.id),
        (document.getElementById("product-img").src = g.product.img),
        (document.getElementById("product-title-input").value = g.product.title),
        (document.getElementById("stocks-input").value = g.stock),
        (document.getElementById("product-price-input").value = g.price),
        (document.getElementById("orders-input").value = g.orders),
        m.setChoiceByValue(g.product.category)),
        Array.prototype.slice.call(e).forEach(function (s) {
            s.addEventListener(
                "submit",
                function (e) {
                    var t, o, i, n, r, u, d, c, a;
                    if (s.checkValidity())
                        return (
                            e.preventDefault(),
                            (c = ++itemid),
                            (t = document.getElementById("product-title-input").value),
                            (o = m.getValue(!0)),
                            (i = document.getElementById("stocks-input").value),
                            (n = document.getElementById("orders-input").value),
                            (r = document.getElementById("product-price-input").value),
                            (u = document.getElementById("product-img").src),
                            "add" == (d = document.getElementById("formAction").value)
                                ? ((c =
                                      null != sessionStorage.getItem("inputValue")
                                          ? ((a = JSON.parse(sessionStorage.getItem("inputValue"))),
                                            { id: c + 1, product: { img: u, title: t, category: o }, stock: i, price: r, orders: n, rating: "--", published: { publishDate: l, publishTime: p() } })
                                          : ((a = []), { id: c, product: { img: u, title: t, category: o }, stock: i, price: r, orders: n, rating: "--", published: { publishDate: l, publishTime: p() } })),
                                  a.push(c),
                                  sessionStorage.setItem("inputValue", JSON.stringify(a)))
                                : "edit" == d
                                ? ((c = document.getElementById("product-id-input").value),
                                  sessionStorage.getItem("editInputValue") &&
                                      ((a = { id: parseInt(c), product: { img: u, title: t, category: o }, stock: i, price: r, orders: n, rating: g.rating, published: { publishDate: l, publishTime: p() } }),
                                      sessionStorage.setItem("editInputValue", JSON.stringify(a))))
                                : console.log("Form Action Not Found."),
                            window.location.replace("apps-ecommerce-products.html"),
                            !1
                        );
                    e.preventDefault(), e.stopPropagation(), s.classList.add("was-validated");
                },
                !1
            );
        });
})();
