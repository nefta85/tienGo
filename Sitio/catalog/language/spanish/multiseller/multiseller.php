<?php

// **********
// * Global *
// **********
$_['ms_viewinstore'] = 'Ver en tienda';
$_['ms_view'] = 'Ver';
$_['ms_view_modify'] = 'Ver / Modificar';
$_['ms_publish'] = 'Publicar';
$_['ms_unpublish'] = 'Despublicar';
$_['ms_edit'] = 'Editar';
$_['ms_clone'] = 'Clonar';
$_['ms_relist'] = 'Publicar';
$_['ms_rate'] = 'Tarifa';
$_['ms_download'] = 'Descargar';
$_['ms_create_product'] = 'Crear producto';
$_['ms_delete'] = 'Borrar';
$_['ms_update'] = 'Actualizar';
$_['ms_type'] = 'Tipo';
$_['ms_amount'] = 'Cantidad';
$_['ms_status'] = 'Estado';
$_['ms_date_paid'] = 'Fecha de pago';
$_['ms_last_message'] = 'Último mensaje';
$_['ms_description'] = 'Descripción';
$_['ms_id'] = '#';
$_['ms_by'] = 'por';
$_['ms_action'] = 'Acción';
$_['ms_sender'] = 'Remitente';
$_['ms_message'] = 'Mensaje';
$_['ms_none'] = 'Nada';


$_['ms_date_created'] = 'Fecha de creación';
$_['ms_date'] = 'Fecha';

$_['ms_button_submit'] = 'Enviar';
$_['ms_button_add_special'] = 'Definir un nuevo precio especial';
$_['ms_button_add_discount'] = 'Definir una nueva cantidad de descuento';
$_['ms_button_submit_request'] = 'Enviar petición';
$_['ms_button_save'] = 'Guardar';
$_['ms_button_cancel'] = 'Cancelar';
$_['ms_button_select_predefined_avatar'] = 'Seleccionar avatar predefinido';

$_['ms_button_select_image'] = 'Seleccionar imagen';
$_['ms_button_select_images'] = 'Seleccionar imágenes';
$_['ms_button_select_files'] = 'Seleccionar archivo';

$_['ms_transaction_order_created'] = 'Orden creada';
$_['ms_transaction_order'] = 'Venta: Id Orden #%s';
$_['ms_transaction_sale'] = 'Venta: %s (-%s Comisión)';
$_['ms_transaction_refund'] = 'Reembolso: %s';
$_['ms_transaction_listing'] = 'Listado de productos: %s (%s)';
$_['ms_transaction_signup']      = 'Cuota de inscripción en %s';
$_['ms_request_submitted'] = 'Tu solicitud ha sido enviada';

$_['ms_totals_line'] = 'Actualmente %s vendedores y %s productos en oferta!';

$_['ms_text_welcome'] = '<a href="%s">Login</a> | <a href="%s">Create an account</a> | <a href="%s">Create a seller account</a>.';
$_['ms_button_register_seller'] = 'Registrarse como vendedor';
$_['ms_register_seller_account'] = 'Registrar una cuenta de vendedor';

// Mails

// Seller
$_['ms_mail_greeting'] = "Hola %s,\n\n";
$_['ms_mail_greeting_no_name'] = "Hola,\n\n";
$_['ms_mail_ending'] = "\n\nSaludos,\n%s";
$_['ms_mail_message'] = "\n\nMensaje:\n%s";

$_['ms_mail_subject_seller_account_created'] = 'Cuenta de vendedor creada';
$_['ms_mail_seller_account_created'] = <<<EOT
Tu cuenta de vendedor %s ha sido creada!

Ahora puedes empezar a agregar tus productos.
EOT;

$_['ms_mail_subject_seller_account_awaiting_moderation'] = 'Cuenta de vendedor esperando aprobación del moderador';
$_['ms_mail_seller_account_awaiting_moderation'] = <<<EOT
Tu cuenta de vendedor en %s ha sido creada y esta esperando aprobación del moderador.

Recibirás un correo electrónico de confirmación tan pronto sea aprobada.
EOT;

$_['ms_mail_subject_product_awaiting_moderation'] = 'Productos esperando aprobación';
$_['ms_mail_product_awaiting_moderation'] = <<<EOT
Tu producto %s en %s esta esperando aprobación.

Recibirás un correo electrónico tan pronto sean procesados.
EOT;

$_['ms_mail_subject_product_purchased'] = 'Nuevo pedido';
$_['ms_mail_product_purchased'] = <<<EOT
Tu(s) producto(s) han sido comprados de %s.

Cliente: %s (%s)

Productos:
%s
Total: %s
EOT;

$_['ms_mail_product_purchased_no_email'] = <<<EOT
Tu (s) producto(s) ha sido comprado de %s.

Cliente: %s

Productos:
%s
Total: %s
EOT;

$_['ms_mail_subject_seller_contact'] = 'Mensaje de Nuevo cliente';
$_['ms_mail_seller_contact'] = <<<EOT
Has recibido un mensaje de un cliente nuevo!

