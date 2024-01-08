var paymentSign = "";
var e = '';
function otherPayment() {
    var e = document.getElementById("choices-payment-currency").value;
    (paymentSign = e),
        Array.from(document.getElementsByClassName("product-line-price")).forEach(function (e) {
            (isUpdate = e.value.slice(1)), (e.value = paymentSign + isUpdate);
        }),
        recalculateCart();
}

function isData() {

    var e = document.getElementsByClassName("plus"),
        t = document.getElementsByClassName("minus");
    e &&
        Array.from(e).forEach(function (n) {
            n.onclick = function (e) {
                var t;
                parseInt(n.previousElementSibling.value) < 100000 &&
                    (e.target.previousElementSibling.value++,
                    (e = n.parentElement.parentElement.previousElementSibling.querySelector(".product-price").value),
                    (tva = n.parentElement.parentElement.nextElementSibling.querySelector(".product_tva").value),
                    (t = n.parentElement.parentElement.nextElementSibling.nextElementSibling.querySelector(".product-line-price")),

                    updateQuantity(n.parentElement.querySelector(".product-quantity").value, e, t,tva));

            };
        }),
        t &&
            Array.from(t).forEach(function (n) {
                n.onclick = function (e) {
                    var t;
                    1 < parseInt(n.nextElementSibling.value) &&
                        (e.target.nextElementSibling.value--,
                        (e = n.parentElement.parentElement.previousElementSibling.querySelector(".product-price").value),
                        (tva = n.parentElement.parentElement.nextElementSibling.querySelector(".product_tva").value),
                        (t = n.parentElement.parentElement.nextElementSibling.nextElementSibling.querySelector(".product-line-price")),

                        updateQuantity(n.parentElement.querySelector(".product-quantity").value, e, t,tva));

                };
            });
}



var count = 1;
function new_link() {
    count++;
    var e = document.createElement("tr"),
        t =
            ((e.id = count),
            (e.className = "product"),
            '<tr><th scope="row" class="product-id">' +
                count +
                '</th> <td> <input name="reference[]" class="form-control bg-light border-0 reference" type="text"  id="reference-' + count +'" </td> <td class="text-start"> <div class="mb-2"><input name="product_name[]" class="form-control bg-light border-0 product_name" type="text"  id="productName-' +
                count +
                '" placeholder="Nom de produit" autocomplete="off"> </div><textarea name="product_description[]" class="form-control bg-light border-0" id="productDetails-' +
                count +
                '" rows="2" placeholder="Details de produit "></textarea></div></td><td><input name="product_price[]" class="form-control bg-light border-0 product-price" type="number" id="productRate-' +
                count +
                '" step="0.01" placeholder="0.00"></td><td><div class="input-step"><button type="button" class="minus">–</button><input name="product_quantity[]" type="number" class="product-quantity" id="product-qty-' +
                count +
                '" value="0" readonly><button type="button" class="plus">+</button></div></td>   <td> <select name="product_tva[]" onchange="change_tva()" class="form-select product_tva" data-choices data-choices-search-false id="choices-payment-currency" >  <option value="0">0%</option><option value="9">9%</option><option value="19">19%</option></select></td><td class="text-end"><div><input type="text" class="form-control bg-light border-0 product-line-price" id="productPrice-' +
                count +
                '" value="0.00" placeholder="0.00" readonly/></div></td><td class="product-removal text-center"><a class="btn btn-sm btn-soft-danger"><i class="bi bi-trash-fill fs-17 align-middle"></i></a></td></tr>'),


                t = ((e.innerHTML = document.getElementById("newForm").innerHTML + t), document.getElementById("newlink").appendChild(e), document.querySelectorAll("[data-trigger]"));
    Array.from(t).forEach(function (e) {
        new Choices(e, { placeholderValue: "This is a placeholder set in the config", searchPlaceholderValue: "This is a search placeholder" });
    }),
        isData(),
        remove(),
        amountKeyup(),
        resetRow();
}
remove();

var taxRate = 1,
    shippingRate = 65,
    discountRate = 0.15;
