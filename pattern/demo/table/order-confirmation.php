<?php /*
Title: Order Confirmation Table
*/ ?>

<table class="data-table table table--stacked table--labelled" id="my-orders-table">
    <colgroup>
        <col>
        <col width="25%">
        <col width="1">
        <col width="1">
        <col width="1">
    </colgroup>
    <thead>
        <tr class="first last">
            <th>
                Product Name
            </th>
            <th>
                SKU
            </th>
            <th class="a-right">
                Price
            </th>
            <th class="a-center">
                Qty
            </th>
            <th class="a-right">
                Subtotal
            </th>
        </tr>
    </thead>
    <tfoot>
        <tr class="subtotal first">
            <td colspan="4" class="a-right">
                Subtotal
            </td>
            <td class="last a-right" data-label="Sub total">
                <span class="price">£219.98</span>
            </td>
        </tr>
        <tr class="shipping">
            <td colspan="4" class="a-right">
                Delivery
            </td>
            <td class="last a-right" data-label="Delivery">
                <span class="price">£10.00</span>
            </td>
        </tr>
        <tr class="grand_total last">
            <td colspan="4" class="a-right">
                <strong>Grand Total</strong>
            </td>
            <td class="last a-right" data-label="Grand total">
                <strong><span class="price">£229.98</span></strong>
            </td>
        </tr>
    </tfoot>
    <tbody class="odd">
        <?php for($i=0;$i<5;$i++) : ?>
            <tr class="border first" id="order-item-row-5">
                <td class="full-width">
                    <h3 class="product-name">
                        The Slender Blend-Small-Banana
                    </h3>
                </td>
                <td class="full-width" data-label="Product code">
                    tsb-Small-Banana
                </td>
                <td class="a-right" data-label="Price">
                    <span class="price-excl-tax"><span class="cart-price"><span class="price">£109.99</span></span>
                    </span><br>
                </td>
                <td class="a-right" data-label="Quantity">
                    <span class="nobr">Ordered: <strong>1</strong><br></span>
                </td>
                <td class="a-right las full-width" data-label="Sub total">
                    <span class="price-excl-tax"><span class="cart-price"><span class="price">£109.99</span></span>
                    </span><br>
                </td>
                <!--
            <th class="a-right"><span class="price">£109.99</span></th>
                -->
            </tr>
        <?php endfor; ?>
    </tbody>
</table>
