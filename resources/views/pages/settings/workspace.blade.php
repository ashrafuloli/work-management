@extends('layout.app')

@section('main')

    <div class="wm-workspace-settings-page">

        {{-- ---------------------------------------------------------
            Page Header
        ---------------------------------------------------------- --}}
        <div class="wm-page-header">
            <div class="wm-page-header__content">
                <div class="wm-page-header__breadcrumb">
                    <a href="{{ route('settings.index') }}">
                        <i class="ph ph-gear"></i>
                        Settings
                    </a>

                    <i class="ph ph-caret-right"></i>

                    <span>Workspace</span>
                </div>

                <h1 class="wm-page-header__title">Workspace Settings</h1>

                <p class="wm-page-header__description">
                    Manage your workspace identity, defaults, member access,
                    and organization preferences.
                </p>
            </div>

            <div class="wm-page-header__actions">

                <button
                    type="button"
                    class="wm-btn wm-btn--light"
                    id="workspaceResetBtn"
                >
                    <i class="ph ph-arrow-counter-clockwise"></i>
                    Reset
                </button>

                <button
                    type="button"
                    class="wm-btn wm-btn--primary"
                    id="workspaceSaveBtn"
                >
                    <i class="ph ph-check"></i>
                    Save Changes
                </button>

            </div>
        </div>


        {{-- ---------------------------------------------------------
            Settings Layout
        ---------------------------------------------------------- --}}
        <div class="wm-workspace-settings">

            {{-- -----------------------------------------------------
                Sidebar
            ------------------------------------------------------ --}}
            <aside class="wm-workspace-settings__sidebar">

                <div class="wm-workspace-settings__nav">

                    <div class="wm-workspace-settings__nav-label">
                        Workspace
                    </div>

                    <button
                        type="button"
                        class="wm-workspace-settings__nav-item is-active"
                        data-workspace-section="identity"
                    >
                    <span class="wm-workspace-settings__nav-icon">
                        <i class="ph ph-buildings"></i>
                    </span>

                        <span class="wm-workspace-settings__nav-content">
                        <strong>Workspace Identity</strong>
                        <small>Name, logo & description</small>
                    </span>
                    </button>


                    <button
                        type="button"
                        class="wm-workspace-settings__nav-item"
                        data-workspace-section="regional"
                    >
                    <span class="wm-workspace-settings__nav-icon">
                        <i class="ph ph-globe"></i>
                    </span>

                        <span class="wm-workspace-settings__nav-content">
                        <strong>Regional Settings</strong>
                        <small>Timezone & language</small>
                    </span>
                    </button>


                    <button
                        type="button"
                        class="wm-workspace-settings__nav-item"
                        data-workspace-section="projects"
                    >
                    <span class="wm-workspace-settings__nav-icon">
                        <i class="ph ph-folder-simple"></i>
                    </span>

                        <span class="wm-workspace-settings__nav-content">
                        <strong>Project Defaults</strong>
                        <small>Default project behavior</small>
                    </span>
                    </button>


                    <button
                        type="button"
                        class="wm-workspace-settings__nav-item"
                        data-workspace-section="members"
                    >
                    <span class="wm-workspace-settings__nav-icon">
                        <i class="ph ph-users-three"></i>
                    </span>

                        <span class="wm-workspace-settings__nav-content">
                        <strong>Member Settings</strong>
                        <small>Access & invitations</small>
                    </span>
                    </button>


                    <button
                        type="button"
                        class="wm-workspace-settings__nav-item"
                        data-workspace-section="email"
                    >
                    <span class="wm-workspace-settings__nav-icon">
                        <i class="ph ph-envelope-simple"></i>
                    </span>

                        <span class="wm-workspace-settings__nav-content">
                        <strong>Email & Domain</strong>
                        <small>Email configuration</small>
                    </span>
                    </button>

                </div>


                <div class="wm-workspace-settings__sidebar-info">

                    <div class="wm-workspace-settings__sidebar-info-icon">
                        <i class="ph ph-info"></i>
                    </div>

                    <div>
                        <strong>Workspace Admin</strong>

                        <p>
                            Only workspace administrators can change
                            workspace-wide settings.
                        </p>
                    </div>

                </div>

            </aside>


            {{-- -----------------------------------------------------
                Content
            ------------------------------------------------------ --}}
            <div class="wm-workspace-settings__content">


                {{-- =================================================
                    Identity
                ================================================== --}}
                <section
                    class="wm-settings-panel wm-workspace-section is-active"
                    data-workspace-panel="identity"
                >

                    <div class="wm-settings-panel__header">
                        <div>
                            <h2>Workspace Identity</h2>

                            <p>
                                Customize how your workspace appears
                                throughout WorkManagement.
                            </p>
                        </div>
                    </div>


                    {{-- Logo --}}
                    <div class="wm-workspace-brand">

                        <div class="wm-workspace-brand__logo">

                            <div
                                class="wm-workspace-brand__preview"
                                id="workspaceLogoPreview"
                            >
                                <span>WM</span>
                            </div>

                        </div>

                        <div class="wm-workspace-brand__content">

                            <h3>Workspace Logo</h3>

                            <p>
                                Recommended size is 256 × 256px.
                                PNG, JPG or SVG up to 2MB.
                            </p>

                            <div class="wm-workspace-brand__actions">

                                <label
                                    for="workspaceLogo"
                                    class="wm-btn wm-btn--light wm-btn--sm"
                                >
                                    <i class="ph ph-upload-simple"></i>
                                    Upload Logo
                                </label>

                                <input
                                    type="file"
                                    id="workspaceLogo"
                                    class="wm-visually-hidden"
                                    accept="image/png,image/jpeg,image/svg+xml"
                                >

                                <button
                                    type="button"
                                    class="wm-btn wm-btn--ghost-danger wm-btn--sm"
                                    id="removeWorkspaceLogo"
                                >
                                    <i class="ph ph-trash"></i>
                                    Remove
                                </button>

                            </div>

                        </div>

                    </div>


                    <div class="wm-form-grid">

                        <div class="wm-form-group">

                            <label for="workspaceName">
                                Workspace Name
                                <span>*</span>
                            </label>

                            <input
                                type="text"
                                id="workspaceName"
                                class="wm-form-control"
                                value="ResearchOS"
                                placeholder="Enter workspace name"
                            >

                            <small>
                                This name will be visible to all workspace members.
                            </small>

                        </div>


                        <div class="wm-form-group">

                            <label for="workspaceSlug">
                                Workspace URL
                            </label>

                            <div class="wm-input-group">

                            <span class="wm-input-group__prefix">
                                workmanagement.com/
                            </span>

                                <input
                                    type="text"
                                    id="workspaceSlug"
                                    class="wm-form-control"
                                    value="researchos"
                                    placeholder="workspace-name"
                                >

                            </div>

                            <small>
                                Use lowercase letters, numbers and hyphens.
                            </small>

                        </div>


                        <div class="wm-form-group wm-form-group--full">

                            <label for="workspaceDescription">
                                Workspace Description
                            </label>

                            <textarea
                                id="workspaceDescription"
                                class="wm-form-control"
                                rows="4"
                                placeholder="Describe your workspace"
                            >Research project management workspace for academic and R&amp;D teams.</textarea>

                            <small>
                                A short description helps members understand
                                what this workspace is used for.
                            </small>

                        </div>

                    </div>

                </section>


                {{-- =================================================
                    Regional Settings
                ================================================== --}}
                <section
                    class="wm-settings-panel wm-workspace-section"
                    data-workspace-panel="regional"
                >

                    <div class="wm-settings-panel__header">

                        <div>
                            <h2>Regional Settings</h2>

                            <p>
                                Configure the regional preferences used
                                throughout your workspace.
                            </p>
                        </div>

                    </div>


                    <div class="wm-form-grid">

                        <div class="wm-form-group">

                            <label for="workspaceTimezone">
                                Timezone
                            </label>

                            <select
                                id="workspaceTimezone"
                                class="wm-form-control"
                            >
                                <option value="Asia/Dhaka" selected>
                                    (UTC+06:00) Dhaka
                                </option>

                                <option value="UTC">
                                    (UTC+00:00) Coordinated Universal Time
                                </option>

                                <option value="Europe/London">
                                    (UTC+00:00) London
                                </option>

                                <option value="America/New_York">
                                    (UTC-05:00) New York
                                </option>

                                <option value="America/Los_Angeles">
                                    (UTC-08:00) Los Angeles
                                </option>
                            </select>

                        </div>


                        <div class="wm-form-group">

                            <label for="workspaceLanguage">
                                Language
                            </label>

                            <select
                                id="workspaceLanguage"
                                class="wm-form-control"
                            >
                                <option value="en" selected>
                                    English
                                </option>

                                <option value="bn">
                                    বাংলা
                                </option>

                                <option value="de">
                                    Deutsch
                                </option>

                                <option value="fr">
                                    Français
                                </option>
                            </select>

                        </div>


                        <div class="wm-form-group">

                            <label for="workspaceDateFormat">
                                Date Format
                            </label>

                            <select
                                id="workspaceDateFormat"
                                class="wm-form-control"
                            >
                                <option value="MMM D, YYYY" selected>
                                    Sep 24, 2026
                                </option>

                                <option value="DD/MM/YYYY">
                                    24/09/2026
                                </option>

                                <option value="MM/DD/YYYY">
                                    09/24/2026
                                </option>

                                <option value="YYYY-MM-DD">
                                    2026-09-24
                                </option>
                            </select>

                        </div>


                        <div class="wm-form-group">

                            <label for="workspaceTimeFormat">
                                Time Format
                            </label>

                            <select
                                id="workspaceTimeFormat"
                                class="wm-form-control"
                            >
                                <option value="12" selected>
                                    12-hour — 2:30 PM
                                </option>

                                <option value="24">
                                    24-hour — 14:30
                                </option>
                            </select>

                        </div>

                    </div>

                </section>


                {{-- =================================================
                    Project Defaults
                ================================================== --}}
                <section
                    class="wm-settings-panel wm-workspace-section"
                    data-workspace-panel="projects"
                >

                    <div class="wm-settings-panel__header">

                        <div>
                            <h2>Project Defaults</h2>

                            <p>
                                Define the default behavior for new projects.
                            </p>
                        </div>

                    </div>


                    <div class="wm-settings-option-list">

                        <div class="wm-settings-option">

                            <div class="wm-settings-option__content">

                                <div class="wm-settings-option__icon">
                                    <i class="ph ph-eye"></i>
                                </div>

                                <div>
                                    <h3>Default Project Visibility</h3>

                                    <p>
                                        Choose who can access newly created projects.
                                    </p>
                                </div>

                            </div>

                            <select
                                class="wm-form-control wm-form-control--auto"
                                id="defaultProjectVisibility"
                            >
                                <option value="private" selected>
                                    Private
                                </option>

                                <option value="workspace">
                                    Workspace
                                </option>
                            </select>

                        </div>


                        <div class="wm-settings-option">

                            <div class="wm-settings-option__content">

                                <div class="wm-settings-option__icon">
                                    <i class="ph ph-calendar-check"></i>
                                </div>

                                <div>
                                    <h3>Default Project Duration</h3>

                                    <p>
                                        Default duration used when creating projects.
                                    </p>
                                </div>

                            </div>

                            <select
                                class="wm-form-control wm-form-control--auto"
                                id="defaultProjectDuration"
                            >
                                <option value="30">
                                    30 days
                                </option>

                                <option value="60" selected>
                                    60 days
                                </option>

                                <option value="90">
                                    90 days
                                </option>

                                <option value="custom">
                                    Custom
                                </option>
                            </select>

                        </div>


                        <div class="wm-settings-option">

                            <div class="wm-settings-option__content">

                                <div class="wm-settings-option__icon">
                                    <i class="ph ph-kanban"></i>
                                </div>

                                <div>
                                    <h3>Default Project View</h3>

                                    <p>
                                        Select the initial view members see in projects.
                                    </p>
                                </div>

                            </div>

                            <select
                                class="wm-form-control wm-form-control--auto"
                                id="defaultProjectView"
                            >
                                <option value="overview" selected>
                                    Overview
                                </option>

                                <option value="tasks">
                                    Tasks
                                </option>

                                <option value="timeline">
                                    Timeline
                                </option>

                                <option value="calendar">
                                    Calendar
                                </option>
                            </select>

                        </div>

                    </div>

                </section>


                {{-- =================================================
                    Member Settings
                ================================================== --}}
                <section
                    class="wm-settings-panel wm-workspace-section"
                    data-workspace-panel="members"
                >

                    <div class="wm-settings-panel__header">

                        <div>
                            <h2>Member Settings</h2>

                            <p>
                                Control how members and guests interact
                                with your workspace.
                            </p>
                        </div>

                    </div>


                    <div class="wm-settings-option-list">

                        <div class="wm-settings-option">

                            <div class="wm-settings-option__content">

                                <div class="wm-settings-option__icon">
                                    <i class="ph ph-user-plus"></i>
                                </div>

                                <div>
                                    <h3>Member Invitations</h3>

                                    <p>
                                        Allow members to invite new people.
                                    </p>
                                </div>

                            </div>

                            <label class="wm-switch">
                                <input
                                    type="checkbox"
                                    id="allowMemberInvites"
                                    checked
                                >
                                <span></span>
                            </label>

                        </div>


                        <div class="wm-settings-option">

                            <div class="wm-settings-option__content">

                                <div class="wm-settings-option__icon">
                                    <i class="ph ph-user-circle-plus"></i>
                                </div>

                                <div>
                                    <h3>Guest Access</h3>

                                    <p>
                                        Allow external collaborators to access projects.
                                    </p>
                                </div>

                            </div>

                            <label class="wm-switch">
                                <input
                                    type="checkbox"
                                    id="allowGuestAccess"
                                    checked
                                >
                                <span></span>
                            </label>

                        </div>


                        <div class="wm-settings-option">

                            <div class="wm-settings-option__content">

                                <div class="wm-settings-option__icon">
                                    <i class="ph ph-shield-check"></i>
                                </div>

                                <div>
                                    <h3>Require Admin Approval</h3>

                                    <p>
                                        Require an administrator to approve invitations.
                                    </p>
                                </div>

                            </div>

                            <label class="wm-switch">
                                <input
                                    type="checkbox"
                                    id="requireAdminApproval"
                                >
                                <span></span>
                            </label>

                        </div>


                        <div class="wm-settings-option">

                            <div class="wm-settings-option__content">

                                <div class="wm-settings-option__icon">
                                    <i class="ph ph-user-minus"></i>
                                </div>

                                <div>
                                    <h3>Member Removal</h3>

                                    <p>
                                        Allow project managers to remove members
                                        from their projects.
                                    </p>
                                </div>

                            </div>

                            <label class="wm-switch">
                                <input
                                    type="checkbox"
                                    id="allowProjectManagerRemoval"
                                >
                                <span></span>
                            </label>

                        </div>

                    </div>

                </section>


                {{-- =================================================
                    Email & Domain
                ================================================== --}}
                <section
                    class="wm-settings-panel wm-workspace-section"
                    data-workspace-panel="email"
                >

                    <div class="wm-settings-panel__header">

                        <div>
                            <h2>Email & Domain</h2>

                            <p>
                                Manage workspace email preferences and
                                allowed member domains.
                            </p>
                        </div>

                    </div>


                    <div class="wm-form-grid">

                        <div class="wm-form-group">

                            <label for="workspaceEmail">
                                Workspace Email
                            </label>

                            <input
                                type="email"
                                id="workspaceEmail"
                                class="wm-form-control"
                                value="admin@researchos.com"
                                placeholder="admin@example.com"
                            >

                            <small>
                                Used for workspace notifications and administration.
                            </small>

                        </div>


                        <div class="wm-form-group">

                            <label for="workspaceDomain">
                                Primary Domain
                            </label>

                            <input
                                type="text"
                                id="workspaceDomain"
                                class="wm-form-control"
                                value="researchos.com"
                                placeholder="example.com"
                            >

                            <small>
                                Your organization's primary email domain.
                            </small>

                        </div>


                        <div class="wm-form-group wm-form-group--full">

                            <label for="allowedDomains">
                                Allowed Email Domains
                            </label>

                            <input
                                type="text"
                                id="allowedDomains"
                                class="wm-form-control"
                                value="researchos.com"
                                placeholder="example.com, company.org"
                            >

                            <small>
                                Members using these domains can be invited
                                to the workspace.
                            </small>

                        </div>

                    </div>


                    <div class="wm-domain-status">

                        <div class="wm-domain-status__icon">
                            <i class="ph ph-check-circle"></i>
                        </div>

                        <div class="wm-domain-status__content">

                            <strong>Domain verified</strong>

                            <span>
                            researchos.com is verified and ready to use.
                        </span>

                        </div>

                        <span class="wm-status-badge wm-status-badge--success">
                        Verified
                    </span>

                    </div>

                </section>


                {{-- =================================================
                    Workspace Stats
                ================================================== --}}
                <div class="wm-workspace-stats">

                    <div class="wm-workspace-stat">

                    <span class="wm-workspace-stat__icon">
                        <i class="ph ph-users-three"></i>
                    </span>

                        <div>
                            <strong>24</strong>
                            <span>Members</span>
                        </div>

                    </div>


                    <div class="wm-workspace-stat">

                    <span class="wm-workspace-stat__icon">
                        <i class="ph ph-folder-simple"></i>
                    </span>

                        <div>
                            <strong>18</strong>
                            <span>Projects</span>
                        </div>

                    </div>


                    <div class="wm-workspace-stat">

                    <span class="wm-workspace-stat__icon">
                        <i class="ph ph-check-square"></i>
                    </span>

                        <div>
                            <strong>342</strong>
                            <span>Tasks</span>
                        </div>

                    </div>


                    <div class="wm-workspace-stat">

                    <span class="wm-workspace-stat__icon">
                        <i class="ph ph-chart-line-up"></i>
                    </span>

                        <div>
                            <strong>87%</strong>
                            <span>Activity</span>
                        </div>

                    </div>

                </div>


                {{-- =================================================
                    Danger Zone
                ================================================== --}}
                <section class="wm-danger-zone">

                    <div class="wm-danger-zone__header">

                        <div class="wm-danger-zone__icon">
                            <i class="ph ph-warning"></i>
                        </div>

                        <div>
                            <h2>Danger Zone</h2>

                            <p>
                                Destructive workspace actions. These actions
                                cannot be easily undone.
                            </p>
                        </div>

                    </div>


                    <div class="wm-danger-zone__item">

                        <div>

                            <h3>Delete Workspace</h3>

                            <p>
                                Permanently delete this workspace and all
                                associated projects, tasks and files.
                            </p>

                        </div>

                        <button
                            type="button"
                            class="wm-btn wm-btn--danger"
                            id="deleteWorkspaceBtn"
                        >
                            <i class="ph ph-trash"></i>
                            Delete Workspace
                        </button>

                    </div>

                </section>

            </div>

        </div>

    </div>

