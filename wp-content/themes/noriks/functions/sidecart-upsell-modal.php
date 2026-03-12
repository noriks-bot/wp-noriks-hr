<?php
/**
 * Custom Side Cart Upsell Modal
 * Replaces YITH Quick View with a clean, simple modal for picking color + size
 */

// Register AJAX handlers
add_action('wp_ajax_get_product_variations', 'noriks_get_product_variations');
add_action('wp_ajax_nopriv_get_product_variations', 'noriks_get_product_variations');

function noriks_get_product_variations() {
    $product_id = intval($_POST['product_id'] ?? 0);
    if (!$product_id) {
        wp_send_json_error('No product ID');
    }

    $product = wc_get_product($product_id);
    if (!$product || !$product->is_type('variable')) {
        wp_send_json_error('Not a variable product');
    }

    $attributes = [];
    foreach ($product->get_variation_attributes() as $attr_name => $options) {
        $taxonomy = str_replace('attribute_', '', $attr_name);
        $label = wc_attribute_label($attr_name);
        
        $terms = [];
        foreach ($options as $option) {
            $term = get_term_by('slug', $option, $attr_name);
            $terms[] = [
                'slug' => $option,
                'name' => $term ? $term->name : $option,
            ];
        }
        
        $attributes[] = [
            'name' => $attr_name,
            'label' => $label,
            'options' => $terms,
        ];
    }

    $variations = [];
    foreach ($product->get_available_variations() as $v) {
        $variations[] = [
            'variation_id' => $v['variation_id'],
            'attributes' => $v['attributes'],
            'price_html' => $v['price_html'],
            'is_in_stock' => $v['is_in_stock'],
            'image' => $v['image']['thumb_src'] ?? '',
        ];
    }

    wp_send_json_success([
        'product_id' => $product_id,
        'product_name' => $product->get_name(),
        'product_image' => wp_get_attachment_image_url($product->get_image_id(), 'medium'),
        'price_html' => $product->get_price_html(),
        'attributes' => $attributes,
        'variations' => $variations,
    ]);
}

