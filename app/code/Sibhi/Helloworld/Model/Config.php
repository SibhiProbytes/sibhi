<?php
namespace Sibhi\Helloworld\Model;
class Config {
	public function afterGetAttributeUsedForSortByArray(
	    \Magento\Catalog\Model\Config $catalogConfig,
	    $options
	) {

	    $options['created_at'] = __('Newest');
	    return $options;

	}
}