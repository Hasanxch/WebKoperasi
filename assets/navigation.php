<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * Created by PhpStorm.
 * User: Mangrove
 * Date: 26/05/2017
 * Time: 21.15
 */
$level = $this->uri->segment(1);

if ($level == 'admin' || $level == 'Admin') {
    $menu = $this->uri->segment(2);
    require 'assets/navigation_admin.php';

} elseif ($level == 'member' || $level == 'Member') {

    require 'assets/navigation_member.php';

} else{
    require 'assets/header_beranda.php';
};
?>




