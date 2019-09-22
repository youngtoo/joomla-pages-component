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


<section style="min-height:300px;" id="home-what-we-can-do">

<div class="p-2 m-2 d-flex justify-content-start d-flex align-items-center flex-wrap">

<?php
if(!empty($this->posts)){
foreach($this->posts as $i => $post) 
{

?>
<div class="card m-2" style="width: 18rem;">
  <img src="<?php echo $post->featured;?>" style="background-color:#f5f5f5; color:#fff; object-fit:cover; height:150px;" class="card-img-top text-center" alt="Graphics Design">
  <div class="card-body">
    <a href="#" class="stretched-link"><h5 class="card-title text-dark" ><?php echo $post->title;?></h5></a>
    <p class="card-text">Print, Social Media, Logo Design</p>
  </div>
</div>
<?php
}
}
else{
  ?>
  <div class="p-2">
    <p class="text-center">We'll keep you updated. Nothing here for now.</p>
  </div>

  <?php
}
?>




</div>
</section>