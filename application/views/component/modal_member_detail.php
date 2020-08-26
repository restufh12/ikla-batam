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
	        <div class="col-md-5" align="center">
	            <img alt="" style="width:100%" title="" class="img-circle img-thumbnail isTooltip" src="<?= base_url().'assets/upload/member/'.$user->PhotoFile?>" data-original-title="Usuario"> 
	        </div>
	        <div class="col-md-7" align="center">
	            <h2><br><u>Member Information</u></h2> 
	        </div>
	        <div class="col-md-12">
	            <div class="table-responsive">
	            <input type="hidden" value="<?= $user->RunNo?>" id="RunNoVerifyMember">
	            <table class="table table-user-information">
	                <tbody>
	                    <tr>        
	                        <td width="200">
	                            <strong>
	                                <span class="glyphicon glyphicon-asterisk text-primary"></span>
	                                Nama                                                
	                            </strong>
	                        </td>
	                        <td class="text-danger">
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
	                        <td class="text-danger">
	                            <?= ($user->JenisKelamin=="P"? "Perempuan" : "Laki-Laki")?>      
	                        </td>
	                    </tr>
	                    <tr>        
	                        <td>
	                            <strong>
	                                <span class="glyphicon glyphicon-bookmark text-primary"></span> 
	                                Pekerjaan                                                
	                            </strong>
	                        </td>
	                        <td class="text-danger">
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
	                        <td class="text-danger">
	                            <?= $user->AlamatPekerjaan?>
	                        </td>
	                    </tr>
	                    <tr>        
	                        <td>
	                            <strong>
	                                <span class="glyphicon glyphicon-envelope text-danger"></span> 
	                                Suku / Niniak Mamak                                                
	                            </strong>
	                        </td>
	                        <td class="text-danger">
	                            <?= $user->Suku?>  
	                        </td>
	                    </tr>
	                    <tr>        
	                        <td>
	                            <strong>
	                                <span class="glyphicon glyphicon-envelope text-primary"></span> 
	                                Asal Nagari                                                
	                            </strong>
	                        </td>
	                        <td class="text-danger">
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
	                        <td class="text-danger">
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
	                        <td class="text-danger">
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
	                        <td class="text-danger">
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
	                        <td class="text-danger">
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
	                        <td class="text-danger">
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
	                                <span class="glyphicon glyphicon-calendar text-primary"></span>
	                                Tanggal Register                                                
	                            </strong>
	                        </td>
	                        <td class="text-danger">
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