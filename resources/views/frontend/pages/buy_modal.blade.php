<!-- Modal -->
<div class="modal fade" id="buyModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
                <form action="{{ route('buy-add.store') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label class="col-form-label">Buy Ad Type <span class="text-danger">*</span></label>
                        <select class="custom-select" name="type" required>
                            <option selected="selected">Select a sales product Type</option>
                            <option value="product" {{ old('type') == 'product' ? 'selected' : '' }}>Product</option>
                            <option value="property" {{ old('type') == 'property' ? 'selected' : '' }}>Property</option>
                            <option value="service" {{ old('type') == 'service' ? 'selected' : '' }}>Service</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="buyProduct">Buy Ad Product <span class="text-danger">*</span></label>
                        <input type="text" name="name" class="form-control" id="buyProduct"
                            aria-describedby="sales" value="{{ old('name') ?? '' }}"
                            placeholder="Enter Sales Product Name" required>
                    </div>
                    <div class="form-group">
                        <label for="saleProduct">Buy Ad  Product Description</label>
                        <textarea name="description" class="form-control" id="" cols="30" rows="5"
                            placeholder="Enter Sales Product Description">{{ old('description') ?? '' }}</textarea>
                    </div>
                    <div class="form-group">
                        <label for="salesImage">Image <span class="text-danger">*</span></label>
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
