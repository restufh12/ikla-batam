<style type="text/css">
.inf-content{
  border:1px solid #DDDDDD;
  -webkit-border-radius:10px;
  -moz-border-radius:10px;
  border-radius:10px;
  box-shadow: 7px 7px 7px rgba(0, 0, 0, 0.3);
  padding: 10px;
}	
.btn-custom-close{
	background-color: transparent !important;
    color: #dc3545 !important;
}
</style>
<div class="container bootstrap snippets bootdey" style="margin: 30px 0px;">
	<div class="panel-body inf-content">
	    <div class="row">
	        <div class="col-md-4">
	            <img alt="" style="width:600px;" title="" class="img-circle img-thumbnail isTooltip" src="<?= base_url().'assets/upload/member/'.$user->PhotoFile?>" data-original-title="Usuario"> 
	        </div>
	        <div class="col-md-6">
	            <strong style="    font-size: 20px;color: #dc3545;">Informasi Member </strong><br>
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
	                </tbody>
	            </table>
	            </div>
	        </div>
	    </div>

	</div>
</div>                                        
<div class="row text-center" style="margin: 0px 10px 20px 10px;">
	<div class="col-md-12">		
		<button type="button" class="btn btn-danger btn-custom-close" data-dismiss="modal"><i class="far fa-times-circle"></i></button>
	</div>	
</div>