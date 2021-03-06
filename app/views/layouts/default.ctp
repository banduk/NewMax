<?php
/**
 *
 * PHP versions 4 and 5
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright 2005-2010, Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright 2005-2010, Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       cake
 * @subpackage    cake.cake.libs.view.templates.layouts
 * @since         CakePHP(tm) v 0.10.0.1076
 * @license       MIT License (http://www.opensource.org/licenses/mit-license.php)
 */
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <?php echo $this->Html->charset(); ?>
        <title>
            <?php __('NewMax: Gerenciamento de Visitas'); ?>
            <?php echo $title_for_layout; ?>
        </title>
        <?php
        echo $this->Html->meta('icon');

        //echo $this->Html->css('cake.generic');
//960.css  principal.css  reset.css  style.css
//custom.js  jquery-1.2.6.min.js  jquery.corner.js  kwicks.js

        echo $this->Html->css('reset');
        echo $this->Html->css('960');
        echo $this->Html->css('principal');
        echo $this->Html->css('tipsy');
        echo $this->Html->css('style');
        echo $this->Html->css('table');
        echo $this->Html->css('breadcrumb');
        echo $this->Html->css('text');

        echo $this->Html->script('jquery');
        echo $this->Html->script('kwicks');
        echo $this->Html->script('custom');
        echo $this->Html->script('jquery.corner');
        echo $this->Html->script('jquery.tipsy');


        echo $scripts_for_layout;
        ?>

        <script type='text/javascript'>
            $(document).ready(function() {
                $('#login').corner("4px");
                $('#form_login').corner("4px");
                $('#login').toggle(
                function() {
                    $(this).uncorner();
                    $(this).corner("4px top")
                    $('#form_login').slideDown('fast');
                },
                function() {
                    $('#form_login').slideUp('fast', function() {
                        $('#login').corner("4px");
                    });
                });

                $('#report').toggle(
                function() {
                    $(this).uncorner();
                    $(this).corner("4px top")
                    //$('#form_report').slideDown('fast');
                    $('#form_report').css({display: 'table'});
                },
                function() {
                    $('#form_report').css({display: 'none'});
                });

                $('.visit').tipsy({gravity: $.fn.tipsy.autoNS, html: true});
            });

        </script>


    </head>
    <body>

        <!--	<div id="container">-->
        <div id="header">
            <?php
            echo $this->element('menu');
            ?>

        </div>
        <?php
        echo $this->element('toolbar');
        ?>

        <div id="content">
            <div class="container_12">
                <?php
                echo $this->element('breadcrumb');
                echo $this->Session->flash();
                echo $this->Session->flash('auth');
//                echo "<pre>";
//                //print_r($this);
//                echo "</pre>";
                ?>

                <?php echo $content_for_layout; ?>

            </div>
        </div>
        <div id="footer" class="container_12">
            <?php /*echo $this->Html->link(
            $this->Html->image('cake.power.gif', array('alt'=> __('CakePHP: the rapid development php framework', true), 'border' => '0')),
            'http://www.cakephp.org/',
            array('target' => '_blank', 'escape' => false)
            );*/
            ?>
            <ul>
                <li>New Max |</li>
                <li>Suporte |</li>
                <li>MatchBoxIdeas</li>
            </ul>

        </div>
        <!--</div>-->
        <?php echo $this->element('sql_dump'); ?>
    </body>
</html>