Nombre: %s

Email: %s

Producto: %s

Mensaje:
%s
EOT;

$_['ms_mail_seller_contact_no_mail'] = <<<EOT
Has recibido un mensaje de un cliente nuevo!

Nombre: %s

Producto: %s

Mensaje:
%s
EOT;

$_['ms_mail_product_purchased_info'] = <<<EOT
\n
Dirección de envío:

%s %s
%s
%s
%s
%s %s
%s
%s
EOT;

$_['ms_mail_product_purchased_comment'] = 'Comentarios: %s';

$_['ms_mail_subject_withdraw_request_submitted'] = 'Solicitud de pago enviada';
$_['ms_mail_withdraw_request_submitted'] = <<<EOT
Hemos recibido tu solicutud de pago. Recibiras tus ganancias tan pronto sean procesadas.
EOT;

$_['ms_mail_subject_withdraw_request_completed'] = 'Pago completado';
$_['ms_mail_withdraw_request_completed'] = <<<EOT
Tu solicitud de pago ha sido procesada. Ahora recibirás tus ganancias.
EOT;

$_['ms_mail_subject_withdraw_request_declined'] = 'Solicitud de pago declinada';
$_['ms_mail_withdraw_request_declined'] = <<<EOT
Tu solicitud de pago ha sido declinada. Tus fondos han sido devueltos a tu saldo de %s.
EOT;

$_['ms_mail_subject_transaction_performed'] = 'Nueva transacción';
$_['ms_mail_transaction_performed'] = <<<EOT
Una nueva transacción ha sido agregada a tu cuenta en %s.
EOT;

$_['ms_mail_subject_remind_listing'] = 'Listado de productos ha terminado';
$_['ms_mail_seller_remind_listing'] = <<<EOT
tu listado de %s productos ha terminado. Ve a tu cuenta de vendedor si quieres volver a listar los productos.
EOT;

// *********
// * Admin *
// *********
$_['ms_mail_admin_subject_seller_account_created'] = 'Una nueva cuenta de vendedor ha sido creada';
$_['ms_mail_admin_seller_account_created'] = <<<EOT
Nueva cuenta de vendedor en %s ha sido creada!
Nombre del vendedor: %s (%s)
E-mail: %s
EOT;

$_['ms_mail_admin_subject_seller_account_awaiting_moderation'] = 'Nueva cuenta de vendedor esperando aprobación';
$_['ms_mail_admin_seller_account_awaiting_moderation'] = <<<EOT
Nueva cuenta de vendedor en %s ha sido creada y esta esperando aprobación del moderador.
Nombre del vendedor: %s (%s)
E-mail: %s

You can process it in the Multiseller - Sellers section in back office.
EOT;

$_['ms_mail_admin_subject_product_created'] = 'Nuevo producto agregado';
$_['ms_mail_admin_product_created'] = <<<EOT
Un nuevo producto %s ha sido agregado a %s.

Puedes ver o editarlos en tus sección de productos.
EOT;

$_['ms_mail_admin_subject_new_product_awaiting_moderation'] = 'Nuevo producto esperando aprobación';
$_['ms_mail_admin_new_product_awaiting_moderation'] = <<<EOT
El nuevo producto %s ha sido agregado a %s y está en espera de aprobación.

You can process it in the Multiseller - Products section in back office.
EOT;

$_['ms_mail_admin_subject_edit_product_awaiting_moderation'] = 'Producto editado y esperando aprobación';
$_['ms_mail_admin_edit_product_awaiting_moderation'] = <<<EOT
Producto %s en %s ha sido editado y esta en espera de aprobación

You can process it in the Multiseller - Products section in back office.
EOT;

$_['ms_mail_admin_subject_withdraw_request_submitted'] = 'Solicitud de pago en espera de aprobación';
$_['ms_mail_admin_withdraw_request_submitted'] = <<<EOT
Nueva solicitud de pago ha sido enviada.

You can process it in the Multiseller - Finances section in back office.
EOT;

// Success
$_['ms_success_product_published'] = 'Producto publicado';
$_['ms_success_product_unpublished'] = 'Producto no publicado';
$_['ms_success_product_created'] = 'Producto creado';
$_['ms_success_product_updated'] = 'Producto actualizado';
$_['ms_success_product_deleted'] = 'Producto eliminado';

