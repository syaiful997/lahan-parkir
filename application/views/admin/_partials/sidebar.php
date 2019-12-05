<!-- Sidebar -->
<ul class="sidebar navbar-nav">
    <li class="nav-item <?php echo $this->uri->segment(2) == '' ? 'active': '' ?>">
        <a class="nav-link" href="<?php echo site_url('admin/Dashboard') ?>">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span>
        </a>
    </li>
      <?php if($this->session->userdata("nama") === 'admin') :  ?>
 <li class="nav-item dropdown <?php echo $this->uri->segment(2) == 'owner' ? 'active': '' ?>">
        <a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true"
            aria-expanded="false">
            <i class="fas fa-user"></i>
            <span>parking lot owner</span>
        </a>
        <div class="dropdown-menu" aria-labelledby="pagesDropdown">
            <a class="dropdown-item" href="<?php echo site_url('admin/owners/add') ?>">New Owner</a>
            <a class="dropdown-item" href="<?php echo site_url('admin/owners') ?>">List Owner</a>
        </div>
    </li>
      <?php endif; ?>

       <li class="nav-item dropdown <?php echo $this->uri->segment(2) == 'owner' ? 'active': '' ?>">
        <a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true"
            aria-expanded="false">
            <i class="fas fa-users"></i>
            <span>Data Tempat Parkir</span>
        </a>
        <div class="dropdown-menu" aria-labelledby="pagesDropdown">
            <?php if($this->session->userdata("nama") === 'admin') :  ?><a class="dropdown-item" href="<?php echo site_url('tempat_parkir/add') ?>">New tempat pakir</a><?php endif; ?> 	
            <a class="dropdown-item" href="<?php echo site_url('tempat_parkir') ?>">List tempat parkir</a>
        </div>
    </li>
    
	
 	<?php if($this->session->userdata("nama") === 'admin') :  ?>  
    <li class="nav-item dropdown <?php echo $this->uri->segment(2) == 'owner' ? 'active': '' ?>">
        <a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true"
            aria-expanded="false">
            <i class="fas fa-users"></i>
            <span>parking lot member</span>
        </a>
        <div class="dropdown-menu" aria-labelledby="pagesDropdown">
            <a class="dropdown-item" href="<?php echo site_url('user') ?>">List Member</a>
        </div>
    </li>
    <?php endif; ?>
    <li class="nav-item dropdown <?php echo $this->uri->segment(2) == 'owner' ? 'active': '' ?>">
        <a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true"
            aria-expanded="false">
            <i class="fas fa-credit-card"></i>
            <span>Transaksi</span>
        </a>
        <div class="dropdown-menu" aria-labelledby="pagesDropdown">
            <a class="dropdown-item" href="<?php echo site_url('admin/transaksi') ?>">list transaksi</a>
            <!--<a class="dropdown-item" href="<?php echo site_url('admin/owners') ?>"> sewa</a>-->
        </div>
        <?php if($this->session->userdata("nama") === 'admin') :  ?>
    <li class="nav-item dropdown <?php echo $this->uri->segment(2) == 'owner' ? 'active': '' ?>">
        <a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true"
            aria-expanded="false">
            <i class="fas fa-file-alt"></i>
            <span>Laporan</span>
        </a>
        <div class="dropdown-menu" aria-labelledby="pagesDropdown">
            <a class="dropdown-item" href="<?php echo site_url('admin/laporan') ?>">Data Laporan</a>
        </div>
    </li>
    <?php endif; ?>
</ul>