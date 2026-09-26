@extends('layout.app')

@section('main')

    <div class="wm-project-create-page">

        {{-- =========================================================
            Page Header
        ========================================================== --}}
        <div class="wm-project-create-page__header">

            <div class="wm-project-create-page__header-left">

                <div class="wm-project-create-page__breadcrumb">
                    <a href="{{ route('projects.index') }}">
                        <i class="ph ph-folder"></i>
                        Projects
                    </a>

                    <i class="ph ph-caret-right"></i>

                    <span>Create Project</span>
                </div>

                <div class="wm-project-create-page__heading">
                    <h1 class="wm-project-create-page__title">
                        Create Project
                    </h1>

                    <p class="wm-project-create-page__subtitle">
                        Set up a new research project and configure its team, timeline, and settings.
                    </p>
                </div>

            </div>

            <div class="wm-project-create-page__header-actions">
                <a href="{{ route('projects.index') }}"
                   class="btn btn-light wm-project-create-page__cancel-btn">
                    <i class="ph ph-x"></i>
                    Cancel
                </a>

                <button type="button"
                        class="btn btn-primary wm-project-create-page__create-btn"
                        data-create-project>
                    <i class="ph ph-plus"></i>
                    Create Project
                </button>
            </div>

        </div>


        {{-- =========================================================
            Progress
        ========================================================== --}}
        <div class="wm-project-create-page__progress">

            <div class="wm-project-create-page__progress-step is-active">
                <span class="wm-project-create-page__progress-number">1</span>
                <div>
                    <strong>Project Details</strong>
                    <small>Basic information</small>
                </div>
            </div>

            <div class="wm-project-create-page__progress-line"></div>

            <div class="wm-project-create-page__progress-step">
                <span class="wm-project-create-page__progress-number">2</span>
                <div>
                    <strong>Team & Timeline</strong>
                    <small>People and schedule</small>
                </div>
            </div>

            <div class="wm-project-create-page__progress-line"></div>

            <div class="wm-project-create-page__progress-step">
                <span class="wm-project-create-page__progress-number">3</span>
                <div>
                    <strong>Settings</strong>
                    <small>Project preferences</small>
                </div>
            </div>

        </div>


        <form id="createProjectForm">

            <div class="row g-4">

                {{-- =====================================================
                    Main Content
                ====================================================== --}}
                <div class="col-xl-8">

                    {{-- Project Information --}}
                    <div class="wm-project-create-page__card">

                        <div class="wm-project-create-page__card-header">
                            <div>
                                <h2 class="wm-project-create-page__card-title">
                                    Project Information
                                </h2>

                                <p class="wm-project-create-page__card-description">
                                    Provide the core information about your project.
                                </p>
                            </div>

                            <span class="wm-project-create-page__required-note">
                            * Required
                        </span>
                        </div>

                        <div class="wm-project-create-page__card-body">

                            <div class="row g-4">

                                <div class="col-md-8">
                                    <div class="wm-project-create-page__field">

                                        <label for="projectName"
                                               class="wm-project-create-page__label">
                                            Project Name
                                            <span>*</span>
                                        </label>

                                        <input type="text"
                                               id="projectName"
                                               name="name"
                                               class="form-control"
                                               placeholder="e.g. Climate Change Impact Study"
                                               required>

                                        <div class="wm-project-create-page__field-error"
                                             data-error="name"></div>

                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="wm-project-create-page__field">

                                        <label for="projectCode"
                                               class="wm-project-create-page__label">
                                            Project Code
                                        </label>

                                        <input type="text"
                                               id="projectCode"
                                               name="code"
                                               class="form-control"
                                               placeholder="e.g. CRS-2026">

                                        <span class="wm-project-create-page__help-text">
                                        Optional short identifier.
                                    </span>

                                    </div>
                                </div>

                                <div class="col-12">

                                    <div class="wm-project-create-page__field">

                                        <label for="projectDescription"
                                               class="wm-project-create-page__label">
                                            Description
                                            <span>*</span>
                                        </label>

                                        <textarea id="projectDescription"
                                                  name="description"
                                                  class="form-control"
                                                  rows="5"
                                                  placeholder="Describe the purpose, goals, and expected outcomes of this project..."
                                                  required></textarea>

                                        <div class="wm-project-create-page__field-footer">
                                        <span class="wm-project-create-page__help-text">
                                            A clear description helps your team understand the project scope.
                                        </span>

                                            <span class="wm-project-create-page__character-count">
                                            <span data-description-count>0</span>/500
                                        </span>
                                        </div>

                                        <div class="wm-project-create-page__field-error"
                                             data-error="description"></div>

                                    </div>

                                </div>

                                <div class="col-md-6">

                                    <div class="wm-project-create-page__field">

                                        <label for="projectStatus"
                                               class="wm-project-create-page__label">
                                            Status
                                        </label>

                                        <select id="projectStatus"
                                                name="status"
                                                class="form-select">

                                            <option value="planning" selected>
                                                Planning
                                            </option>

                                            <option value="active">
                                                Active
                                            </option>

                                            <option value="on-hold">
                                                On Hold
                                            </option>

                                            <option value="completed">
                                                Completed
                                            </option>

                                        </select>

                                    </div>

                                </div>

                                <div class="col-md-6">

                                    <div class="wm-project-create-page__field">

                                        <label for="projectPriority"
                                               class="wm-project-create-page__label">
                                            Priority
                                        </label>

                                        <select id="projectPriority"
                                                name="priority"
                                                class="form-select">

                                            <option value="low">
                                                Low
                                            </option>

                                            <option value="medium" selected>
                                                Medium
                                            </option>

                                            <option value="high">
                                                High
                                            </option>

                                            <option value="critical">
                                                Critical
                                            </option>

                                        </select>

                                    </div>

                                </div>

                            </div>

                        </div>

                    </div>


                    {{-- Timeline --}}
                    <div class="wm-project-create-page__card">

                        <div class="wm-project-create-page__card-header">

                            <div>
                                <h2 class="wm-project-create-page__card-title">
                                    Project Timeline
                                </h2>

                                <p class="wm-project-create-page__card-description">
                                    Define when the project starts and when it is expected to finish.
                                </p>
                            </div>

                            <div class="wm-project-create-page__card-icon">
                                <i class="ph ph-calendar-blank"></i>
                            </div>

                        </div>

                        <div class="wm-project-create-page__card-body">

                            <div class="row g-4">

                                <div class="col-md-6">

                                    <div class="wm-project-create-page__field">

                                        <label for="startDate"
                                               class="wm-project-create-page__label">
                                            Start Date
                                            <span>*</span>
                                        </label>

                                        <div class="wm-project-create-page__input-icon">
                                            <i class="ph ph-calendar-blank"></i>

                                            <input type="date"
                                                   id="startDate"
                                                   name="start_date"
                                                   class="form-control"
                                                   required>
                                        </div>

                                        <div class="wm-project-create-page__field-error"
                                             data-error="start_date"></div>

                                    </div>

                                </div>

                                <div class="col-md-6">

                                    <div class="wm-project-create-page__field">

                                        <label for="endDate"
                                               class="wm-project-create-page__label">
                                            Target End Date
                                        </label>

                                        <div class="wm-project-create-page__input-icon">
                                            <i class="ph ph-calendar-check"></i>

                                            <input type="date"
                                                   id="endDate"
                                                   name="end_date"
                                                   class="form-control">
                                        </div>

                                        <div class="wm-project-create-page__field-error"
                                             data-error="end_date"></div>

                                    </div>

                                </div>

                            </div>

                            <div class="wm-project-create-page__timeline-note">
                                <i class="ph ph-info"></i>

                                <span>
                                You can adjust the project timeline later from the project overview.
                            </span>
                            </div>

                        </div>

                    </div>


                    {{-- Team --}}
                    <div class="wm-project-create-page__card">

                        <div class="wm-project-create-page__card-header">

                            <div>
                                <h2 class="wm-project-create-page__card-title">
                                    Project Team
                                </h2>

                                <p class="wm-project-create-page__card-description">
                                    Assign a project owner and invite team members.
                                </p>
                            </div>

                            <button type="button"
                                    class="btn btn-light btn-sm"
                                    data-add-member>
                                <i class="ph ph-user-plus"></i>
                                Add Member
                            </button>

                        </div>

                        <div class="wm-project-create-page__card-body">

                            <div class="wm-project-create-page__field">

                                <label for="projectOwner"
                                       class="wm-project-create-page__label">
                                    Project Owner
                                    <span>*</span>
                                </label>

                                <select id="projectOwner"
                                        name="owner"
                                        class="form-select"
                                        required>

                                    <option value="">
                                        Select project owner
                                    </option>

                                    <option value="sarah">
                                        Sarah Johnson
                                    </option>

                                    <option value="michael">
                                        Michael Chen
                                    </option>

                                    <option value="emily">
                                        Emily Williams
                                    </option>

                                    <option value="daniel">
                                        Daniel Smith
                                    </option>

                                </select>

                            </div>


                            <div class="wm-project-create-page__team-list"
                                 data-team-list>

                                <div class="wm-project-create-page__team-member">

                                    <div class="wm-project-create-page__member-avatar">
                                        SJ
                                    </div>

                                    <div class="wm-project-create-page__member-info">

                                        <strong>
                                            Sarah Johnson
                                        </strong>

                                        <span>
                                        Principal Investigator
                                    </span>

                                    </div>

                                    <span class="wm-project-create-page__member-role">
                                    Owner
                                </span>

                                </div>

                                <div class="wm-project-create-page__team-member">

                                    <div class="wm-project-create-page__member-avatar wm-project-create-page__member-avatar--green">
                                        MC
                                    </div>

                                    <div class="wm-project-create-page__member-info">

                                        <strong>
                                            Michael Chen
                                        </strong>

                                        <span>
                                        Researcher
                                    </span>

                                    </div>

                                    <button type="button"
                                            class="wm-project-create-page__member-remove"
                                            data-remove-member
                                            aria-label="Remove member">
                                        <i class="ph ph-x"></i>
                                    </button>

                                </div>

                                <div class="wm-project-create-page__team-member">

                                    <div class="wm-project-create-page__member-avatar wm-project-create-page__member-avatar--purple">
                                        EW
                                    </div>

                                    <div class="wm-project-create-page__member-info">

                                        <strong>
                                            Emily Williams
                                        </strong>

                                        <span>
                                        Project Manager
                                    </span>

                                    </div>

                                    <button type="button"
                                            class="wm-project-create-page__member-remove"
                                            data-remove-member
                                            aria-label="Remove member">
                                        <i class="ph ph-x"></i>
                                    </button>

                                </div>

                            </div>

                        </div>

                    </div>


                    {{-- Tags --}}
                    <div class="wm-project-create-page__card">

                        <div class="wm-project-create-page__card-header">

                            <div>
                                <h2 class="wm-project-create-page__card-title">
                                    Tags & Classification
                                </h2>

                                <p class="wm-project-create-page__card-description">
                                    Add tags to make this project easier to organize and find.
                                </p>
                            </div>

                        </div>

                        <div class="wm-project-create-page__card-body">

                            <div class="wm-project-create-page__field">

                                <label class="wm-project-create-page__label">
                                    Project Tags
                                </label>

                                <div class="wm-project-create-page__tag-input">

                                    <div class="wm-project-create-page__tags"
                                         data-tags>

                                    <span class="wm-project-create-page__tag">
                                        Research
                                        <button type="button"
                                                data-remove-tag>
                                            <i class="ph ph-x"></i>
                                        </button>
                                    </span>

                                        <span class="wm-project-create-page__tag">
                                        2026
                                        <button type="button"
                                                data-remove-tag>
                                            <i class="ph ph-x"></i>
                                        </button>
                                    </span>

                                    </div>

                                    <input type="text"
                                           id="projectTags"
                                           placeholder="Type a tag and press Enter"
                                           data-tag-input>

                                </div>

                                <span class="wm-project-create-page__help-text">
                                Press Enter to add a new tag.
                            </span>

                            </div>

                        </div>

                    </div>


                    {{-- Attachments --}}
                    <div class="wm-project-create-page__card">

                        <div class="wm-project-create-page__card-header">

                            <div>
                                <h2 class="wm-project-create-page__card-title">
                                    Project Files
                                </h2>

                                <p class="wm-project-create-page__card-description">
                                    Upload any documents that are useful when starting this project.
                                </p>
                            </div>

                        </div>

                        <div class="wm-project-create-page__card-body">

                            <div class="wm-project-create-page__upload"
                                 data-upload-area>

                                <div class="wm-project-create-page__upload-icon">
                                    <i class="ph ph-cloud-arrow-up"></i>
                                </div>

                                <h3>
                                    Upload project files
                                </h3>

                                <p>
                                    Drag & drop files here or click to browse.
                                </p>

                                <span>
                                PDF, DOCX, XLSX, CSV, PNG up to 20MB
                            </span>

                                <input type="file"
                                       id="projectFiles"
                                       multiple
                                       hidden>

                                <button type="button"
                                        class="btn btn-light btn-sm"
                                        data-browse-files>
                                    Browse Files
                                </button>

                            </div>

                            <div class="wm-project-create-page__file-list"
                                 data-file-list></div>

                        </div>

                    </div>

                </div>


                {{-- =====================================================
                    Sidebar
                ====================================================== --}}
                <div class="col-xl-4">

                    {{-- Summary --}}
                    <div class="wm-project-create-page__side-card">

                        <div class="wm-project-create-page__side-card-header">
                            <h3>
                                Project Summary
                            </h3>

                            <i class="ph ph-eye"></i>
                        </div>

                        <div class="wm-project-create-page__summary">

                            <div class="wm-project-create-page__summary-item">

                            <span>
                                Project Name
                            </span>

                                <strong data-summary-name>
                                    Untitled Project
                                </strong>

                            </div>

                            <div class="wm-project-create-page__summary-item">

                            <span>
                                Status
                            </span>

                                <strong data-summary-status>
                                    Planning
                                </strong>

                            </div>

                            <div class="wm-project-create-page__summary-item">

                            <span>
                                Priority
                            </span>

                                <strong data-summary-priority>
                                    Medium
                                </strong>

                            </div>

                            <div class="wm-project-create-page__summary-item">

                            <span>
                                Timeline
                            </span>

                                <strong data-summary-timeline>
                                    Not set
                                </strong>

                            </div>

                            <div class="wm-project-create-page__summary-item">

                            <span>
                                Team Members
                            </span>

                                <strong data-summary-members>
                                    3 members
                                </strong>

                            </div>

                        </div>

                    </div>


                    {{-- Project Settings --}}
                    <div class="wm-project-create-page__side-card">

                        <div class="wm-project-create-page__side-card-header">

                            <div>
                                <h3>
                                    Project Settings
                                </h3>

                                <p>
                                    Configure default behavior.
                                </p>
                            </div>

                            <i class="ph ph-gear"></i>

                        </div>

                        <div class="wm-project-create-page__settings">

                            <label class="wm-project-create-page__setting">

                            <span class="wm-project-create-page__setting-content">

                                <strong>
                                    Enable notifications
                                </strong>

                                <small>
                                    Notify team members about project updates.
                                </small>

                            </span>

                                <span class="form-check form-switch">
                                <input class="form-check-input"
                                       type="checkbox"
                                       name="notifications"
                                       checked>
                            </span>

                            </label>

                            <label class="wm-project-create-page__setting">

                            <span class="wm-project-create-page__setting-content">

                                <strong>
                                    Allow comments
                                </strong>

                                <small>
                                    Team members can comment on project updates.
                                </small>

                            </span>

                                <span class="form-check form-switch">
                                <input class="form-check-input"
                                       type="checkbox"
                                       name="comments"
                                       checked>
                            </span>

                            </label>

                            <label class="wm-project-create-page__setting">

                            <span class="wm-project-create-page__setting-content">

                                <strong>
                                    Track time
                                </strong>

                                <small>
                                    Allow team members to track project hours.
                                </small>

                            </span>

                                <span class="form-check form-switch">
                                <input class="form-check-input"
                                       type="checkbox"
                                       name="time_tracking">
                            </span>

                            </label>

                        </div>

                    </div>


                    {{-- Tips --}}
                    <div class="wm-project-create-page__tips">

                        <div class="wm-project-create-page__tips-icon">
                            <i class="ph ph-lightbulb"></i>
                        </div>

                        <div>

                            <h3>
                                Project setup tips
                            </h3>

                            <ul>
                                <li>
                                    Keep the project name short and descriptive.
                                </li>

                                <li>
                                    Add a clear project description and expected outcomes.
                                </li>

                                <li>
                                    Assign a project owner before inviting collaborators.
                                </li>

                                <li>
                                    Set realistic dates to keep project planning accurate.
                                </li>
                            </ul>

                        </div>

                    </div>


                    {{-- Help --}}
                    <div class="wm-project-create-page__help-card">

                        <div class="wm-project-create-page__help-icon">
                            <i class="ph ph-question"></i>
                        </div>

                        <div>

                            <strong>
                                Need help?
                            </strong>

                            <p>
                                Learn how to set up and manage projects.
                            </p>

                            <a href="#">
                                View documentation
                                <i class="ph ph-arrow-up-right"></i>
                            </a>

                        </div>

                    </div>

                </div>

            </div>


            {{-- Bottom Actions --}}
            <div class="wm-project-create-page__bottom-actions">

                <a href="{{ route('projects.index') }}"
                   class="btn btn-light">
                    Cancel
                </a>

                <div>

                    <button type="button"
                            class="btn btn-light"
                            data-save-draft>
                        <i class="ph ph-floppy-disk"></i>
                        Save as Draft
                    </button>

                    <button type="submit"
                            class="btn btn-primary">
                        <i class="ph ph-plus"></i>
                        Create Project
                    </button>

                </div>

            </div>

        </form>

    </div>

