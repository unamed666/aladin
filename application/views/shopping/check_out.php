<title>Check Out</title>
<h2>Konfirmasi Check Out</h2>
<div class="kotak2">
<?php
$grand_total = 0;
if ($cart = $this->cart->contents())
	{
		foreach ($cart as $item)
			{
				$grand_total = $grand_total + $item['subtotal'];
			}
		echo "<h4>Total Belanja (belum termasuk ongkir): Rp.".number_format($grand_total,0,",",".")."</h4>";	
?>
<form class="form-horizontal" action="<?php echo base_url()?>shopping/proses_order" method="post" name="frmCO" id="frmCO">
        <div   style="display:none" class="form-group  has-success has-feedback">
            <label class="control-label col-xs-3" for="username">Username :</label>
            <div class="col-xs-9">
                <input type="text"  class="form-control" name="username" id="username" placeholder="username" value="<?php echo $this->session->userdata('username_m') ?>">
            </div>
        </div>
        <h5>Nama  : <?php echo $this->session->userdata('nama_m')?></h5>
        <h5>No.Hp : <?php echo $this->session->userdata('notelp_m')?></h5>
        <h5>Alamat: <?php echo $this->session->userdata('alamat_m')?></h5>
        
        
        
        <div class="form-group  has-success has-feedback">
            <div>
                <button type="submit" class="btn btn-primary">Proses Order</button>
            </div>
        </div>
    </form>
    <?php
	}
	else
		{
			echo "<h5>Shopping Cart masih kosong</h5>";	
		}
	?>
</div>