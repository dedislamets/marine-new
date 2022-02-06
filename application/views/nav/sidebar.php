<li class="menu-item">
    <a href="<?= base_url('setting') ?>" ><i class="fa fa-user" style="padding-right: 10px;"></i> Profile</a>
</li>
<li class="menu-item">
    <a href="<?= base_url('setting/dokumen') ?>" ><i class="fa fa-file" style="padding-right: 10px;"></i> Document</a>
</li>
<!-- <li class="menu-item">
    <a href="#visi" class="click">Notifikasi</a>
</li> -->
<li class="menu-item">
    <a href="<?= base_url('setting/iklan') ?>"><i class="fa fa-list" style="padding-right: 10px;"></i> Product List</a>
</li>
<li class="menu-item">
    <a href="<?= base_url('setting/pengajuan') ?>"><i class="fa fa-list-alt" style="padding-right: 10px;"></i> Submission List</a>
    <span class="label label-warning" style="top: 290px;left: 10px;right: unset;"><?= ($notifikasi["count_submission"]==0)? "" : $notifikasi["count_submission"] ?></span>
</li>
<li class="menu-item">
    <a href="<?= base_url('setting/upload') ?>"><i class="fa fa-upload" style="padding-right: 10px;"></i> Upload Sign Document</a>
    <span class="label label-warning" style="top: 326px;left: 10px;right: unset;"><?= ($notifikasi["count_sign"]==0)? "" : $notifikasi["count_sign"] ?></span>
</li>                 
<li class="menu-item">
    <a href="<?= base_url('setting/calendar') ?>"><i class="fa fa-calendar" style="padding-right: 10px;"></i> Schedule Meet Up</a>
    <span class="label label-warning" style="top: 365px;left: 10px;right: unset;"><?= ($notifikasi["count_meetup"]==0)? "" : $notifikasi["count_meetup"] ?></span>
</li>  
<li class="menu-item">
    <a href="<?= base_url('setting/notifikasi') ?>"><i class="fa fa-bell" style="padding-right: 10px;"></i> Notification</a>
    <span class="label label-warning" style="top: 406px;left: 10px;right: unset;"><?= ($notifikasi["count"]==0)? "" : $notifikasi["count"] ?></span>
</li> 
<li class="menu-item">
    <a href="<?= base_url('setting/negotiation') ?>"><i class="fa fa-angellist" style="padding-right: 10px;"></i> Negotiation</a>
    <span class="label label-warning" style="top: 446px;left: 10px;right: unset;"><?= ($notifikasi["count_nego"]==0)? "" : $notifikasi["count_nego"] ?></span>
</li> 
<li class="menu-item">
    <a href="<?= base_url('register/logout') ?>" class="click"><i class="fa fa-sign-out" style="padding-right: 10px;"></i> Logout</a>
</li>