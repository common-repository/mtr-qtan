<?php
/**
 * Project : wp-qtan
 * User: thuytien
 * Date: 8/10/2014
 * Time: 2:32 PM
 */

class QtanPlayerwidget extends scbWidget{
    protected $defaults = array(
        'title' => 'QTAN Player',
        'description' => 'Show the player on your page'
    );

    function __construct() {
        parent::__construct( 'qtan-player', __( 'QTAN Player', 'wp-qtan' ), array(
            'description' => __( 'An example widget', 'wp-qtan' )
        ) );
    }

    function form( $instance ) {
        echo html( 'p', $this->input( array(
            'type' => 'text',
            'name' => 'title',
            'desc' => __( 'Title:', 'wp-qtan' )
        ), $instance ) );
    }

    function content( $instance ) {
        ?>
        <div id="giftcontainer" class="giftcontainer"></div>
        <?php
    }
} 