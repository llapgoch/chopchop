<?php /*
Title: Reviews Table
*/ ?>

<table class="data-table table table--stacked table--striped table--labelled" id="my-reviews-table">
    <colgroup>
        <col width="1">
        <col width="210">
        <col width="1">
        <col>
    </colgroup>
    <thead>
        <tr>
            <th>Date</th>
            <th>Product name</th>
            <th>Rating</th>
            <th>Review</th>
        </tr>
    </thead>
    <tbody>
        <tr class="first last odd">
            <td data-label="Date">
                <span class="nobr">09/11/2016</span>
            </td>
            <td class="full-width">
                <h4 class="product-name">
                    <a href="http://tonu.gareth.dyn.iweb.co.uk/catalog/product/view/id/2">The Slender Blend</a>
                </h4>
            </td>
            <td data-label="Rating">
                <div class="rating-box">
                    <div class="rating" style="width:20%;"></div>
                </div>
            </td>
            <td class="last" data-label="Review">
                <p class="u-ellipsis">This is a super great product, i'm more than ha...</p>
            </td>
        </tr>
    </tbody>
</table>
