<?php /*
Title: Data Table
*/ ?>

<div class="responsive-table">
    <table class="table table--striped">
        <thead>
            <tr>
                <th>Product</th>
                <th>Size</th>
                <th>Flavour</th>
                <th>Batch number</th>
                <th>Date of manufacture</th>
                <th>Best before end</th>
                <th>Informed‑sport certicate</th>
                <th>Protien testing certificate</th>
            </tr>
        </thead>
        <tbody>
            <?php for($i=0;$i<5;$i++) : ?>
                <tr>
                    <td data-label="Product">The Selender Blend</td>
                    <td data-label="Size">90 Capsules</td>
                    <td data-label="Flavour">Vanilla Ice Cream</td>
                    <td data-label="Batch number">123456789</td>
                    <td data-label="Date of manufacture">23/04/2016</td>
                    <td data-label="Best before end">23/04/2017</td>
                    <td data-label="Informed-sport certificate">
                        <a href="#" class="btn btn--view"><span>VIEW</span></a>
                    </td>
                    <td data-label="Protien testing certificate">
                        <a href="#" class="btn btn--view"><span>VIEW</span></a>
                    </td>
                </tr>
            <?php endfor; ?>
        </tbody>
    </table>
</div>
