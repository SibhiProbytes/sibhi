<?php
namespace Sibhi\Helloworld\Block;

class Toolbar extends \Magento\Catalog\Block\Product\ProductList\Toolbar{
public function setCollection($collection) {

    $this->_collection = $collection;

    $this->_collection->setCurPage($this->getCurrentPage());

    // we need to set pagination only if passed value integer and more that 0
    $limit = (int)$this->getLimit();
    if ($limit) {
        $this->_collection->setPageSize($limit);
    }


    // switch tra i tipi di ordinamento

    // echo '<pre>';
    // var_dump($this->getAvailableOrders());
    // die;

    if ($this->getCurrentOrder()) {


        // Costruisco la custom query
        switch ($this->getCurrentOrder()) {

            case 'created_at':

                if ( $this->getCurrentDirection() == 'desc' ) {

                    $this->_collection
                        ->getSelect()
                        ->order('e.created_at ASC');


                } elseif ( $this->getCurrentDirection() == 'asc' ) {

                    $this->_collection
                        ->getSelect()
                        ->order('e.created_at DESC');

                }

                break;

            default:

                $this->_collection->setOrder($this->getCurrentOrder(), $this->getCurrentDirection());
                break;

        }

    }

    // echo '<pre>';
    // var_dump($this->getCurrentOrder());
    // var_dump((string) $this->_collection->getSelect());
    // die;
    return $this;

}
}