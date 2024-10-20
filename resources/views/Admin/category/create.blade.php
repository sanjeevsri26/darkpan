@extends('Admin.layouts.master')

@section('main-body')
<div class="dashboard-main-wrapper">
    <div class="top-navbar flex-between gap-16">
        <div class="flex-align gap-16">
            <!-- Toggle Button Start -->
            <button type="button" class="toggle-btn d-xl-none d-flex text-26 text-gray-500">
                <i class="ph ph-list"></i>
            </button>
            <!-- Toggle Button End -->

            <!-- Search Form Start -->
            <form action="#" class="w-350 d-sm-block d-none">
                <div class="position-relative">
                    <button type="submit" class="input-icon text-xl d-flex text-gray-100 pointer-event-none">
                        <i class="ph ph-magnifying-glass"></i>
                    </button>
                    <input type="text" class="form-control ps-40 h-40 border-transparent focus-border-main-600 bg-main-50 rounded-pill placeholder-15" placeholder="Search...">
                </div>
            </form>
            <!-- Search Form End -->
        </div>
    </div>

    <div class="container mt-4">
        <h2>Create Category</h2>
        <form action="{{ route('category.store') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="categoryName" class="form-label">Category Name</label>
                <input type="text" class="form-control" id="categoryName" name="categoryName" placeholder="Enter category name" required>
            </div>

            <div id="subcategoryContainer">
                <h4>Subcategories</h4>
                <div class="mb-3 subcategory">
                    <label for="subcategoryName" class="form-label">Subcategory Name</label>
                    <input type="text" class="form-control" name="subcategories[]" placeholder="Enter subcategory name" required>
                </div>
            </div>

            <button type="button" class="btn btn-secondary" id="addSubcategory">Add Another Subcategory</button>
            <button type="submit" class="btn btn-primary mt-3">Create Category</button>
        </form>
    </div>

    <script>
        document.getElementById('addSubcategory').addEventListener('click', function() {
            const subcategoryContainer = document.getElementById('subcategoryContainer');
            const newSubcategory = document.createElement('div');
            newSubcategory.classList.add('mb-3', 'subcategory');
            newSubcategory.innerHTML = `
                <label for="subcategoryName" class="form-label">Subcategory Name</label>
                <input type="text" class="form-control" name="subcategories[]" placeholder="Enter subcategory name" required>
            `;
            subcategoryContainer.appendChild(newSubcategory);
        });
    </script>
</div>
@endsection
