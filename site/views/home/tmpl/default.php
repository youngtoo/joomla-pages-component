<?php
/**
 * @package     Joomla.Administrator
 * @subpackage  com_page
 *
 * @copyright   Copyright (C) 2005 - 2018 Open Source Matters, Inc. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */
 
// No direct access to this file
defined('_JEXEC') or die('Restricted access');
?>

<section style="min-height:400px;" class="d-flex justify-content-center py-2">
<div class="row align-items-center">

<div class="col-sm-12 col-md-10 offset-md-2"><h2 class="">It starts with a design.</h2><p class="text-justify">We are a team of designers and developers who craft beautiful brand experiences fit for a digital world.</p><p> <a href="products#home-what-we-can-do">Work With Us</a></p></div>
</div>
</section>


<section style="min-height:300px;" class="d-flex justify-content-center align-items-center py-2">


<?php
    for ($i=0; $i < 10; $i++) { 
    ?>
    <!-- Item -->
        <div style="overflow:hidden; height:200px; width:200px;" class="m-2">
            <img src=".."  alt="..." style="object-fit:cover; background-color:#444;">
        </div>
    <!-- Item -->

    <?php
    }
?>
</section>
