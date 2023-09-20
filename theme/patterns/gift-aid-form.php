<?php
/**
 * Title: FoBV Gift Aid Form
 * Slug: fobv/gift-aid-form
 */
?>
<!-- wp:html {"lock":{"move":true,"remove":true}} -->
<form id="fobvGiftAidForm" action="/wp-admin/admin-post.php" method="post" enctype="application/x-www-form-urlencoded" novalidate>
<input type="hidden" name="action" value="fobv_pay">
<!-- /wp:html -->

<!-- wp:shortcode {"lock":{"move":true,"remove":true}} -->
[vari-nonce-field action='fobv_payment' name='fobv_payment_nonce' ]
<!-- /wp:shortcode -->

<!-- wp:shortcode {"lock":{"move":true,"remove":true}} -->
[vari-input-tag name='fobv_payment_type' type='hidden']
<!-- /wp:shortcode -->

<!-- wp:shortcode {"lock":{"move":true,"remove":true}} -->
[vari-input-tag name='fobv_payment_amount' type='hidden']
<!-- /wp:shortcode -->

<!-- wp:shortcode {"lock":{"move":true,"remove":true}} -->
[vari-input-tag name='fobv_payment_method' type='hidden']
<!-- /wp:shortcode -->

<!-- wp:shortcode {"lock":{"move":true,"remove":true}} -->
[fobv-payment-reference name='fobv_payment_reference']
<!-- /wp:shortcode -->

<!-- wp:shortcode {"lock":{"move":true,"remove":true}} -->
[vari-input-tag name='fobv_payment_email_address' type='hidden']
<!-- /wp:shortcode -->

<!-- wp:shortcode {"lock":{"move":true,"remove":true}} -->
[vari-input-tag type='checkbox' id='fobvPaymentGiftAid' name='fobv_payment_gift_aid']
<!-- /wp:shortcode -->

<!-- wp:html {"lock":{"move":true,"remove":true}} -->
<label for="fobvPaymentGiftAid">I want to enable Gift Aid for my payment</label>
<!-- /wp:html -->

<!-- wp:group {"style":{"border":{"top":{"color":"var:preset|color|custom-color-1","width":"1px"},"right":{"color":"var:preset|color|custom-color-1","width":"2px"},"bottom":{"color":"var:preset|color|custom-color-1","width":"2px"},"left":{"color":"var:preset|color|custom-color-1","width":"1px"}},"spacing":{"padding":{"top":"0.5em","bottom":"0.5em","left":"0.5em","right":"1em"}}},"layout":{"type":"constrained"}} -->
<div id="fobvGiftAidDeclaration" class="wp-block-group" style="border-top-color:var(--wp--preset--color--custom-color-1);border-top-width:1px;border-right-color:var(--wp--preset--color--custom-color-1);border-right-width:2px;border-bottom-color:var(--wp--preset--color--custom-color-1);border-bottom-width:2px;border-left-color:var(--wp--preset--color--custom-color-1);border-left-width:1px;padding-top:0.5em;padding-right:1em;padding-bottom:0.5em;padding-left:0.5em"><!-- wp:paragraph {"fontSize":"large"} -->
<p class="has-large-font-size">Declaration</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p><strong>I am a UK tax payer and understand that if I pay less Income Tax and/or Capital Gains Tax in the current tax year than the amount of Gift Aid claimed it is my responsibility to pay any difference.</strong></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p>Please notify us if you:</p>
<!-- /wp:paragraph -->

<!-- wp:list -->
<ul><!-- wp:list-item -->
<li>Want to cancel this declaration.</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Change your name or home address.</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>No longer pay sufficient tax on your income and/or capital gains.</li>
<!-- /wp:list-item --></ul>
<!-- /wp:list -->

<!-- wp:paragraph -->
<p>If you pay Income Tax at the higher or additional tax rate and want to receive the additional tax relief due to you, you must include all your Gift Aid donations on your Self-Assessment tax return or ask HM Revenue and Customs to adjust your tax code.</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p>If you are comfortable with the declaration above then please provide below the additional information that we need to claim Gift Aid for your payment and then click on "Continue" to proceed. If you wish to change your mind and not enable Gift Aid for your payment then uncheck the box above and click on "Continue" below to proceed.</p>
<!-- /wp:paragraph -->

<!-- wp:columns {"templateLock":false,"lock":{"move":false,"remove":false}} -->
<div class="wp-block-columns"><!-- wp:column {"width":"10em","lock":{"move":false,"remove":false}} -->
<div class="wp-block-column" style="flex-basis:10em"><!-- wp:html {"lock":{"move":true,"remove":true}} -->
<label for="fobvPaymentFirstName">First Name:</label>
<!-- /wp:html --></div>
<!-- /wp:column -->

<!-- wp:column {"lock":{"move":false,"remove":false}} -->
<div class="wp-block-column"><!-- wp:shortcode {"lock":{"move":true,"remove":true}} -->
[vari-input-tag id='fobvPaymentFirstName' name='fobv_payment_first_name' placeholder='Enter your first name']
<!-- /wp:shortcode -->

<!-- wp:shortcode {"lock":{"move":true,"remove":true}} -->
[vari-label-tag name='fobv_payment_first_name_error' class='error' for='fobvPaymentFirstName']
<!-- /wp:shortcode --></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->

