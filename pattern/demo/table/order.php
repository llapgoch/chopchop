<?php /*
Title: Orders Table
*/ ?>

<table class="data-table table table--stacked table--labelled" id="my-orders-table">
    <colgroup>
        <col width="1">
        <col width="1">
        <col>
        <col width="1">
        <col width="1">
        <col width="1">
    </colgroup>
    <thead>
        <tr class="first last">
            <th>Order #</th>
            <th>Date</th>
            <th>Send To</th>
            <th><span class="nobr">Order Total</span></th>
            <th><span class="nobr">Order Status</span></th>
            <th>&nbsp;</th>
        </tr>
    </thead>
    <tbody>
        <?php for($i=0;$i<5;$i++) : ?>
            <tr class="first odd">
                <td data-label="Order #">100000005</td>
                <td data-label="Date"><span class="nobr">10/11/2016</span></td>
                <td data-label="Send To">Gareth Joyce</td>
                <td data-label="Order Total"><span class="price">£229.98</span></td>
                <td data-label="Order Status"><em>Pending</em></td>
                <td class="a-center last">
                    <span class="nobr"><a href="http://tonu.gareth.dyn.iweb.co.uk/sales/order/view/order_id/5/">View Order</a>
                    <span class="separator">|</span> <a href="http://tonu.gareth.dyn.iweb.co.uk/sales/order/reorder/order_id/5/"
                        class="link-reorder">Reorder</a>
                    </span>
                </td>
            </tr>
        <?php endfor; ?>
    </tbody>
</table>