// Errors
$_['ms_error_sellerinfo_nickname_empty'] = 'Nickname no puede estar vacío';
$_['ms_error_sellerinfo_nickname_alphanumeric'] = 'Nickname solo debe contener solo alfanúmerico';
$_['ms_error_sellerinfo_nickname_utf8'] = 'Nickname solo debe contener simbolos en formato UTF-8';
$_['ms_error_sellerinfo_nickname_latin'] = 'Nickname can only contain alphanumeric symbols and diacritics';
$_['ms_error_sellerinfo_nickname_length'] = 'Nickname debe de tener como mínimo 4 caracteres';
$_['ms_error_sellerinfo_nickname_taken'] = 'Este Nickname ya se encuentra en uso';
$_['ms_error_sellerinfo_company_length'] = 'Nombre de la compañia no puede ser mayor a 50 caracteres';
$_['ms_error_sellerinfo_description_length'] = 'Descripción no debe contener más de 1000 caracteres';
$_['ms_error_sellerinfo_paypal'] = 'Dirección de PayPal inválida';
$_['ms_error_sellerinfo_terms'] = 'Advertencia: Tú debes aceptar los %s!';
$_['ms_error_file_extension'] = 'Extensión inválida';
$_['ms_error_file_type'] = 'Tipo de archivo invalido';
$_['ms_error_file_size'] = 'Archivo demasiado grande';
$_['ms_error_image_too_small'] = 'Image file dimensions are too small. Minimum allowed size is: %s x %s (Width x Height)';
$_['ms_error_image_too_big'] = 'Image file dimensions are too big. Maximum allowed size is: %s x %s (Width x Height)';
$_['ms_error_file_upload_error'] = 'File upload error';
$_['ms_error_form_submit_error'] = 'Error occured when submitting the form. Please contact the store owner for more information.';
$_['ms_error_form_notice'] = 'Please check all form tabs for errors.';
$_['ms_error_product_name_empty'] = 'Product name cannot be empty';
$_['ms_error_product_name_length'] = 'Product name should be between %s and %s characters';
$_['ms_error_product_description_empty'] = 'Product description cannot be empty';
$_['ms_error_product_description_length'] = 'Product description should be between %s and %s characters';
$_['ms_error_product_tags_length'] = 'Line too long';
$_['ms_error_product_price_empty'] = 'Please specify a price for your product';
$_['ms_error_product_price_invalid'] = 'Invalid price';
$_['ms_error_product_price_low'] = 'Price too low';
$_['ms_error_product_price_high'] = 'Price too high';
$_['ms_error_product_category_empty'] = 'Please select a category';
$_['ms_error_product_model_empty'] = 'Product model cannot be empty';
$_['ms_error_product_model_length'] = 'Product model should be between %s and %s characters';
$_['ms_error_product_image_count'] = 'Please upload at least %s image(s) for your product';
$_['ms_error_product_download_count'] = 'Please submit at least %s download(s) for your product';
$_['ms_error_product_image_maximum'] = 'No more than %s image(s) allowed';
$_['ms_error_product_download_maximum'] = 'No more than %s download(s) allowed';
$_['ms_error_product_message_length'] = 'Message cannot be longer than 1000 characters';
$_['ms_error_product_attribute_required'] = 'This attribute is required';
$_['ms_error_product_attribute_long'] = 'This value can not be longer than %s symbols';
$_['ms_error_withdraw_amount'] = 'Invalid amount';
$_['ms_error_withdraw_balance'] = 'Not enough funds on your balance';
$_['ms_error_withdraw_minimum'] = 'Cannot withdraw less than minimum limit';
$_['ms_error_contact_email'] = 'Please specify a valid email address';
$_['ms_error_contact_captcha'] = 'Invalid captcha code';
$_['ms_error_contact_text'] = 'Message cannot be longer than 2000 characters';
$_['ms_error_contact_allfields'] = 'Please fill in all fields';
$_['ms_error_invalid_quantity_discount_priority'] = 'Error in priority field - please enter correct value';
$_['ms_error_invalid_quantity_discount_quantity'] = 'Quantity should be 2 or greater';
$_['ms_error_invalid_quantity_discount_price'] = 'Invalid quantity discount price entered';
$_['ms_error_invalid_quantity_discount_dates'] = 'Date fields for quantity discounts must be filled in';
$_['ms_error_invalid_special_price_priority'] = 'Error in priority field - please enter correct value';
$_['ms_error_invalid_special_price_price'] = 'Invalid special price entered';
$_['ms_error_invalid_special_price_dates'] = 'Date fields for special prices must be filled in';
$_['ms_error_seller_product'] = 'You can\'t add your own product to cart';

// Account - General
$_['ms_account_unread_pm'] = 'Tienes un mensaje privado sin leer';
$_['ms_account_unread_pms'] = 'Tienes $s mensajes privados sin leer';
$_['ms_account_register_new'] = 'Nuevo Vendedor';
$_['ms_account_register_seller'] = 'Registrar cuenta de vendedor';
$_['ms_account_register_seller_note'] = 'Crear una cuenta de vendedor y comenzar a vender productos en tienGo.co!';
$_['ms_account_register_details'] = 'Paso 1: Datos generales de tu cuenta';
$_['ms_account_register_seller_success_heading'] = 'Tu cuenta de vendedor ha sido creada!!';
$_['ms_account_register_seller_success_message']  = '<p>Bienvenido a %s!</p> <p>Felicidades! Tu nueva cuenta de vendedor ha sido creada con éxito!</p> <p>Ahora tienes todas las opciones disponibles para comenzar a vender tu producto en tiengo.co.</p> <p>Si tienes cualquier problema ó duda, <a href="%s">contactanos</a>.</p>';
$_['ms_account_register_seller_success_approval'] = '<p>Bienvenido %s!</p> <p>Tu cuenta de vendedor ha sido registrada y se encuentra en espera de aprobación. Será notificado por correo electrónico una vez su cuenta haya sido activada por tiengo.co.</p><p>Si tiene algún problema ó duda, <a href="%s">contactanos</a>.</p>';