function remove() {
    Array.from(document.querySelectorAll(".product-removal a")).forEach(function (e) {
        e.addEventListener("click", function (e) {
            removeItem(e), resetRow();
        });
    });
}
function resetRow() {
    Array.from(document.getElementById("newlink").querySelectorAll("tr")).forEach(function (e, t) {
        t += 1;
        e.querySelector(".product-id").innerHTML = t;
    });
}
function recalculateCart() {

    total_tva = 0;
    timbre = 0 ;

    var t = 0,

        e =
            (Array.from(document.getElementsByClassName("product")).forEach(function (e) {
                Array.from(e.getElementsByClassName("product-line-price")).forEach(function (e) {

                    e.value && (t += parseFloat(e.value));
                    var tva = e.parentElement.parentElement.previousElementSibling.querySelector(".product_tva").value
                    if(tva > 0)
                    {
                        total_tva += ( parseFloat(e.value) * parseFloat(tva) * 0.01) ;
                    }


                });
            }),
            t * taxRate),
        n = t * discountRate,
        o = 0 < t ? shippingRate : 0,
        a = t ;

        total_tva = total_tva +  document.getElementById("cart-commission").value * 0.19 ;
        total = t + total_tva

        if(document.getElementById("cart-commission").value != 0)
        {
            total = t + total_tva + parseFloat(document.getElementById("cart-commission").value );
        }

        if(document.getElementById("cart-warranty_retention_ht").value != 0)
        {
            total = total + parseFloat(document.getElementById("cart-warranty_retention_ht").value );
        }

        cart_tatal_a_payer  = total ;




        if(document.getElementById("paiement_mode").value== 'espece')
        {
            timbre = parseFloat(total) * 0.01 ;
            cart_tatal_a_payer = total+ timbre ;
            document.getElementById("cart-paiement-mode").value =  timbre.toFixed(2) + paymentSign
           // document.getElementById("cart-tatal-a-payer").value =  cart_tatal_a_payer.toFixed(2) + paymentSign
        }

        if(document.getElementById("cart-warranty_retention_ttc").value != 0)
        {
            cart_tatal_a_payer = cart_tatal_a_payer + parseFloat(document.getElementById("cart-warranty_retention_ttc").value );

        }
        document.getElementById("cart-tatal-a-payer").value =  cart_tatal_a_payer.toFixed(2) ;

        (document.getElementById("cart-subtotal").value =  t.toFixed(2)+ paymentSign) ,

        (document.getElementById("cart-tva").value =   total_tva.toFixed(2)+ paymentSign) ,
        (document.getElementById("cart-total").value =   total.toFixed(2)+ paymentSign) ;

}

function amountKeyup() {


    Array.from(document.getElementsByClassName("product-price")).forEach(function (n) {

        n.addEventListener("keyup", function (e) {
            var t = n.parentElement.nextElementSibling.nextElementSibling.nextElementSibling.querySelector(".product-line-price");
            var tva = n.parentElement.nextElementSibling.nextElementSibling.querySelector(".product_tva").value;

            updateQuantity(e.target.value, n.parentElement.nextElementSibling.querySelector(".product-quantity").value, t, tva);
        });
    });
}
function updateQuantity(e, t, n , tva) {

    e = (e = e * t);
    /*if(tva)
    {
        e =( e + (e * tva*0.01)) ;
    }*/
    e = e.toFixed(2);
    (n.value = + e + paymentSign ), recalculateCart();
}

function change_tva()
{

    Array.from(document.getElementsByClassName("product_tva")).forEach(function (n) {
            var t = n.parentElement.nextElementSibling.querySelector(".product-line-price");
            var tva =n.value;
            updateQuantity(n.parentElement.previousElementSibling.previousElementSibling.querySelector(".product-price").value, n.parentElement.previousElementSibling.querySelector(".product-quantity").value, t, tva);

    });
    recalculateCart() ;


}

function change_paiement_mode()
{
    if(document.getElementById("paiement_mode").value== 'espece')
    {
        document.getElementById("element-paiement-mode").style.display = "table-row" ;
        document.getElementById("element-tatal-a-payer").style.display = "table-row" ;
        recalculateCart() ;
    }
    else
    {


        document.getElementById("element-paiement-mode").style.display = "none" ;
        document.getElementById("element-tatal-a-payer").style.display = "none" ;
        document.getElementById("cart-paiement-mode").value = 0 ;
        document.getElementById("cart-tatal-a-payer").value =  0;
        recalculateCart() ;
    }
}

function change_commission()
{
    recalculateCart() ;
}

function change_warranty_retention_ht()
{
    if(parseFloat(document.getElementById("cart-warranty_retention_ht").value ) > 0 )
    {
        document.getElementById("cart-warranty_retention_ht").value =  parseFloat(document.getElementById("cart-warranty_retention_ht").value )* -1 ;
    }

    recalculateCart() ;
}

function change_warranty_retention_ttc()
{
    if(parseFloat(document.getElementById("cart-warranty_retention_ttc").value ) > 0 )
    {
        document.getElementById("cart-warranty_retention_ttc").value =  parseFloat(document.getElementById("cart-warranty_retention_ttc").value )* -1 ;
    }


    recalculateCart() ;
}


function removeItem(e) {
    e.target.closest("tr").remove(), recalculateCart();
}
amountKeyup();
var genericExamples = document.querySelectorAll("[data-trigger]");
function billingFunction() {
    document.getElementById("same").checked
        ? ((document.getElementById("shippingName").value = document.getElementById("billingName").value),
          (document.getElementById("shippingAddress").value = document.getElementById("billingAddress").value),
          (document.getElementById("shippingPhoneno").value = document.getElementById("billingPhoneno").value),
          (document.getElementById("shippingTaxno").value = document.getElementById("billingTaxno").value))
        : ((document.getElementById("shippingName").value = ""), (document.getElementById("shippingAddress").value = ""), (document.getElementById("shippingPhoneno").value = ""), (document.getElementById("shippingTaxno").value = ""));
}



