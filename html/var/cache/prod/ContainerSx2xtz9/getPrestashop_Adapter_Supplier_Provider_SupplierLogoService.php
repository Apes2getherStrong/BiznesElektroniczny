<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'prestashop.adapter.supplier.provider.supplier_logo' shared service.

return $this->services['prestashop.adapter.supplier.provider.supplier_logo'] = new \PrestaShop\PrestaShop\Adapter\Supplier\SupplierLogoThumbnailProvider(${($_ = isset($this->services['prestashop.core.image.parser.image_tag_source_parser']) ? $this->services['prestashop.core.image.parser.image_tag_source_parser'] : $this->load('getPrestashop_Core_Image_Parser_ImageTagSourceParserService.php')) && false ?: '_'}, ${($_ = isset($this->services['prestashop.adapter.image_manager']) ? $this->services['prestashop.adapter.image_manager'] : $this->load('getPrestashop_Adapter_ImageManagerService.php')) && false ?: '_'});