$_['ms_seller'] = 'Vendedor';
$_['ms_seller_forseller'] = 'Para vendedor';
$_['ms_account_dashboard'] = 'Dashboard';
$_['ms_account_seller_account'] = 'Mi Cuenta Vendedor';
$_['ms_account_customer_account'] = 'Cuenta Cliente';
$_['ms_account_sellerinfo'] = 'Perfil vendedor';
$_['ms_account_sellerinfo_new'] = 'Nueva cuenta vendedor';
$_['ms_account_newproduct'] = 'Nuevo producto';
$_['ms_account_products'] = 'Productos';
$_['ms_account_transactions'] = 'Transacciones';
$_['ms_account_orders'] = 'Ordenes';
$_['ms_account_withdraw'] = 'Solicitar pago';
$_['ms_account_stats'] = 'Estadísticas';

// Account - New product
$_['ms_account_newproduct_heading'] = 'Nuevo Producto';
$_['ms_account_newproduct_breadcrumbs'] = 'Nuevo Producto';
//General Tab
$_['ms_account_product_tab_general'] = 'General';
$_['ms_account_product_tab_specials'] = 'Precios especiales';
$_['ms_account_product_tab_discounts'] = 'Descuentos por cantidad';
$_['ms_account_product_name_description'] = 'Nombre y Descripción';
$_['ms_account_product_name'] = 'Nombre';
$_['ms_account_product_name_note'] = 'Especificar un nombre para tu producto';
$_['ms_account_product_description'] = 'Descripción';
$_['ms_account_product_description_note'] = 'Describe tu producto';
$_['ms_account_product_meta_description'] = 'Descripción Meta Tag';
$_['ms_account_product_meta_description_note'] = 'Especificar Descripción Meta Tag para tu producto';
$_['ms_account_product_meta_keyword'] = 'Meta Tag Keywords';
$_['ms_account_product_meta_keyword_note'] = 'Specify Meta Tag Keywords for your product';
$_['ms_account_product_tags'] = 'Tags';
$_['ms_account_product_tags_note'] = 'Specify tags for your product.';
$_['ms_account_product_price_attributes'] = 'Price & Attributes';
$_['ms_account_product_price'] = 'Price';
$_['ms_account_product_price_note'] = 'Choose a price for your product';
$_['ms_account_product_listing_flat'] = 'Listing fee for this product is <span>%s</span>';
$_['ms_account_product_listing_percent'] = 'Listing fee for this product is based on the product price. Current listing fee: <span>%s</span>.';
$_['ms_account_product_listing_balance'] = 'This amount will be deducted from your seller balance.';
$_['ms_account_product_listing_paypal'] = 'You will be redirected to the PayPal payment page after product submission.';
$_['ms_account_product_listing_itemname'] = 'Product listing fee at %s';
$_['ms_account_product_listing_until'] = 'This product will be listed until %s';
$_['ms_account_product_category'] = 'Category';
$_['ms_account_product_category_note'] = 'Select category for your product';
$_['ms_account_product_enable_shipping'] = 'Enable shipping';
$_['ms_account_product_enable_shipping_note'] = 'Specify whether your product requires shipping';
$_['ms_account_product_quantity'] = 'Quantity';
$_['ms_account_product_quantity_note']    = 'Specify the quantity of your product';
$_['ms_account_product_files'] = 'Files';
$_['ms_account_product_download'] = 'Downloads';
$_['ms_account_product_download_note'] = 'Upload files for your product. Allowed extensions: %s';
$_['ms_account_product_push'] = 'Push updates to previous customers';
$_['ms_account_product_push_note'] = 'Newly added and updated downloads will be made available to previous customers';
$_['ms_account_product_image'] = 'Images';
$_['ms_account_product_image_note'] = 'Select images for your product. First image will be used as a thumbnail. You can change the order of the images by dragging them. Allowed extensions: %s';
$_['ms_account_product_message_reviewer'] = 'Message to the reviewer';
$_['ms_account_product_message'] = 'Message';
$_['ms_account_product_message_note'] = 'Your message to the reviewer';
//Data Tab
$_['ms_account_product_tab_data'] = 'Data';
$_['ms_account_product_model'] = 'Model';
$_['ms_account_product_sku'] = 'SKU';
$_['ms_account_product_sku_note'] = 'Stock Keeping Unit';
$_['ms_account_product_upc']  = 'UPC';
$_['ms_account_product_upc_note'] = 'Universal Product Code';
$_['ms_account_product_ean'] = 'EAN';
$_['ms_account_product_ean_note'] = 'European Article Number';
$_['ms_account_product_jan'] = 'JAN';
$_['ms_account_product_jan_note'] = 'Japanese Article Number';
$_['ms_account_product_isbn'] = 'ISBN';
$_['ms_account_product_isbn_note'] = 'International Standard Book Number';
$_['ms_account_product_mpn'] = 'MPN';
$_['ms_account_product_mpn_note'] = 'Manufacturer Part Number';
$_['ms_account_product_manufacturer'] = 'Manufacturer';
$_['ms_account_product_manufacturer_note'] = '(Autocomplete)';
$_['ms_account_product_tax_class'] = 'Tax Class';
$_['ms_account_product_date_available'] = 'Date Available';
$_['ms_account_product_stock_status'] = 'Out Of Stock Status';
$_['ms_account_product_stock_status_note'] = 'Status shown when a product is out of stock';
$_['ms_account_product_subtract'] = 'Subtract Stock';

