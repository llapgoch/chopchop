<div class="grid g-gutter">
<?php
    $css_contents = file_get_contents('build/css/styles.css', true);
    $lines = explode("\n", $css_contents);
    $hasHeading = false;
    $previous_group = 'x';
    foreach($lines as $line) {

        if(substr(trim($line), 0, 7) == '.u-fill') {
            $bits = explode(" ", substr($line, 1));
            $class_ = str_replace(',','', $bits[0]);
            $bits = explode("-", $class_);
            $group = $bits[2];
            ?>
            <?php if($group != $previous_group && $group != 'white' && $group != 'black' && $group != 'error' && $group != 'warning') { ?>
                <div class="g-col-xs-12">
                    <?php if($group == 'success') : ?>
                        <h3>contextual</h3>
                    <?php else : ?>
                        <h3><?php echo $group ?></h3>
                    <?php endif; ?>
                </div>
            <?php
                $previous_group = $group;
            }
            ?>
            <div class="g-col-xs-6 g-col-sm-4 g-col-lg-3 g-col-xl-2">
                <div class="cc-color">
                    <div class="cc-color__swatch <?php echo $class_ ?>">
                    </div>
                    <div class="cc-color__body">
                        <h6><?php echo str_replace('-', ' ', str_replace('u-fill-', '', $class_)); ?></h6>
                        <p><code>.<?php echo str_replace('u-fill', 'u-text', $class_); ?></code></p>
                    </div>
                </div>
            </div>
            <?php
        }
    }
?>
</div> <!-- close the last cc-vars div -->
