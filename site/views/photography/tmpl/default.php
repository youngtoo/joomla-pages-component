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
<section title="" class="p-2 m-1 text-center">
    <h1><?php echo $this->msg; ?></h1>
    <p class="py-1">Capture the moments!</p>
    <!-- Wesbite homepage content -->
</section>

<section style="min-height:300px;" class="d-flex flex-wrap justify-content-center align-items-center py-2">


<?php
    for ($i=0; $i < 10; $i++) { 
    ?>
    <!-- Item -->
        <div style="overflow:hidden;" class="m-2">
            <img src="http://lorempixel.com/400/300"  alt=".." style=" height:200px; width:200px; object-fit:cover; background-color:#444;" class="rounded">
        </div>
    <!-- Item -->

    <?php
    }
?>
    <div style="overflow:hidden; width:200px; " class="rounded m-2 p-2">
        <a href="#">More..</a>
    </div>
</section>
