<x-userlayout>
<link type="text/css" rel="stylesheet" href="https://cdn01.jotfor.ms/stylebuilder/static/form-common.css?v=46d0360
"/>
<style type="text/css">
    @media print{*{-webkit-print-color-adjust: exact !important;color-adjust: exact !important;}
    .form-section{display:inline!important}
    .form-pagebreak{display:none!important}
    .form-section-closed{height:auto!important}
    .page-section{position:initial!important}}
</style>

<link type="text/css" rel="stylesheet" href="https://cdn02.jotfor.ms/themes/CSS/5e6b428acc8c4e222d1beb91.css?v=3.3.53138&themeRevisionID=5eb3b4ae85bd2e1e2966db96"/>
<link type="text/css" rel="stylesheet" href="https://cdn03.jotfor.ms/css/styles/payment/payment_styles.css?3.3.53138" />
<link type="text/css" rel="stylesheet" href="https://cdn01.jotfor.ms/css/styles/payment/payment_feature.css?3.3.53138" />

<form action="{{route('makeorder.Makeorder')}}" method="post" name="form_241061641176450" id="241061641176450" accept-charset="utf-8" autocomplete="on">
@csrf
  <div role="main" class="form-all">
    <ul class="form-section page-section">
      <li class="form-line card-1col" data-type="control_payment" id="id_17" data-payment="true">
        <label class="form-label form-label-top" id="label_17" for="input_17" aria-hidden="false"> My Products </label>
          <div id="cid_17" class="form-input-wide" data-layout="full">
            <div data-wrapper-react="true">
              <div data-wrapper-react="true" class="product-container-wrapper">
                <div data-wrapper-react="true"><span class="form-product-item hover-product-item  show_image show_desc show_option show_subtotal new_ui" categories="non-categorized" pid="1001" aria-labelledby="label_17">
                  <div data-wrapper-react="true" class="form-product-item-detail new_ui">
                    <div class="p_col">
                      <div class="p_checkbox">
                        <a class="btn-inline-product-delete" tabindex="0" role="button">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trash">
                                <path d="M3 6L5 6 21 6"></path>
                                <path d="M6 6V4C6 3.46957 6.21071 2.96086 6.58579 2.58579C6.96086 2.21071 7.46957 2 8 2L16 2C16.5304 2 17.0391 2.21071 17.4142 2.58579C17.7893 2.96086 18 3.46957 18 4V6M21 6V20C21 20.5304 20.7893 21.0391 20.4142 21.4142C20.0391 21.7893 19.5304 22 19 22L5 22C4.46957 22 3.96086 21.7893 3.58579 21.4142C3.21071 21.0391 3 20.5304 3 20V6H21Z"></path>
                            </svg>
                        </a>
                    </div>
                    </div>
                    <div class="p_image">
                      <div class="image_area form-product-image-with-options">
                        <div style="position:absolute;width:100%;height:100%"><img loading="lazy" id="image" role="img" aria-label="Pizza Neapolitan" alt="Pizza Neapolitan Product Image" style="width:100%;height:100%;object-fit:cover" src=""/></div>
                      </div>
                    </div>
                    <div for="input_17_1001" class="form-product-container"><span data-wrapper-react="true">
                        <div class="title_description"><span class="form-product-name" id="product-name-input_17_1001"></span><span class="form-product-description" id="product-name-description-input_17_1001"></span></div><span class="form-product-details"><b><span data-wrapper-react="true">&#8377;<span id="input_17_1001_price" class="price-class"></span></span></b></span>
                        <input type="hidden" name="product_id[]" id="product_id" class="product_id">
                        <input type="hidden" name="price[]" id="price" class="price">
                      </span><span class="form-sub-label-container" style="vertical-align:top">
                                <label class="form-sub-label" for="input_17_quantity_1001_0" style="min-height:13px">Quantity</label>
                                <span class="select_cont">
                                    <input type="number" class="form-dropdown" name="quantity[]" id="input_17_quantity_1001_0" aria-label="Select Quantity">
                                </span>
                            </span>
                            <br /><span class="form-special-subtotal"><span class="form-item-subtotal">Item subtotal:</span><span data-wrapper-react="true">&#8377;<span class="subtotal" id="input_17_1001_item_subtotal"></span></span></span></div>
                    <div class="focus_action_button_container"><a class="btn-inline-product-delete" tabindex="0" role="button"> </a><a class="btn-inline-product-settings" tabindex="0" role="button"> </a></div>
                  </div>
                </span>
                <div class="payment_footer new_ui">
                  <div class="total_area">
                    <div class="form-payment-total">
                      <div id="total-text">Total</div>
                      <div class="form-payment-price"><span data-wrapper-react="true">&#8377;<span id="payment_total" class="payment_total"></span></span></div>
                      <input type="hidden" name="amount" id="payment_total_input">
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </li>
      <li class="form-line" data-type="control_button" id="id_13">
        <div id="cid_13" class="form-input-wide" data-layout="full">
          <div data-align="left" class="form-buttons-wrapper form-buttons-left   jsTest-button-wrapperField">
            <button onclick="redirectToPage() " id="input_13" type="submit" class="form-submit-button submit-button jf-form-buttons jsTest-submitField" data-component="button" data-content="">
              Add Item
            </button>
          </div>
        </div>
      </li>
      <li class="form-line form-line-column form-col-1" data-type="control_email" id="id_12"><label class="form-label form-label-top" id="label_12" for="input_12" aria-hidden="false">Email </label>
        <div id="cid_12" class="form-input-wide" data-layout="half"> <span class="form-sub-label-container" style="vertical-align:top"><input type="email" id="input_12" name="q12_email" class="form-textbox validate[Email]" data-defaultvalue="" autoComplete="section-input_12 email" style="width:310px" size="310" data-component="email" aria-labelledby="label_12 sublabel_input_12" value="{{Auth::user()->email}}" /><label class="form-sub-label" for="input_12" id="sublabel_input_12" style="min-height:13px">example@example.com</label></span> </div>
      </li>
      <li class="form-line form-line-column form-col-2" data-type="control_phone" id="id_11"><label class="form-label form-label-top" id="label_11" for="input_11_full"> Phone Number </label>
        <div id="cid_11" class="form-input-wide" data-layout="half"> <span class="form-sub-label-container" style="vertical-align:top"><input type="tel" id="input_11_full" name="phone_number" data-type="mask-number" class="mask-phone-number form-textbox validate[Fill Mask]" data-defaultvalue="" autoComplete="section-input_11 tel-national" style="width:310px" data-masked="true" placeholder="(000) 000-0000" data-component="phone" aria-labelledby="label_11" value="{{$phone_number}}" /></span> </div>
      </li>
      <li class="form-line jf-required" data-type="control_address" id="id_14" data-compound-hint=",,,,Please Select,,Please Select,"><label class="form-label form-label-top form-label-auto" id="label_14" for="input_14_addr_line1" aria-hidden="false"> Address<span class="form-required">*</span> </label>
        <div id="cid_14" class="form-input-wide jf-required" data-layout="full">
          <div summary="" class="form-address-table jsTest-addressField">
            <div class="form-address-line-wrapper jsTest-address-line-wrapperField">
              <span class="form-address-line form-address-street-line jsTest-address-lineField">
                <span class="form-sub-label-container" style="vertical-align:top">
                  <input type="text" id="input_14_addr_line1" name="address" class="form-textbox validate[required] form-address-line" data-defaultvalue="" autoComplete="section-input_14 address-line1" data-component="address_line_1" aria-labelledby="label_14 sublabel_14_addr_line1" required="" value="{{$street}},{{$area}}" />
                  <label class="form-sub-label" for="input_14_addr_line1" id="sublabel_14_addr_line1" style="min-height:13px">
                    Street Address
                  </label>
                </span>
              </span>
            </div>
            <div class="form-address-line-wrapper jsTest-address-line-wrapperField">
              <span class="form-address-line form-address-city-line jsTest-address-lineField ">
                <span class="form-sub-label-container" style="vertical-align:top">
                  <input type="text" id="input_14_city" name="city" class="form-textbox validate[required] form-address-city" data-defaultvalue="" autoComplete="section-input_14 address-level2" data-component="city" aria-labelledby="label_14 sublabel_14_city" required="" value="{{$city}}" />
                  <label class="form-sub-label" for="input_14_city" id="sublabel_14_city" style="min-height:13px">
                  City
                  </label>
                </span>
              </span>
              <span class="form-address-line form-address-state-line jsTest-address-lineField ">
                <span class="form-sub-label-container" style="vertical-align:top">
                  <input type="text" id="input_14_state" name="state" class="form-textbox validate[required] form-address-state" data-defaultvalue="" autoComplete="section-input_14 address-level1" data-component="state" aria-labelledby="label_14 sublabel_14_state" required="" value="{{$state}}" />
                  <label class="form-sub-label" for="input_14_state" id="sublabel_14_state" style="min-height:13px">
                    State / Province
                  </label>
                </span>
              </span>
            </div>
            <div class="form-address-line-wrapper jsTest-address-line-wrapperField">
              <span class="form-address-line form-address-zip-line jsTest-address-lineField ">
                <span class="form-sub-label-container" style="vertical-align:top">
                  <input type="text" id="input_14_postal" name="postal_code" class="form-textbox validate[required] form-address-postal" data-defaultvalue="" autoComplete="section-input_14 postal-code" data-component="zip" aria-labelledby="label_14 sublabel_14_postal" required="" value="{{$zipcode}}" />
                  <label class="form-sub-label" for="input_14_postal" id="sublabel_14_postal" style="min-height:13px">
                    Postal / Zip Code
                  </label>
                </span>
              </span>
            </div>
          </div>
        </div>
      </li>
      <li class="form-line jf-required" data-type="control_radio" id="id_16"><label class="form-label form-label-top form-label-auto" id="label_16" aria-hidden="false"> Payment Method<span class="form-required">*</span> </label>
        <div id="cid_16" class="form-input-wide jf-required" data-layout="full">
          <div class="form-single-column" role="group" aria-labelledby="label_16" data-component="radio"><span class="form-radio-item" style="clear:left"><span class="dragger-item"></span><input type="radio" aria-describedby="label_16" class="form-radio validate[required]" id="input_16_0" name="payment_method" value="Cash On Delivery" required="" /><label id="label_input_16_0" for="input_16_0">Cash On Delivery</label></span><span class="form-radio-item" style="clear:left"><span class="dragger-item"></span><input type="radio" aria-describedby="label_16" class="form-radio validate[required]" id="input_16_1" name="payment_method" value="Debit Card" required="" /><label id="label_input_16_1" for="input_16_1">Debit Card</label></span><span class="form-radio-item" style="clear:left"><span class="dragger-item"></span><input type="radio" aria-describedby="label_16" class="form-radio validate[required]" id="input_16_2" name="payment_method" value="UPI Payments" required="" /><label id="label_input_16_2" for="input_16_2">UPI Payments</label></span><span class="form-radio-item" style="clear:left"><span class="dragger-item"></span><input type="radio" aria-describedby="label_16" class="form-radio validate[required]" id="input_16_3" name="payment_method" value="Net Banking" required="" /><label id="label_input_16_3" for="input_16_3">Net Banking</label></span></div>
        </div>
      </li>
      <li class="form-line" data-type="control_button" id="id_2">
        <div id="cid_2" class="form-input-wide" data-layout="full">

          <div data-align="center" class="form-buttons-wrapper form-buttons-center   jsTest-button-wrapperField"><button id="input_2" type="submit" class="form-submit-button submit-button jf-form-buttons jsTest-submitField" data-component="button" data-content="">Order</button></div>
        </div>
      </li>
      <li style="display:none">Should be Empty: <input type="text" name="website" value="" type="hidden" /></li>
    </ul>
  </div>
