<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * Created by PhpStorm.
 * User: Mangrove
 * Date: 22/05/2017
 * Time: 23.55
 */

$level = $this->uri->segment(1);

if ($level == 'admin' || $level == 'Admin') {
    $subMenu = $this->uri->segment(2);
    $subPage = array(
        'ringkasan' => '',
        'lihat_user' => '',
        'sistem' => ''
    );

    if ($subMenu == 'ringkasan') {
        $subPage['ringkasan'] = 'active';
    } elseif ($subMenu == 'lihat_user') {
        $subPage['lihat_user'] = 'active';
    } elseif ($subMenu == 'sistem') {
        $subPage['sistem'] = 'active';
    }

    require 'header_admin.php';

} elseif ($level == 'member' || $level == 'Member') {

    require 'header_member.php';

} else{
    require 'header_beranda.php';
};
?>