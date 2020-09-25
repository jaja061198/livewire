 <div>
 <div class="modal fade" id="modal-lg" wire:ignore.self data-backdrop="static" data-keyboard="false">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title">
            <p> Edit Client </p>
        </h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close" wire:click="closeModal('edit')">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">

         <div class="form-group row">
            <label for="fname" class="col-sm-2 col-form-label">First Name</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" id="fname" name="fname" placeholder="First Name" required wire:model="fname">
            </div>
          </div>

          <div class="form-group row">
            <label for="mname" class="col-sm-2 col-form-label">Middle Name</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" id="mname" name="mname" placeholder="Middle Name" required wire:model="mname">
            </div>
          </div>

          <div class="form-group row">
            <label for="lname" class="col-sm-2 col-form-label">Last Name</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" id="lname" name="lname" placeholder="First Name" required wire:model="lname">
            </div>
          </div>

          <div class="form-group row">
            <label for="gender" class="col-sm-2 col-form-label">Gender</label>
            <div class="col-sm-4">
              <input type="text" class="form-control" id="gender" name="gender" placeholder="Gender" required wire:model="gender">
            </div>

            <label for="Age" class="col-sm-2 col-form-label">Age</label>
            <div class="col-sm-4">
              <input type="text" class="form-control" id="Age" name="age" placeholder="Age" required wire:model="age">
            </div>

          </div>

          <div class="form-group row">
            <label for="contact" class="col-sm-2 col-form-label">Contact No</label>
            <div class="col-sm-4">
              <input type="text" class="form-control" id="contact" name="contact" placeholder="Contact" required wire:model="contact_no">
            </div>

            <label for="email" class="col-sm-2 col-form-label">Email</label>
            <div class="col-sm-4">
              <input type="email" class="form-control" id="email" name="email" placeholder="Email" required wire:model="email">
            </div>

          </div>

      </div>
      <div class="modal-footer justify-content-between">
        <button type="button" class="btn btn-default" data-dismiss="modal" wire:click="closeModal('edit')">Close</button>
        <button type="button" class="btn btn-primary" wire:click="update">Save changes</button>
      </div>
    </div>
    <!-- /.modal-content -->
  </div>
  <!-- /.modal-dialog -->
</div>
<!-- /.modal -->



{{-- ADD MODAL  --}}
 <div class="modal fade" id="modal-lg-add" wire:ignore.self data-backdrop="static" data-keyboard="false">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title">
            <p> Add Client </p>
        </h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close" wire:click="closeModal('add')">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">

         <div class="form-group row">
            <label for="add_fname" class="col-sm-2 col-form-label">First Name</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" id="add_fname" name="fname" placeholder="First Name" required wire:model="fname">
            </div>
          </div>

          <div class="form-group row">
            <label for="add_mname" class="col-sm-2 col-form-label">Middle Name</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" id="add_mname" name="mname" placeholder="Middle Name" required wire:model="mname">
            </div>
          </div>

          <div class="form-group row">
            <label for="add_lname" class="col-sm-2 col-form-label">Last Name</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" id="add_lname" name="lname" placeholder="Last Name" required wire:model="lname">
            </div>
          </div>

          <div class="form-group row">
            <label for="add_gender" class="col-sm-2 col-form-label">Gender</label>
            <div class="col-sm-4">
              <input type="text" class="form-control" id="add_gender" name="gender" placeholder="Gender" required wire:model="gender">
            </div>

            <label for="add_Age" class="col-sm-2 col-form-label">Age</label>
            <div class="col-sm-4">
              <input type="text" class="form-control" id="add_Age" name="age" placeholder="Age" required wire:model="age">
            </div>

          </div>

          <div class="form-group row">
            <label for="add_contact" class="col-sm-2 col-form-label">Contact No</label>
            <div class="col-sm-4">
              <input type="text" class="form-control" id="add_contact" name="contact" placeholder="Contact" required wire:model="contact_no">
            </div>

            <label for="add_email" class="col-sm-2 col-form-label">Email</label>
            <div class="col-sm-4">
              <input type="email" class="form-control" id="add_email" name="email" placeholder="Email"  required wire:model="email">
            </div>

          </div>

      </div>
      <div class="modal-footer justify-content-between">
        <button type="button" class="btn btn-default" wire:click="closeModal('add')">Close</button>
        <button type="button" class="btn btn-primary" wire:click="insert" id="add">Save changes</button>
      </div>
    </div>
    <!-- /.modal-content -->
  </div>
  <!-- /.modal-dialog -->
</div>
<!-- /.modal -->
</div>