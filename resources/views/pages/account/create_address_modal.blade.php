<div class="modal fade" id="CreateAddressModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title modal-address-title" id="updateAddressTitle">Create Adress </h5>
                <button type="button" class="btn-close border-none bg-transparent" data-bs-dismiss="modal"
                    aria-label="Close"><i class="ti-close"></i></button>
            </div>
            <div class="modal-body modal-address-body">
                <!-- Form goes here -->
                <form id="create-address-form" action="#" method="dialog">
                    @csrf
                    <div class="row">
                        <div class="col-12 mb-3 ">
                            <label for="name" class="form-label">Name</label>
                            <input type="text" class="form-control" id="receiver_name" name="receiver_name"
                                placeholder="Nguyen Van A" required>
                        </div>
                        <div class="col-12 mb-3 ">
                            <label for="phone_number" class="form-label">Phone number</label>
                            <input type="number" class="form-control" id="phone_number" name="phone_number"
                                placeholder="0123123123" required>
                        </div>
                        <div class="col-12 mb-3 ">
                            <label for="address" class="form-label">Address</label>
                            <input type="text" class="form-control" id="address" name="address"
                                placeholder="House number, Street name" required>
                        </div>
                        <div class="col-lg-4 col-md-4 mb-3">
                            <label for="state" class="form-label">State</label>
                            <select id="state" name="state" class="form-control" required>
                                <option value="">Select State</option>
                            </select>
                        </div>
                        <div class="col-lg-4 col-md-4 mb-3">
                            <label for="city" class="form-label">City</label>
                            <select id="city" name="city" class="form-control" required>
                                <option value="">Select City</option>
                            </select>
                        </div>
                        <div class="col-lg-4 col-md-4 mb-3">
                            <label for="pincode" class="form-label">Pincode</label>
                            <input type="text" class="form-control" id="pincode" name="pincode" placeholder="Pincode"
                                required>
                        </div>
                    </div>

                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" value="true" name="is_default"
                            id="is_default">
                        <label class="form-check-label" for="male">Make this address default</label>
                    </div>
                    <div id="create_address_response" class="alert ">
                    </div>
                    <div class="address-action-modal"> <button type="submit"
                            class="btn btn-primary float-right px-4 mx-2">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
