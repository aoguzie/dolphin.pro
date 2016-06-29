<?php

$aLangContent = array(

    // ================ ADDED KEYS ==================

    '_payment_2co_cpt'                      => '2Checkout',
    '_payment_2co_dsc'                      => 'Платежная система 2Checkout',
    '_payment_bcpt_cart_common'             => 'Корзины пользователей',
    '_payment_bcpt_cart_featured'           => 'Корзина сайта',
    '_payment_bcpt_cart_history'            => 'История корзины',
    '_payment_bcpt_details'                 => 'Детали платежей',
    '_payment_bcpt_join'                    => 'Регистрация',
    '_payment_bcpt_payment_result'          => 'Результаты платежей',
    '_payment_bcpt_pending_orders'          => 'Обрабатываемые заказы',
    '_payment_bcpt_processed_orders'        => 'Обработанные заказы',
    '_payment_bcpt_settings'                => 'Настройки платежей',
    '_payment_bp_active_cpt'                => 'Активировать',
    '_payment_bp_active_dsc'                => 'Активировать провайдера',
    '_payment_bp_api_key_cpt'               => 'API Ключ',
    '_payment_bp_api_key_dsc'               => 'API ключ платежной системы BitPay',
    '_payment_bp_cpt'                       => 'BitPay',
    '_payment_bp_dsc'                       => 'Платежная система BitPay',
    '_payment_bp_err_already_processed'     => 'Этот  платеж уже обработан.',
    '_payment_bp_err_incorrect_data'        => 'Некорректные данные платежа.',
    '_payment_bp_err_no_confirmation_given' => 'Платеж ожидает полного подтверждения от Bitcoin сети.',
    '_payment_bp_err_no_data_given'         => 'Нет переданных данных.',
    '_payment_bp_err_no_vendor_given'       => 'Неизвестный продавец.',
    '_payment_bp_err_posdata_exceed_limit'  => 'Значение posData превысило допустимый лимит. Свяжитесь с администратором.',
    '_payment_bp_err_wrong_amount'          => 'Неправильная сумма платежа.',
    '_payment_bp_full_notifications_cpt'    => 'Активировать полное оповещение',
    '_payment_bp_full_notifications_dsc'    => 'В активном режиме оповещения будут отправляться при каждой смене статуса счета, в противном случае - одинажды при подтверждении счета.',
    '_payment_bp_msg_checkout_finished'     => 'Платеж был подтвержден. Когда транзакция будет полностью подтверждена в Bitcoin сети, платеж будет автоматически обработан. Купленный продукт(ы) появится в истории платежей.<br /><b>Внимание.</b> Если это по какой-либо причине не произойдёт, Вам необходимо связаться с продавцом продукта и предоставить ему детали вашего платежа. Он сможет обработать платеж вручную, если средства были получены.',
    '_payment_bp_notification_email_cpt'    => 'Email для оповещений',
    '_payment_bp_notification_email_dsc'    => 'Email, на который будут оправляться оповещения о изменениях статуса счета. Оставьте пустым для отключения данной функции.',
    '_payment_bp_transaction_speed_cpt'     => 'Скорость транзакции',
    '_payment_bp_transaction_speed_dsc'     => 'Определяет как скоро счет будет подтвержден',
    '_payment_bp_transaction_speed_high'    => 'Высокая',
    '_payment_bp_transaction_speed_low'     => 'Низкая',
    '_payment_bp_transaction_speed_medium'  => 'Средняя',
    '_payment_err_already_processed'        => 'Платеж был уже обработан.',
    '_payment_err_not_allowed'              => 'Выполнение действия не возможно.',
    '_payment_err_not_processed'            => 'Платеж не был обработан.',
    '_payment_fcpt_client'                  => 'Клиент',
    '_payment_fcpt_module'                  => 'Товары из',
    '_payment_fcpt_order'                   => 'Заказ',
    '_payment_ocpt_select'                  => 'Выберите',
    '_payment_pcpt_admin'                   => 'Платежи',
    '_payment_pcpt_cart_history'            => 'История корзины',
    '_payment_pcpt_details'                 => 'Детали платежей',
    '_payment_pcpt_join'                    => 'Регистрация',
    '_payment_pcpt_payment_result'          => 'Результат платежей',
    '_payment_pcpt_view_cart'               => 'Корзина',
    '_payment_pcpt_view_orders'             => 'Администрация заказов',
    '_payment_pp_cpt'                       => 'PayPal',
    '_payment_pp_dsc'                       => 'Платежная система PayPal',
    '_payment_txt_add_to_cart'              => 'В корзину',
    '_payment_txt_buyer_name_mask'          => '{0} {1}',
    '_payment_txt_cart_2checkout'           => '2Checkout',
    '_payment_txt_cart_bitpay'              => 'BitPay',
    '_payment_txt_cart_paypal'              => 'PayPal',
    '_payment_wcpt_manual_order'            => 'Добавить вручную',
    '_payment_wcpt_order_info'              => 'Информация о заказе',

    // ================ CHANGED KEYS ================

    '_payment_2co_err_already_processed' => 'Этот  платеж уже обработан.',
    '_payment_2co_err_no_vendor_given'   => 'Неизвестный продавец.',
    '_payment_err_access_db'             => 'Ошибка доступа к базе даных',
    '_payment_err_incorrect_provider'    => 'Неправильная или недоступная платежная система',
    '_payment_inf_successfully_reported' => 'Жалоба была принята',
    '_payment_pp_err_wrong_amount'       => 'Неправильная сумма платежа.',

    // ================ DELETED KEYS ================

    /*
    '_payment_2co_payment_method_al' => 'Acculynk PIN-дебит (AL)',
    '_payment_2co_payment_method_ck' => 'Чек (CK)',
    '_payment_add_to_cart' => 'В корзину',
    '_payment_bcaption_cart_common' => 'Корзины пользователей',
    '_payment_bcaption_cart_featured' => 'Корзина сайта',
    '_payment_bcaption_cart_history' => 'История корзины',
    '_payment_bcaption_details' => 'Детали платежей',
    '_payment_bcaption_payment_result' => 'Результаты платежей',
    '_payment_bcaption_pending_orders' => 'Обрабатываемые заказы',
    '_payment_bcaption_processed_orders' => 'Обработанные заказы',
    '_payment_bcaption_settings' => 'Настройки платежей',
    '_payment_err_self_purchase' => 'Вы не можете продать сами себе',
    '_payment_fldcaption_client' => 'Клиент',
    '_payment_fldcaption_module' => 'Товары из',
    '_payment_fldcaption_order' => 'Заказ',
    '_payment_ocaption_select' => 'Выберите',
    '_payment_pcaption_admin' => 'Платежи',
    '_payment_pcaption_cart_history' => 'История корзины',
    '_payment_pcaption_details' => 'Детали платежей',
    '_payment_pcaption_payment_result' => 'Результат платежей',
    '_payment_pcaption_view_cart' => 'Корзина',
    '_payment_pcaption_view_orders' => 'Администрация заказов',
    '_payment_tbar_item_caption' => 'Корзина',
    '_payment_tbar_item_description' => 'Корзина',
    '_payment_tmenu_cart' => 'Корзина',
    '_payment_tmenu_payments' => 'Платежи',
    '_payment_txt_empty' => 'пусто',
    '_payment_wcaption_manual_order' => 'Добавить вручную',
    '_payment_wcaption_order_info' => 'Информация о заказе',
    */
);
