    const BASE_IMAGE_URL = "/storage/";

    fetch('/admin/product/products')
        .then((response) => {
            if (!response.ok) {
                throw new Error('Network response was not ok');
            }
            return response.json();
        })
        .then((productListAllData) => {
            function renderNoResultMessage(containerId) {
                document.getElementById(containerId).innerHTML = `
                    <div class="py-4 text-center">
                        <lord-icon src="https://cdn.lordicon.com/msoeawqm.json" trigger="loop" colors="primary:#405189,secondary:#0ab39c" style="width:72px;height:72px"></lord-icon>
                        <h5 class="mt-4">Sorry! No Result Found</h5>
                    </div>`;
            }
            if (productListAllData.length > 0) {
                new gridjs.Grid({
                    columns: [
                        {
                            name: "#",
                            width: "40px",
                            sort: { enabled: false },
                            data: function (e) {
                                return gridjs.html(
                                    '<div class="form-check checkbox-product-list">\t\t\t\t\t<input class="form-check-input" type="checkbox" value="' +
                                        e.id +
                                        '" id="checkbox-' +
                                        e.id +
                                        '">\t\t\t\t\t<label class="form-check-label" for="checkbox-' +
                                        e.id +
                                        '"></label>\t\t\t\t  </div>'
                                );
                            },
                        },
                        {
                            name: "Product",
                            width: "360px",
                            data: function (e) {
                                const imageUrl = e.main_image_path
                                    ? BASE_IMAGE_URL + e.main_image_path
                                    : BASE_IMAGE_URL + "default.png"; // Fallback to a default image
                                return gridjs.html(
                                    '<div class="d-flex align-items-center"><div class="flex-shrink-0 me-3"><div class="avatar-sm bg-light rounded p-1"><img src="' +
                                        imageUrl +
                                        '" alt="' +
                                        e.name +
                                        '" class="img-fluid d-block"></div></div><div class="flex-grow-1"><h5 class="fs-14 mb-1"><a href="#" class="text-body">' +
                                        e.name +
                                        '</a></h5><p class="text-muted mb-0">Category : <span class="fw-medium">' +
                                        e.category_name +
                                        "</span></p></div></div>"
                                );
                            },
                        },
                        { name: "Price", width: "94px", formatter: (e) => `$${e}` },
                        {
                            name: "Discount",
                            width: "101px",
                            formatter: function (e) {
                                return gridjs.html("-" + e + "%");
                            },
                        },
                        { name: "SKU", width: "100px" },
                        {
                            name: "Status",
                            width: "105px",
                            formatter: function (e) {
                                const statusLabel = e === 0 ? "Active" : "Inactive";
                                const statusClass = e === 0 ? "bg-success" : "bg-danger";
                                return gridjs.html(
                                    '<span class="badge ' +
                                        statusClass +
                                        ' text-white fs-12 fw-medium">' +
                                        statusLabel +
                                        "</span>"
                                );
                            },
                        },
                        {
                            name: "Description",
                            width: "220px",
                            data: function (e) {
                                return gridjs.html(e.description);
                            },
                        },
                        {
                            name: "Action",
                            width: "80px",
                            sort: { enabled: false },
                            formatter: function (e, t) {
                                t = new DOMParser()
                                    .parseFromString(t._cells[0].data.props.content, "text/html")
                                    .body.querySelector(".checkbox-product-list .form-check-input").value;
                                return gridjs.html(
                                    '<div class="dropdown"><button class="btn btn-soft-secondary btn-sm dropdown" type="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="ri-more-fill"></i></button><ul class="dropdown-menu dropdown-menu-end"><li><a class="dropdown-item" href="#"><i class="ri-eye-fill align-bottom me-2 text-muted"></i> View</a></li><li><a class="dropdown-item edit-list" data-edit-id=' +
                                        t +
                                        ' href="#"><i class="ri-pencil-fill align-bottom me-2 text-muted"></i> Edit</a></li><li class="dropdown-divider"></li><li><a class="dropdown-item remove-list" href="#" data-id=' +
                                        t +
                                        ' data-bs-toggle="modal" data-bs-target="#removeItemModal"><i class="ri-delete-bin-fill align-bottom me-2 text-muted"></i> Delete</a></li></ul></div>'
                                );
                            },
                        },
                    ],
                    className: { th: "text-muted" },
                    pagination: { limit: 10 },
                    sort: true,
                    data: productListAllData,
                }).render(document.getElementById("table-product-list-all"));
            } else {
                renderNoResultMessage("table-product-list-all");
            }
            const productListPublishedData = productListAllData.filter(
                (product) => product.status === 0
            );
            if(productListPublishedData.length > 0) {
                new gridjs.Grid({
                    columns: [
                        {
                            name: "#",
                            width: "40px",
                            sort: { enabled: false },
                            data: function (e) {
                                return gridjs.html(
                                    '<div class="form-check checkbox-product-list">\t\t\t\t\t<input class="form-check-input" type="checkbox" value="' +
                                        e.id +
                                        '" id="checkbox-' +
                                        e.id +
                                        '">\t\t\t\t\t<label class="form-check-label" for="checkbox-' +
                                        e.id +
                                        '"></label>\t\t\t\t  </div>'
                                );
                            },
                        },
                        {
                            name: "Product",
                            width: "360px",
                            data: function (e) {
                                const imageUrl = e.main_image_path
                                    ? BASE_IMAGE_URL + e.main_image_path
                                    : BASE_IMAGE_URL + "default.png"; // Fallback to a default image
                                return gridjs.html(
                                    '<div class="d-flex align-items-center"><div class="flex-shrink-0 me-3"><div class="avatar-sm bg-light rounded p-1"><img src="' +
                                        imageUrl +
                                        '" alt="' +
                                        e.name +
                                        '" class="img-fluid d-block"></div></div><div class="flex-grow-1"><h5 class="fs-14 mb-1"><a href="#" class="text-body">' +
                                        e.name +
                                        '</a></h5><p class="text-muted mb-0">Category : <span class="fw-medium">' +
                                        e.category_name +
                                        "</span></p></div></div>"
                                );
                            },
                        },
                        { name: "Price", width: "94px", formatter: (e) => `$${e}` },
                        {
                            name: "Discount",
                            width: "101px",
                            formatter: function (e) {
                                return gridjs.html("-" + e + "%");
                            },
                        },
                        { name: "SKU", width: "100px" },
                        {
                            name: "Status",
                            width: "105px",
                            formatter: function (e) {
                                const statusLabel = e === 0 ? "Active" : "Inactive";
                                const statusClass = e === 0 ? "bg-success" : "bg-danger";
                                return gridjs.html(
                                    '<span class="badge ' +
                                        statusClass +
                                        ' text-white fs-12 fw-medium">' +
                                        statusLabel +
                                        "</span>"
                                );
                            },
                        },
                        {
                            name: "Description",
                            width: "220px",
                            data: function (e) {
                                return gridjs.html(e.description);
                            },
                        },
                        {
                            name: "Action",
                            width: "80px",
                            sort: { enabled: false },
                            formatter: function (e, t) {
                                t = new DOMParser()
                                    .parseFromString(t._cells[0].data.props.content, "text/html")
                                    .body.querySelector(".checkbox-product-list .form-check-input").value;
                                return gridjs.html(
                                    '<div class="dropdown"><button class="btn btn-soft-secondary btn-sm dropdown" type="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="ri-more-fill"></i></button><ul class="dropdown-menu dropdown-menu-end"><li><a class="dropdown-item" href="#"><i class="ri-eye-fill align-bottom me-2 text-muted"></i> View</a></li><li><a class="dropdown-item edit-list" data-edit-id=' +
                                        t +
                                        ' href="#"><i class="ri-pencil-fill align-bottom me-2 text-muted"></i> Edit</a></li><li class="dropdown-divider"></li><li><a class="dropdown-item remove-list" href="#" data-id=' +
                                        t +
                                        ' data-bs-toggle="modal" data-bs-target="#removeItemModal"><i class="ri-delete-bin-fill align-bottom me-2 text-muted"></i> Delete</a></li></ul></div>'
                                );
                            },
                        },
                    ],
                    className: { th: "text-muted" },
                    pagination: { limit: 10 },
                    sort: true,
                    data: productListPublishedData,
                }).render(document.getElementById("table-product-list-published"));
            } else {
                renderNoResultMessage("table-product-list-published");
            }
            const productListUnpublishedData = productListAllData.filter(
                (product) => product.status === 1
            );
            if (productListUnpublishedData.length > 0) {
                new gridjs.Grid({
                    columns: [
                        {
                            name: "#",
                            width: "40px",
                            sort: { enabled: false },
                            data: function (e) {
                                return gridjs.html(
                                    '<div class="form-check checkbox-product-list">\t\t\t\t\t<input class="form-check-input" type="checkbox" value="' +
                                        e.id +
                                        '" id="checkbox-' +
                                        e.id +
                                        '">\t\t\t\t\t<label class="form-check-label" for="checkbox-' +
                                        e.id +
                                        '"></label>\t\t\t\t  </div>'
                                );
                            },
                        },
                        {
                            name: "Product",
                            width: "360px",
                            data: function (e) {
                                const imageUrl = e.main_image_path
                                    ? BASE_IMAGE_URL + e.main_image_path
                                    : BASE_IMAGE_URL + "default.png"; // Fallback to a default image
                                return gridjs.html(
                                    '<div class="d-flex align-items-center"><div class="flex-shrink-0 me-3"><div class="avatar-sm bg-light rounded p-1"><img src="' +
                                        imageUrl +
                                        '" alt="' +
                                        e.name +
                                        '" class="img-fluid d-block"></div></div><div class="flex-grow-1"><h5 class="fs-14 mb-1"><a href="#" class="text-body">' +
                                        e.name +
                                        '</a></h5><p class="text-muted mb-0">Category : <span class="fw-medium">' +
                                        e.category_name +
                                        "</span></p></div></div>"
                                );
                            },
                        },
                        { name: "Price", width: "94px", formatter: (e) => `$${e}` },
                        {
                            name: "Discount",
                            width: "101px",
                            formatter: function (e) {
                                return gridjs.html("-" + e + "%");
                            },
                        },
                        { name: "SKU", width: "100px" },
                        {
                            name: "Status",
                            width: "105px",
                            formatter: function (e) {
                                const statusLabel = e === 0 ? "Active" : "Inactive";
                                const statusClass = e === 0 ? "bg-success" : "bg-danger";
                                return gridjs.html(
                                    '<span class="badge ' +
                                        statusClass +
                                        ' text-white fs-12 fw-medium">' +
                                        statusLabel +
                                        "</span>"
                                );
                            },
                        },
                        {
                            name: "Description",
                            width: "220px",
                            data: function (e) {
                                return gridjs.html(e.description);
                            },
                        },
                        {
                            name: "Action",
                            width: "80px",
                            sort: { enabled: false },
                            formatter: function (e, t) {
                                t = new DOMParser()
                                    .parseFromString(t._cells[0].data.props.content, "text/html")
                                    .body.querySelector(".checkbox-product-list .form-check-input").value;
                                return gridjs.html(
                                    '<div class="dropdown"><button class="btn btn-soft-secondary btn-sm dropdown" type="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="ri-more-fill"></i></button><ul class="dropdown-menu dropdown-menu-end"><li><a class="dropdown-item" href="#"><i class="ri-eye-fill align-bottom me-2 text-muted"></i> View</a></li><li><a class="dropdown-item edit-list" data-edit-id=' +
                                        t +
                                        ' href="#"><i class="ri-pencil-fill align-bottom me-2 text-muted"></i> Edit</a></li><li class="dropdown-divider"></li><li><a class="dropdown-item remove-list" href="#" data-id=' +
                                        t +
                                        ' data-bs-toggle="modal" data-bs-target="#removeItemModal"><i class="ri-delete-bin-fill align-bottom me-2 text-muted"></i> Delete</a></li></ul></div>'
                                );
                            },
                        },
                    ],
                    className: { th: "text-muted" },
                    pagination: { limit: 10 },
                    sort: true,
                    data: productListUnpublishedData,
                }).render(document.getElementById("table-product-list-unpublished"));
            } else {
                renderNoResultMessage("table-product-list-unpublished");
            }
        })
        .catch((error) => {
            console.error("Error fetching product data:", error);
        });
        
