<!-- slide -->
		<div class="slidebanner">
			<div class="container">
				<div class="row">
					<div class="col-sm-12">
						<div id="slide" class="carousel slide" data-ride="carousel">
							<ol class="carousel-indicators">
								<li data-target="#slide" data-slide-to="0" class="active"></li>
								<li data-target="#slide" data-slide-to="1"></li>
								<li data-target="#slide" data-slide-to="2"></li>
							</ol>
							<div class="carousel-inner">		
														
							
							<?php
							//liên kết đến file config.php
							include('connect.php');
							//Tạo đối tượng kết nối
							$mysqli = new dbConnection();
							//Lấy dữ liệu
							$result = $mysqli->query('select * from slide');
							$data='';
							$i=1;
							while($row=$result->fetch_assoc())
							{	
								if($i==1)						
									$data .='<div class="carousel-item active">';
								else
									$data .='<div class="carousel-item">';
									
									$data .='<img class="first-slide img-fluid" src="HinhAnhKhac/'.$row['Hinh'].'" alt="First slide">';
									$data .='<div class="container">';
										$data .='<div class="carousel-caption ">';
											$data .='<div class="boc">';
												$data .='<h1>'.$row['Ten'].'</h1>';
												$data .='<p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>';

											$data .='</div>';
										$data .='</div>';
									$data .='</div>';
								$data .='</div>';
								$i++;
							
							}
							echo $data;
							
							?>
	
								
							</div>
							<a class="carousel-control-prev" href="#slide" role="button" data-slide="prev">
								<span class="carousel-control-prev-icon" aria-hidden="true"></span>
								<span class="sr-only">Previous</span>
							</a>
							<a class="carousel-control-next" href="#slide" role="button" data-slide="next">
								<span class="carousel-control-next-icon" aria-hidden="true"></span>
								<span class="sr-only">Next</span>
							</a>
						</div>
					</div>	
				</div>
			</div>
		</div>