// Options
$_['ms_account_product_tab_options'] = 'Options';
$_['ms_options_add'] = '+ Add option';
$_['ms_options_add_value'] = '+ Add value';
$_['ms_options_required'] = 'Make option required';
$_['ms_options_price_prefix'] = 'Change price prefix';
$_['ms_options_price'] = 'Price...';
$_['ms_options_quantity'] = 'Quantity...';


$_['ms_account_product_manufacturer'] = 'Manufacturer';
$_['ms_account_product_manufacturer_note'] = '(Autocomplete)';
$_['ms_account_product_tax_class'] = 'Tax Class';
$_['ms_account_product_date_available'] = 'Date Available';
$_['ms_account_product_stock_status'] = 'Out Of Stock Status';
$_['ms_account_product_stock_status_note'] = 'Status shown when a product is out of stock';
$_['ms_account_product_subtract'] = 'Subtract Stock';

$_['ms_account_product_priority'] = 'Priority';
$_['ms_account_product_date_start'] = 'Start date';
$_['ms_account_product_date_end'] = 'End date';
$_['ms_account_product_sandbox'] = 'Warning: The payment gateway is in \'Sandbox Mode\'. Your account will not be charged.';



// Account - Edit product
$_['ms_account_editproduct_heading'] = 'Edit Product';
$_['ms_account_editproduct_breadcrumbs'] = 'Edit Product';

// Account - Clone product
$_['ms_account_cloneproduct_heading'] = 'Clone Product';
$_['ms_account_cloneproduct_breadcrumbs'] = 'Clone Product';

// Account - Relist product
$_['ms_account_relist_product_heading'] = 'Relist Product';
$_['ms_account_relist_product_breadcrumbs'] = 'Relist Product';

// Account - Seller
$_['ms_account_sellerinfo_heading'] = 'Perfil Vendedor';
$_['ms_account_sellerinfo_breadcrumbs'] = 'Perfil Vendedor';
$_['ms_account_sellerinfo_nickname'] = 'Apodo';
$_['ms_account_sellerinfo_nickname_note'] = 'Especificar tu apodo de vendedor.';
$_['ms_account_sellerinfo_description'] = 'Descripción';
$_['ms_account_sellerinfo_description_note'] = 'Descríbete tú mism@';
$_['ms_account_sellerinfo_company'] = 'Compañia';
$_['ms_account_sellerinfo_company_note'] = 'Tu compañia(opcional)';
$_['ms_account_sellerinfo_country'] = 'País';
$_['ms_account_sellerinfo_country_dont_display'] = 'No mostrar mi país';
$_['ms_account_sellerinfo_country_note'] = 'Selecciona tu país.';
$_['ms_account_sellerinfo_zone'] = 'Región / Estado';
$_['ms_account_sellerinfo_zone_select'] = 'Seleccionar región/estado';
$_['ms_account_sellerinfo_zone_not_selected'] = 'Ninguna región/estado seleccionado';
$_['ms_account_sellerinfo_zone_note'] = 'Selecciona tu región/estado desde la lista.';
$_['ms_account_sellerinfo_avatar'] = 'Avatar';
$_['ms_account_sellerinfo_avatar_note'] = 'Seleccionar tu avatar';
$_['ms_account_sellerinfo_banner'] = 'Banner';
$_['ms_account_sellerinfo_banner_note'] = 'Subir un banner que será mostrado en tu perfil.';
$_['ms_account_sellerinfo_paypal'] = 'Paypal';
$_['ms_account_sellerinfo_paypal_note'] = 'Especifíca tu dirección PayPal';
$_['ms_account_sellerinfo_reviewer_message'] = 'Contestar a opinión';
$_['ms_account_sellerinfo_reviewer_message_note'] = 'Your message to the reviewer';
$_['ms_account_sellerinfo_terms'] = 'Aceptar términos';
$_['ms_account_sellerinfo_terms_note'] = 'He leído y estoy de acuerdo con los <a class="agree" href="%s" alt="%s"><b>%s</b></a>';
$_['ms_account_sellerinfo_fee_flat'] = 'There is a signup fee of <span>%s</span> to become a seller at %s.';
$_['ms_account_sellerinfo_fee_balance'] = 'This amount will be deducted from your initial balance.';
$_['ms_account_sellerinfo_fee_paypal'] = 'You will be redirected to the PayPal payment page after form submission.';
$_['ms_account_sellerinfo_signup_itemname'] = 'Seller account registration at %s';
$_['ms_account_sellerinfo_saved'] = 'Seller account data saved.';

