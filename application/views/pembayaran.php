<div class="container-fluid">
	<div class="row">
		<div class="col-md-2"></div>
		<div class="col-md-8">
			<div class="btn btn-sm btn-success">
				<?php
				$grand_total = 0;
				if ($keranjang = $this->cart->contents())
				{
					foreach ($keranjang as $item)
					{
						$grand_total = $grand_total + $item['subtotal'];
					}

					echo "<h4>Total Belanja Anda : Rp. ".number_format($grand_total,0,',','.');
				 ?>
			</div><br><br>

			<h3>Input Alamat Pengiriman dan Pembayaran</h3>

            <form method="post" action="<?php echo base_url() ?>dashboard/proses_pesanan">

            	<div class="form-group">
            		<label>Nama Lengkap</label>
            		<input type="text" name="nama" placeholder="Nama Lengkap Anda" class="form-control">
            	</div>

            	<div class="form-group">
            		<label>Alamat Lengkap</label>
            		<input type="text" name="alamat" placeholder="Alamat Lengkap Anda" class="form-control">
            	</div>

            	<div class="form-group">
            		<label>No. Telepon</label>
            		<input type="text" name="no_telp" placeholder="Nomor Telepon Anda" class="form-control">
            	</div>
            	
            	<div class="form-group">
            		<label>Jam Pengiriman</label>
            		<select class="form-control">
            			<option>Pengiriman pagi jam 05.00 wib - 08.00 wib</option>
            			<option>Pengiriman Biasa jam 08.00 wib - 18.00 wib</option>
            		</select>
            	</div>

            	<div class="form-group">
            		<label>Pilih Pembayaran</label>
            		<select class="form-control">
            			<option>Transfer Bank BCA - 51304xxx</option>
            			<option>Paylater</option>
            			<option>COD</option>
            		</select>
            	</div>

            	<button type="submit" class="btn btn-sm btn-primary mb-3">Pesan</button>
            
            </form>

              <?php
           }else
           {
           	echo "<h4>Keranjang Belanja Anda Masih Kosong";
           } 

               ?>

		</div>

		<div class="col-md-2"></div>
	</div>
	
</div>