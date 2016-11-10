<?php /*
Title: Checkout Review Table
*/ ?>
<table class="data-table table table--stacked table--labelled" id="checkout-review-table">
    <colgroup>
        <col>
        <col width="1">
        <col width="1">
        <col width="1">
    </colgroup>
    <thead>
        <tr class="first last">
            <th rowspan="1">
                Product Name
            </th>
            <th colspan="1" class="a-center">
                Price
            </th>
            <th rowspan="1" class="a-center">
                Qty
            </th>
            <th colspan="1" class="a-center">
                Subtotal
            </th>
        </tr>
    </thead>
    <tfoot>
        <tr class="first">
            <td style="" class="a-right" colspan="3">
                Subtotal
            </td>
            <td style="" class="a-right last">
                <span class="price">£219.98</span>
            </td>
        </tr>
        <tr>
            <td style="" class="a-right" colspan="3">
                Delivery (Flat Rate - Fixed)
            </td>
            <td style="" class="a-right last">
                <span class="price">£10.00</span>
            </td>
        </tr>
        <tr class="last">
            <td style="" class="a-right" colspan="3">
                <strong>Grand Total</strong>
            </td>
            <td style="" class="a-right last">
                <strong><span class="price">£229.98</span></strong>
            </td>
        </tr>
    </tfoot>
    <tbody>
        <?php for($i=0;$i<5;$i++) : ?>
        <tr class="first odd">
            <td data-label="Product name">
                <h3 class="product-name">
                    The Slender Blend-Small-Banana
                </h3>
            </td>
            <td class="a-right" data-label="Price">
                <span class="cart-price"><span class="price">£109.99</span></span>
            </td>
            <td class="a-center" data-label="Quantity">
                1
            </td>
            <!-- sub total starts here -->
            <td class="a-right last" data-label="Sub total">
                <span class="cart-price"><span class="price">£109.99</span></span>
            </td>
        </tr>
        <?php endfor; ?>
    </tbody>
</table>