@endsection


@push('script')
    <script>
        $(document).ready(function () {

            'use strict';

            /* -------------------------------------------------------
             * Elements
             * ----------------------------------------------------- */

            const $page = $('.wm-workspace-settings-page');
            const $navItems = $('[data-workspace-section]');
            const $sections = $('[data-workspace-panel]');
            const $saveBtn = $('#workspaceSaveBtn');
            const $resetBtn = $('#workspaceResetBtn');

            let isDirty = false;


            /* -------------------------------------------------------
             * Functions
             * ----------------------------------------------------- */

            function markDirty() {
                isDirty = true;

                $saveBtn.addClass('is-dirty');

                $saveBtn.find('i')
                    .removeClass('ph-check')
                    .addClass('ph-circle');
            }


            function clearDirty() {
                isDirty = false;

                $saveBtn.removeClass('is-dirty');

                $saveBtn.find('i')
                    .removeClass('ph-circle')
                    .addClass('ph-check');
            }


            function showSection(section) {

                $navItems.removeClass('is-active');

                $navItems
                    .filter('[data-workspace-section="' + section + '"]')
                    .addClass('is-active');

                $sections.removeClass('is-active');

                $sections
                    .filter('[data-workspace-panel="' + section + '"]')
                    .addClass('is-active');

                $('html, body').animate({
                    scrollTop: $('.wm-workspace-settings__content').offset().top - 90
                }, 200);
            }


            function collectWorkspaceData() {

                return {
                    workspace_name: $('#workspaceName').val(),
                    workspace_slug: $('#workspaceSlug').val(),
                    workspace_description: $('#workspaceDescription').val(),
                    timezone: $('#workspaceTimezone').val(),
                    language: $('#workspaceLanguage').val(),
                    date_format: $('#workspaceDateFormat').val(),
                    time_format: $('#workspaceTimeFormat').val(),
                    project_visibility: $('#defaultProjectVisibility').val(),
                    project_duration: $('#defaultProjectDuration').val(),
                    project_view: $('#defaultProjectView').val(),
                    allow_member_invites: $('#allowMemberInvites').is(':checked'),
                    allow_guest_access: $('#allowGuestAccess').is(':checked'),
                    require_admin_approval: $('#requireAdminApproval').is(':checked'),
                    allow_project_manager_removal: $('#allowProjectManagerRemoval').is(':checked'),
                    workspace_email: $('#workspaceEmail').val(),
                    workspace_domain: $('#workspaceDomain').val(),
                    allowed_domains: $('#allowedDomains').val()
                };
            }


            function showSaveState() {

                $saveBtn
                    .prop('disabled', true)
                    .addClass('is-saving');

                $saveBtn.find('i')
                    .removeClass('ph-check ph-circle')
                    .addClass('ph-spinner');

                setTimeout(function () {

                    $saveBtn
                        .prop('disabled', false)
                        .removeClass('is-saving');

                    $saveBtn.find('i')
                        .removeClass('ph-spinner')
                        .addClass('ph-check');

                    clearDirty();

                    Swal.fire({
                        icon: 'success',
                        title: 'Changes saved',
                        text: 'Workspace settings have been updated successfully.',
                        timer: 1800,
                        showConfirmButton: false
                    });

                }, 700);
            }


            function resetWorkspaceSettings() {

                Swal.fire({
                    icon: 'question',
                    title: 'Reset changes?',
                    text: 'All unsaved workspace changes will be discarded.',
                    showCancelButton: true,
                    confirmButtonText: 'Reset Changes',
                    cancelButtonText: 'Keep Editing',
                    reverseButtons: true
                }).then(function (result) {

                    if (!result.isConfirmed) {
                        return;
                    }

                    $('#workspaceName').val('ResearchOS');
                    $('#workspaceSlug').val('researchos');

                    $('#workspaceDescription').val(
                        'Research project management workspace for academic and R&D teams.'
                    );

                    $('#workspaceTimezone').val('Asia/Dhaka');
                    $('#workspaceLanguage').val('en');
                    $('#workspaceDateFormat').val('MMM D, YYYY');
                    $('#workspaceTimeFormat').val('12');

                    $('#defaultProjectVisibility').val('private');
                    $('#defaultProjectDuration').val('60');
                    $('#defaultProjectView').val('overview');

                    $('#allowMemberInvites').prop('checked', true);
                    $('#allowGuestAccess').prop('checked', true);
                    $('#requireAdminApproval').prop('checked', false);
                    $('#allowProjectManagerRemoval').prop('checked', false);

                    $('#workspaceEmail').val('admin@researchos.com');
                    $('#workspaceDomain').val('researchos.com');
                    $('#allowedDomains').val('researchos.com');

                    clearDirty();

                    Swal.fire({
                        icon: 'success',
                        title: 'Changes reset',
                        text: 'Workspace settings have been restored.',
                        timer: 1500,
                        showConfirmButton: false
                    });

                });
            }


            function previewWorkspaceLogo(file) {

                if (!file) {
                    return;
                }

                if (file.size > 2 * 1024 * 1024) {

                    Swal.fire({
                        icon: 'error',
                        title: 'File too large',
                        text: 'Please select an image smaller than 2MB.'
                    });

                    return;
                }

                const reader = new FileReader();

                reader.onload = function (event) {

                    $('#workspaceLogoPreview')
                        .html('<img src="' + event.target.result + '" alt="Workspace Logo">');

                    markDirty();
                };

                reader.readAsDataURL(file);
            }


            function removeWorkspaceLogo() {

                $('#workspaceLogo')
                    .val('');

                $('#workspaceLogoPreview')
                    .html('<span>WM</span>');

                markDirty();
            }


            function deleteWorkspace() {

                Swal.fire({
                    icon: 'warning',
                    title: 'Delete workspace?',
                    html:
                        '<p>This action will permanently delete:</p>' +
                        '<ul class="text-start">' +
                        '<li>All workspace projects</li>' +
                        '<li>All tasks and milestones</li>' +
                        '<li>All files and documents</li>' +
                        '<li>All workspace member data</li>' +
                        '</ul>' +
                        '<strong>This action cannot be undone.</strong>',
                    input: 'text',
                    inputLabel: 'Type DELETE to confirm',
                    inputPlaceholder: 'DELETE',
                    showCancelButton: true,
                    confirmButtonText: 'Delete Workspace',
                    cancelButtonText: 'Cancel',
                    confirmButtonColor: '#EF4444',
                    preConfirm: function (value) {

                        if (value !== 'DELETE') {

                            Swal.showValidationMessage(
                                'Please type DELETE exactly to confirm.'
                            );

                            return false;
                        }

                        return true;
                    }
                }).then(function (result) {

                    if (!result.isConfirmed) {
                        return;
                    }

                    Swal.fire({
                        icon: 'success',
                        title: 'Workspace deletion requested',
                        text: 'This is a UI demonstration. Connect the action to your backend endpoint.',
                        confirmButtonText: 'OK'
                    });

                });
            }


            /* -------------------------------------------------------
             * Events
             * ----------------------------------------------------- */

            $(document).on(
                'click',
                '[data-workspace-section]',
                function () {

                    const section = $(this).data('workspace-section');

                    showSection(section);
                }
            );


            $(document).on(
                'input change',
                '.wm-workspace-settings-page input, .wm-workspace-settings-page textarea, .wm-workspace-settings-page select',
                function () {

                    markDirty();
                }
            );


            $saveBtn.on('click', function () {

                if (!$('#workspaceName').val().trim()) {

                    Swal.fire({
                        icon: 'warning',
                        title: 'Workspace name required',
                        text: 'Please enter a workspace name before saving.'
                    });

                    $('#workspaceName').trigger('focus');

                    return;
                }

                const data = collectWorkspaceData();

                console.log('Workspace settings payload:', data);

                /*
                 * Future AJAX:
                 *
                 * $.ajax({
                 *     url: '/settings/workspace',
                 *     method: 'PUT',
                 *     data: data,
                 *     headers: {
                 *         'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                 *     },
                 *     success: function (response) {
                 *         clearDirty();
                 *     }
                 * });
                 */

                showSaveState();
            });


            $resetBtn.on('click', function () {

                resetWorkspaceSettings();
            });


            $('#workspaceLogo').on('change', function () {

                const file = this.files[0];

                previewWorkspaceLogo(file);
            });


            $('#removeWorkspaceLogo').on('click', function () {

                removeWorkspaceLogo();
            });


            $('#deleteWorkspaceBtn').on('click', function () {

                deleteWorkspace();
            });


            $('#workspaceSlug').on('input', function () {

                let value = $(this).val();

                value = value
                    .toLowerCase()
                    .replace(/[^a-z0-9-]/g, '-')
                    .replace(/-+/g, '-')
                    .replace(/^-|-$/g, '');

                $(this).val(value);
            });


            /* -------------------------------------------------------
             * Initial
             * ----------------------------------------------------- */

            clearDirty();

        });
    </script>
@endpush
