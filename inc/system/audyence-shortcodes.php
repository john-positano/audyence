// Conditional Logic
--- Product,Sale,Voucher,User,Deadline
--- Property
--- Comparator
--- Value
// User Data
--- Property
// Product Data
--- Property
// Sale Data
--- Property
// Form
--- Fields
--- Buttons
// Link
--- Anchors
--- Buttons
--- Redirects
// User Profile, Subscriptions Edit
--- Fields
--- Save Button

// [aud_conditional_area conditions="user_registered < 2016-12-05 23:59:59, sale_deadline > now"][/aud_conditional_area]
// [aud_conditional_redirect link="https://somesite.com/home-page"]

// [aud_user attribute="user_registered"]
// [aud_product attribute="price"]
// [aud_sale attribute="deadline"]
// [aud_link for="product" id="0" type="button"]

// [aud_form_field field="user_email"]
// [aud_form_submit]

// [aud_profile_field attribute="user_phone_number"]
// [aud_profile_submit]