<!-- Modal -->
<div class="modal fade" id="rentModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Add New Sales Ads</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                @include('backend.partials.message')
                <form action="{{ route('rent-add.store') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label class="col-form-label">Rent Ad Type <span class="text-danger">*</span></label>
                        <select class="custom-select" name="type" required>
                            <option selected="selected">Select a sales product Type</option>
                            <option value="for_rent" {{ old('type') == 'for_rent' ? 'selected' : '' }}>For Rent</option>
                            <option value="to_rent" {{ old('type') == 'to_rent' ? 'selected' : '' }}>To Rent</option>
                            <option value="promotional" {{ old('type') == 'promotional' ? 'selected' : '' }}>Promotional</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="rentProduct">Rent Product <span class="text-danger">*</span></label>
                        <input type="text" name="name" class="form-control" id="rentProduct"
                            aria-describedby="sales" value="{{ old('name') ?? '' }}"
                            placeholder="Enter Sales Product Name" required>
                    </div>
                    <div class="form-group">
                        <label for="rentyproductDescruption">Rent Product Description</label>
                        <textarea name="description" class="form-control" id="" cols="30" rows="5"
                            placeholder="Enter Sales Product Description">{{ old('description') ?? '' }}</textarea>
                    </div>
                    <div class="form-group">
                        <label for="rentImage">Image <span class="text-danger">*</span></label>
                        <input type="file" name="image" class="form-control" id="salesImage" required>
                    </div>
                    <div class="form-group">
                        <label for="salesImage">Big Banner</label>
                        <input type="file" name="banner" class="form-control" id="salesImage">
                    </div>
                    <button type="submit" class="btn btn-primary mt-4 pr-4 pl-4">Submit</button>
                </form>
            </div>

        </div>
    </div>
</div>