$_['ms_account_status'] = 'Your seller account status is: ';
$_['ms_account_status_tobeapproved'] = '<br />You will be able to use your account as soon as it is approved by the store owner.';
$_['ms_account_status_please_fill_in'] = '<br />Por favor completar el siguiente formulario para crear la cuenta de vendedor.';

$_['ms_seller_status_' . MsSeller::STATUS_ACTIVE] = 'Active';
$_['ms_seller_status_' . MsSeller::STATUS_INACTIVE] = 'Inactive';
$_['ms_seller_status_' . MsSeller::STATUS_DISABLED] = 'Disabled';
$_['ms_seller_status_' . MsSeller::STATUS_INCOMPLETE] = 'Incomplete';
$_['ms_seller_status_' . MsSeller::STATUS_DELETED] = 'Deleted';
$_['ms_seller_status_' . MsSeller::STATUS_UNPAID] = 'Unpaid signup fee';

// Account - Products
$_['ms_account_products_heading'] = 'Tus Productos';
$_['ms_account_products_breadcrumbs'] = 'Tus Productos';
$_['ms_account_products_image'] = 'Imagen';
$_['ms_account_products_product'] = 'Producto';
$_['ms_account_products_sales'] = 'Ventas';
$_['ms_account_products_earnings'] = 'Ganancias';
$_['ms_account_products_status'] = 'Estado';
$_['ms_account_products_date'] = 'Fecha de añadido';
$_['ms_account_products_listing_until'] = 'Listado hasta';
$_['ms_account_products_action'] = 'Acción';
$_['ms_account_products_noproducts'] = 'Aún no tienes productos parametrizados. Empieza ahora!!';
$_['ms_account_products_confirmdelete'] = '¿Estas seguro que quieres eliminar tu producto?';

$_['ms_not_defined'] = 'No definido';

$_['ms_product_status_' . MsProduct::STATUS_ACTIVE] = 'Activado';
$_['ms_product_status_' . MsProduct::STATUS_INACTIVE] = 'Inactivo';
$_['ms_product_status_' . MsProduct::STATUS_DISABLED] = 'Deshabilitado';
$_['ms_product_status_' . MsProduct::STATUS_DELETED] = 'Borrado';
$_['ms_product_status_' . MsProduct::STATUS_UNPAID] = 'No pagado';

// Account - Conversations and Messages
$_['ms_account_conversations'] = 'Conversations';
$_['ms_account_messages'] = 'Messages';

$_['ms_account_conversations_heading'] = 'Your Conversations';
$_['ms_account_conversations_breadcrumbs'] = 'Your Conversations';

$_['ms_account_conversations_status'] = 'Status';
$_['ms_account_conversations_date_created'] = 'Date created';
$_['ms_account_conversations_with'] = 'Conversation with';
$_['ms_account_conversations_title'] = 'Title';

$_['ms_conversation_title_product'] = 'Inquiry about product: %s';
$_['ms_conversation_title'] = 'Inquiry from %s';

$_['ms_account_conversations_read'] = 'Read';
$_['ms_account_conversations_unread'] = 'Unread';

$_['ms_account_messages_heading'] = 'Messages';
$_['ms_account_messages_breadcrumbs'] = 'Messages';

$_['ms_message_text'] = 'Your message';
$_['ms_post_message'] = 'Send message';

$_['ms_customer_does_not_exist'] = 'Customer account deleted';
$_['ms_error_empty_message'] = 'Message cannot be left empty';

$_['ms_mail_subject_private_message'] = 'New private message received';
$_['ms_mail_private_message'] = <<<EOT
You have received a new private message from %s!

%s

%s

You can reply in the messaging area in your account.
EOT;

$_['ms_mail_subject_order_updated'] = 'Your order #%s has been updated by %s';
$_['ms_mail_order_updated'] = <<<EOT
Your order at %s has been updated by %s:

Order#: %s

Products:
%s

Status: %s

Comment:
%s

EOT;

$_['ms_mail_subject_seller_vote'] = 'Vote for the seller';
$_['ms_mail_seller_vote_message'] = 'Vote for the seller';

// Account - Transactions
$_['ms_account_transactions_heading'] = 'Tus Finanzas';
$_['ms_account_transactions_breadcrumbs'] = 'Tus Finanzas';
$_['ms_account_transactions_balance'] = 'Tu balance actual:';
$_['ms_account_transactions_earnings'] = 'Tus ganancias a la fecha:';
$_['ms_account_transactions_records'] = 'Balance de registros';
$_['ms_account_transactions_description'] = 'Descripción';
$_['ms_account_transactions_amount'] = 'Cantidad';
$_['ms_account_transactions_notransactions'] = 'Aún no tienes transacciones que te podamos mostrar!! :(';

