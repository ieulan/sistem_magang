@extends('layout/main')

@section('title', 'Sistem Informasi Magang')

@section('container')
	<div class="container">
  		<div class="row no-gutters">
			<div class="col-12 col-sm-6 col-md-8">
				<div class="row">
		    		<div class="col-12">
		        		<h1 class="mt-2" style="text-align: center; font-size: 35pt;">Halo, Selamat Datang!</h1>
		        		<p style="text-align: center; font-size: 12pt;">Sistem Informasi Monitoring Kegiatan Magang/PKL/PI
		        		<br>Jurusan Teknik Informatika Fakultas Teknik
		        		<br>Universitas Negeri Surabaya</p>
		        		<img src="/images/mobile.svg">	      		
		      		</div><br>    	    	
		    	</div>
			</div>

		<div class="col-6 col-md-4">
			<div class="login">
				<div class="col-sm-8" style="margin-left: 30px">
		    		<div class="card-columns mt-5">
		        		<div class="card">
		          			<div class="card-body text-center">
		          				<h3>Log In</h3><br>
		                		<form action="/action_page.php">
			                    	<div class="form-group">
			                        	<label for="email" style="text-align: left;">Email address</label>
			                          	<input type="email" class="form-control" placeholder="" id="email">
			                        </div><br>
			                        <div class="form-group">
			                        	<label for="pwd" style="text-align: left;">Password</label>
			                        	<input type="password" class="form-control" placeholder="" id="pwd">
			                        </div><br>
		                        <!--<div class="form-group form-check">-->
		                        <label class="form-check-label">
		                        	<input class="form-check-input" type="checkbox"> Remember me
		                        </label><br>
		                        <!--</div>-->
		                        <br><button type="submit" class="btn btn-primary">Login</button>
		          				</form>   
		          			</div>
		        		</div><br>
		    		</div>
		  		</div>
			</div>	
		</div>

  		</div>
  	</div>
@endsection

   