// Enqueue modal CSS/JS
add_action('wp_footer', 'noriks_upsell_modal_markup');
function noriks_upsell_modal_markup() {
    ?>
    <!-- Noriks Upsell Modal -->
    <div id="noriks-upsell-modal" class="noriks-modal-overlay" style="display:none;">
        <div class="noriks-modal">
            <button class="noriks-modal-close">&times;</button>
            <div class="noriks-modal-body">
                <div class="noriks-modal-product">
                    <div class="noriks-modal-image">
                        <img id="noriks-modal-img" src="" alt="">
                    </div>
                    <div class="noriks-modal-info">
                        <h3 id="noriks-modal-title"></h3>
                        <div id="noriks-modal-price" class="noriks-modal-price"></div>
                    </div>
                </div>
                <div id="noriks-modal-attributes" class="noriks-modal-attributes"></div>
                <div id="noriks-modal-error" class="noriks-modal-error" style="display:none;">Odaberite sve opcije</div>
                <button id="noriks-modal-add" class="noriks-modal-add-btn">DODAJ U KOŠARICU</button>
            </div>
            <div id="noriks-modal-loading" class="noriks-modal-loading" style="display:none;">
                <div class="noriks-spinner"></div>
            </div>
        </div>
    </div>
    <style>
        .noriks-modal-overlay {
            position: fixed;
            top: 0; left: 0; right: 0; bottom: 0;
            background: rgba(0,0,0,0.5);
            z-index: 999999;
            display: flex;
            align-items: center;
            justify-content: center;
            animation: noriks-fade-in 0.2s ease;
        }
        @keyframes noriks-fade-in {
            from { opacity: 0; }
            to { opacity: 1; }
        }
        .noriks-modal {
            background: #fff;
            border-radius: 12px;
            max-width: 400px;
            width: 92%;
            max-height: 90vh;
            overflow-y: auto;
            position: relative;
            box-shadow: 0 20px 60px rgba(0,0,0,0.3);
            animation: noriks-slide-up 0.25s ease;
        }
        @keyframes noriks-slide-up {
            from { transform: translateY(30px); opacity: 0; }
            to { transform: translateY(0); opacity: 1; }
        }
        .noriks-modal-close {
            position: absolute;
            top: 8px; right: 12px;
            background: none;
            border: none;
            font-size: 28px;
            cursor: pointer;
            color: #666;
            z-index: 2;
            line-height: 1;
            padding: 4px 8px;
        }
        .noriks-modal-close:hover { color: #000; }
        .noriks-modal-body { padding: 24px; }
        .noriks-modal-product {
            display: flex;
            gap: 16px;
            margin-bottom: 20px;
            align-items: center;
        }
        .noriks-modal-image {
            width: 90px;
            height: 90px;
            flex-shrink: 0;
            border-radius: 8px;
            overflow: hidden;
            background: #f5f5f5;
        }
        .noriks-modal-image img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }
        .noriks-modal-info h3 {
            margin: 0 0 6px;
            font-size: 16px;
            font-weight: 600;
            color: #222;
        }
        .noriks-modal-price {
            font-size: 18px;
            font-weight: 700;
            color: #e53935;
        }
        .noriks-modal-price del { color: #999; font-weight: 400; font-size: 14px; }
        .noriks-modal-price ins { text-decoration: none; }
        .noriks-modal-attributes { margin-bottom: 20px; }
        .noriks-attr-group {
            margin-bottom: 14px;
        }
        .noriks-attr-label {
            display: block;
            font-size: 13px;
            font-weight: 600;
            color: #555;
            margin-bottom: 8px;
            text-transform: uppercase;
            letter-spacing: 0.5px;
        }
        .noriks-attr-options {
            display: flex;
            flex-wrap: wrap;
            gap: 8px;
        }
        .noriks-attr-btn {
            padding: 8px 16px;
            border: 2px solid #ddd;
            border-radius: 8px;
            background: #fff;
            cursor: pointer;
            font-size: 14px;
            font-weight: 500;
            color: #333;
            transition: all 0.15s ease;
            min-width: 44px;
            text-align: center;
        }
        .noriks-attr-btn:hover {
            border-color: #999;
        }
        .noriks-attr-btn.selected {
            border-color: #222;
            background: #222;
            color: #fff;
        }
        .noriks-attr-btn.out-of-stock {
            opacity: 0.3;
            cursor: not-allowed;
            text-decoration: line-through;
        }
        .noriks-modal-add-btn {
            width: 100%;
            padding: 14px;
            background: #222;
            color: #fff;
            border: none;
            border-radius: 8px;
            font-size: 16px;
            font-weight: 700;
            cursor: pointer;
            letter-spacing: 0.5px;
            transition: background 0.15s ease;
        }
        .noriks-modal-add-btn:hover { background: #444; }
        .noriks-modal-add-btn.adding {
            background: #666;
            pointer-events: none;
        }
        .noriks-modal-add-btn.added {
            background: #2e7d32;
        }
        .noriks-modal-error {
            color: #e53935;
            font-size: 13px;
            margin-bottom: 10px;
            text-align: center;
        }
        .noriks-modal-loading {
            position: absolute;
            top: 0; left: 0; right: 0; bottom: 0;
            background: rgba(255,255,255,0.8);
            display: flex;
            align-items: center;
            justify-content: center;
            border-radius: 12px;
        }
        .noriks-spinner {
            width: 36px; height: 36px;
            border: 3px solid #eee;
            border-top-color: #222;
            border-radius: 50%;
            animation: noriks-spin 0.6s linear infinite;
        }
        @keyframes noriks-spin {
            to { transform: rotate(360deg); }
        }
    </style>
    <script>
    (function($) {
        var modalData = {};
        var selectedAttrs = {};

        // Open modal
        $(document).on('click', '.noriks-upsell-btn', function(e) {
            e.preventDefault();
            e.stopPropagation();
            var productId = $(this).data('product_id');
            openUpsellModal(productId);
        });

        function openUpsellModal(productId) {
            var $modal = $('#noriks-upsell-modal');
            var $loading = $('#noriks-modal-loading');
            
            selectedAttrs = {};
            $modal.show();
            $loading.show();
            $('#noriks-modal-error').hide();

            $.post(woocommerce_params.ajax_url, {
                action: 'get_product_variations',
                product_id: productId
            }, function(res) {
                $loading.hide();
                if (!res.success) {
                    $modal.hide();
                    return;
                }
                modalData = res.data;
                renderModal();
            });
        }

        function renderModal() {
            $('#noriks-modal-img').attr('src', modalData.product_image);
            $('#noriks-modal-title').text(modalData.product_name);
            $('#noriks-modal-price').html(modalData.price_html);

            var $attrs = $('#noriks-modal-attributes').empty();
            
            modalData.attributes.forEach(function(attr) {
                var $group = $('<div class="noriks-attr-group">');
                $group.append('<span class="noriks-attr-label">' + attr.label + '</span>');
                
                var $options = $('<div class="noriks-attr-options">');
                attr.options.forEach(function(opt) {
                    var $btn = $('<button class="noriks-attr-btn">')
                        .text(opt.name)
                        .attr('data-attr', attr.name)
                        .attr('data-value', opt.slug);
                    $options.append($btn);
                });
                $group.append($options);
                $attrs.append($group);
            });

            $('#noriks-modal-add').text('DODAJ U KOŠARICU').removeClass('adding added');
        }

        // Select attribute
        $(document).on('click', '.noriks-attr-btn', function() {
            if ($(this).hasClass('out-of-stock')) return;
            
            var attr = $(this).data('attr');
            var value = $(this).data('value');
            
            $(this).siblings().removeClass('selected');
            $(this).addClass('selected');
            selectedAttrs[attr] = value;
            
            $('#noriks-modal-error').hide();
            updateVariationMatch();
        });

        function updateVariationMatch() {
            // Update price if full match found
            var match = findVariation();
            if (match) {
                if (match.price_html) {
                    $('#noriks-modal-price').html(match.price_html);
                }
                if (match.image) {
                    $('#noriks-modal-img').attr('src', match.image);
                }
            }
        }

        function findVariation() {
            if (!modalData.variations) return null;
            
            for (var i = 0; i < modalData.variations.length; i++) {
                var v = modalData.variations[i];
                var match = true;
                
                for (var key in v.attributes) {
                    var attrName = key; // e.g., attribute_pa_size
                    var lookupKey = key.replace('attribute_', '');
                    
                    if (v.attributes[key] === '') continue; // any value matches
                    
                    if (selectedAttrs[lookupKey] !== v.attributes[key]) {
                        match = false;
                        break;
                    }
                }
                
                if (match) return v;
            }
            return null;
        }

        // Add to cart
        $(document).on('click', '#noriks-modal-add', function() {
            var $btn = $(this);
            if ($btn.hasClass('adding')) return;

            // Check all attributes selected
            var allSelected = modalData.attributes.every(function(attr) {
                return selectedAttrs[attr.name] !== undefined;
            });

            if (!allSelected) {
                $('#noriks-modal-error').show();
                return;
            }

            var variation = findVariation();
            if (!variation) {
                $('#noriks-modal-error').text('Ova kombinacija nije dostupna').show();
                return;
            }

            if (!variation.is_in_stock) {
                $('#noriks-modal-error').text('Nema na zalihi').show();
                return;
            }

            $btn.addClass('adding').text('DODAJEM...');

            var data = {
                product_id: modalData.product_id,
                variation_id: variation.variation_id,
                quantity: 1
            };

            // Add variation attributes
            for (var key in variation.attributes) {
                data[key] = variation.attributes[key];
            }

            $.post(woocommerce_params.ajax_url, $.extend(data, {
                action: 'xoo_wsc_add_to_cart'
            }), function(res) {
                $btn.removeClass('adding').addClass('added').text('✓ DODANO!');
                
                // Refresh side cart
                $(document.body).trigger('wc_fragment_refresh');
                
                setTimeout(function() {
                    closeModal();
                }, 800);
            }).fail(function() {
                // Fallback: standard WC add to cart
                $.post('/?wc-ajax=add_to_cart', data, function() {
                    $btn.removeClass('adding').addClass('added').text('✓ DODANO!');
                    $(document.body).trigger('wc_fragment_refresh');
                    setTimeout(closeModal, 800);
                });
            });
        });

        function closeModal() {
            $('#noriks-upsell-modal').hide();
            selectedAttrs = {};
            modalData = {};
        }

        // Close modal
        $(document).on('click', '.noriks-modal-close', closeModal);
        $(document).on('click', '.noriks-modal-overlay', function(e) {
            if (e.target === this) closeModal();
        });
        $(document).on('keyup', function(e) {
            if (e.key === 'Escape') closeModal();
        });

    })(jQuery);
    </script>
    <?php
}
