<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>IKLA BATAM</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
</head>
<body style="margin: 0; padding: 0;">
	<table border="0" cellpadding="0" cellspacing="0" width="100%">	
		<tr>
			<td style="padding: 10px 0 30px 0;">
				<table align="center" border="0" cellpadding="0" cellspacing="0" width="600" style="border: 1px solid #cccccc; border-collapse: collapse;">
					<tr>
						<td align="center" bgcolor="#70bbd9" style="color: #153643; font-size: 28px; font-weight: bold; font-family: Arial, sans-serif;">
							<img src="<?= base_url()?>assets/img/banner-home.jpg" width="100%" height="240" style="display: block;" />
						</td>
					</tr>
					<tr>
						<td bgcolor="#ffffff" style="padding: 40px 30px 40px 30px;">
							<table border="0" cellpadding="0" cellspacing="0" width="100%">
								<tr>
									<td style="color: #153643; font-family: Arial, sans-serif; font-size: 24px;">
										<b>EVENT IKLA BATAM</b>
									</td>
								</tr>
									<td style="color: #153643; font-family: Arial, sans-serif; font-size: 24px;">
										<div style="padding: 40px 0px 40px 0px;"><?= $dataEvent->Judul;?></div>
									</td>
								<tr>
									<td>
										<table border="0" cellpadding="0" cellspacing="0" width="100%">
											<tr>
												<td width="260" valign="top">
													<table border="0" cellpadding="0" cellspacing="0" width="100%">
														<tr>
															<td width="15%"> Tanggal </td>
															<td width="5%"> : </td>
															<td><?= date('d/m/Y', strtotime($dataEvent->Tanggal));?></td>
														</tr>
														<tr>
															<td> Waktu </td>
															<td> : </td>
															<td> 12:00 </td>
														</tr>
														<tr>
															<td>Pembuat</td>
															<td>:</td>
															<td><?= $dataEvent->Nama;?></td>
														</tr>
														<tr>
															<td colspan="3" style="padding: 25px 0 0 0; color: #153643; font-family: Arial, sans-serif; font-size: 16px; line-height: 20px;">
																<?= $dataEvent->Deskripsi;?>
															</td>
														</tr>
													</table>
												</td>
											</tr>
										</table>
									</td>
								</tr>
							</table>
						</td>
					</tr>
					<tr>
						<td bgcolor="#ee4c50" style="padding: 10px 30px 10px 30px;">
							<table border="0" cellpadding="0" cellspacing="0" width="100%">
								<tr>
									<td style="color: #ffffff; font-family: Arial, sans-serif; font-size: 14px;" width="75%">
										&reg;<a href="www.iklabatam.com" style="color: #ffffff;"><font color="#ffffff">www.iklabatam.com</font></a>
									</td>
									<td align="right" width="25%">
										<table border="0" cellpadding="0" cellspacing="0">
											<tr>
												<td style="font-family: Arial, sans-serif; font-size: 12px; font-weight: bold;">
													<a href="https://www.facebook.com/groups/60116788348/" style="color: #ffffff;">
														<img src="<?= base_url()?>assets/img/fbicon.png" alt="Facebook" width="38" height="38" style="display: block;" border="0" />
													</a>
												</td>
											</tr>
										</table>
									</td>
								</tr>
							</table>
						</td>
					</tr>
				</table>
			</td>
		</tr>
	</table>
</body>
</html>