searchProductList = document.getElementById("searchProductList"),
slider =
    (searchProductList.addEventListener("keyup", function () {
        var e = searchProductList.value.toLowerCase();
        function t(e, t) {
            return e.filter(function (e) {
                return -1 !== e.product.title.toLowerCase().indexOf(t.toLowerCase());
            });
        }
        var i = t(productListAllData, e),
            e = t(productListPublishedData, e);
        productListAll.updateConfig({ data: i }).forceRender(), productListPublished.updateConfig({ data: e }).forceRender(), checkRemoveItem();
    }),
    Array.from(document.querySelectorAll(".filter-list a")).forEach(function (r) {
        r.addEventListener("click", function () {
            var e = document.querySelector(".filter-list a.active"),
                t = (e && e.classList.remove("active"), r.classList.add("active"), r.querySelector(".listname").innerHTML),
                e = productListAllData.filter((e) => e.product.category === t),
                i = productListPublishedData.filter((e) => e.product.category === t);
            productListAll.updateConfig({ data: e }).forceRender(), productListPublished.updateConfig({ data: i }).forceRender(), checkRemoveItem();
        });
    }),
    document.getElementById("product-price-range")),
minCostInput = (noUiSlider.create(slider, { start: [0, 2e3], step: 10, margin: 20, connect: !0, behaviour: "tap-drag", range: { min: 0, max: 2e3 }, format: wNumb({ decimals: 0, prefix: "$ " }) }), document.getElementById("minCost")),
maxCostInput = document.getElementById("maxCost"),
filterDataAll = "",
filterDataPublished = "",
filterChoicesInput =
    (slider.noUiSlider.on("update", function (e, t) {
        var i = productListAllData,
            r = productListPublishedData,
            s = (t ? (maxCostInput.value = e[t]) : (minCostInput.value = e[t]), maxCostInput.value.substr(2)),
            a = minCostInput.value.substr(2);
        (filterDataAll = i.filter((e) => parseFloat(e.price) >= a && parseFloat(e.price) <= s)),
            (filterDataPublished = r.filter((e) => parseFloat(e.price) >= a && parseFloat(e.price) <= s)),
            productListAll.updateConfig({ data: filterDataAll }).forceRender(),
            productListPublished.updateConfig({ data: filterDataPublished }).forceRender(),
            checkRemoveItem();
    }),
    minCostInput.addEventListener("change", function () {
        slider.noUiSlider.set([null, this.value]);
    }),
    maxCostInput.addEventListener("change", function () {
        slider.noUiSlider.set([null, this.value]);
    }),
    new Choices(document.getElementById("filter-choices-input"), { addItems: !0, delimiter: ",", editItems: !0, maxItemCount: 10, removeItems: !0, removeItemButton: !0 })),
