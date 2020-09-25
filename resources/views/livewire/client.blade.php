
 <div class="col-12">
 	<div>
 		<div class="col-1">
 			<button type="button" class="btn btn-block btn-success btn-sm" wire:click="addClient"><i class="fa fa-plus"></i> Add Client</button>
 		</div>
 	</div>
 	<br>
    <div class="card">

      <div class="card-header">
        <h3 class="card-title">Client List <div wire:target="searchKey,render" wire:loading>
              <div class="la-ball-scale-pulse la-dark la-sm" >
                <div></div>
              </div>
            </div>
        </h3>

        <div class="card-tools">
          <div class="input-group input-group-md" style="width: 150px;">
            
            <input type="text" name="table_search" class="form-control float-right" placeholder="Search" wire:model="searchKey">

            <div class="input-group-append">
              <button type="submit" class="btn btn-default"><i class="fas fa-search"></i></button>
            </div>

          </div>

        </div>
      </div>

       
      <!-- /.card-header -->
      <div class="card-body table-responsive p-0">
        <table class="table table-hover text-nowrap table-bordered">
          <thead>
            <tr>
              <th style="width: 1%;">Id</th>
	         <th>First Name</th>
	         <th>Middlename</th>
	         <th>Last Name</th>
	         <th>Age</th>
	         <th>Gender</th>
	         <th style="width: 10%;">Action</th>
            </tr>
          </thead>
          <tbody>
            @foreach ($clients as $element)
	      		<tr>
	      			<td>{{ $element->id }}</td>
	      			<td>{{ $element->fname }}</td>
	      			<td>{{ $element->mname }}</td>
	      			<td>{{ $element->lname }}</td>
	      			<td>{{ $element->age }}</td>
	      			<td>{{ ($element->gender === 'M' ? 'Male' : 'Female') }}</td>
	      			<td>
                <button type="button" class="btn btn-sm btn-primary" wire:click="editClient({{ $element->id }})"><i class="fa fa-edit"></i></button>
                &nbsp;
                <button type="button" class="btn btn-sm btn-danger" style="border-radius: 50%;"><i class="fa fa-trash"></i></button> 
              </td>
	      		</tr>
	      	@endforeach
          </tbody>
        </table>
      </div>
      <!-- /.card-body -->
    </div>
    <!-- /.card -->
    <br>
     {{ $clients->links() }}


  </div>