// Payments
$_['ms_payment_payments'] = 'Payments';
$_['ms_payment_order'] = 'order #%s';
$_['ms_payment_type_' . MsPayment::TYPE_SIGNUP] = 'Signup fee';
$_['ms_payment_type_' . MsPayment::TYPE_LISTING] = 'Listing fee';
$_['ms_payment_type_' . MsPayment::TYPE_PAYOUT] = 'Manual payout';
$_['ms_payment_type_' . MsPayment::TYPE_PAYOUT_REQUEST] = 'Payout request';
$_['ms_payment_type_' . MsPayment::TYPE_RECURRING] = 'Recurring payment';
$_['ms_payment_type_' . MsPayment::TYPE_SALE] = 'Sale';

$_['ms_payment_status_' . MsPayment::STATUS_UNPAID] = 'Unpaid';
$_['ms_payment_status_' . MsPayment::STATUS_PAID] = 'Paid';

// Account - Orders
$_['ms_account_orders_heading'] = 'Tus ordenes';
$_['ms_account_orders_breadcrumbs'] = 'Tus ordenes';
$_['ms_account_orders_id'] = 'Orden #';
$_['ms_account_orders_customer'] = 'Cliente';
$_['ms_account_orders_products'] = 'Productos';
$_['ms_account_orders_history'] = 'Historia';
$_['ms_account_orders_addresses'] = 'Direcciones';
$_['ms_account_orders_total'] = 'Monto total';
$_['ms_account_orders_view'] = 'Ver orden';
$_['ms_account_orders_noorders'] = 'Aún no has recibido ningún pedido!';
$_['ms_account_orders_nohistory'] = 'Aún no hay historia para esta orden!';
$_['ms_account_orders_change_status']    = 'Cambiar estado de la orden';
$_['ms_account_orders_add_comment']    = 'Añadir comentarios a la orden...';

$_['ms_account_order_information'] = 'Información de la orden';

// Account - Dashboard
$_['ms_account_dashboard_heading'] = 'Tablero de Control';
$_['ms_account_dashboard_breadcrumbs'] = 'Tablero de Control';
$_['ms_account_dashboard_orders'] = 'Últimas ordenes';
$_['ms_account_dashboard_overview'] = 'Información';
$_['ms_account_dashboard_seller_group'] = 'Grupo de vendedor';
$_['ms_account_dashboard_listing'] = 'Tarifa de venta';
$_['ms_account_dashboard_sale'] = 'Cargo por venta';
$_['ms_account_dashboard_royalty'] = 'Ganancias';
$_['ms_account_dashboard_stats'] = 'Estadísticas';
$_['ms_account_dashboard_balance'] = 'Balance actual';
$_['ms_account_dashboard_total_sales'] = 'Ventas totales';
$_['ms_account_dashboard_total_earnings'] = 'Ganancias totales';
$_['ms_account_dashboard_sales_month'] = 'Ventas del mes';
$_['ms_account_dashboard_earnings_month'] = 'Ganancias del mes';
$_['ms_account_dashboard_nav'] = 'Navegación rápida';
$_['ms_account_dashboard_nav_profile'] = 'Modificar tu perfil';
$_['ms_account_dashboard_nav_product'] = 'Crear nuevo producto';
$_['ms_account_dashboard_nav_products'] = 'Administrar tus productos';
$_['ms_account_dashboard_nav_orders'] = 'Ver tus ordenes';
$_['ms_account_dashboard_nav_balance'] = 'Ver tu record financiero';
$_['ms_account_dashboard_nav_payout'] = 'Solicitar Pago';

// Account - Request withdrawal
$_['ms_account_withdraw_heading'] = 'Request Payout';
$_['ms_account_withdraw_breadcrumbs'] = 'Request Payout';
$_['ms_account_withdraw_balance'] = 'Your current balance:';
$_['ms_account_withdraw_balance_available'] = 'Available for withdrawal:';
$_['ms_account_withdraw_minimum'] = 'Minimum payout amount:';
$_['ms_account_balance_reserved_formatted'] = '-%s pending withdrawal';
$_['ms_account_balance_waiting_formatted'] = '-%s waiting period';
$_['ms_account_withdraw_description'] = 'Payout request via %s (%s) on %s';
$_['ms_account_withdraw_amount'] = 'Amount:';
$_['ms_account_withdraw_amount_note'] = 'Please specify the payout amount';
$_['ms_account_withdraw_method'] = 'Payment method:';
$_['ms_account_withdraw_method_note'] = 'Please select the payout method';
$_['ms_account_withdraw_method_paypal'] = 'PayPal';
$_['ms_account_withdraw_all'] = 'All earnings currently available';
$_['ms_account_withdraw_minimum_not_reached'] = 'Your total balance is less than the minimum payout amount!';
$_['ms_account_withdraw_no_funds'] = 'No funds to withdraw.';
$_['ms_account_withdraw_no_paypal'] = 'Please <a href="index.php?route=seller/account-profile">specify your PayPal address</a> first!';

