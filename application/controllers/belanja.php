<?php
defined('BASEPATH') OR exit('No direct script access allowed');
 
class Belanja extends CI_Controller {
 
	function __construct()
	{
		parent::__construct();
        $this->load->model("member/m_keranjang", "M_cart");
        $this->load->helper('html');
        $this->load->helper('url');
        $this->load->library('cart');
		$this->load->model('member/m_member');
		$this->m_member->cek_login();
	}
 
	public function index()
	{
		
		$data1 = array(
            'judul' => "Selamat Datang",
			'alamat' => "");
			$data["barang"] = $this->M_cart->get_all();

		$this->load->view('v_header',$data1	);
		
		$this->load->view('member/v_belanja',$data);
	}
	//method tambah produk ke keranjang
    function add()
    {
        $data = [
            "id"    => $_POST["id_b"],
            "name"  => $_POST["nama_b"],
            "qty"   => $_POST["quantity"],
            "price" => $_POST["harga_b"]
            
        ];
        $this->cart->insert($data); // return row id
        echo $this->view();
    }

    //method load data
    function load()
    {
        echo $this->view();
    }

    //method hapus produk dari keranjang
    function remove()
    {
        // ambil id unique dari product mau di hapus dari cart, bukan id dari database
        $row_id = $_POST["row_id"];
        $data   = [
            'rowid' => $row_id, // rowid adalah id unique dari library cart
            'qty' => 0
        ];
        $this->cart->update($data);
        echo $this->view();
    }

    //method kosongkan keranjang
    function clear_cart()
    {
        $this->cart->destroy();
        echo $this->view();
	}
	
	 //method beli keranjang
	 function buy_cart()
	 {
		 $this->cart->destroy();
		 echo $this->view();
	 }

    //respon ke ajax
    function view()
    {
        $output = '';
        $output .= '
            <h3>Keranjang Belanja</h3> <br/>
            <div class="table-responsive">
            <div align="right">
                <button type="button" id="clear_cart" class="btn btn-sm btn-warning"><i class="fa fa-shopping-cart"></i> Kosongkan</button>
			</div>
                <br/>
                <table class="table table-bordered">
                    <tr>
                        <th width="40%">Name</th>
                        <th width="15%">Jumlah</th>
                        <th width="20%">Harga</th>
                        <th width="20%">Total</th>
                        <th width="5%">#</th>
                    </tr>
        ';
        $count = 0;
        foreach ($this->cart->contents() as $item) {
            $count++;
            $output .= '
            <tr>
                <td>' . $item["name"] . '</td>
                <td>' . $item["qty"] . '</td>
                <td>' . $item["price"] . '</td>
                <td>' . $item["subtotal"] . '</td>
                <td><button type="button" name="remove" class="btn btn-danger btn-sm remove_inventory" id="' . $item['rowid'] . '"><i class="fa fa-trash"></i></button></td>
            </tr>
            ';
        }
        $output .= '
            <tr>
                <td colspan="4" align="right">Total</td>
                <td>' . $this->cart->total() . '</td>
            <tr>
			</table>
			<div align="right">
			<button type="button" id="buy_cart" class="btn btn-block btn-success"><i class="fa fa-cc-mastercard"></i> Beli</button>
		</div>
            </div>
        ';
        if ($count == 0) {
            $output = "<h3 class='text-center text-danger'><i class='fa fa-shopping-cart'></i> Keranjang belanja kosong</h3>";
        }
        return $output;
    }
}