<!-- wp:columns {"templateLock":false,"lock":{"move":false,"remove":false}} -->
<div class="wp-block-columns"><!-- wp:column {"width":"10em"} -->
<div class="wp-block-column" style="flex-basis:10em"><!-- wp:html {"lock":{"move":true,"remove":true}} -->
<label for="fobvPaymentSurname">Surname:</label>
<!-- /wp:html --></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"><!-- wp:shortcode {"lock":{"move":true,"remove":true}} -->
[vari-input-tag id='fobvPaymentSurname' name='fobv_payment_surname' placeholder='Enter your surname']
<!-- /wp:shortcode -->

<!-- wp:shortcode -->
[vari-label-tag name='fobv_payment_surname_error' class='error']
<!-- /wp:shortcode --></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->

<!-- wp:columns {"templateLock":false,"lock":{"move":false,"remove":false}} -->
<div class="wp-block-columns"><!-- wp:column {"width":"10em"} -->
<div class="wp-block-column" style="flex-basis:10em"><!-- wp:html {"lock":{"move":true,"remove":true}} -->
<label for="fobvPaymentAddressLine1">Address Line 1:</label>
<!-- /wp:html --></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"><!-- wp:shortcode {"lock":{"move":true,"remove":true}} -->
[vari-input-tag id='fobvPaymentAddressLine1' name='fobv_payment_address_line_1' placeholder='Enter the first line of your address']
<!-- /wp:shortcode -->

<!-- wp:shortcode {"lock":{"move":true,"remove":true}} -->
[vari-label-tag name='fobv_payment_address_line_1_error' class='error']
<!-- /wp:shortcode --></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->

<!-- wp:columns {"templateLock":false,"lock":{"move":false,"remove":false}} -->
<div class="wp-block-columns"><!-- wp:column {"width":"10em"} -->
<div class="wp-block-column" style="flex-basis:10em"><!-- wp:html {"lock":{"move":true,"remove":true}} -->
<label for="fobvPaymentAddressLine2">Address Line 2:</label>
<!-- /wp:html --></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"><!-- wp:shortcode {"lock":{"move":true,"remove":true}} -->
[vari-input-tag id='fobvPaymentAddressLine2' name='fobv_payment_address_line_2' placeholder='Enter the second line of your address']
<!-- /wp:shortcode -->

<!-- wp:shortcode {"lock":{"move":true,"remove":true}} -->
[vari-label-tag name='fobv_payment_address_line_2_error' class='error']
<!-- /wp:shortcode --></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->

<!-- wp:columns {"templateLock":false,"lock":{"move":false,"remove":false}} -->
<div class="wp-block-columns"><!-- wp:column {"width":"10em"} -->
<div class="wp-block-column" style="flex-basis:10em"><!-- wp:html {"lock":{"move":true,"remove":true}} -->
<label for="fobvGiftAidAddressLine3">Address Line 3:</label>
<!-- /wp:html --></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"><!-- wp:shortcode {"lock":{"move":true,"remove":true}} -->
[vari-input-tag id='fobvPaymentAddressLine3' name='fobv_payment_address_line_3' placeholder='Enter the third line of your address']
<!-- /wp:shortcode -->

<!-- wp:shortcode {"lock":{"move":true,"remove":true}} -->
[vari-label-tag name='fobv_payment_address_line_3_error' class='error']
<!-- /wp:shortcode --></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->

<!-- wp:columns {"templateLock":false,"lock":{"move":false,"remove":false}} -->
<div class="wp-block-columns"><!-- wp:column {"width":"10em"} -->
<div class="wp-block-column" style="flex-basis:10em"><!-- wp:html {"lock":{"move":true,"remove":true}} -->
<label for="fobvPaymentAddressLine4">Address Line 4:</label>
<!-- /wp:html --></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"><!-- wp:shortcode {"lock":{"move":true,"remove":true}} -->
[vari-input-tag id='fobvPaymentAddressLine4' name='fobv_payment_address_line_4' placeholder='Enter the fourth line of your address']
<!-- /wp:shortcode -->

<!-- wp:shortcode {"lock":{"move":true,"remove":true}} -->
[vari-label-tag name='fobv_payment_address_line_4_error' class='error']
<!-- /wp:shortcode --></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->

<!-- wp:columns {"templateLock":false,"lock":{"move":false,"remove":false}} -->
<div class="wp-block-columns"><!-- wp:column {"width":"10em"} -->
<div class="wp-block-column" style="flex-basis:10em"><!-- wp:html {"lock":{"move":true,"remove":true}} -->
<label for="fobvPaymentPostcode">Postcode:</label>
<!-- /wp:html --></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"><!-- wp:shortcode {"lock":{"move":true,"remove":true}} -->
[vari-input-tag id='fobvPaymentPostcode' name='fobv_payment_postcode' placeholder='Enter your postcode']
<!-- /wp:shortcode -->

<!-- wp:shortcode {"lock":{"move":true,"remove":true}} -->
[vari-label-tag name='fobv_payment_postcode_error' class='error']
<!-- /wp:shortcode --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->

<!-- wp:spacer {"height":"1em"} -->
<div style="height:1em" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:html {"lock":{"move":true,"remove":true}} -->
<div class="wp-block-button">
<button class="wp-block-button__link wp-element-button" type="submit">Continue</button>
</div>
</form>
<script src="/wp-content/themes/fobv-site/assets/js/gift-aid-form.js"></script>
<!-- /wp:html -->