</form>
<script>
document.addEventListener('DOMContentLoaded', function() {
    // Retrieve the stored data from localStorage
    const cartDataJSON = localStorage.getItem('cartData');
    // Check if data exists in localStorage
    if (cartDataJSON) {
        // Parse the JSON string back into a JavaScript object
        const cartData = JSON.parse(cartDataJSON);

        let total=0;
        
        // Loop through each product in the cart data
        cartData.forEach((product, index) => {
            // Populate the form fields with the data from each product
            const productId = product.product_id; // Assuming product_id is unique
            const subtotal = product.price * product.quantity;
            total += subtotal;
            
            // Set the values of form elements for the current product
            const productContainer = document.querySelector('.form-product-item');
            if (index === 0) {
                // Populate the form fields for the first product
                document.getElementById(`input_17_1001_item_subtotal`).innerText = subtotal;
                document.getElementById(`image`).src = product.product_img;
                document.getElementById(`input_17_1001_price`).innerText = product.price;
                document.getElementById(`price`).value = product.price;
                document.getElementById(`input_17_quantity_1001_0`).value = product.quantity;
                document.getElementById(`product-name-description-input_17_1001`).innerText = product.product_details;
                document.getElementById(`product-name-input_17_1001`).innerText = product.product_name;
                document.getElementById(`product_id`).value = product.product_id;

            } else {
                // Clone the product container for additional products
                const clonedProduct = productContainer.cloneNode(true);
                // Update the IDs of the cloned elements to avoid duplication
                clonedProduct.querySelectorAll('[id]').forEach(element => {
                    element.id += '_' + index; // Appending index to ID
                });
                // Insert the cloned product after the last product container
                productContainer.parentNode.insertBefore(clonedProduct, productContainer.nextSibling);
                // Populate the form fields for the cloned product
                const clonedPrice = clonedProduct.querySelector('.price-class');
                const Price = clonedProduct.querySelector('.price');
                const clonedQuantity = clonedProduct.querySelector('.form-dropdown');
                const clonedDescription = clonedProduct.querySelector('.form-product-description');
                const clonedName = clonedProduct.querySelector('.form-product-name');
                const clonedImage = clonedProduct.querySelector('.image_area img'); // Select the image element
                const clonedSubtotal = clonedProduct.querySelector('.subtotal'); // Select the subtotal element
                clonedPrice.innerText = product.price;
                Price.value = product.price;
                clonedQuantity.value = product.quantity;
                clonedDescription.innerText = product.product_details;
                clonedName.innerText = product.product_name;
                clonedImage.src = product.product_img; // Set the image source
                clonedSubtotal.innerText = product.price * product.quantity;

                const clonedProductId = clonedProduct.querySelector('.product_id');
                clonedProductId.value = product.product_id;

            }
        });

      document.getElementById('payment_total').innerText = total.toFixed(2);
      document.getElementById('payment_total_input').value = total.toFixed(2);
    } else {
      console.log('No cart data found in localStorage.');
    }
});

</script>
<script>
    function redirectToPage() {
    window.location.href = 'listcategoryuser';
    }
</script>

</x-userlayout>
