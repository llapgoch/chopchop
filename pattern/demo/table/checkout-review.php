<?php /*
Title: Checkout Review Table
*/ ?>
<table class="data-table table table--stacked table--labelled" id="checkout-review-table">
    <thead>
        <tr class="first last">
            <th rowspan="1">
                Product Name
            </th>
            <th colspan="1" class="a-center">
                Price
            </th>
            <th rowspan="1" class="a-center u-text-right">
                Qty
            </th>
        </tr>
    </thead>
    <tbody>
        <?php for($i=0;$i<5;$i++) : ?>
        <tr class="first odd">
            <td class="full-width">
                <h5 class="product-name">The Slender Blend-Small-Banana</h5>
            </td>
            <td class="a-right">
                <span class="cart-price"><span class="price">£109.99</span></span>
            </td>
            <td class="a-center u-text-right" data-label="Quantity">
                1
            </td>
        </tr>
        <?php endfor; ?>
    </tbody>
</table>

<div class="grid">
    <div class="g-col-md-6">
        
    </div>
    <div class="g-col-md-6">
        <table>
            <tfoot>
                <tr class="first">
                    <td style="" class="a-right u-text-right" colspan="3">
                        Subtotal
                    </td>
                    <td style="" class="a-right u-text-right last">
                        <span class="price">£219.98</span>
                    </td>
                </tr>
                <tr>
                    <td style="" class="a-right u-text-right" colspan="3">
                        Delivery (Flat Rate - Fixed)
                    </td>
                    <td style="" class="a-right u-text-right last">
                        <span class="price">£10.00</span>
                    </td>
                </tr>
                <tr class="last">
                    <td style="" class="a-right u-text-right" colspan="3">
                        <strong>Grand Total</strong>
                    </td>
                    <td style="" class="a-right u-text-right last">
                        <strong><span class="price">£229.98</span></strong>
                    </td>
                </tr>
            </tfoot>
        </table>
    </div>
</div>