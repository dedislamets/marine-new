
<style type="text/css">

    @media (max-width: 1400px) and (min-width: 760px) {
        .page-title-negative-top {        
             padding-top: 127px;
        }
    }
    @media only screen and (max-width: 479px) and (min-width: 320px){    
    .page-title-negative-top {
        padding-top: 0px;
    }
    .page-title-style01 {        
        padding-bottom: 0px;        
    }
</style>

<div class="page-title-style01 page-title-negative-top pt-bkg08">
    <div class="banr-head">
        <div class="container">
            <div class="row">            
				<div>
				    <table class="table" style="margin:5% auto;width:100%;max-width:600px">
				        
				        <tbody>				        	        
					        <tr>
					            <td style="border:none">
					                <table class="table">
					                    <tbody><tr>
					                        <td style="background-color: #252d85;">
					                            <h1 style="margin:0;font-size:16px;font-weight:bold;line-height:24px;color:#fff">Halo <?php echo (isset($data[0]->nama_buyer))? $data[0]->nama_buyer : '' ?>,</h1>
					                            <p style="margin:0;font-size:16px;line-height:24px;color:#fff;text-align: center;">Selamat, Pengajuan Anda Telah Berhasil Kami Terima.</p>
					                        </td>
					                    </tr>
					                    
					                </tbody></table>
					            </td>
					        </tr>
				        	<tr>
				            	<td style="border:none">                
					                <table class="table table-striped">
					                    <tbody>
					                        <tr>
					                            <td>No. Pengajuan</td>
					                            <td>
					                                <a href="#" style="color:#42b549;text-decoration:none" target="_blank" > <?php echo (isset($data[0]->kode_pengajuan))? $data[0]->kode_pengajuan : '' ?></a>
					                            </td>
					                        </tr>					                        
					                            <tr>
					                                <td>Tanggal</td>
					                                <td><?php 
					                                	$myDateTime = DateTime::createFromFormat('Y-m-d',$data[0]->tgl_pengajuan);
														$formattedweddingdate = $myDateTime->format('l, j F Y');
					                                	echo $formattedweddingdate ?></td>
					                            </tr>					                        
					                            <tr>
					                                <td >Jenis Pengajuan</td>
					                                <td style="border-top:1px solid rgba(0,0,0,0.12);border-bottom:1px solid rgba(0,0,0,0.12);padding:10px 0;font-weight:bold" width="60%"><?php echo (isset($data[0]->jenis_pengajuan))? $data[0]->jenis_pengajuan : '' ?></td>
					                            </tr>					                        
					                            <tr>
					                                <td >Diajukan</td>
					                                <td style="border-top:1px solid rgba(0,0,0,0.12);border-bottom:1px solid rgba(0,0,0,0.12);padding:10px 0;font-weight:bold" width="60%"><?php echo (isset($data[0]->title_pengajuan))? $data[0]->title_pengajuan : '' ?></td>
					                            </tr>					                        					                            					                        
					                            <tr>
					                                <td >Nilai</td>
					                                <td style="border-top:1px solid rgba(0,0,0,0.12);border-bottom:1px solid rgba(0,0,0,0.12);padding:10px 0;font-weight:bold" width="60%">Rp <?php echo (isset($data[0]->nilai_pengajuan))? number_format($data[0]->nilai_pengajuan) : 0 ?></td>
					                            </tr>					                        
					                    </tbody>
					                </table>                
				                    				                               					
				            	</td>
				        	</tr>                
					        <tr>
					            <td style="border:none">
					                <table class="table">
					                    <tbody>
					                    	<tr>
						                        <td bgcolor="#fbe3e4" style="border-top:3px solid #f9bcbe;border-bottom:3px solid #f9bcbe;padding:0">
						                            <ul>
														<li style="padding-left: 10px">Menjaga keamanan data pribadi Anda sangat penting bagi kami. Pihak resmi Marine Business tidak pernah meminta nomor kartu kredit pengguna, mohon untuk tidak memberikan data tersebut ke pihak manapun. Cukup sebutkan nomor Invoice dalam tiket Anda.</li>
														<li style="padding-left: 10px">Proses verifikasi pengajuan bisa memakan waktu hingga 3 hari kerja. Setiap transaksi dengan status “Sedang Proses” akan diproses pada 3 hari kerja.</li>
													</ul>
						                        </td>
					                    	</tr>
					                    	<tr>
					                    		<td>
					                    			<a href="<?= base_url(); ?>" class="btn-success btn-block">Back to Home</a>
					                    		</td>
					                    	</tr>
					                	</tbody>
					            	</table>
					            </td>
					        </tr>                       
				    	</tbody>
				    </table>

				</div>
			</div>
        </div>
    </div>
</div>