searchBrandsOptions =
    (Array.from(document.querySelectorAll(".filter-accordion .accordion-item")).forEach(function (r) {
        var s = r.querySelectorAll(".filter-check .form-check .form-check-input:checked").length;
        (r.querySelector(".filter-badge").innerHTML = s),
            Array.from(r.querySelectorAll(".form-check .form-check-input")).forEach(function (t) {
                var i = t.value;
                t.checked && filterChoicesInput.setValue([i]),
                    t.addEventListener("click", function (e) {
                        t.checked
                            ? (s++, (r.querySelector(".filter-badge").innerHTML = s), (r.querySelector(".filter-badge").style.display = 0 < s ? "block" : "none"), filterChoicesInput.setValue([i]))
                            : filterChoicesInput.removeActiveItemsByValue(i);
                    }),
                    filterChoicesInput.passedElement.element.addEventListener(
                        "removeItem",
                        function (e) {
                            e.detail.value == i && ((t.checked = !1), s--, (r.querySelector(".filter-badge").innerHTML = s), (r.querySelector(".filter-badge").style.display = 0 < s ? "block" : "none"));
                        },
                        !1
                    ),
                    document.getElementById("clearall").addEventListener("click", function () {
                        (t.checked = !1),
                            filterChoicesInput.removeActiveItemsByValue(i),
                            (s = 0),
                            (r.querySelector(".filter-badge").innerHTML = s),
                            (r.querySelector(".filter-badge").style.display = 0 < s ? "block" : "none"),
                            productListAll.updateConfig({ data: productListAllData }).forceRender(),
                            productListPublished.updateConfig({ data: productListPublishedData }).forceRender();
                    });
            });
    }),
    document.getElementById("searchBrandsList")),
