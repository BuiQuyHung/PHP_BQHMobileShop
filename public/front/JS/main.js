// function addCart(MaSach) {
//     $.ajax({
//         type: "GET",
//         url: "cart/add",
//         data: { MaSach: MaSach },
//         success: function (response) {
//             $(".cart-count").text(response["count"]);
//         },
//         error: function (response) {},
//     });
// }
function removeCart(rowId) {
    $.ajax({
        type: "GET",
        url: "cart/delete",
        data: { rowId: rowId },
        success: function (response) {
            var cart_tbody = $(".box_list_cart tbody");
            var cart_existItem = cart_tbody.find(
                "tr" + "[data-rowId='" + rowId + "']"
            );
            cart_existItem.remove();
            alert("Delete succesfull");
            console.log;
            response;
        },
        error: function (response) {
            alert("delete failed");
            console.log;
            response;
        },
    });
}

function destroyCart(rowId) {
    $.ajax({
        type: "GET",
        url: "cart/destroy",
        data: {},
        success: function (response) {
            var cart_tbody = $(".box_list_cart tbody");
            cart_tbody.children().remove();

            $(".subtotal span").text("0");
            $(".cart-total span").text("0");
            alert("Delete succesfull");
            console.log;
            response;
        },
        error: function (response) {
            alert("delete failed");
            console.log;
            response;
        },
    });
}

function updateCart(rowId, qty) {
    $.ajax({
        type: "GET",
        url: "cart/update",
        data: { rowId: rowId, qty: qty },
        success: function (response) {
            var cart_tbody = $(".box_list_cart tbody");

            var cart_existItem = cart_tbody.find(
                "tr" + "[data-rowId='" + rowId + "']"
            );

            if (qty === 0) {
                // Nếu số lượng là 0, xóa sản phẩm khỏi giỏ hàng
                cart_existItem.remove();
            } else {
                // Cập nhật số lượng và giá tiền
                cart_existItem.find(".quantity-input").val(qty);
                cart_existItem
                    .find(".total-price")
                    .text("$" + (response["cart"].price * qty).toFixed(2));
            }

            // Cập nhật tổng giá tiền và số lượng sản phẩm trong giỏ hàng
            $(".subtotal span").text("$" + response["subtotal"]);
            $(".cart-total span").text("$" + response["total"]);
        },
        error: function (response) {
            alert("Update failed");
        },
    });
}

$(document).ready(function () {
    $(".quantity-btn").on("click", function () {
        var $button = $(this);
        var rowId = $button.data("rowId");
        var change = $button.hasClass("increase-btn") ? 1 : -1; // Tăng hoặc giảm số lượng
        updateQuantity(rowId, change);
    });
});

function updateQuantity(rowId, change) {
    var currentQty = parseInt($("[data-rowId='" + rowId + "']").val());
    var newQty = currentQty + change;
    if (newQty >= 0) {
        $("[data-rowId='" + rowId + "']").val(newQty);
        updateCart(rowId, newQty);
    }
}
