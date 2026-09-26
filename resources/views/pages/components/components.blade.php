@extends('layout.app')

@section('main')
    <section class="wm-button-preview py-5">

        <div class="container">

            <!-- ======================================================
                 Header
                 ====================================================== -->

            <div class="row">
                <div class="col-12">

                    <div class="mb-4">

                        <h2 class="mb-2">
                            Button Components
                        </h2>

                        <p class="text-muted mb-0">
                            WorkManagement button system preview.
                        </p>

                    </div>

                </div>
            </div>


            <!-- ======================================================
                 Basic Buttons
                 ====================================================== -->

            <div class="row g-4">

                <div class="col-12">

                    <div class="card">

                        <div class="card-header">
                            <h5 class="mb-0">
                                Basic Buttons
                            </h5>
                        </div>

                        <div class="card-body">

                            <div class="d-flex flex-wrap gap-2">

                                <button
                                    type="button"
                                    class="wm-btn wm-btn--primary"
                                >
                                    Primary
                                </button>

                                <button
                                    type="button"
                                    class="wm-btn wm-btn--secondary"
                                >
                                    Secondary
                                </button>

                                <button
                                    type="button"
                                    class="wm-btn wm-btn--success"
                                >
                                    Success
                                </button>

                                <button
                                    type="button"
                                    class="wm-btn wm-btn--warning"
                                >
                                    Warning
                                </button>

                                <button
                                    type="button"
                                    class="wm-btn wm-btn--danger"
                                >
                                    Danger
                                </button>

                                <button
                                    type="button"
                                    class="wm-btn wm-btn--ghost"
                                >
                                    Ghost
                                </button>

                                <button
                                    type="button"
                                    class="wm-btn wm-btn--link"
                                >
                                    Link
                                </button>

                            </div>

                        </div>

                    </div>

                </div>


                <!-- ==================================================
                     Soft Buttons
                     ================================================== -->

                <div class="col-12">

                    <div class="card">

                        <div class="card-header">
                            <h5 class="mb-0">
                                Soft Buttons
                            </h5>
                        </div>

                        <div class="card-body">

                            <div class="d-flex flex-wrap gap-2">

                                <button
                                    type="button"
                                    class="wm-btn wm-btn--soft-primary"
                                >
                                    Soft Primary
                                </button>

                                <button
                                    type="button"
                                    class="wm-btn wm-btn--soft-success"
                                >
                                    Soft Success
                                </button>

                                <button
                                    type="button"
                                    class="wm-btn wm-btn--soft-danger"
                                >
                                    Soft Danger
                                </button>

                            </div>

                        </div>

                    </div>

                </div>


                <!-- ==================================================
                     Button Sizes
                     ================================================== -->

                <div class="col-12 col-lg-6">

                    <div class="card h-100">

                        <div class="card-header">
                            <h5 class="mb-0">
                                Button Sizes
                            </h5>
                        </div>

                        <div class="card-body">

                            <div class="d-flex flex-wrap align-items-center gap-2">

                                <button
                                    type="button"
                                    class="wm-btn wm-btn--primary wm-btn--sm"
                                >
                                    Small
                                </button>

                                <button
                                    type="button"
                                    class="wm-btn wm-btn--primary wm-btn--md"
                                >
                                    Medium
                                </button>

                                <button
                                    type="button"
                                    class="wm-btn wm-btn--primary wm-btn--lg"
                                >
                                    Large
                                </button>

                            </div>

                        </div>

                    </div>

                </div>


                <!-- ==================================================
                     Rounded Buttons
                     ================================================== -->

                <div class="col-12 col-lg-6">

                    <div class="card h-100">

                        <div class="card-header">
                            <h5 class="mb-0">
                                Rounded Buttons
                            </h5>
                        </div>

                        <div class="card-body">

                            <div class="d-flex flex-wrap gap-2">

                                <button
                                    type="button"
                                    class="wm-btn wm-btn--primary wm-btn--rounded"
                                >
                                    Primary
                                </button>

                                <button
                                    type="button"
                                    class="wm-btn wm-btn--success wm-btn--rounded"
                                >
                                    Success
                                </button>

                                <button
                                    type="button"
                                    class="wm-btn wm-btn--danger wm-btn--rounded"
                                >
                                    Danger
                                </button>

                            </div>

                        </div>

                    </div>

                </div>


                <!-- ==================================================
                     Full Width
                     ================================================== -->

                <div class="col-12 col-lg-6">

                    <div class="card h-100">

                        <div class="card-header">
                            <h5 class="mb-0">
                                Full Width Button
                            </h5>
                        </div>

                        <div class="card-body">

                            <button
                                type="button"
                                class="wm-btn wm-btn--primary wm-btn--block"
                            >
                                Create Project
                            </button>

                        </div>

                    </div>

                </div>


                <!-- ==================================================
                     Icon Buttons
                     ================================================== -->

                <div class="col-12 col-lg-6">

                    <div class="card h-100">

                        <div class="card-header">
                            <h5 class="mb-0">
                                Icon Buttons
                            </h5>
                        </div>

                        <div class="card-body">

                            <div class="d-flex flex-wrap align-items-center gap-2">

                                <!-- Small -->

                                <button
                                    type="button"
                                    class="wm-btn wm-btn--secondary wm-btn--icon wm-btn--sm"
                                    aria-label="Edit"
                                    title="Edit"
                                >
                                <span class="wm-btn__icon">
                                    <i class="ph ph-pencil-simple"></i>
                                </span>
                                </button>


                                <!-- Medium -->

                                <button
                                    type="button"
                                    class="wm-btn wm-btn--primary wm-btn--icon"
                                    aria-label="Add"
                                    title="Add"
                                >
                                <span class="wm-btn__icon">
                                    <i class="ph ph-plus"></i>
                                </span>
                                </button>


                                <!-- Large -->

                                <button
                                    type="button"
                                    class="wm-btn wm-btn--danger wm-btn--icon wm-btn--lg"
                                    aria-label="Delete"
                                    title="Delete"
                                >
                                <span class="wm-btn__icon">
                                    <i class="ph ph-trash"></i>
                                </span>
                                </button>

                            </div>

                        </div>

                    </div>

                </div>


                <!-- ==================================================
                     Buttons With Icons
                     ================================================== -->

                <div class="col-12">

                    <div class="card">

                        <div class="card-header">
                            <h5 class="mb-0">
                                Buttons With Icons
                            </h5>
                        </div>

                        <div class="card-body">

                            <div class="d-flex flex-wrap gap-2">

                                <!-- Create -->

                                <button
                                    type="button"
                                    class="wm-btn wm-btn--primary"
                                >
                                <span class="wm-btn__icon">
                                    <i class="ph ph-plus"></i>
                                </span>

                                    Create Project
                                </button>


                                <!-- Edit -->

                                <button
                                    type="button"
                                    class="wm-btn wm-btn--secondary"
                                >
                                <span class="wm-btn__icon">
                                    <i class="ph ph-pencil-simple"></i>
                                </span>

                                    Edit
                                </button>


                                <!-- Download -->

                                <button
                                    type="button"
                                    class="wm-btn wm-btn--success"
                                >
                                <span class="wm-btn__icon">
                                    <i class="ph ph-download-simple"></i>
                                </span>

                                    Download
                                </button>


                                <!-- Delete -->

                                <button
                                    type="button"
                                    class="wm-btn wm-btn--danger"
                                >
                                <span class="wm-btn__icon">
                                    <i class="ph ph-trash"></i>
                                </span>

                                    Delete
                                </button>


                                <!-- Continue -->

                                <button
                                    type="button"
                                    class="wm-btn wm-btn--primary"
                                >
                                    Continue

                                    <span class="wm-btn__icon">
                                    <i class="ph ph-arrow-right"></i>
                                </span>
                                </button>

                            </div>

                        </div>

                    </div>

                </div>


                <!-- ==================================================
                     Disabled Buttons
                     ================================================== -->

                <div class="col-12 col-lg-6">

                    <div class="card h-100">

                        <div class="card-header">
                            <h5 class="mb-0">
                                Disabled Buttons
                            </h5>
                        </div>

                        <div class="card-body">

                            <div class="d-flex flex-wrap gap-2">

                                <button
                                    type="button"
                                    class="wm-btn wm-btn--primary"
                                    disabled
                                >
                                    Primary
                                </button>

                                <button
                                    type="button"
                                    class="wm-btn wm-btn--secondary"
                                    disabled
                                >
                                    Secondary
                                </button>

                                <button
                                    type="button"
                                    class="wm-btn wm-btn--danger"
                                    disabled
                                >
                                    Danger
                                </button>

                            </div>

                        </div>

                    </div>

                </div>


                <!-- ==================================================
                     Loading Buttons
                     ================================================== -->

                <div class="col-12 col-lg-6">

                    <div class="card h-100">

                        <div class="card-header">
                            <h5 class="mb-0">
                                Loading Buttons
                            </h5>
                        </div>

                        <div class="card-body">

                            <div class="d-flex flex-wrap gap-2">

                                <button
                                    type="button"
                                    class="wm-btn wm-btn--primary is-loading"
                                    disabled
                                >
                                    Saving...
                                </button>

                                <button
                                    type="button"
                                    class="wm-btn wm-btn--success is-loading"
                                    disabled
                                >
                                    Processing...
                                </button>

                                <button
                                    type="button"
                                    class="wm-btn wm-btn--danger is-loading"
                                    disabled
                                >
                                    Deleting...
                                </button>

                            </div>

                        </div>

                    </div>

                </div>


                <!-- ==================================================
                     Button Group
                     ================================================== -->

                <div class="col-12 col-lg-6">

                    <div class="card h-100">

                        <div class="card-header">
                            <h5 class="mb-0">
                                Button Group
                            </h5>
                        </div>

                        <div class="card-body">

                            <div class="wm-btn-group">

                                <button
                                    type="button"
                                    class="wm-btn wm-btn--secondary"
                                >
                                    Previous
                                </button>

                                <button
                                    type="button"
                                    class="wm-btn wm-btn--primary"
                                >
                                    Next
                                </button>

                            </div>

                        </div>

                    </div>

                </div>


                <!-- ==================================================
                     View Switcher
                     ================================================== -->

                <div class="col-12 col-lg-6">

                    <div class="card h-100">

                        <div class="card-header">
                            <h5 class="mb-0">
                                View Switcher
                            </h5>
                        </div>

                        <div class="card-body">

                            <div class="wm-btn-group">

                                <button
                                    type="button"
                                    class="wm-btn wm-btn--primary"
                                >
                                <span class="wm-btn__icon">
                                    <i class="ph ph-list"></i>
                                </span>

                                    List
                                </button>

                                <button
                                    type="button"
                                    class="wm-btn wm-btn--secondary"
                                >
                                <span class="wm-btn__icon">
                                    <i class="ph ph-squares-four"></i>
                                </span>

                                    Grid
                                </button>

                            </div>

                        </div>

                    </div>

                </div>


                <!-- ==================================================
                     CRUD Actions
                     ================================================== -->

                <div class="col-12">

                    <div class="card">

                        <div class="card-header">
                            <h5 class="mb-0">
                                CRUD Actions
                            </h5>
                        </div>

                        <div class="card-body">

                            <div class="d-flex flex-wrap align-items-center gap-2">

                                <!-- View -->

                                <button
                                    type="button"
                                    class="wm-btn wm-btn--secondary wm-btn--icon wm-btn--sm"
                                    aria-label="View"
                                    title="View"
                                >
                                <span class="wm-btn__icon">
                                    <i class="ph ph-eye"></i>
                                </span>
                                </button>


                                <!-- Edit -->

                                <button
                                    type="button"
                                    class="wm-btn wm-btn--soft-primary wm-btn--icon wm-btn--sm"
                                    aria-label="Edit"
                                    title="Edit"
                                >
                                <span class="wm-btn__icon">
                                    <i class="ph ph-pencil-simple"></i>
                                </span>
                                </button>


                                <!-- Duplicate -->

                                <button
                                    type="button"
                                    class="wm-btn wm-btn--soft-success wm-btn--icon wm-btn--sm"
                                    aria-label="Duplicate"
                                    title="Duplicate"
                                >
                                <span class="wm-btn__icon">
                                    <i class="ph ph-copy"></i>
                                </span>
                                </button>


                                <!-- Delete -->

                                <button
                                    type="button"
                                    class="wm-btn wm-btn--soft-danger wm-btn--icon wm-btn--sm"
                                    aria-label="Delete"
                                    title="Delete"
                                >
                                <span class="wm-btn__icon">
                                    <i class="ph ph-trash"></i>
                                </span>
                                </button>

                            </div>

                        </div>

                    </div>

                </div>


                <!-- ==================================================
                     WorkManagement Actions
                     ================================================== -->

                <div class="col-12">

                    <div class="card">

                        <div class="card-header">
                            <h5 class="mb-0">
                                WorkManagement Actions
                            </h5>
                        </div>

                        <div class="card-body">

                            <div class="d-flex flex-wrap gap-2">

                                <!-- Create -->

                                <button
                                    type="button"
                                    class="wm-btn wm-btn--primary"
                                >
                                <span class="wm-btn__icon">
                                    <i class="ph ph-plus"></i>
                                </span>

                                    Create Project
                                </button>


                                <!-- Filter -->

                                <button
                                    type="button"
                                    class="wm-btn wm-btn--secondary"
                                >
                                <span class="wm-btn__icon">
                                    <i class="ph ph-funnel"></i>
                                </span>

                                    Filter
                                </button>


                                <!-- Search -->

                                <button
                                    type="button"
                                    class="wm-btn wm-btn--secondary"
                                >
                                <span class="wm-btn__icon">
                                    <i class="ph ph-magnifying-glass"></i>
                                </span>

                                    Search
                                </button>


                                <!-- Export -->

                                <button
                                    type="button"
                                    class="wm-btn wm-btn--secondary"
                                >
                                <span class="wm-btn__icon">
                                    <i class="ph ph-download-simple"></i>
                                </span>

                                    Export
                                </button>


                                <!-- Approve -->

                                <button
                                    type="button"
                                    class="wm-btn wm-btn--success"
                                >
                                <span class="wm-btn__icon">
                                    <i class="ph ph-check"></i>
                                </span>

                                    Approve
                                </button>


                                <!-- Pending -->

                                <button
                                    type="button"
                                    class="wm-btn wm-btn--warning"
                                >
                                <span class="wm-btn__icon">
                                    <i class="ph ph-clock"></i>
                                </span>

                                    Pending
                                </button>


                                <!-- Delete -->

                                <button
                                    type="button"
                                    class="wm-btn wm-btn--danger"
                                >
                                <span class="wm-btn__icon">
                                    <i class="ph ph-trash"></i>
                                </span>

                                    Delete
                                </button>

                            </div>

                        </div>

                    </div>

                </div>


                <!-- ==================================================
                     Project Header Example
                     ================================================== -->

                <div class="col-12">

                    <div class="card">

                        <div class="card-body">

                            <div class="row align-items-center">

                                <div class="col-12 col-md">

                                    <div>

                                        <h4 class="mb-1">
                                            Projects
                                        </h4>

                                        <p class="mb-0 text-muted">
                                            Manage and track your projects.
                                        </p>

                                    </div>

                                </div>


                                <div class="col-12 col-md-auto mt-3 mt-md-0">

                                    <div class="d-flex flex-wrap gap-2">

                                        <button
                                            type="button"
                                            class="wm-btn wm-btn--secondary"
                                        >
                                        <span class="wm-btn__icon">
                                            <i class="ph ph-funnel"></i>
                                        </span>

                                            Filter
                                        </button>

                                        <button
                                            type="button"
                                            class="wm-btn wm-btn--primary"
                                        >
                                        <span class="wm-btn__icon">
                                            <i class="ph ph-plus"></i>
                                        </span>

                                            Create Project
                                        </button>

                                    </div>

                                </div>

                            </div>

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </section>

    <section class="wm-form-preview py-5">

        <div class="container">

            <!-- ======================================================
                 Section Header
                 ====================================================== -->

            <div class="row">
                <div class="col-12">

                    <div class="mb-4">

                        <h2 class="mb-2">
                            Form Components
                        </h2>

                        <p class="mb-0 text-muted">
                            WorkManagement form system preview.
                        </p>

                    </div>

                </div>
            </div>


            <!-- ======================================================
                 Basic Form
                 ====================================================== -->

            <div class="row g-4">

                <div class="col-12">

                    <div class="card">

                        <div class="card-header">
                            <h5 class="mb-0">
                                Basic Form
                            </h5>
                        </div>

                        <div class="card-body">

                            <div class="row g-4">

                                <!-- First Name -->

                                <div class="col-12 col-md-6">

                                    <div class="wm-form-group">

                                        <label
                                            for="first_name"
                                            class="wm-form-label"
                                        >
                                            First Name
                                        </label>

                                        <input
                                            type="text"
                                            id="first_name"
                                            name="first_name"
                                            class="wm-form-control"
                                            placeholder="Enter first name"
                                        >

                                    </div>

                                </div>


                                <!-- Last Name -->

                                <div class="col-12 col-md-6">

                                    <div class="wm-form-group">

                                        <label
                                            for="last_name"
                                            class="wm-form-label"
                                        >
                                            Last Name
                                        </label>

                                        <input
                                            type="text"
                                            id="last_name"
                                            name="last_name"
                                            class="wm-form-control"
                                            placeholder="Enter last name"
                                        >

                                    </div>

                                </div>


                                <!-- Email -->

                                <div class="col-12 col-md-6">

                                    <div class="wm-form-group">

                                        <label
                                            for="email"
                                            class="wm-form-label is-required"
                                        >
                                            Email Address
                                        </label>

                                        <input
                                            type="email"
                                            id="email"
                                            name="email"
                                            class="wm-form-control"
                                            placeholder="name@example.com"
                                        >

                                        <span class="wm-form-help">
                                        We'll never share your email.
                                    </span>

                                    </div>

                                </div>


                                <!-- Phone -->

                                <div class="col-12 col-md-6">

                                    <div class="wm-form-group">

                                        <label
                                            for="phone"
                                            class="wm-form-label"
                                        >
                                            Phone Number
                                        </label>

                                        <input
                                            type="tel"
                                            id="phone"
                                            name="phone"
                                            class="wm-form-control"
                                            placeholder="+880 1XXX-XXXXXX"
                                        >

                                    </div>

                                </div>


                                <!-- Password -->

                                <div class="col-12 col-md-6">

                                    <div class="wm-form-group">

                                        <label
                                            for="password"
                                            class="wm-form-label is-required"
                                        >
                                            Password
                                        </label>

                                        <input
                                            type="password"
                                            id="password"
                                            name="password"
                                            class="wm-form-control"
                                            placeholder="Enter password"
                                        >

                                    </div>

                                </div>


                                <!-- Website -->

                                <div class="col-12 col-md-6">

                                    <div class="wm-form-group">

                                        <label
                                            for="website"
                                            class="wm-form-label"
                                        >
                                            Website
                                        </label>

                                        <input
                                            type="url"
                                            id="website"
                                            name="website"
                                            class="wm-form-control"
                                            placeholder="https://example.com"
                                        >

                                    </div>

                                </div>


                                <!-- Description -->

                                <div class="col-12">

                                    <div class="wm-form-group">

                                        <label
                                            for="description"
                                            class="wm-form-label"
                                        >
                                            Description
                                        </label>

                                        <textarea
                                            id="description"
                                            name="description"
                                            class="wm-form-control wm-form-textarea"
                                            placeholder="Write something..."
                                        ></textarea>

                                        <span class="wm-form-help">
                                        Maximum 500 characters.
                                    </span>

                                    </div>

                                </div>


                                <!-- Form Actions -->

                                <div class="col-12">

                                    <div class="wm-form-actions">

                                        <button
                                            type="button"
                                            class="wm-btn wm-btn--secondary"
                                        >
                                            Cancel
                                        </button>

                                        <button
                                            type="submit"
                                            class="wm-btn wm-btn--primary"
                                        >
                                        <span class="wm-btn__icon">
                                            <i class="ph ph-check"></i>
                                        </span>

                                            Save Changes
                                        </button>

                                    </div>

                                </div>

                            </div>

                        </div>

                    </div>

                </div>


                <!-- ==================================================
                     Input Sizes
                     ================================================== -->

                <div class="col-12 col-lg-6">

                    <div class="card h-100">

                        <div class="card-header">
                            <h5 class="mb-0">
                                Input Sizes
                            </h5>
                        </div>

                        <div class="card-body">

                            <!-- Small -->

                            <div class="wm-form-group">

                                <label
                                    for="input_small"
                                    class="wm-form-label"
                                >
                                    Small
                                </label>

                                <input
                                    type="text"
                                    id="input_small"
                                    class="wm-form-control wm-form-control--sm"
                                    placeholder="Small input"
                                >

                            </div>


                            <!-- Medium -->

                            <div class="wm-form-group">

                                <label
                                    for="input_medium"
                                    class="wm-form-label"
                                >
                                    Medium
                                </label>

                                <input
                                    type="text"
                                    id="input_medium"
                                    class="wm-form-control"
                                    placeholder="Medium input"
                                >

                            </div>


                            <!-- Large -->

                            <div class="wm-form-group mb-0">

                                <label
                                    for="input_large"
                                    class="wm-form-label"
                                >
                                    Large
                                </label>

                                <input
                                    type="text"
                                    id="input_large"
                                    class="wm-form-control wm-form-control--lg"
                                    placeholder="Large input"
                                >

                            </div>

                        </div>

                    </div>

                </div>


                <!-- ==================================================
                     Select
                     ================================================== -->

                <div class="col-12 col-lg-6">

                    <div class="card h-100">

                        <div class="card-header">
                            <h5 class="mb-0">
                                Select
                            </h5>
                        </div>

                        <div class="card-body">

                            <div class="wm-form-group">

                                <label
                                    for="project"
                                    class="wm-form-label"
                                >
                                    Project
                                </label>

                                <div class="wm-select">

                                    <select
                                        id="project"
                                        name="project"
                                        class="wm-form-select"
                                    >
                                        <option value="">
                                            Select project
                                        </option>

                                        <option value="1">
                                            Website Redesign
                                        </option>

                                        <option value="2">
                                            Mobile Application
                                        </option>

                                        <option value="3">
                                            Marketing Campaign
                                        </option>

                                    </select>

                                </div>

                            </div>


                            <div class="wm-form-group mb-0">

                                <label
                                    for="project_large"
                                    class="wm-form-label"
                                >
                                    Large Select
                                </label>

                                <div class="wm-select">

                                    <select
                                        id="project_large"
                                        class="wm-form-select wm-form-select--lg"
                                    >
                                        <option>
                                            Select project
                                        </option>

                                        <option>
                                            Website Redesign
                                        </option>

                                        <option>
                                            Mobile Application
                                        </option>

                                    </select>

                                </div>

                            </div>

                        </div>

                    </div>

                </div>


                <!-- ==================================================
                     Search Input
                     ================================================== -->

                <div class="col-12 col-lg-6">

                    <div class="card h-100">

                        <div class="card-header">
                            <h5 class="mb-0">
                                Search Input
                            </h5>
                        </div>

                        <div class="card-body">

                            <div class="wm-form-group">

                                <label
                                    for="search"
                                    class="wm-form-label"
                                >
                                    Search Projects
                                </label>

                                <div class="wm-search">

                                <span class="wm-search__icon">
                                    <i class="ph ph-magnifying-glass"></i>
                                </span>

                                    <input
                                        type="search"
                                        id="search"
                                        class="wm-form-control"
                                        placeholder="Search projects..."
                                    >

                                </div>

                            </div>


                            <!-- Search With Clear -->

                            <div class="wm-form-group mb-0">

                                <label
                                    for="search_clear"
                                    class="wm-form-label"
                                >
                                    Search With Clear
                                </label>

                                <div class="wm-search has-clear">

                                <span class="wm-search__icon">
                                    <i class="ph ph-magnifying-glass"></i>
                                </span>

                                    <input
                                        type="search"
                                        id="search_clear"
                                        class="wm-form-control"
                                        value="Website Redesign"
                                    >

                                    <button
                                        type="button"
                                        class="wm-search__clear"
                                        aria-label="Clear search"
                                    >
                                        <i class="ph ph-x"></i>
                                    </button>

                                </div>

                            </div>

                        </div>

                    </div>

                </div>


                <!-- ==================================================
                     Input Group
                     ================================================== -->

                <div class="col-12 col-lg-6">

                    <div class="card h-100">

                        <div class="card-header">
                            <h5 class="mb-0">
                                Input Group
                            </h5>
                        </div>

                        <div class="card-body">

                            <div class="wm-form-group">

                                <label
                                    for="website_url"
                                    class="wm-form-label"
                                >
                                    Website URL
                                </label>

                                <div class="wm-input-group">

                                <span class="wm-input-group__text">
                                    https://
                                </span>

                                    <input
                                        type="text"
                                        id="website_url"
                                        class="wm-form-control"
                                        placeholder="example.com"
                                    >

                                </div>

                            </div>


                            <div class="wm-form-group mb-0">

                                <label
                                    for="price"
                                    class="wm-form-label"
                                >
                                    Project Budget
                                </label>

                                <div class="wm-input-group">

                                <span class="wm-input-group__text">
                                    $
                                </span>

                                    <input
                                        type="number"
                                        id="price"
                                        class="wm-form-control"
                                        placeholder="0.00"
                                    >

                                    <span class="wm-input-group__text">
                                    USD
                                </span>

                                </div>

                            </div>

                        </div>

                    </div>

                </div>


                <!-- ==================================================
                     Checkbox
                     ================================================== -->

                <div class="col-12 col-lg-6">

                    <div class="card h-100">

                        <div class="card-header">
                            <h5 class="mb-0">
                                Checkbox
                            </h5>
                        </div>

                        <div class="card-body">

                            <div class="wm-check-group">

                                <label class="wm-check">

                                    <input
                                        type="checkbox"
                                        name="notifications"
                                        checked
                                    >

                                    <span>
                                    Email notifications
                                </span>

                                </label>


                                <label class="wm-check">

                                    <input
                                        type="checkbox"
                                        name="updates"
                                    >

                                    <span>
                                    Product updates
                                </span>

                                </label>


                                <label class="wm-check">

                                    <input
                                        type="checkbox"
                                        name="marketing"
                                    >

                                    <span>
                                    Marketing emails
                                </span>

                                </label>


                                <label class="wm-check is-disabled">

                                    <input
                                        type="checkbox"
                                        disabled
                                    >

                                    <span>
                                    Disabled option
                                </span>

                                </label>

                            </div>

                        </div>

                    </div>

                </div>


                <!-- ==================================================
                     Radio
                     ================================================== -->

                <div class="col-12 col-lg-6">

                    <div class="card h-100">

                        <div class="card-header">
                            <h5 class="mb-0">
                                Radio
                            </h5>
                        </div>

                        <div class="card-body">

                            <div class="wm-radio-group">

                                <label class="wm-radio">

                                    <input
                                        type="radio"
                                        name="project_type"
                                        value="internal"
                                        checked
                                    >

                                    <span>
                                    Internal Project
                                </span>

                                </label>


                                <label class="wm-radio">

                                    <input
                                        type="radio"
                                        name="project_type"
                                        value="client"
                                    >

                                    <span>
                                    Client Project
                                </span>

                                </label>


                                <label class="wm-radio">

                                    <input
                                        type="radio"
                                        name="project_type"
                                        value="research"
                                    >

                                    <span>
                                    Research Project
                                </span>

                                </label>


                                <label class="wm-radio is-disabled">

                                    <input
                                        type="radio"
                                        name="project_type"
                                        disabled
                                    >

                                    <span>
                                    Disabled option
                                </span>

                                </label>

                            </div>

                        </div>

                    </div>

                </div>


                <!-- ==================================================
                     Inline Checkbox / Radio
                     ================================================== -->

                <div class="col-12">

                    <div class="card">

                        <div class="card-header">
                            <h5 class="mb-0">
                                Inline Options
                            </h5>
                        </div>

                        <div class="card-body">

                            <div class="mb-4">

                                <h6 class="mb-3">
                                    Project Type
                                </h6>

                                <div class="wm-radio-group wm-radio-group--inline">

                                    <label class="wm-radio">

                                        <input
                                            type="radio"
                                            name="inline_project_type"
                                            checked
                                        >

                                        <span>
                                        Internal
                                    </span>

                                    </label>

                                    <label class="wm-radio">

                                        <input
                                            type="radio"
                                            name="inline_project_type"
                                        >

                                        <span>
                                        Client
                                    </span>

                                    </label>

                                    <label class="wm-radio">

                                        <input
                                            type="radio"
                                            name="inline_project_type"
                                        >

                                        <span>
                                        Research
                                    </span>

                                    </label>

                                </div>

                            </div>


                            <div>

                                <h6 class="mb-3">
                                    Notifications
                                </h6>

                                <div class="wm-check-group wm-check-group--inline">

                                    <label class="wm-check">

                                        <input
                                            type="checkbox"
                                            checked
                                        >

                                        <span>
                                        Email
                                    </span>

                                    </label>

                                    <label class="wm-check">

                                        <input
                                            type="checkbox"
                                        >

                                        <span>
                                        Browser
                                    </span>

                                    </label>

                                    <label class="wm-check">

                                        <input
                                            type="checkbox"
                                        >

                                        <span>
                                        Mobile
                                    </span>

                                    </label>

                                </div>

                            </div>

                        </div>

                    </div>

                </div>


                <!-- ==================================================
                     Switch
                     ================================================== -->

                <div class="col-12 col-lg-6">

                    <div class="card h-100">

                        <div class="card-header">
                            <h5 class="mb-0">
                                Switch
                            </h5>
                        </div>

                        <div class="card-body">

                            <div class="d-flex flex-column gap-3">

                                <label class="wm-switch">

                                    <input
                                        type="checkbox"
                                        checked
                                    >

                                    <span class="wm-switch__track"></span>

                                    <span class="wm-switch__label">
                                    Email notifications
                                </span>

                                </label>


                                <label class="wm-switch">

                                    <input
                                        type="checkbox"
                                    >

                                    <span class="wm-switch__track"></span>

                                    <span class="wm-switch__label">
                                    Dark mode
                                </span>

                                </label>


                                <label class="wm-switch">

                                    <input
                                        type="checkbox"
                                        disabled
                                    >

                                    <span class="wm-switch__track"></span>

                                    <span class="wm-switch__label">
                                    Disabled setting
                                </span>

                                </label>

                            </div>

                        </div>

                    </div>

                </div>


                <!-- ==================================================
                     Validation States
                     ================================================== -->

                <div class="col-12 col-lg-6">

                    <div class="card h-100">

                        <div class="card-header">
                            <h5 class="mb-0">
                                Validation States
                            </h5>
                        </div>

                        <div class="card-body">

                            <!-- Error -->

                            <div class="wm-form-group">

                                <label
                                    for="error_input"
                                    class="wm-form-label"
                                >
                                    Project Name
                                </label>

                                <input
                                    type="text"
                                    id="error_input"
                                    class="wm-form-control is-error"
                                    value=""
                                >

                                <div class="wm-form-error">

                                <span class="wm-form-error__icon">
                                    <i class="ph ph-warning-circle"></i>
                                </span>

                                    Project name is required.

                                </div>

                            </div>


                            <!-- Success -->

                            <div class="wm-form-group mb-0">

                                <label
                                    for="success_input"
                                    class="wm-form-label"
                                >
                                    Project Slug
                                </label>

                                <input
                                    type="text"
                                    id="success_input"
                                    class="wm-form-control is-success"
                                    value="website-redesign"
                                >

                                <div class="wm-form-success">

                                <span class="wm-form-success__icon">
                                    <i class="ph ph-check-circle"></i>
                                </span>

                                    Slug is available.

                                </div>

                            </div>

                        </div>

                    </div>

                </div>


                <!-- ==================================================
                     Disabled Fields
                     ================================================== -->

                <div class="col-12 col-lg-6">

                    <div class="card h-100">

                        <div class="card-header">
                            <h5 class="mb-0">
                                Disabled Fields
                            </h5>
                        </div>

                        <div class="card-body">

                            <div class="wm-form-group">

                                <label
                                    for="disabled_input"
                                    class="wm-form-label"
                                >
                                    Project Name
                                </label>

                                <input
                                    type="text"
                                    id="disabled_input"
                                    class="wm-form-control"
                                    value="Website Redesign"
                                    disabled
                                >

                            </div>


                            <div class="wm-form-group">

                                <label
                                    for="disabled_select"
                                    class="wm-form-label"
                                >
                                    Project Status
                                </label>

                                <div class="wm-select">

                                    <select
                                        id="disabled_select"
                                        class="wm-form-select"
                                        disabled
                                    >
                                        <option>
                                            Active
                                        </option>
                                    </select>

                                </div>

                            </div>


                            <div class="wm-form-group mb-0">

                                <label
                                    for="disabled_textarea"
                                    class="wm-form-label"
                                >
                                    Description
                                </label>

                                <textarea
                                    id="disabled_textarea"
                                    class="wm-form-control wm-form-textarea"
                                    disabled
                                >This field is disabled.</textarea>

                            </div>

                        </div>

                    </div>

                </div>


                <!-- ==================================================
                     Floating Label
                     ================================================== -->

                <div class="col-12 col-lg-6">

                    <div class="card h-100">

                        <div class="card-header">
                            <h5 class="mb-0">
                                Floating Label
                            </h5>
                        </div>

                        <div class="card-body">

                            <div class="wm-form-floating">

                                <input
                                    type="text"
                                    id="floating_name"
                                    class="wm-form-control"
                                    placeholder=" "
                                >

                                <label
                                    for="floating_name"
                                    class="wm-form-label"
                                >
                                    Project Name
                                </label>

                            </div>

                        </div>

                    </div>

                </div>


                <!-- ==================================================
                     Form Actions
                     ================================================== -->

                <div class="col-12 col-lg-6">

                    <div class="card h-100">

                        <div class="card-header">
                            <h5 class="mb-0">
                                Form Actions
                            </h5>
                        </div>

                        <div class="card-body">

                            <div class="wm-form-actions">

                                <button
                                    type="button"
                                    class="wm-btn wm-btn--secondary"
                                >
                                    Cancel
                                </button>

                                <button
                                    type="button"
                                    class="wm-btn wm-btn--primary"
                                >
                                <span class="wm-btn__icon">
                                    <i class="ph ph-check"></i>
                                </span>

                                    Save
                                </button>

                            </div>


                            <div class="wm-form-actions wm-form-actions--start">

                                <button
                                    type="button"
                                    class="wm-btn wm-btn--secondary"
                                >
                                    Back
                                </button>

                                <button
                                    type="button"
                                    class="wm-btn wm-btn--primary"
                                >
                                    Continue
                                    <span class="wm-btn__icon">
                                    <i class="ph ph-arrow-right"></i>
                                </span>
                                </button>

                            </div>


                            <div class="wm-form-actions wm-form-actions--between">

                                <button
                                    type="button"
                                    class="wm-btn wm-btn--danger"
                                >
                                <span class="wm-btn__icon">
                                    <i class="ph ph-trash"></i>
                                </span>

                                    Delete
                                </button>

                                <button
                                    type="button"
                                    class="wm-btn wm-btn--primary"
                                >
                                    Save Changes
                                </button>

                            </div>

                        </div>

                    </div>

                </div>


                <!-- ==================================================
                     Complete Project Form
                     ================================================== -->

                <div class="col-12">

                    <div class="card">

                        <div class="card-header">

                            <div>
                                <h5 class="mb-1">
                                    Create Project
                                </h5>

                                <p class="mb-0 text-muted">
                                    Create a new project and assign it to your team.
                                </p>
                            </div>

                        </div>

                        <div class="card-body">

                            <form>

                                <div class="row g-4">

                                    <!-- Project Name -->

                                    <div class="col-12 col-md-6">

                                        <div class="wm-form-group mb-0">

                                            <label
                                                for="project_name"
                                                class="wm-form-label is-required"
                                            >
                                                Project Name
                                            </label>

                                            <input
                                                type="text"
                                                id="project_name"
                                                name="project_name"
                                                class="wm-form-control"
                                                placeholder="Enter project name"
                                            >

                                        </div>

                                    </div>


                                    <!-- Project Code -->

                                    <div class="col-12 col-md-6">

                                        <div class="wm-form-group mb-0">

                                            <label
                                                for="project_code"
                                                class="wm-form-label"
                                            >
                                                Project Code
                                            </label>

                                            <input
                                                type="text"
                                                id="project_code"
                                                name="project_code"
                                                class="wm-form-control"
                                                placeholder="e.g. WM-001"
                                            >

                                        </div>

                                    </div>


                                    <!-- Project Type -->

                                    <div class="col-12 col-md-6">

                                        <div class="wm-form-group mb-0">

                                            <label
                                                for="project_type_select"
                                                class="wm-form-label is-required"
                                            >
                                                Project Type
                                            </label>

                                            <div class="wm-select">

                                                <select
                                                    id="project_type_select"
                                                    name="project_type"
                                                    class="wm-form-select"
                                                >
                                                    <option value="">
                                                        Select project type
                                                    </option>

                                                    <option value="internal">
                                                        Internal
                                                    </option>

                                                    <option value="client">
                                                        Client
                                                    </option>

                                                    <option value="research">
                                                        Research
                                                    </option>

                                                </select>

                                            </div>

                                        </div>

                                    </div>


                                    <!-- Project Manager -->

                                    <div class="col-12 col-md-6">

                                        <div class="wm-form-group mb-0">

                                            <label
                                                for="project_manager"
                                                class="wm-form-label"
                                            >
                                                Project Manager
                                            </label>

                                            <div class="wm-select">

                                                <select
                                                    id="project_manager"
                                                    name="project_manager"
                                                    class="wm-form-select"
                                                >
                                                    <option value="">
                                                        Select manager
                                                    </option>

                                                    <option value="1">
                                                        John Doe
                                                    </option>

                                                    <option value="2">
                                                        Sarah Wilson
                                                    </option>

                                                    <option value="3">
                                                        Michael Smith
                                                    </option>

                                                </select>

                                            </div>

                                        </div>

                                    </div>


                                    <!-- Start Date -->

                                    <div class="col-12 col-md-6">

                                        <div class="wm-form-group mb-0">

                                            <label
                                                for="start_date"
                                                class="wm-form-label"
                                            >
                                                Start Date
                                            </label>

                                            <input
                                                type="date"
                                                id="start_date"
                                                name="start_date"
                                                class="wm-form-control"
                                            >

                                        </div>

                                    </div>


                                    <!-- End Date -->

                                    <div class="col-12 col-md-6">

                                        <div class="wm-form-group mb-0">

                                            <label
                                                for="end_date"
                                                class="wm-form-label"
                                            >
                                                End Date
                                            </label>

                                            <input
                                                type="date"
                                                id="end_date"
                                                name="end_date"
                                                class="wm-form-control"
                                            >

                                        </div>

                                    </div>


                                    <!-- Description -->

                                    <div class="col-12">

                                        <div class="wm-form-group mb-0">

                                            <label
                                                for="project_description"
                                                class="wm-form-label"
                                            >
                                                Description
                                            </label>

                                            <textarea
                                                id="project_description"
                                                name="description"
                                                class="wm-form-control wm-form-textarea"
                                                placeholder="Describe your project..."
                                            ></textarea>

                                        </div>

                                    </div>


                                    <!-- Settings -->

                                    <div class="col-12">

                                        <div class="wm-form-group mb-0">

                                            <label class="wm-form-label">
                                                Project Settings
                                            </label>

                                            <div class="wm-check-group">

                                                <label class="wm-check">

                                                    <input
                                                        type="checkbox"
                                                        name="email_notifications"
                                                        checked
                                                    >

                                                    <span>
                                                    Enable email notifications
                                                </span>

                                                </label>

                                                <label class="wm-check">

                                                    <input
                                                        type="checkbox"
                                                        name="team_access"
                                                        checked
                                                    >

                                                    <span>
                                                    Allow team members to access this project
                                                </span>

                                                </label>

                                            </div>

                                        </div>

                                    </div>


                                    <!-- Form Actions -->

                                    <div class="col-12">

                                        <div class="wm-form-actions">

                                            <button
                                                type="button"
                                                class="wm-btn wm-btn--secondary"
                                            >
                                                Cancel
                                            </button>

                                            <button
                                                type="submit"
                                                class="wm-btn wm-btn--primary"
                                            >
                                            <span class="wm-btn__icon">
                                                <i class="ph ph-plus"></i>
                                            </span>

                                                Create Project
                                            </button>

                                        </div>

                                    </div>

                                </div>

                            </form>

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </section>

    <section class="wm-table-showcase py-5">
        <div class="container">

            <!-- ====================================================
                 Section Header
                 ==================================================== -->

            <div class="row mb-5">

                <div class="col-12">

                <span class="d-inline-block mb-2 text-primary fw-semibold">
                    UI Components
                </span>

                    <h2 class="mb-2">
                        Table Components
                    </h2>

                    <p class="text-muted mb-0">
                        Reusable tables for projects, tasks, team members
                        and workspace management.
                    </p>

                </div>

            </div>


            <!-- ====================================================
                 Main Table
                 ==================================================== -->

            <div class="row mb-5">

                <div class="col-12">

                    <div class="wm-table-wrapper">


                        <!-- Table Toolbar -->

                        <div class="wm-table-toolbar">

                            <div class="wm-table-toolbar__left">

                                <div>

                                    <h3 class="wm-table-toolbar__title">
                                        Projects
                                    </h3>

                                    <p class="wm-table-toolbar__description">
                                        Manage and monitor your active projects.
                                    </p>

                                </div>

                            </div>


                            <div class="wm-table-toolbar__right">

                                <div class="wm-table-search">

                                <span class="wm-table-search__icon">
                                    <i class="ph ph-magnifying-glass"></i>
                                </span>

                                    <input
                                        type="search"
                                        class="wm-form-control"
                                        placeholder="Search projects..."
                                    >

                                </div>


                                <button
                                    type="button"
                                    class="wm-btn wm-btn--secondary wm-btn--icon"
                                    aria-label="Filter"
                                >
                                    <i class="ph ph-funnel"></i>
                                </button>


                                <button
                                    type="button"
                                    class="wm-btn wm-btn--primary"
                                >
                                    <i class="ph ph-plus"></i>
                                    New Project
                                </button>

                            </div>

                        </div>


                        <!-- Table -->

                        <table class="wm-table">

                            <thead>

                            <tr>

                                <th class="wm-table__checkbox">

                                    <input
                                        type="checkbox"
                                        aria-label="Select all projects"
                                    >

                                </th>


                                <th>

                                    <button
                                        type="button"
                                        class="wm-table__sortable is-active"
                                    >
                                        Project

                                        <span class="wm-table__sort-icon">
                                            <i class="ph ph-caret-up"></i>
                                        </span>

                                    </button>

                                </th>


                                <th>
                                    Owner
                                </th>


                                <th>

                                    <button
                                        type="button"
                                        class="wm-table__sortable"
                                    >
                                        Status

                                        <span class="wm-table__sort-icon">
                                            <i class="ph ph-caret-down"></i>
                                        </span>

                                    </button>

                                </th>


                                <th>
                                    Progress
                                </th>


                                <th>
                                    Due Date
                                </th>


                                <th>
                                    Priority
                                </th>


                                <th class="text-end">
                                    Actions
                                </th>

                            </tr>

                            </thead>


                            <tbody>


                            <!-- Row 01 -->

                            <tr>

                                <td class="wm-table__checkbox">

                                    <input
                                        type="checkbox"
                                        aria-label="Select Website Redesign"
                                    >

                                </td>


                                <td>

                                    <div class="wm-table__project">

                                        <div class="wm-table__project-icon">
                                            <i class="ph ph-browser"></i>
                                        </div>

                                        <div class="wm-table__project-info">

                                            <span class="wm-table__project-name">
                                                Website Redesign
                                            </span>

                                            <span class="wm-table__project-meta">
                                                24 tasks · 8 members
                                            </span>

                                        </div>

                                    </div>

                                </td>


                                <td>

                                    <div class="wm-table__user">

                                        <span class="wm-table__avatar">
                                            AR
                                        </span>

                                        <div class="wm-table__user-info">

                                            <span class="wm-table__user-name">
                                                Alex Rivera
                                            </span>

                                            <span class="wm-table__user-email">
                                                alex@example.com
                                            </span>

                                        </div>

                                    </div>

                                </td>


                                <td>

                                    <span class="wm-table__status wm-table__status--success">

                                        <span class="wm-table__status-dot"></span>

                                        Active

                                    </span>

                                </td>


                                <td>

                                    <div class="wm-table__progress">

                                        <div class="wm-table__progress-header">

                                            <span class="wm-table__progress-value">
                                                72%
                                            </span>

                                        </div>

                                        <div class="wm-table__progress-bar">

                                            <div
                                                class="wm-table__progress-fill"
                                                style="width: 72%;"
                                            ></div>

                                        </div>

                                    </div>

                                </td>


                                <td>

                                    <span class="wm-table__primary">
                                        Sep 30, 2026
                                    </span>

                                </td>


                                <td>

                                    <span class="wm-table__priority wm-table__priority--high">

                                        <i class="ph ph-flag wm-table__priority-icon"></i>

                                        High

                                    </span>

                                </td>


                                <td>

                                    <div class="wm-table__actions">

                                        <button
                                            type="button"
                                            class="wm-table__action wm-table__action--view"
                                            aria-label="View project"
                                        >
                                            <i class="ph ph-eye"></i>
                                        </button>

                                        <button
                                            type="button"
                                            class="wm-table__action wm-table__action--edit"
                                            aria-label="Edit project"
                                        >
                                            <i class="ph ph-pencil-simple"></i>
                                        </button>

                                        <button
                                            type="button"
                                            class="wm-table__action wm-table__action--delete"
                                            aria-label="Delete project"
                                        >
                                            <i class="ph ph-trash"></i>
                                        </button>

                                    </div>

                                </td>

                            </tr>


                            <!-- Row 02 -->

                            <tr>

                                <td class="wm-table__checkbox">

                                    <input
                                        type="checkbox"
                                        aria-label="Select Mobile App Development"
                                    >

                                </td>


                                <td>

                                    <div class="wm-table__project">

                                        <div class="wm-table__project-icon">
                                            <i class="ph ph-device-mobile"></i>
                                        </div>

                                        <div class="wm-table__project-info">

                                            <span class="wm-table__project-name">
                                                Mobile App Development
                                            </span>

                                            <span class="wm-table__project-meta">
                                                38 tasks · 6 members
                                            </span>

                                        </div>

                                    </div>

                                </td>


                                <td>

                                    <div class="wm-table__user">

                                        <span class="wm-table__avatar">
                                            JD
                                        </span>

                                        <div class="wm-table__user-info">

                                            <span class="wm-table__user-name">
                                                John Davis
                                            </span>

                                            <span class="wm-table__user-email">
                                                john@example.com
                                            </span>

                                        </div>

                                    </div>

                                </td>


                                <td>

                                    <span class="wm-table__status wm-table__status--warning">

                                        <span class="wm-table__status-dot"></span>

                                        In Progress

                                    </span>

                                </td>


                                <td>

                                    <div class="wm-table__progress">

                                        <div class="wm-table__progress-header">

                                            <span class="wm-table__progress-value">
                                                45%
                                            </span>

                                        </div>

                                        <div class="wm-table__progress-bar">

                                            <div
                                                class="wm-table__progress-fill"
                                                style="width: 45%;"
                                            ></div>

                                        </div>

                                    </div>

                                </td>


                                <td>

                                    <span class="wm-table__primary">
                                        Oct 15, 2026
                                    </span>

                                </td>


                                <td>

                                    <span class="wm-table__priority wm-table__priority--medium">

                                        <i class="ph ph-flag wm-table__priority-icon"></i>

                                        Medium

                                    </span>

                                </td>


                                <td>

                                    <div class="wm-table__actions">

                                        <button
                                            type="button"
                                            class="wm-table__action wm-table__action--view"
                                            aria-label="View project"
                                        >
                                            <i class="ph ph-eye"></i>
                                        </button>

                                        <button
                                            type="button"
                                            class="wm-table__action wm-table__action--edit"
                                            aria-label="Edit project"
                                        >
                                            <i class="ph ph-pencil-simple"></i>
                                        </button>

                                        <button
                                            type="button"
                                            class="wm-table__action wm-table__action--delete"
                                            aria-label="Delete project"
                                        >
                                            <i class="ph ph-trash"></i>
                                        </button>

                                    </div>

                                </td>

                            </tr>


                            <!-- Row 03 -->

                            <tr>

                                <td class="wm-table__checkbox">

                                    <input
                                        type="checkbox"
                                        aria-label="Select Marketing Campaign"
                                    >

                                </td>


                                <td>

                                    <div class="wm-table__project">

                                        <div class="wm-table__project-icon">
                                            <i class="ph ph-megaphone"></i>
                                        </div>

                                        <div class="wm-table__project-info">

                                            <span class="wm-table__project-name">
                                                Marketing Campaign
                                            </span>

                                            <span class="wm-table__project-meta">
                                                16 tasks · 5 members
                                            </span>

                                        </div>

                                    </div>

                                </td>


                                <td>

                                    <div class="wm-table__user">

                                        <span class="wm-table__avatar">
                                            MK
                                        </span>

                                        <div class="wm-table__user-info">

                                            <span class="wm-table__user-name">
                                                Maria Kim
                                            </span>

                                            <span class="wm-table__user-email">
                                                maria@example.com
                                            </span>

                                        </div>

                                    </div>

                                </td>


                                <td>

                                    <span class="wm-table__status wm-table__status--info">

                                        <span class="wm-table__status-dot"></span>

                                        Planning

                                    </span>

                                </td>


                                <td>

                                    <div class="wm-table__progress">

                                        <div class="wm-table__progress-header">

                                            <span class="wm-table__progress-value">
                                                24%
                                            </span>

                                        </div>

                                        <div class="wm-table__progress-bar">

                                            <div
                                                class="wm-table__progress-fill"
                                                style="width: 24%;"
                                            ></div>

                                        </div>

                                    </div>

                                </td>


                                <td>

                                    <span class="wm-table__primary">
                                        Nov 08, 2026
                                    </span>

                                </td>


                                <td>

                                    <span class="wm-table__priority wm-table__priority--low">

                                        <i class="ph ph-flag wm-table__priority-icon"></i>

                                        Low

                                    </span>

                                </td>


                                <td>

                                    <div class="wm-table__actions">

                                        <button
                                            type="button"
                                            class="wm-table__action wm-table__action--view"
                                            aria-label="View project"
                                        >
                                            <i class="ph ph-eye"></i>
                                        </button>

                                        <button
                                            type="button"
                                            class="wm-table__action wm-table__action--edit"
                                            aria-label="Edit project"
                                        >
                                            <i class="ph ph-pencil-simple"></i>
                                        </button>

                                        <button
                                            type="button"
                                            class="wm-table__action wm-table__action--delete"
                                            aria-label="Delete project"
                                        >
                                            <i class="ph ph-trash"></i>
                                        </button>

                                    </div>

                                </td>

                            </tr>


                            <!-- Row 04 -->

                            <tr>

                                <td class="wm-table__checkbox">

                                    <input
                                        type="checkbox"
                                        aria-label="Select Research Portal"
                                    >

                                </td>


                                <td>

                                    <div class="wm-table__project">

                                        <div class="wm-table__project-icon">
                                            <i class="ph ph-flask"></i>
                                        </div>

                                        <div class="wm-table__project-info">

                                            <span class="wm-table__project-name">
                                                Research Portal
                                            </span>

                                            <span class="wm-table__project-meta">
                                                12 tasks · 4 members
                                            </span>

                                        </div>

                                    </div>

                                </td>


                                <td>

                                    <div class="wm-table__user">

                                        <span class="wm-table__avatar">
                                            OL
                                        </span>

                                        <div class="wm-table__user-info">

                                            <span class="wm-table__user-name">
                                                Olivia Lee
                                            </span>

                                            <span class="wm-table__user-email">
                                                olivia@example.com
                                            </span>

                                        </div>

                                    </div>

                                </td>


                                <td>

                                    <span class="wm-table__status wm-table__status--danger">

                                        <span class="wm-table__status-dot"></span>

                                        At Risk

                                    </span>

                                </td>


                                <td>

                                    <div class="wm-table__progress">

                                        <div class="wm-table__progress-header">

                                            <span class="wm-table__progress-value">
                                                18%
                                            </span>

                                        </div>

                                        <div class="wm-table__progress-bar">

                                            <div
                                                class="wm-table__progress-fill"
                                                style="width: 18%;"
                                            ></div>

                                        </div>

                                    </div>

                                </td>


                                <td>

                                    <span class="wm-table__primary">
                                        Sep 28, 2026
                                    </span>

                                </td>


                                <td>

                                    <span class="wm-table__priority wm-table__priority--high">

                                        <i class="ph ph-flag wm-table__priority-icon"></i>

                                        High

                                    </span>

                                </td>


                                <td>

                                    <div class="wm-table__actions">

                                        <button
                                            type="button"
                                            class="wm-table__action wm-table__action--view"
                                            aria-label="View project"
                                        >
                                            <i class="ph ph-eye"></i>
                                        </button>

                                        <button
                                            type="button"
                                            class="wm-table__action wm-table__action--edit"
                                            aria-label="Edit project"
                                        >
                                            <i class="ph ph-pencil-simple"></i>
                                        </button>

                                        <button
                                            type="button"
                                            class="wm-table__action wm-table__action--delete"
                                            aria-label="Delete project"
                                        >
                                            <i class="ph ph-trash"></i>
                                        </button>

                                    </div>

                                </td>

                            </tr>

                            </tbody>

                        </table>


                        <!-- Table Footer -->

                        <div class="wm-table-footer">

                            <div class="wm-table-footer__info">
                                Showing 1–4 of 24 projects
                            </div>


                            <div class="wm-table-footer__pagination">

                                <button
                                    type="button"
                                    class="wm-table-page is-disabled"
                                    aria-label="Previous page"
                                >
                                    <i class="ph ph-caret-left"></i>
                                </button>


                                <button
                                    type="button"
                                    class="wm-table-page is-active"
                                >
                                    1
                                </button>


                                <button
                                    type="button"
                                    class="wm-table-page"
                                >
                                    2
                                </button>


                                <button
                                    type="button"
                                    class="wm-table-page"
                                >
                                    3
                                </button>


                                <button
                                    type="button"
                                    class="wm-table-page"
                                >
                                    4
                                </button>


                                <button
                                    type="button"
                                    class="wm-table-page"
                                    aria-label="Next page"
                                >
                                    <i class="ph ph-caret-right"></i>
                                </button>

                            </div>

                        </div>

                    </div>

                </div>

            </div>


            <!-- ====================================================
                 Compact Table
                 ==================================================== -->

            <div class="row mb-5">

                <div class="col-12">

                    <h3 class="mb-4">
                        Compact Table
                    </h3>


                    <div class="wm-table-wrapper">

                        <table class="wm-table wm-table--compact">

                            <thead>

                            <tr>

                                <th>
                                    Task
                                </th>

                                <th>
                                    Assignee
                                </th>

                                <th>
                                    Status
                                </th>

                                <th>
                                    Due Date
                                </th>

                                <th class="text-end">
                                    Actions
                                </th>

                            </tr>

                            </thead>


                            <tbody>

                            <tr>

                                <td>
                                    <span class="wm-table__primary">
                                        Create homepage design
                                    </span>
                                </td>

                                <td>
                                    Alex Rivera
                                </td>

                                <td>

                                    <span class="wm-table__status wm-table__status--success">

                                        <span class="wm-table__status-dot"></span>

                                        Completed

                                    </span>

                                </td>

                                <td>
                                    Sep 22, 2026
                                </td>

                                <td>

                                    <div class="wm-table__actions">

                                        <button
                                            type="button"
                                            class="wm-table__action wm-table__action--view"
                                        >
                                            <i class="ph ph-eye"></i>
                                        </button>

                                        <button
                                            type="button"
                                            class="wm-table__action wm-table__action--edit"
                                        >
                                            <i class="ph ph-pencil-simple"></i>
                                        </button>

                                    </div>

                                </td>

                            </tr>


                            <tr>

                                <td>
                                    <span class="wm-table__primary">
                                        Build responsive components
                                    </span>
                                </td>

                                <td>
                                    John Davis
                                </td>

                                <td>

                                    <span class="wm-table__status wm-table__status--warning">

                                        <span class="wm-table__status-dot"></span>

                                        In Progress

                                    </span>

                                </td>

                                <td>
                                    Sep 25, 2026
                                </td>

                                <td>

                                    <div class="wm-table__actions">

                                        <button
                                            type="button"
                                            class="wm-table__action wm-table__action--view"
                                        >
                                            <i class="ph ph-eye"></i>
                                        </button>

                                        <button
                                            type="button"
                                            class="wm-table__action wm-table__action--edit"
                                        >
                                            <i class="ph ph-pencil-simple"></i>
                                        </button>

                                    </div>

                                </td>

                            </tr>

                            </tbody>

                        </table>

                    </div>

                </div>

            </div>


            <!-- ====================================================
                 Empty Table
                 ==================================================== -->

            <div class="row">

                <div class="col-12">

                    <h3 class="mb-4">
                        Empty State
                    </h3>


                    <div class="wm-table-wrapper">

                        <div class="wm-table-empty">

                            <div class="wm-table-empty__icon">
                                <i class="ph ph-table"></i>
                            </div>

                            <h4 class="wm-table-empty__title">
                                No projects found
                            </h4>

                            <p class="wm-table-empty__description">
                                There are no projects matching your current
                                filters. Try changing your search or create
                                a new project.
                            </p>

                            <button class="wm-btn wm-btn--primary mt-4">
                                <i class="ph ph-plus"></i>
                                Create Project
                            </button>

                        </div>

                    </div>

                </div>

            </div>

        </div>
    </section>

    <section class="wm-card-showcase py-5">
        <div class="container">

            <!-- Section Header -->
            <div class="row mb-5">
                <div class="col-12">
                    <div class="wm-card-showcase__header">
                        <div>
                        <span class="wm-card-showcase__eyebrow">
                            UI Components
                        </span>

                            <h2 class="wm-card-showcase__title">
                                Card Components
                            </h2>

                            <p class="wm-card-showcase__description">
                                Reusable card components for the WorkManagement
                                dashboard, projects, statistics and information.
                            </p>
                        </div>
                    </div>
                </div>
            </div>


            <!-- ====================================================
                 01. Basic Card
                 ==================================================== -->

            <div class="row g-4 mb-5">

                <div class="col-12">
                    <h3 class="wm-card-showcase__section-title">
                        Basic Cards
                    </h3>
                </div>

                <!-- Basic Card -->
                <div class="col-12 col-lg-6">

                    <div class="wm-card">

                        <div class="wm-card__header">

                            <div class="wm-card__header-content">

                                <h4 class="wm-card__title">
                                    Project Overview
                                </h4>

                                <p class="wm-card__description">
                                    Overview of your current project activity.
                                </p>

                            </div>

                            <div class="wm-card__actions">

                                <button
                                    type="button"
                                    class="wm-btn wm-btn--ghost wm-btn--icon wm-btn--sm"
                                    aria-label="More options"
                                >
                                    <i class="ph ph-dots-three"></i>
                                </button>

                            </div>

                        </div>

                        <div class="wm-card__body">

                            <p class="mb-0">
                                Track your project progress, tasks, deadlines
                                and team activity from one place.
                            </p>

                        </div>

                        <div class="wm-card__footer">

                        <span class="text-muted">
                            Updated 5 minutes ago
                        </span>

                            <button class="wm-btn wm-btn--link">
                                View Project
                                <i class="ph ph-arrow-right"></i>
                            </button>

                        </div>

                    </div>

                </div>


                <!-- Shadow Card -->
                <div class="col-12 col-lg-6">

                    <div class="wm-card wm-card--shadow">

                        <div class="wm-card__header">

                            <div class="wm-card__header-content">

                                <h4 class="wm-card__title">
                                    Team Activity
                                </h4>

                                <p class="wm-card__description">
                                    Recent activity from your workspace.
                                </p>

                            </div>

                            <div class="wm-card__actions">

                                <button
                                    type="button"
                                    class="wm-btn wm-btn--secondary wm-btn--sm"
                                >
                                    View All
                                </button>

                            </div>

                        </div>

                        <div class="wm-card__body">

                            <div class="d-flex align-items-center gap-3">

                                <div class="wm-project-card__member">
                                    AR
                                </div>

                                <div>
                                    <strong class="d-block">
                                        Alex Rivera
                                    </strong>

                                    <span class="text-muted">
                                    Completed a task
                                </span>
                                </div>

                            </div>

                        </div>

                    </div>

                </div>

            </div>


            <!-- ====================================================
                 02. Stat Cards
                 ==================================================== -->

            <div class="row g-4 mb-5">

                <div class="col-12">
                    <h3 class="wm-card-showcase__section-title">
                        Statistics Cards
                    </h3>
                </div>


                <!-- Primary -->
                <div class="col-12 col-sm-6 col-xl-4">

                    <div class="wm-stat-card wm-stat-card--primary">

                        <div class="wm-stat-card__top">

                            <div class="wm-stat-card__content">

                                <p class="wm-stat-card__label">
                                    Total Projects
                                </p>

                                <h4 class="wm-stat-card__value">
                                    24
                                </h4>

                            </div>

                            <div class="wm-stat-card__icon">
                                <i class="ph ph-folder-open"></i>
                            </div>

                        </div>

                        <div class="wm-stat-card__footer">

                        <span class="wm-stat-card__trend wm-stat-card__trend--positive">
                            <i class="ph ph-trend-up"></i>
                            12.5%
                        </span>

                            <span>
                            vs last month
                        </span>

                        </div>

                    </div>

                </div>


                <!-- Success -->
                <div class="col-12 col-sm-6 col-xl-4">

                    <div class="wm-stat-card wm-stat-card--success">

                        <div class="wm-stat-card__top">

                            <div class="wm-stat-card__content">

                                <p class="wm-stat-card__label">
                                    Completed Tasks
                                </p>

                                <h4 class="wm-stat-card__value">
                                    186
                                </h4>

                            </div>

                            <div class="wm-stat-card__icon">
                                <i class="ph ph-check-circle"></i>
                            </div>

                        </div>

                        <div class="wm-stat-card__footer">

                        <span class="wm-stat-card__trend wm-stat-card__trend--positive">
                            <i class="ph ph-trend-up"></i>
                            8.4%
                        </span>

                            <span>
                            vs last month
                        </span>

                        </div>

                    </div>

                </div>


                <!-- Warning -->
                <div class="col-12 col-sm-6 col-xl-4">

                    <div class="wm-stat-card wm-stat-card--warning">

                        <div class="wm-stat-card__top">

                            <div class="wm-stat-card__content">

                                <p class="wm-stat-card__label">
                                    Pending Tasks
                                </p>

                                <h4 class="wm-stat-card__value">
                                    42
                                </h4>

                            </div>

                            <div class="wm-stat-card__icon">
                                <i class="ph ph-clock"></i>
                            </div>

                        </div>

                        <div class="wm-stat-card__footer">

                        <span class="wm-stat-card__trend wm-stat-card__trend--negative">
                            <i class="ph ph-trend-down"></i>
                            4.2%
                        </span>

                            <span>
                            vs last month
                        </span>

                        </div>

                    </div>

                </div>


                <!-- Danger -->
                <div class="col-12 col-sm-6 col-xl-4">

                    <div class="wm-stat-card wm-stat-card--danger">

                        <div class="wm-stat-card__top">

                            <div class="wm-stat-card__content">

                                <p class="wm-stat-card__label">
                                    Overdue Tasks
                                </p>

                                <h4 class="wm-stat-card__value">
                                    12
                                </h4>

                            </div>

                            <div class="wm-stat-card__icon">
                                <i class="ph ph-warning-circle"></i>
                            </div>

                        </div>

                        <div class="wm-stat-card__footer">

                        <span class="wm-stat-card__trend wm-stat-card__trend--negative">
                            <i class="ph ph-trend-up"></i>
                            2.1%
                        </span>

                            <span>
                            needs attention
                        </span>

                        </div>

                    </div>

                </div>


                <!-- Info -->
                <div class="col-12 col-sm-6 col-xl-4">

                    <div class="wm-stat-card wm-stat-card--info">

                        <div class="wm-stat-card__top">

                            <div class="wm-stat-card__content">

                                <p class="wm-stat-card__label">
                                    Team Members
                                </p>

                                <h4 class="wm-stat-card__value">
                                    18
                                </h4>

                            </div>

                            <div class="wm-stat-card__icon">
                                <i class="ph ph-users-three"></i>
                            </div>

                        </div>

                        <div class="wm-stat-card__footer">

                        <span class="wm-stat-card__trend wm-stat-card__trend--positive">
                            <i class="ph ph-user-plus"></i>
                            3 new
                        </span>

                            <span>
                            this month
                        </span>

                        </div>

                    </div>

                </div>


                <!-- Purple -->
                <div class="col-12 col-sm-6 col-xl-4">

                    <div class="wm-stat-card wm-stat-card--purple">

                        <div class="wm-stat-card__top">

                            <div class="wm-stat-card__content">

                                <p class="wm-stat-card__label">
                                    Hours Tracked
                                </p>

                                <h4 class="wm-stat-card__value">
                                    1,248
                                </h4>

                            </div>

                            <div class="wm-stat-card__icon">
                                <i class="ph ph-timer"></i>
                            </div>

                        </div>

                        <div class="wm-stat-card__footer">

                        <span class="wm-stat-card__trend wm-stat-card__trend--positive">
                            <i class="ph ph-trend-up"></i>
                            16.8%
                        </span>

                            <span>
                            vs last month
                        </span>

                        </div>

                    </div>

                </div>

            </div>


            <!-- ====================================================
                 03. Project Cards
                 ==================================================== -->

            <div class="row g-4 mb-5">

                <div class="col-12">
                    <h3 class="wm-card-showcase__section-title">
                        Project Cards
                    </h3>
                </div>


                <!-- Project Card 01 -->
                <div class="col-12 col-md-6 col-xl-4">

                    <div class="wm-project-card">

                        <div class="wm-project-card__header">

                            <div class="wm-project-card__content">

                                <h4 class="wm-project-card__title">
                                    Website Redesign
                                </h4>

                                <p class="wm-project-card__description">
                                    Redesign the company website and improve
                                    the overall user experience.
                                </p>

                            </div>

                            <button
                                type="button"
                                class="wm-project-card__menu"
                                aria-label="Project options"
                            >
                                <i class="ph ph-dots-three"></i>
                            </button>

                        </div>

                        <div class="wm-project-card__body">

                            <div class="wm-project-card__meta">

                            <span class="wm-project-card__meta-item">
                                <i class="ph ph-calendar"></i>
                                Sep 30
                            </span>

                                <span class="wm-project-card__meta-item">
                                <i class="ph ph-check-square"></i>
                                24 Tasks
                            </span>

                            </div>


                            <div class="wm-project-card__progress">

                                <div class="wm-project-card__progress-header">

                                <span>
                                    Progress
                                </span>

                                    <span class="wm-project-card__progress-value">
                                    72%
                                </span>

                                </div>

                                <div class="wm-project-card__progress-bar">

                                    <div
                                        class="wm-project-card__progress-fill"
                                        style="width: 72%;"
                                    ></div>

                                </div>

                            </div>

                        </div>

                        <div class="wm-project-card__footer">

                            <div class="wm-project-card__members">

                            <span class="wm-project-card__member">
                                AR
                            </span>

                                <span class="wm-project-card__member">
                                JD
                            </span>

                                <span class="wm-project-card__member">
                                MK
                            </span>

                                <span class="wm-project-card__member wm-project-card__member-more">
                                +3
                            </span>

                            </div>

                            <button class="wm-btn wm-btn--ghost wm-btn--sm">
                                Open
                                <i class="ph ph-arrow-right"></i>
                            </button>

                        </div>

                    </div>

                </div>


                <!-- Project Card 02 -->
                <div class="col-12 col-md-6 col-xl-4">

                    <div class="wm-project-card">

                        <div class="wm-project-card__header">

                            <div class="wm-project-card__content">

                                <h4 class="wm-project-card__title">
                                    Mobile App Development
                                </h4>

                                <p class="wm-project-card__description">
                                    Build and launch the next generation
                                    mobile application.
                                </p>

                            </div>

                            <button
                                type="button"
                                class="wm-project-card__menu"
                                aria-label="Project options"
                            >
                                <i class="ph ph-dots-three"></i>
                            </button>

                        </div>

                        <div class="wm-project-card__body">

                            <div class="wm-project-card__meta">

                            <span class="wm-project-card__meta-item">
                                <i class="ph ph-calendar"></i>
                                Oct 15
                            </span>

                                <span class="wm-project-card__meta-item">
                                <i class="ph ph-check-square"></i>
                                38 Tasks
                            </span>

                            </div>


                            <div class="wm-project-card__progress">

                                <div class="wm-project-card__progress-header">

                                <span>
                                    Progress
                                </span>

                                    <span class="wm-project-card__progress-value">
                                    45%
                                </span>

                                </div>

                                <div class="wm-project-card__progress-bar">

                                    <div
                                        class="wm-project-card__progress-fill"
                                        style="width: 45%;"
                                    ></div>

                                </div>

                            </div>

                        </div>

                        <div class="wm-project-card__footer">

                            <div class="wm-project-card__members">

                            <span class="wm-project-card__member">
                                AS
                            </span>

                                <span class="wm-project-card__member">
                                RM
                            </span>

                                <span class="wm-project-card__member wm-project-card__member-more">
                                +4
                            </span>

                            </div>

                            <button class="wm-btn wm-btn--ghost wm-btn--sm">
                                Open
                                <i class="ph ph-arrow-right"></i>
                            </button>

                        </div>

                    </div>

                </div>


                <!-- Project Card 03 -->
                <div class="col-12 col-md-6 col-xl-4">

                    <div class="wm-project-card">

                        <div class="wm-project-card__header">

                            <div class="wm-project-card__content">

                                <h4 class="wm-project-card__title">
                                    Marketing Campaign
                                </h4>

                                <p class="wm-project-card__description">
                                    Plan and execute the upcoming product
                                    marketing campaign.
                                </p>

                            </div>

                            <button
                                type="button"
                                class="wm-project-card__menu"
                                aria-label="Project options"
                            >
                                <i class="ph ph-dots-three"></i>
                            </button>

                        </div>

                        <div class="wm-project-card__body">

                            <div class="wm-project-card__meta">

                            <span class="wm-project-card__meta-item">
                                <i class="ph ph-calendar"></i>
                                Nov 08
                            </span>

                                <span class="wm-project-card__meta-item">
                                <i class="ph ph-check-square"></i>
                                16 Tasks
                            </span>

                            </div>


                            <div class="wm-project-card__progress">

                                <div class="wm-project-card__progress-header">

                                <span>
                                    Progress
                                </span>

                                    <span class="wm-project-card__progress-value">
                                    86%
                                </span>

                                </div>

                                <div class="wm-project-card__progress-bar">

                                    <div
                                        class="wm-project-card__progress-fill"
                                        style="width: 86%;"
                                    ></div>

                                </div>

                            </div>

                        </div>

                        <div class="wm-project-card__footer">

                            <div class="wm-project-card__members">

                            <span class="wm-project-card__member">
                                OL
                            </span>

                                <span class="wm-project-card__member">
                                NK
                            </span>

                                <span class="wm-project-card__member">
                                TM
                            </span>

                            </div>

                            <button class="wm-btn wm-btn--ghost wm-btn--sm">
                                Open
                                <i class="ph ph-arrow-right"></i>
                            </button>

                        </div>

                    </div>

                </div>

            </div>


            <!-- ====================================================
                 04. Info Cards
                 ==================================================== -->

            <div class="row g-4 mb-5">

                <div class="col-12">
                    <h3 class="wm-card-showcase__section-title">
                        Information Cards
                    </h3>
                </div>


                <div class="col-12 col-lg-6">

                    <div class="wm-info-card">

                        <div class="wm-info-card__icon">
                            <i class="ph ph-info"></i>
                        </div>

                        <div class="wm-info-card__content">

                            <h4 class="wm-info-card__title">
                                Project Information
                            </h4>

                            <p class="wm-info-card__text">
                                Your project workspace contains 24 active
                                tasks and 8 team members.
                            </p>

                        </div>

                    </div>

                </div>


                <div class="col-12 col-lg-6">

                    <div class="wm-info-card">

                        <div
                            class="wm-info-card__icon"
                            style="background: #ECFDF5; color: #047857;"
                        >
                            <i class="ph ph-check-circle"></i>
                        </div>

                        <div class="wm-info-card__content">

                            <h4 class="wm-info-card__title">
                                All Systems Operational
                            </h4>

                            <p class="wm-info-card__text">
                                Your workspace and integrations are working
                                normally.
                            </p>

                        </div>

                    </div>

                </div>

            </div>


            <!-- ====================================================
                 05. Empty State
                 ==================================================== -->

            <div class="row">

                <div class="col-12 col-lg-6">

                    <h3 class="wm-card-showcase__section-title mb-4">
                        Empty State
                    </h3>

                    <div class="wm-empty-card">

                        <div class="wm-empty-card__icon">
                            <i class="ph ph-folder-plus"></i>
                        </div>

                        <h4 class="wm-empty-card__title">
                            No Projects Yet
                        </h4>

                        <p class="wm-empty-card__description">
                            Create your first project to start organizing
                            your tasks, team members and deadlines.
                        </p>

                        <div class="wm-empty-card__action">

                            <button class="wm-btn wm-btn--primary">

                            <span class="wm-btn__icon">
                                <i class="ph ph-plus"></i>
                            </span>

                                Create Project

                            </button>

                        </div>

                    </div>

                </div>


                <!-- Borderless / Hover Card -->
                <div class="col-12 col-lg-6">

                    <h3 class="wm-card-showcase__section-title mb-4">
                        Card Variations
                    </h3>

                    <div class="wm-card wm-card--borderless wm-card--shadow wm-card--hover">

                        <div class="wm-card__body">

                            <div class="d-flex align-items-center gap-3">

                                <div class="wm-stat-card__icon">
                                    <i class="ph ph-rocket-launch"></i>
                                </div>

                                <div>

                                    <h4 class="wm-card__title">
                                        Get Started
                                    </h4>

                                    <p class="wm-card__description">
                                        Start creating your workspace and
                                        invite your team members.
                                    </p>

                                </div>

                            </div>

                            <div class="mt-4">

                                <button class="wm-btn wm-btn--primary">
                                    Get Started
                                    <i class="ph ph-arrow-right"></i>
                                </button>

                            </div>

                        </div>

                    </div>

                </div>

            </div>

        </div>
    </section>
@endsection
