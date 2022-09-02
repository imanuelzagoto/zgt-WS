<div class="container-fluid">


<div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
  <ol class="carousel-indicators">
   <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>

   <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>

   <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
</ol>
  
<div class="carousel-inner">
   <div class="carousel-item active">
    <img src="<?php echo base_url('assets/img/hh.png') ?>" class="d-block w-100" alt="...">
 </div>

<div class="carousel-item">
     <img src="<?php echo base_url('assets/img/sli.jpg') ?>" class="d-block w-100" alt=...>
</div> 

<div class="carousel-item">
     <img src="<?php echo base_url('assets/img/37a.jpg') ?>" class="d-block w-100" alt=...>
</div>


     <div class="carousel-item">
      <img src="<?php echo base_url('assets/img/sla.png') ?>" class="d-block w-100" alt=...>
     </div>

      <div class="carousel-item">
      <img src="<?php echo base_url('assets/img/wahyoo.jpg') ?>" class="d-block w-100" alt=...>
     </div>

     <div class="carousel-item">
      <img src="<?php echo base_url('assets/img/f.png') ?>" class="d-block w-100" alt=...>
     </div>
 </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hiden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">next</span>
  </a>
</div>

    <div class="row text-center mt-4">
        <?php foreach ($semua_kategori as $brg) : ?>
        
        <div class="card ml-5 mb-4" style="width: 16rem;">
         <img src="<?php echo base_url().'/uploads/'.$brg->gambar ?>" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title mb-1"><?php echo $brg->nama_brg ?></h5>
            <small><?php echo $brg->keterangan ?></small><br>
            <span class="badge badge-pill badge-success mb-3">Rp. <?php echo number_format($brg->harga,  0,',','.') ?></span><br>
            <?php echo anchor('dashboard/tambah_ke_keranjang/'.$brg->id_brg,'<div class="btn btn-sm btn-primary">Tambah ke keranjang</div>') ?>
            <?php echo anchor('dashboard/detail/'.$brg->id_brg,'<div class="btn btn-sm btn-success">Detail</div>') ?>

          </div>
         </div>

        <?php endforeach; ?>    
    </div>
</div>