// Account - Stats
$_['ms_account_stats_heading'] = 'Statistics';
$_['ms_account_stats_breadcrumbs'] = 'Statistics';
$_['ms_account_stats_tab_summary'] = 'Summary';
$_['ms_account_stats_tab_by_product'] = 'By Product';
$_['ms_account_stats_tab_by_year'] = 'By Year';
$_['ms_account_stats_summary_comment'] = 'Below is a summary of your sales';
$_['ms_account_stats_sales_data'] = 'Sales data';
$_['ms_account_stats_number_of_orders'] = 'Number of orders';
$_['ms_account_stats_total_revenue'] = 'Total revenue';
$_['ms_account_stats_average_order'] = 'Average order';
$_['ms_account_stats_statistics'] = 'Statistics';
$_['ms_account_stats_grand_total'] = 'Grand total sales';
$_['ms_account_stats_product'] = 'Product';
$_['ms_account_stats_sold'] = 'Sold';
$_['ms_account_stats_total'] = 'Total';
$_['ms_account_stats_this_year'] = 'This Year';
$_['ms_account_stats_year_comment'] = '<span id="sales_num">%s</span> Sale(s) for specified period';
$_['ms_account_stats_show_orders'] = 'Show Orders From: ';
$_['ms_account_stats_month'] = 'Month';
$_['ms_account_stats_num_of_orders'] = 'Number of orders';
$_['ms_account_stats_total_r'] = 'Total revenue';
$_['ms_account_stats_average_order'] = 'Average order';
$_['ms_account_stats_today'] = 'Today, ';
$_['ms_account_stats_yesterday'] = 'Yesterday, ';
$_['ms_account_stats_daily_average'] = 'Daily average for ';
$_['ms_account_stats_date_month_format'] = 'F Y';
$_['ms_account_stats_projected_totals'] = 'Projected totals for ';
$_['ms_account_stats_grand_total_sales'] = 'Grand total sales';

// Product page - Seller information
$_['ms_catalog_product_sellerinfo'] = 'Información del vendedor';
$_['ms_catalog_product_contact'] = 'Contactar al vendedor';

$_['ms_footer'] = '<br>MultiMerch Marketplace by <a href="http://multimerch.com/">multimerch.com</a>';

// Catalog - Sellers list
$_['ms_catalog_sellers_heading'] = 'Vendedores';
$_['ms_catalog_sellers_country'] = 'País:';
$_['ms_catalog_sellers_website'] = 'Website:';
$_['ms_catalog_sellers_company'] = 'Compañia:';
$_['ms_catalog_sellers_totalsales'] = 'Ventas:';
$_['ms_catalog_sellers_totalproducts'] = 'Productos:';
$_['ms_sort_country_desc'] = 'País (Z - A)';
$_['ms_sort_country_asc'] = 'País (A - Z)';
$_['ms_sort_nickname_desc'] = 'Nombre (Z - A)';
$_['ms_sort_nickname_asc'] = 'Nombre (A - Z)';

// Catalog - Seller profile page
$_['ms_catalog_sellers'] = 'Sellers';
$_['ms_catalog_sellers_empty'] = 'There are no sellers yet.';
$_['ms_catalog_seller_profile'] = 'View profile';
$_['ms_catalog_seller_profile_heading'] = '%s\'s profile';
$_['ms_catalog_seller_profile_breadcrumbs'] = '%s\'s profile';
$_['ms_catalog_seller_profile_about_seller'] = 'About the seller';
$_['ms_catalog_seller_profile_products'] = 'Some of seller\'s products';
$_['ms_catalog_seller_profile_tab_products'] = 'Products';

$_['ms_catalog_seller_profile_social'] = 'Social profiles';
$_['ms_catalog_seller_profile_country'] = 'Country:';
$_['ms_catalog_seller_profile_zone'] = 'Region/State:';
$_['ms_catalog_seller_profile_website'] = 'Website:';
$_['ms_catalog_seller_profile_company'] = 'Company:';
$_['ms_catalog_seller_profile_totalsales'] = 'Total sales:';
$_['ms_catalog_seller_profile_totalproducts'] = 'Total products:';
$_['ms_catalog_seller_profile_view_products'] = 'View products';
$_['ms_catalog_seller_profile_view'] = 'View all %s\'s products';

// Catalog - Seller's products list
$_['ms_catalog_seller_products_heading'] = '%s\'s products';
$_['ms_catalog_seller_products_breadcrumbs'] = '%s\'s products';
$_['ms_catalog_seller_products_empty'] = 'This seller doesn\'t have any products yet!';

// Catalog - Seller contact dialog
$_['ms_sellercontact_title'] = 'Send a message to seller';
$_['ms_sellercontact_signin'] = 'Please <a href="%s">sign in</a> to contact %s';
$_['ms_sellercontact_sendto'] = 'Send a message to %s';
$_['ms_sellercontact_text'] = 'Message: ';
$_['ms_sellercontact_captcha'] = 'Captcha';
$_['ms_sellercontact_sendmessage'] = 'Send a message to %s';
$_['ms_sellercontact_close'] = 'Close';
$_['ms_sellercontact_send'] = 'Send';
$_['ms_sellercontact_success'] = 'Your message has been successfully sent';

?>
