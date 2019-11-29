@extends('layouts.app')
@section('content')
<section id="container">

		<div class="container-fluid text-center">
			<h1 class="sansserif">Chek List</h1>
		</div>


		<ul id="menu">
		   	<li><input type="checkbox" name="list" id="A.5"><label for="A.5">A.5 Política de la seguridad de la información</label>
			   <ul class="interior">
			        <li><input type="checkbox" name="list" id="A.5.1.1"><label for="A.5.1.1">norm</label>
					   <ul class="interior">
					        <li>
				   				<input type="checkbox" name="checkbox" id="checkbox_1">
								<label for="checkbox_1">texto norm</label>
				   			</li>
				            <li>
				            	<input type="checkbox" name="checkbox" id="checkbox_2">
								<label for="checkbox_2">texto check</label>
				            </li>
					    </ul>
					</li>
					<hr>
				</ul>
			</li>
		</ul>
	</section>
