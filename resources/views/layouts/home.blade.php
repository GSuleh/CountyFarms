@extends('layouts.app')

@section('content')
<div id='vue-wrapper'>
	<div class="content">
		<h1 class="heading" style="text-align: center;">Farmer's Profile</h1>
		<div class='col-md-3' style="float: left;">
			<div class="photo-holder">
				<img src="images/icon.png">
			</div>

			<div class="links">
				<table class="table" style="border: 5px solid rgba(255, 255, 255, .5);">
					<tbody>
						<tr>
							<td><a href="{{ url('edit') }}" style="text-decoration: none;">Edit Profile</a></td>
						</tr>
						<tr>
							<td><a href="#" style="text-decoration: none;">Progress Report</a></td>
						</tr>
					</tbody>
				</table>
			</div>

		</div>

		<div class="col-md-9" style="float: right">
			<div class="sectionData">
				<table class="table">
					<tbody>
						<tr>
							<td class="subhead">Username:</td>
							<td>
								<span>{{ Auth::user()->name }}</span>
							</td>
						</tr>
						<tr>
							<td class="subhead">Telephone:</td>
							<td>
								<span>{{ Auth::user()->phone }}</span>
							</td>
						</tr>
						<tr>
							<td class="subhead">Email:</td>
							<td>
								<span>{{ Auth::user()->email }}</span>
							</td>
						</tr>
						<tr>
							<td class="subhead">National ID:</td>
							<td>
								<span>{{ Auth::user()->nationalid }}</span>
							</td>
						</tr>
						<tr>
							<td class="subhead">First Name:</td>
							<td>
								<span>{{ Auth::user()->firstname }}</span>
							</td>
						</tr>
						<tr>
							<td class="subhead">Last Name:</td>
							<td>
								<span>{{ Auth::user()->lastname }}</span>
							</td>
						</tr>
						<tr>
							<td class="subhead">Gender:</td>
							<td>
								<span>{{ Auth::user()->gender}}</span>
							</td>
						</tr>
						<tr>
							<td class="subhead">Postal Code:</td>
							<td>
								<span>{{ Auth::user()->postalcode }}</span>
							</td>
						</tr>
						<tr>
							<td class="subhead">KRA PIN:</td>
							<td>
								<span>{{ Auth::user()->kra }}</span>
							</td>
						</tr>
					</tbody>
				</table>
			</div>
		</div>
	</div>
</div>
@endsection