isSelected =
    (searchBrandsOptions.addEventListener("keyup", function () {
        var i = searchBrandsOptions.value.toLowerCase(),
            e = document.querySelectorAll("#flush-collapseBrands .form-check");
        Array.from(e).forEach(function (e) {
            var t = e.getElementsByClassName("form-check-label")[0].innerText.toLowerCase();
            e.style.display = t.includes(i) ? "block" : "none";
        });
    }),
    0);
function checkRemoveItem() {
var e = document.querySelectorAll('a[data-bs-toggle="tab"]');
Array.from(e).forEach(function (e) {
    e.addEventListener("show.bs.tab", function (e) {
        (isSelected = 0), (document.getElementById("selection-element").style.display = "none");
    });
}),
    setTimeout(function () {
        Array.from(document.querySelectorAll(".checkbox-product-list input")).forEach(function (e) {
            e.addEventListener("click", function (e) {
                1 == e.target.checked ? e.target.closest("tr").classList.add("gridjs-tr-selected") : e.target.closest("tr").classList.remove("gridjs-tr-selected");
                var t = document.querySelectorAll(".checkbox-product-list input:checked");
                (isSelected = t.length),
                    e.target.closest("tr").classList.contains("gridjs-tr-selected"),
                    (document.getElementById("select-content").innerHTML = isSelected),
                    (document.getElementById("selection-element").style.display = 0 < isSelected ? "block" : "none");
            });
        }),
            removeItems(),
            removeSingleItem();
    }, 100);
}
var checkboxes = document.querySelectorAll(".checkbox-wrapper-mail input");
function removeItems() {
document.getElementById("removeItemModal").toArray().addEventListener("show.bs.modal", function (e) {
    (isSelected = 0),
        document.getElementById("delete-product").addEventListener("click", function () {
            Array.from(document.querySelectorAll(".gridjs-table tr")).forEach(function (e) {
                var t,
                    i = "";
                function r(e, t) {
                    return e.filter(function (e) {
                        return e.id != t;
                    });
                }
                e.classList.contains("gridjs-tr-selected") &&
                    ((t = e.querySelector(".form-check-input").value), (i = r(productListAllData, t)), (t = r(productListPublishedData, t)), (productListAllData = i), (productListPublishedData = t), e.remove());
            }),
                document.getElementById("btn-close").click(),
                document.getElementById("selection-element") && (document.getElementById("selection-element").style.display = "none"),
                (checkboxes.checked = !1);
        });
});
}
function removeSingleItem() {
var s, i;
Array.from(document.querySelectorAll(".remove-list")).forEach(function (r) {
    r.addEventListener("click", function (e) {
        (s = r.getAttribute("data-id")),
            document.getElementById("delete-product").addEventListener("click", function () {
                function e(e, t) {
                    return e.filter(function (e) {
                        return e.id != t;
                    });
                }
                var t = e(productListAllData, s),
                    i = e(productListPublishedData, s);
                (productListAllData = t), (productListPublishedData = i), r.closest(".gridjs-tr").remove();
            });
    });
});
Array.from(document.querySelectorAll(".edit-list")).forEach(function (t) {
    t.addEventListener("click", function (e) {
        (i = t.getAttribute("data-edit-id")),
            (productListAllData = productListAllData.map(function (e) {
                return e.id == i && sessionStorage.setItem("editInputValue", JSON.stringify(e)), e;
            }));
    });
});
}
