<?php /*
Title: Cart Table
*/ ?>
<table id="shopping-cart-table" class="data-table cart-table table table--striped table--stacked table--labelled">
    <thead>
        <tr class="first last">
            <th rowspan="1"><span class="nobr">Product Name</span></th>
            <th rowspan="1" class="a-center">Qty</th>
            <th class="a-center" colspan="1">Subtotal</th>
        </tr>
    </thead>
    <tfoot>
        <tr class="first last">
            <td colspan="50" class="last">
                <button type="button" title="Continue Shopping" class="button btn-continue" onclick="setLocation('http://tonu.gareth.dyn.iweb.co.uk/our-products/the-slender-blend.html')"><span><span>Continue Shopping</span></span></button>
                <button type="submit" name="update_cart_action" value="update_qty" title="Update Shopping Bag" class="button btn-update"><span><span>Update Shopping Bag</span></span></button>
                <button type="submit" name="update_cart_action" value="empty_cart" title="Empty Shopping Bag" class="button btn-empty" id="empty_cart_button"><span><span>Empty Shopping Bag</span></span></button>

            </td>
        </tr>
    </tfoot>
    <tbody>
        <?php for($i=0;$i<5;$i++) : ?>
        <tr class="first last odd">
            <td class="full-width">
                <div class="flag flag--gutter">
                    <div>
                        <a href="http://tonu.gareth.dyn.iweb.co.uk/the-slender-blend.html" title="The Slender Blend-Medium-Banana" class="product-image"><img src="http://tonu.gareth.dyn.iweb.co.uk/media/catalog/product/cache/1/thumbnail/75x/9df78eab33525d08d6e5fb8d27136e95/f/f/fff000.gif" width="100" height="100" alt="The Slender Blend-Medium-Banana"></a>
                    </div>
                    <div>
                        <h4 class="product-name">
                            <a href="http://tonu.gareth.dyn.iweb.co.uk/the-slender-blend.html">The Slender Blend-Medium-Banana</a>
                        </h4>
                        <span class="cart-price">
                            <span class="price">£99.99</span>
                        </span>
                    </div>
                </div>
                <!-- inclusive price starts here -->
            </td>
            <td class="a-center">
                <div class="quantity">
                    <label>Quantity</label>
                    <div class="quantity__amount">
                        <a href="#" class="btn btn--icon btn--square">
                            <svg class="icon">
                                <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="/build/img/icons/symbol/svg/sprite.symbol.svg#custom--minus"></use>
                            </svg>
                            <span class="u-visually-hidden">Decrease quantity</span>
                        </a>
                        <input name="cart[8][qty]" data-cart-item-id="tsb-Medium-Banana" value="1" size="4" title="Qty" class="input-text qty" maxlength="12">
                        <a href="#" class="btn btn--icon btn--square">
                            <svg class="icon">
                                <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="/build/img/icons/symbol/svg/sprite.symbol.svg#custom--plus"></use>
                            </svg>
                            <span class="u-visually-hidden">Increase quantity</span>
                        </a>
                    </div>
                </div>
                <a href="http://tonu.gareth.dyn.iweb.co.uk/checkout/cart/delete/id/8/form_key/Erwhl9e1poCFD983/uenc/aHR0cDovL3RvbnUuZ2FyZXRoLmR5bi5pd2ViLmNvLnVrL2NoZWNrb3V0L2NhcnQv/"
                    title="Delete" class="btn-remove btn-remove2">Delete</a>
            </td>
            <!--Sub total starts here -->
            <td class="a-right last" data-label="Sub total">
                <span class="cart-price">
                    <span class="price">£99.99</span>
                </span>
            </td>
        </tr>
        <?php endfor; ?>
    </tbody>
</table>