Array.from(genericExamples).forEach(function (e) {
    new Cleave(e, { delimiters: ["(", ")", "-"], blocks: [0, 3, 3, 4] });
});
let viewobj;
var value,
    invoices_list = localStorage.getItem("invoices-list"),
    options = localStorage.getItem("option"),
    invoice_no = localStorage.getItem("invoice_no"),
    invoices = JSON.parse(invoices_list);

document.addEventListener("DOMContentLoaded", function () {

    var T = document.getElementById("invoice_form");
    document.getElementsByClassName("needs-validation");
    T.addEventListener("submit", function (e) {
        //e.preventDefault();
        var t = document.getElementById("invoicenoInput").value.slice(4),
            e = document.getElementById("companyEmail").value,
            n = document.getElementById("date-field").value,
            o = document.getElementById("totalamountInput").value.slice(1),
            a = document.getElementById("choices-payment-status").value,
            l = document.getElementById("billingName").value,
            i = document.getElementById("billingAddress").value,
            c = document.getElementById("billingPhoneno").value.replace(/[^0-9]/g, ""),
            d = document.getElementById("billingTaxno").value,
            r = document.getElementById("shippingName").value,
            u = document.getElementById("shippingAddress").value,
            m = document.getElementById("shippingPhoneno").value.replace(/[^0-9]/g, ""),
            s = document.getElementById("shippingTaxno").value,
            p = document.getElementById("choices-payment-type").value,
            v = document.getElementById("cardholderName").value,
            g = document.getElementById("cardNumber").value.replace(/[^0-9]/g, ""),
            y = document.getElementById("amountTotalPay").value.slice(1),
            E = document.getElementById("registrationNumber").value.replace(/[^0-9]/g, ""),
            b = document.getElementById("companyEmail").value,
            I = document.getElementById("companyWebsite").value,
            h = document.getElementById("compnayContactno").value.replace(/[^0-9]/g, ""),
            _ = document.getElementById("companyAddress").value,
            B = document.getElementById("companyaddpostalcode").value,
            f = document.getElementById("cart-subtotal").value.slice(1),
            x = document.getElementById("cart-tax").value.slice(1),
            w = document.getElementById("cart-discount").value.slice(1),
            S = document.getElementById("cart-shipping").value.slice(1),
            j = document.getElementById("cart-total").value.slice(1),
            q = document.getElementById("exampleFormControlTextarea1").value,
            A = document.getElementsByClassName("product"),
            N = 1,
            C = [];
        Array.from(A).forEach((e) => {
            var t = e.querySelector("#productName-" + N).value,
                n = e.querySelector("#productDetails-" + N).value,
                o = parseInt(e.querySelector("#productRate-" + N).value),
                a = parseInt(e.querySelector("#product-qty-" + N).value),
                e = e.querySelector("#productPrice-" + N).value.split("$"),
                t = { product_name: t, product_details: n, rates: o, quantity: a, amount: parseInt(e[1]) };
            C.push(t), N++;
        }),
            !1 === T.checkValidity()
                ? T.classList.add("was-validated")
                : ("edit-invoice" == options && invoice_no == t
                      ? ((objIndex = invoices.findIndex((e) => e.invoice_no == t)),
                        (invoices[objIndex].invoice_no = t),
                        (invoices[objIndex].customer = l),
                        (invoices[objIndex].img = ""),
                        (invoices[objIndex].email = e),
                        (invoices[objIndex].date = n),
                        (invoices[objIndex].invoice_amount = o),
                        (invoices[objIndex].status = a),
                        (invoices[objIndex].billing_address = { full_name: l, address: i, phone: c, tax: d }),
                        (invoices[objIndex].shipping_address = { full_name: r, address: u, phone: m, tax: s }),
                        (invoices[objIndex].payment_details = { payment_method: p, card_holder_name: v, card_number: g, total_amount: y }),
                        (invoices[objIndex].company_details = { legal_registration_no: E, email: b, website: I, contact_no: h, address: _, zip_code: B }),
                        (invoices[objIndex].order_summary = { sub_total: f, estimated_tex: x, discount: w, shipping_charge: S, total_amount: j }),
                        (invoices[objIndex].prducts = C),
                        (invoices[objIndex].notes = q),
                        localStorage.removeItem("invoices-list"),
                        localStorage.removeItem("option"),
                        localStorage.removeItem("invoice_no"),
                        localStorage.setItem("invoices-list", JSON.stringify(invoices)))
                      : localStorage.setItem(
                            "new_data_object",
                            JSON.stringify({
                                invoice_no: t,
                                customer: l,
                                img: "",
                                email: e,
                                date: n,
                                invoice_amount: o,
                                status: a,
                                billing_address: { full_name: l, address: i, phone: c, tax: d },
                                shipping_address: { full_name: r, address: u, phone: m, tax: s },
                                payment_details: { payment_method: p, card_holder_name: v, card_number: g, total_amount: y },
                                company_details: { legal_registration_no: E, email: b, website: I, contact_no: h, address: _, zip_code: B },
                                order_summary: { sub_total: f, estimated_tex: x, discount: w, shipping_charge: S, total_amount: j },
                                prducts: C,
                                notes: q,
                            })
                        ),
                  (window.location.href = "apps-invoices-list.html"));
    });

});