@endsection


@push('script')
    <script>
        $(document).ready(function () {

            'use strict';

            // =========================================================
            // Elements
            // =========================================================

            const $form = $('#createProjectForm');
            const $projectName = $('#projectName');
            const $description = $('#projectDescription');
            const $startDate = $('#startDate');
            const $endDate = $('#endDate');
            const $projectStatus = $('#projectStatus');
            const $projectPriority = $('#projectPriority');
            const $fileInput = $('#projectFiles');


            // =========================================================
            // Helpers
            // =========================================================

            function escapeHtml(value) {
                return $('<div>').text(value).html();
            }

            function updateSummary() {

                const name = $projectName.val().trim();

                $('[data-summary-name]').text(
                    name || 'Untitled Project'
                );

                $('[data-summary-status]').text(
                    $projectStatus.find('option:selected').text()
                );

                $('[data-summary-priority]').text(
                    $projectPriority.find('option:selected').text()
                );

                if ($startDate.val()) {

                    let timeline = $startDate.val();

                    if ($endDate.val()) {
                        timeline += ' → ' + $endDate.val();
                    }

                    $('[data-summary-timeline]').text(timeline);

                } else {

                    $('[data-summary-timeline]').text('Not set');

                }

                $('[data-summary-members]').text(
                    $('[data-team-list] .wm-project-create-page__team-member').length + ' members'
                );
            }


            function showError(field, message) {

                $('[data-error="' + field + '"]')
                    .text(message)
                    .addClass('is-visible');

                $('#' + field.replace('_', '')).addClass('is-invalid');
            }


            function clearErrors() {

                $('.wm-project-create-page__field-error')
                    .removeClass('is-visible')
                    .text('');

                $('.form-control, .form-select')
                    .removeClass('is-invalid');
            }


            function showSuccess(message) {

                if (typeof Swal !== 'undefined') {

                    Swal.fire({
                        icon: 'success',
                        title: 'Project Created',
                        text: message,
                        confirmButtonText: 'View Projects'
                    }).then(function () {

                        window.location.href = "{{ route('projects.index') }}";

                    });

                    return;
                }

                alert(message);

                window.location.href = "{{ route('projects.index') }}";
            }


            // =========================================================
            // Description Counter
            // =========================================================

            $description.on('input', function () {

                let value = $(this).val();

                if (value.length > 500) {
                    value = value.substring(0, 500);
                    $(this).val(value);
                }

                $('[data-description-count]').text(value.length);
            });


            // =========================================================
            // Summary Updates
            // =========================================================

            $projectName.on('input', updateSummary);

            $projectStatus.on('change', updateSummary);

            $projectPriority.on('change', updateSummary);

            $startDate.on('change', function () {

                if ($endDate.val() && $startDate.val() > $endDate.val()) {

                    $endDate.val('');

                    if (typeof Swal !== 'undefined') {
                        Swal.fire({
                            icon: 'warning',
                            title: 'Invalid timeline',
                            text: 'The end date cannot be earlier than the start date.'
                        });
                    }
                }

                updateSummary();
            });

            $endDate.on('change', function () {

                if (
                    $startDate.val() &&
                    $endDate.val() &&
                    $endDate.val() < $startDate.val()
                ) {

                    $(this).val('');

                    if (typeof Swal !== 'undefined') {
                        Swal.fire({
                            icon: 'warning',
                            title: 'Invalid end date',
                            text: 'The end date cannot be earlier than the start date.'
                        });
                    }
                }

                updateSummary();
            });


            // =========================================================
            // Tags
            // =========================================================

            $(document).on('keydown', '[data-tag-input]', function (event) {

                if (event.key !== 'Enter') {
                    return;
                }

                event.preventDefault();

                const value = $(this).val().trim();

                if (!value) {
                    return;
                }

                const tag = `
                <span class="wm-project-create-page__tag">
                    ${escapeHtml(value)}

                    <button type="button" data-remove-tag>
                        <i class="ph ph-x"></i>
                    </button>
                </span>
            `;

                $('[data-tags]').append(tag);

                $(this).val('');
            });


            $(document).on('click', '[data-remove-tag]', function () {
                $(this).closest('.wm-project-create-page__tag').remove();
            });


            // =========================================================
            // Team
            // =========================================================

            $(document).on('click', '[data-remove-member]', function () {

                const $member = $(this).closest(
                    '.wm-project-create-page__team-member'
                );

                $member.slideUp(180, function () {

                    $(this).remove();

                    updateSummary();
                });
            });


            $(document).on('click', '[data-add-member]', function () {

                if (typeof Swal !== 'undefined') {

                    Swal.fire({
                        title: 'Add Team Member',
                        input: 'select',
                        inputOptions: {
                            'john': 'John Anderson — Researcher',
                            'olivia': 'Olivia Martin — Graduate Student',
                            'james': 'James Wilson — Collaborator'
                        },
                        inputPlaceholder: 'Select a member',
                        showCancelButton: true,
                        confirmButtonText: 'Add Member'
                    }).then(function (result) {

                        if (!result.isConfirmed || !result.value) {
                            return;
                        }

                        const members = {
                            john: {
                                initials: 'JA',
                                name: 'John Anderson',
                                role: 'Researcher'
                            },
                            olivia: {
                                initials: 'OM',
                                name: 'Olivia Martin',
                                role: 'Graduate Student'
                            },
                            james: {
                                initials: 'JW',
                                name: 'James Wilson',
                                role: 'Collaborator'
                            }
                        };

                        const member = members[result.value];

                        if (!member) {
                            return;
                        }

                        const html = `
                        <div class="wm-project-create-page__team-member">

                            <div class="wm-project-create-page__member-avatar wm-project-create-page__member-avatar--orange">
                                ${member.initials}
                            </div>

                            <div class="wm-project-create-page__member-info">
                                <strong>${member.name}</strong>
                                <span>${member.role}</span>
                            </div>

                            <button type="button"
                                    class="wm-project-create-page__member-remove"
                                    data-remove-member
                                    aria-label="Remove member">
                                <i class="ph ph-x"></i>
                            </button>

                        </div>
                    `;

                        $('[data-team-list]').append(html);

                        updateSummary();
                    });
                }
            });


            // =========================================================
            // File Upload
            // =========================================================

            $(document).on('click', '[data-browse-files]', function () {
                $fileInput.trigger('click');
            });


            $(document).on('click', '[data-upload-area]', function (event) {

                if (
                    $(event.target).closest(
                        '[data-browse-files], input'
                    ).length
                ) {
                    return;
                }

                $fileInput.trigger('click');
            });


            $fileInput.on('change', function () {

                const files = Array.from(this.files);

                $('[data-file-list]').empty();

                files.forEach(function (file) {

                    const size = (
                        file.size / 1024 / 1024
                    ).toFixed(2);

                    const html = `
                    <div class="wm-project-create-page__file">

                        <div class="wm-project-create-page__file-icon">
                            <i class="ph ph-file"></i>
                        </div>

                        <div class="wm-project-create-page__file-info">
                            <strong>${escapeHtml(file.name)}</strong>
                            <span>${size} MB</span>
                        </div>

                        <button type="button"
                                class="wm-project-create-page__file-remove"
                                data-remove-file>
                            <i class="ph ph-x"></i>
                        </button>

                    </div>
                `;

                    $('[data-file-list]').append(html);
                });
            });


            $(document).on('click', '[data-remove-file]', function () {

                $(this)
                    .closest('.wm-project-create-page__file')
                    .slideUp(150, function () {
                        $(this).remove();
                    });
            });


            // =========================================================
            // Validation
            // =========================================================

            function validateForm() {

                clearErrors();

                let valid = true;

                const name = $projectName.val().trim();

                if (!name) {

                    showError(
                        'name',
                        'Project name is required.'
                    );

                    valid = false;
                }

                if (!$description.val().trim()) {

                    showError(
                        'description',
                        'Project description is required.'
                    );

                    valid = false;
                }

                if (!$startDate.val()) {

                    showError(
                        'start_date',
                        'Please select a project start date.'
                    );

                    valid = false;
                }

                if (
                    $startDate.val() &&
                    $endDate.val() &&
                    $endDate.val() < $startDate.val()
                ) {

                    showError(
                        'end_date',
                        'End date cannot be earlier than the start date.'
                    );

                    valid = false;
                }

                return valid;
            }


            // =========================================================
            // Create Project
            // =========================================================

            function createProject(isDraft) {

                if (!isDraft && !validateForm()) {

                    $('html, body').animate({
                        scrollTop: $('.is-invalid').first().offset().top - 120
                    }, 300);

                    return;
                }

                const $button = isDraft
                    ? $('[data-save-draft]')
                    : $('[data-create-project], #createProjectForm button[type="submit"]');

                const originalHtml = $button.first().html();

                $button
                    .prop('disabled', true)
                    .first()
                    .html(`
                    <i class="ph ph-spinner-gap ph-spin"></i>
                    ${isDraft ? 'Saving...' : 'Creating...'}
                `);

                const payload = {
                    name: $projectName.val().trim(),
                    code: $('#projectCode').val().trim(),
                    description: $description.val().trim(),
                    status: $projectStatus.val(),
                    priority: $projectPriority.val(),
                    start_date: $startDate.val(),
                    end_date: $endDate.val(),
                    owner: $('#projectOwner').val(),
                    draft: isDraft
                };

                // Replace with actual AJAX endpoint when backend is ready.
                console.log('Project payload:', payload);

                setTimeout(function () {

                    $button
                        .prop('disabled', false)
                        .first()
                        .html(originalHtml);

                    if (isDraft) {

                        if (typeof Swal !== 'undefined') {

                            Swal.fire({
                                icon: 'success',
                                title: 'Draft Saved',
                                text: 'Your project draft has been saved.'
                            });

                        } else {

                            alert('Project draft saved.');

                        }

                        return;
                    }

                    showSuccess(
                        'Your new project has been created successfully.'
                    );

                }, 900);
            }


            // =========================================================
            // Submit
            // =========================================================

            $form.on('submit', function (event) {

                event.preventDefault();

                createProject(false);
            });


            $(document).on('click', '[data-create-project]', function () {

                $form.trigger('submit');
            });


            $(document).on('click', '[data-save-draft]', function () {

                createProject(true);
            });


            // =========================================================
            // Initial
            // =========================================================

            updateSummary();

        });
    </script>
@endpush
