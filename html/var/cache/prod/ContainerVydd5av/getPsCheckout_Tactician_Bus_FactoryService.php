<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'ps_checkout.tactician.bus.factory' shared service.

return $this->services['ps_checkout.tactician.bus.factory'] = new \PrestaShop\Module\PrestashopCheckout\CommandBus\TacticianCommandBusFactory(${($_ = isset($this->services['ps_checkout.module']) ? $this->services['ps_checkout.module'] : $this->load('getPsCheckout_ModuleService.php')) && false ?: '_'}, ${($_ = isset($this->services['ps_checkout.logger']) ? $this->services['ps_checkout.logger'] : $this->load('getPsCheckout_LoggerService.php')) && false ?: '_'}, ['PrestaShop\\Module\\PrestashopCheckout\\Order\\Command\\AddOrderPaymentCommand' => 'ps_checkout.command.handler.order.add_order_payment', 'PrestaShop\\Module\\PrestashopCheckout\\Order\\Command\\CreateOrderCommand' => 'ps_checkout.command.handler.order.create_order', 'PrestaShop\\Module\\PrestashopCheckout\\Order\\Command\\UpdateOrderStatusCommand' => 'ps_checkout.command.handler.order.update_order_status', 'PrestaShop\\Module\\PrestashopCheckout\\Order\\Matrice\\Command\\UpdateOrderMatriceCommand' => 'ps_checkout.command.handler.order.matrice.update_order_matrice', 'PrestaShop\\Module\\PrestashopCheckout\\PayPal\\Order\\Command\\CapturePayPalOrderCommand' => 'ps_checkout.command.handler.paypal.order.capture_paypal_order', 'PrestaShop\\Module\\PrestashopCheckout\\PayPal\\Order\\Command\\SavePayPalOrderCommand' => 'ps_checkout.command.handler.paypal.order.save_paypal_order', 'PrestaShop\\Module\\PrestashopCheckout\\Order\\Query\\GetOrderForPaymentCompletedQuery' => 'ps_checkout.query.handler.order.get_order_for_payment_completed', 'PrestaShop\\Module\\PrestashopCheckout\\Order\\Query\\GetOrderForPaymentDeniedQuery' => 'ps_checkout.query.handler.order.get_order_for_payment_denied', 'PrestaShop\\Module\\PrestashopCheckout\\Order\\Query\\GetOrderForPaymentPendingQuery' => 'ps_checkout.query.handler.order.get_order_for_payment_pending', 'PrestaShop\\Module\\PrestashopCheckout\\Order\\Query\\GetOrderForPaymentRefundedQuery' => 'ps_checkout.query.handler.order.get_order_for_payment_refunded', 'PrestaShop\\Module\\PrestashopCheckout\\Order\\Query\\GetOrderForPaymentReversedQuery' => 'ps_checkout.query.handler.order.get_order_for_payment_reversed', 'PrestaShop\\Module\\PrestashopCheckout\\Order\\Query\\GetOrderForApprovalReversedQuery' => 'ps_checkout.query.handler.order.get_order_for_approval_reversed', 'PrestaShop\\Module\\PrestashopCheckout\\PayPal\\Identity\\Query\\GetClientTokenPayPalQuery' => 'ps_checkout.query.handler.paypal.identity.get_client_token', 'PrestaShop\\Module\\PrestashopCheckout\\PayPal\\Order\\Query\\GetCurrentPayPalOrderStatusQuery' => 'ps_checkout.query.handler.paypal.order.get_current_paypal_order_status', 'PrestaShop\\Module\\PrestashopCheckout\\PayPal\\Order\\Query\\GetPayPalOrderForCheckoutCompletedQuery' => 'ps_checkout.query.handler.paypal.order.get_paypal_order_for_checkout_completed', 'PrestaShop\\Module\\PrestashopCheckout\\PayPal\\Order\\Query\\GetPayPalOrderForOrderConfirmationQuery' => 'ps_checkout.query.handler.paypal.order.get_paypal_order_for_order_confirmation', 'PrestaShop\\Module\\PrestashopCheckout\\Checkout\\Command\\UpdatePaymentMethodSelectedCommand' => 'ps_checkout.query.handler.checkout.update_payment_method_selected']);
