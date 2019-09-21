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
<section class="m-1">

<ul class="nav justify-content-center">
  <li class="nav-item">
    <a class="nav-link active" href="#">Web Design</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="#">Design</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="#">Photography</a>
  </li>
</ul>

</section>



<section style="min-height:300px;" id="home-what-we-can-do">

<div class="p-2 m-2 d-flex justify-content-between d-flex align-items-stretch flex-wrap">

<?php
for ($i=0; $i < 5; $i++) 
{

?>
<div class="card m-2" style="width: 18rem;">
  <img src="" style="background-color:#f5f5f5; color:#fff; object-fit:cover; height:150px;" class="card-img-top text-center" alt="Graphics Design">
  <div class="card-body">
    <a href="#" class="stretched-link"><h5 class="card-title text-dark" >An Introduciton to Logo Design</h5></a>
    <p class="card-text">Print, Social Media, Logo Design</p>
  </div>
</div>
<?php
}
?>




</div>
</section>