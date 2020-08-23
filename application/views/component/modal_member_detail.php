<style type="text/css">
.inf-content{
  border:1px solid #DDDDDD;
  -webkit-border-radius:10px;
  -moz-border-radius:10px;
  border-radius:10px;
  box-shadow: 7px 7px 7px rgba(0, 0, 0, 0.3);
  padding: 10px;
}	
</style>
<div class="container bootstrap snippets bootdey" style="margin: 30px 0px;">
	<div class="panel-body inf-content">
	    <div class="row">
	        <div class="col-md-4">
	            <img alt="" style="width:600px;" title="" class="img-circle img-thumbnail isTooltip" src="<?= base_url().'assets/upload/member/'.$user->PhotoFile?>" data-original-title="Usuario"> 
	        </div>
	        <div class="col-md-6">
	            <strong>Informasi Member </strong><br>
	            <div class="table-responsive">
	            <input type="hidden" value="<?= $user->RunNo?>" id="RunNoVerifyMember">
	            <table class="table table-user-information">
	                <tbody>
	                    <tr>        
	                        <td>
	                            <strong>
	                                <span class="glyphicon glyphicon-asterisk text-primary"></span>
	                                Nama                                                
	                            </strong>
	                        </td>
	                        <td class="text-primary">
	                            <?= $user->Nama?>   
	                        </td>
	                    </tr>
	                    <tr>    
	                        <td>
	                            <strong>
	                                <span class="glyphicon glyphicon-user  text-primary"></span>    
	                                Jenis Kelamin                                                
	                            </strong>
	                        </td>
	                        <td class="text-primary">
	                            <?= ($user->JenisKelamin=="P"? "Perempuan" : "Laki-Laki")?>      
	                        </td>
	                    </tr>
	                    <tr>        
	                        <td>
	                            <strong>
	                                <span class="glyphicon glyphicon-cloud text-primary"></span>  
	                                Alamat Rumah                                                
	                            </strong>
	                        </td>
	                        <td class="text-primary">
	                            <?= nl2br($user->Alamat)?>   
	                        </td>
	                    </tr>

	                    <tr>        
	                        <td>
	                            <strong>
	                                <span class="glyphicon glyphicon-bookmark text-primary"></span> 
	                                Pekerjaan                                                
	                            </strong>
	                        </td>
	                        <td class="text-primary">
	                            <?= $user->Pekerjaan?>  
	                        </td>
	                    </tr>
	                    <tr>        
	                        <td>
	                            <strong>
	                                <span class="glyphicon glyphicon-eye-open text-primary"></span> 
	                                Alamat Pekerjaan                                                
	                            </strong>
	                        </td>
	                        <td class="text-primary">
	                            <?= $user->AlamatPekerjaan?>
	                        </td>
	                    </tr>
	                    <tr>        
	                        <td>
	                            <strong>
	                                <span class="glyphicon glyphicon-envelope text-primary"></span> 
	                                Suku / Niniak Mamak                                                
	                            </strong>
	                        </td>
	                        <td class="text-primary">
	                            <?= $user->Suku?>  
	                        </td>
	                    </tr>
	                    <tr>        
	                        <td>
	                            <strong>
	                                <span class="glyphicon glyphicon-envelope text-primary"></span> 
	                                No. Hp / WA                                                
	                            </strong>
	                        </td>
	                        <td class="text-primary">
	                            <?= $user->NoHP?>  
	                        </td>
	                    </tr>
	                    <tr>        
	                        <td>
	                            <strong>
	                                <span class="glyphicon glyphicon-envelope text-primary"></span> 
	                                Email                                                
	                            </strong>
	                        </td>
	                        <td class="text-primary">
	                            <?= $user->Email?>  
	                        </td>
	                    </tr>
	                    <tr>        
	                        <td>
	                            <strong>
	                                <span class="glyphicon glyphicon-envelope text-primary"></span> 
	                                Asal Nagari                                                
	                            </strong>
	                        </td>
	                        <td class="text-primary">
	                            <?= $user->Negara?>  
	                        </td>
	                    </tr>
	                    <tr>        
	                        <td>
	                            <strong>
	                                <span class="glyphicon glyphicon-envelope text-primary"></span> 
	                                Golongan Darah                                                
	                            </strong>
	                        </td>
	                        <td class="text-primary">
	                            <?= $user->GolonganDarah?>  
	                        </td>
	                    </tr>
	                    <tr>        
	                        <td>
	                            <strong>
	                                <span class="glyphicon glyphicon-envelope text-primary"></span> 
	                                Pendidikan                                                
	                            </strong>
	                        </td>
	                        <td class="text-primary">
	                            <?= $user->Pendidikan?>  
	                        </td>
	                    </tr>
	                    <tr>        
	                        <td>
	                            <strong>
	                                <span class="glyphicon glyphicon-envelope text-primary"></span> 
	                                Hobi                                             
	                            </strong>
	                        </td>
	                        <td class="text-primary">
	                            <?= $user->Hobi?>  
	                        </td>
	                    </tr>
	                    <tr>        
	                        <td>
	                            <strong>
	                                <span class="glyphicon glyphicon-envelope text-primary"></span> 
	                                Nama Istri/Suami                                             
	                            </strong>
	                        </td>
	                        <td class="text-primary">
	                            <?= $user->NamaIstri?>  
	                        </td>
	                    </tr>
	                    <tr>        
	                        <td>
	                            <strong>
	                                <span class="glyphicon glyphicon-envelope text-primary"></span> 
	                                Nama Anak                                                
	                            </strong>
	                        </td>
	                        <td class="text-primary">
	                            <?php
	                            $arrAnak = array();
	                            $arrAnak[] = $user->NamaAnak1;
	                            $arrAnak[] = $user->NamaAnak2;
	                            $arrAnak[] = $user->NamaAnak3;
	                            $arrAnak[] = $user->NamaAnak4;
	                            $arrAnak[] = $user->NamaAnak5;
	                            $arrAnak[] = $user->NamaAnak6;
	                            
	                            $NamaAnak = implode(', ', array_filter($arrAnak));
	                            echo $NamaAnak;
	                            ?>  
	                        </td>
	                    </tr>
	                    <tr>        
	                        <td>
	                            <strong>
	                                <span class="glyphicon glyphicon-envelope text-primary"></span> 
	                                Username                                             
	                            </strong>
	                        </td>
	                        <td class="text-primary">
	                            <?= $user->Username;?>  
	                        </td>
	                    </tr>

	                    <tr>        
	                        <td>
	                            <strong>
	                                <span class="glyphicon glyphicon-calendar text-primary"></span>
	                                Tanggal Register                                                
	                            </strong>
	                        </td>
	                        <td class="text-primary">
	                            <?= date('d/m/Y H:i:s', strtotime($user->date_created))?>
	                        </td>
	                    </tr>                                 
	                </tbody>
	            </table>
	            </div>
	        </div>
	    </div>
	</div>
</div>                                        