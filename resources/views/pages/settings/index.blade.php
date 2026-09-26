@extends('layout.app')

@section('main')

    <div class="wm-settings-page">

        {{-- ============================================================
            PAGE HEADER
        ============================================================= --}}
        <div class="wm-settings-page__header">

            <div class="wm-settings-page__breadcrumb">
                <a href="{{ route('dashboard') }}" class="wm-settings-page__breadcrumb-link">
                    Dashboard
                </a>

                <i class="ph ph-caret-right"></i>

                <span>Settings</span>
            </div>

            <div class="wm-settings-page__heading">

                <div>
                    <h1 class="wm-settings-page__title">
                        Settings
                    </h1>

                    <p class="wm-settings-page__subtitle">
                        Manage your workspace preferences and application settings.
                    </p>
                </div>

                <div class="wm-settings-page__header-actions">

                    <button
                        type="button"
                        class="btn btn-light"
                        id="resetSettings"
                    >
                        <i class="ph ph-arrow-counter-clockwise"></i>
                        Reset
                    </button>

                    <button
                        type="button"
                        class="btn btn-primary"
                        id="saveSettings"
                    >
                        <i class="ph ph-check"></i>
                        Save Changes
                    </button>

                </div>

            </div>

        </div>


        {{-- ============================================================
            SETTINGS LAYOUT
        ============================================================= --}}
        <div class="wm-settings-page__layout">

            {{-- ========================================================
                SIDEBAR
            ========================================================= --}}
            <aside class="wm-settings-nav">

                <div class="wm-settings-nav__group">

                <span class="wm-settings-nav__label">
                    Workspace
                </span>

                    <button
                        type="button"
                        class="wm-settings-nav__item is-active"
                        data-settings-section="general"
                    >
                        <i class="ph ph-gear"></i>
                        <span>General</span>
                    </button>

                    <button
                        type="button"
                        class="wm-settings-nav__item"
                        data-settings-section="preferences"
                    >
                        <i class="ph ph-sliders-horizontal"></i>
                        <span>Preferences</span>
                    </button>

                    <button
                        type="button"
                        class="wm-settings-nav__item"
                        data-settings-section="notifications"
                    >
                        <i class="ph ph-bell"></i>
                        <span>Notifications</span>
                    </button>

                </div>


                <div class="wm-settings-nav__group">

                <span class="wm-settings-nav__label">
                    Access & Security
                </span>

                    <a
                        href="{{ route('settings.profile') }}"
                        class="wm-settings-nav__item"
                    >
                        <i class="ph ph-user-circle"></i>
                        <span>Profile</span>
                    </a>

                    <a
                        href="{{ route('settings.roles-permissions') }}"
                        class="wm-settings-nav__item"
                    >
                        <i class="ph ph-shield-check"></i>
                        <span>Roles & Permissions</span>
                    </a>

                    <a
                        href="{{ route('settings.integrations') }}"
                        class="wm-settings-nav__item"
                    >
                        <i class="ph ph-plugs-connected"></i>
                        <span>Integrations</span>
                    </a>

                </div>


                <div class="wm-settings-nav__group">

                <span class="wm-settings-nav__label">
                    Developer
                </span>

                    <a
                        href="{{ route('settings.api') }}"
                        class="wm-settings-nav__item"
                    >
                        <i class="ph ph-code"></i>
                        <span>API & Developer</span>
                    </a>

                </div>

            </aside>


            {{-- ========================================================
                CONTENT
            ========================================================= --}}
            <div class="wm-settings-page__content">

                {{-- ====================================================
                    GENERAL
                ===================================================== --}}
                <section
                    class="wm-settings-section is-active"
                    data-settings-panel="general"
                >

                    <div class="wm-settings-section__header">

                        <div>
                            <h2 class="wm-settings-section__title">
                                General Settings
                            </h2>

                            <p class="wm-settings-section__description">
                                Configure the basic information and defaults for your workspace.
                            </p>
                        </div>

                    </div>


                    {{-- Workspace Identity --}}
                    <div class="wm-settings-card">

                        <div class="wm-settings-card__header">

                            <div>
                                <h3 class="wm-settings-card__title">
                                    Workspace Identity
                                </h3>

                                <p class="wm-settings-card__description">
                                    Basic information displayed across your workspace.
                                </p>
                            </div>

                        </div>


                        <div class="wm-settings-card__body">

                            <div class="wm-settings-logo-row">

                                <div class="wm-settings-logo">

                                    <div class="wm-settings-logo__preview">
                                        WM
                                    </div>

                                    <div class="wm-settings-logo__content">

                                        <strong>
                                            Workspace Logo
                                        </strong>

                                        <span>
                                        PNG, JPG or SVG. Recommended 256 × 256px.
                                    </span>

                                        <div class="wm-settings-logo__actions">

                                            <button
                                                type="button"
                                                class="btn btn-sm btn-light"
                                                id="changeLogo"
                                            >
                                                <i class="ph ph-upload-simple"></i>
                                                Change Logo
                                            </button>

                                            <button
                                                type="button"
                                                class="btn btn-sm btn-link text-danger"
                                                id="removeLogo"
                                            >
                                                Remove
                                            </button>

                                        </div>

                                    </div>

                                </div>

                            </div>


                            <div class="row g-4">

                                <div class="col-lg-6">

                                    <div class="wm-settings-field">

                                        <label for="workspaceName">
                                            Workspace Name
                                        </label>

                                        <input
                                            type="text"
                                            id="workspaceName"
                                            class="form-control"
                                            value="ResearchOS"
                                        >

                                        <span class="wm-settings-field__hint">
                                        Your workspace name appears in navigation and emails.
                                    </span>

                                    </div>

                                </div>


                                <div class="col-lg-6">

                                    <div class="wm-settings-field">

                                        <label for="workspaceSlug">
                                            Workspace URL
                                        </label>

                                        <div class="wm-settings-input-group">

                                        <span>
                                            app.workmanagement.com/
                                        </span>

                                            <input
                                                type="text"
                                                id="workspaceSlug"
                                                class="form-control"
                                                value="researchos"
                                            >

                                        </div>

                                        <span class="wm-settings-field__hint">
                                        Only lowercase letters, numbers and hyphens.
                                    </span>

                                    </div>

                                </div>


                                <div class="col-12">

                                    <div class="wm-settings-field">

                                        <label for="workspaceDescription">
                                            Workspace Description
                                        </label>

                                        <textarea
                                            id="workspaceDescription"
                                            class="form-control"
                                            rows="4"
                                        >Research project management workspace for academic research teams and R&D organizations.</textarea>

                                        <span class="wm-settings-field__hint">
                                        A short description to help members understand this workspace.
                                    </span>

                                    </div>

                                </div>

                            </div>

                        </div>

                    </div>


                    {{-- Regional --}}
                    <div class="wm-settings-card">

                        <div class="wm-settings-card__header">

                            <div>
                                <h3 class="wm-settings-card__title">
                                    Regional Settings
                                </h3>

                                <p class="wm-settings-card__description">
                                    Configure date, time and localization preferences.
                                </p>
                            </div>

                        </div>


                        <div class="wm-settings-card__body">

                            <div class="row g-4">

                                <div class="col-md-6">

                                    <div class="wm-settings-field">

                                        <label for="timezone">
                                            Timezone
                                        </label>

                                        <select
                                            id="timezone"
                                            class="form-select"
                                        >
                                            <option value="asia-dhaka" selected>
                                                Asia/Dhaka (UTC+06:00)
                                            </option>

                                            <option value="utc">
                                                UTC (UTC+00:00)
                                            </option>

                                            <option value="america-new-york">
                                                America/New_York (UTC-05:00)
                                            </option>

                                            <option value="europe-london">
                                                Europe/London (UTC+00:00)
                                            </option>

                                        </select>

                                    </div>

                                </div>


                                <div class="col-md-6">

                                    <div class="wm-settings-field">

                                        <label for="language">
                                            Language
                                        </label>

                                        <select
                                            id="language"
                                            class="form-select"
                                        >
                                            <option value="en" selected>
                                                English
                                            </option>

                                            <option value="bn">
                                                বাংলা
                                            </option>

                                        </select>

                                    </div>

                                </div>


                                <div class="col-md-6">

                                    <div class="wm-settings-field">

                                        <label for="dateFormat">
                                            Date Format
                                        </label>

                                        <select
                                            id="dateFormat"
                                            class="form-select"
                                        >
                                            <option value="mmm-dd-yyyy" selected>
                                                Sep 24, 2026
                                            </option>

                                            <option value="dd-mm-yyyy">
                                                24/09/2026
                                            </option>

                                            <option value="yyyy-mm-dd">
                                                2026-09-24
                                            </option>

                                        </select>

                                    </div>

                                </div>


                                <div class="col-md-6">

                                    <div class="wm-settings-field">

                                        <label for="weekStart">
                                            Week Starts On
                                        </label>

                                        <select
                                            id="weekStart"
                                            class="form-select"
                                        >
                                            <option value="sunday">
                                                Sunday
                                            </option>

                                            <option value="monday" selected>
                                                Monday
                                            </option>

                                            <option value="saturday">
                                                Saturday
                                            </option>

                                        </select>

                                    </div>

                                </div>

                            </div>

                        </div>

                    </div>

                </section>


                {{-- ====================================================
                    PREFERENCES
                ===================================================== --}}
                <section
                    class="wm-settings-section"
                    data-settings-panel="preferences"
                >

                    <div class="wm-settings-section__header">

                        <div>
                            <h2 class="wm-settings-section__title">
                                Workspace Preferences
                            </h2>

                            <p class="wm-settings-section__description">
                                Configure how projects, tasks and information are displayed.
                            </p>
                        </div>

                    </div>


                    <div class="wm-settings-card">

                        <div class="wm-settings-card__header">

                            <div>
                                <h3 class="wm-settings-card__title">
                                    Project Defaults
                                </h3>

                                <p class="wm-settings-card__description">
                                    Default values used when creating new projects.
                                </p>
                            </div>

                        </div>


                        <div class="wm-settings-card__body">

                            <div class="row g-4">

                                <div class="col-md-6">

                                    <div class="wm-settings-field">

                                        <label for="defaultProjectStatus">
                                            Default Project Status
                                        </label>

                                        <select
                                            id="defaultProjectStatus"
                                            class="form-select"
                                        >
                                            <option value="planning" selected>
                                                Planning
                                            </option>

                                            <option value="active">
                                                Active
                                            </option>

                                            <option value="on-hold">
                                                On Hold
                                            </option>

                                        </select>

                                    </div>

                                </div>


                                <div class="col-md-6">

                                    <div class="wm-settings-field">

                                        <label for="defaultProjectPriority">
                                            Default Project Priority
                                        </label>

                                        <select
                                            id="defaultProjectPriority"
                                            class="form-select"
                                        >
                                            <option value="medium" selected>
                                                Medium
                                            </option>

                                            <option value="low">
                                                Low
                                            </option>

                                            <option value="high">
                                                High
                                            </option>

                                        </select>

                                    </div>

                                </div>

                            </div>

                        </div>

                    </div>


                    <div class="wm-settings-card">

                        <div class="wm-settings-card__header">

                            <div>
                                <h3 class="wm-settings-card__title">
                                    Task Preferences
                                </h3>

                                <p class="wm-settings-card__description">
                                    Configure default task behavior.
                                </p>
                            </div>

                        </div>


                        <div class="wm-settings-card__body">

                            <div class="wm-settings-toggle-list">

                                <div class="wm-settings-toggle">

                                    <div class="wm-settings-toggle__content">

                                        <strong>
                                            Automatically assign tasks
                                        </strong>

                                        <span>
                                        Assign newly created tasks to the project owner.
                                    </span>

                                    </div>

                                    <label class="wm-settings-switch">

                                        <input
                                            type="checkbox"
                                            checked
                                            data-setting-toggle="autoAssign"
                                        >

                                        <span></span>

                                    </label>

                                </div>


                                <div class="wm-settings-toggle">

                                    <div class="wm-settings-toggle__content">

                                        <strong>
                                            Enable task dependencies
                                        </strong>

                                        <span>
                                        Allow tasks to have blocking and dependent relationships.
                                    </span>

                                    </div>

                                    <label class="wm-settings-switch">

                                        <input
                                            type="checkbox"
                                            checked
                                            data-setting-toggle="dependencies"
                                        >

                                        <span></span>

                                    </label>

                                </div>


                                <div class="wm-settings-toggle">

                                    <div class="wm-settings-toggle__content">

                                        <strong>
                                            Show completed tasks
                                        </strong>

                                        <span>
                                        Keep completed tasks visible in project task lists.
                                    </span>

                                    </div>

                                    <label class="wm-settings-switch">

                                        <input
                                            type="checkbox"
                                            data-setting-toggle="completedTasks"
                                        >

                                        <span></span>

                                    </label>

                                </div>


                                <div class="wm-settings-toggle">

                                    <div class="wm-settings-toggle__content">

                                        <strong>
                                            Enable task estimates
                                        </strong>

                                        <span>
                                        Allow team members to add estimated hours to tasks.
                                    </span>

                                    </div>

                                    <label class="wm-settings-switch">

                                        <input
                                            type="checkbox"
                                            checked
                                            data-setting-toggle="estimates"
                                        >

                                        <span></span>

                                    </label>

                                </div>

                            </div>

                        </div>

                    </div>


                    <div class="wm-settings-card">

                        <div class="wm-settings-card__header">

                            <div>
                                <h3 class="wm-settings-card__title">
                                    Default View
                                </h3>

                                <p class="wm-settings-card__description">
                                    Choose the default layout used for project information.
                                </p>

                            </div>

                        </div>


                        <div class="wm-settings-card__body">

                            <div class="wm-settings-view-options">

                                <label class="wm-settings-view-option is-selected">

                                    <input
                                        type="radio"
                                        name="defaultView"
                                        value="list"
                                        checked
                                    >

                                    <div class="wm-settings-view-option__icon">
                                        <i class="ph ph-list"></i>
                                    </div>

                                    <div>
                                        <strong>List View</strong>
                                        <span>Compact rows with detailed information.</span>
                                    </div>

                                </label>


                                <label class="wm-settings-view-option">

                                    <input
                                        type="radio"
                                        name="defaultView"
                                        value="board"
                                    >

                                    <div class="wm-settings-view-option__icon">
                                        <i class="ph ph-kanban"></i>
                                    </div>

                                    <div>
                                        <strong>Board View</strong>
                                        <span>Visual columns for tracking work.</span>
                                    </div>

                                </label>


                                <label class="wm-settings-view-option">

                                    <input
                                        type="radio"
                                        name="defaultView"
                                        value="calendar"
                                    >

                                    <div class="wm-settings-view-option__icon">
                                        <i class="ph ph-calendar-blank"></i>
                                    </div>

                                    <div>
                                        <strong>Calendar View</strong>
                                        <span>Schedule work across a calendar.</span>
                                    </div>

                                </label>

                            </div>

                        </div>

                    </div>

                </section>


                {{-- ====================================================
                    NOTIFICATIONS
                ===================================================== --}}
                <section
                    class="wm-settings-section"
                    data-settings-panel="notifications"
                >

                    <div class="wm-settings-section__header">

                        <div>
                            <h2 class="wm-settings-section__title">
                                Notification Settings
                            </h2>

                            <p class="wm-settings-section__description">
                                Control when and how workspace notifications are delivered.
                            </p>
                        </div>

                    </div>


                    <div class="wm-settings-card">

                        <div class="wm-settings-card__header">

                            <div>
                                <h3 class="wm-settings-card__title">
                                    Email Notifications
                                </h3>

                                <p class="wm-settings-card__description">
                                    Choose which activities should generate email notifications.
                                </p>
                            </div>

                        </div>


                        <div class="wm-settings-card__body">

                            <div class="wm-settings-toggle-list">

                                <div class="wm-settings-toggle">

                                    <div class="wm-settings-toggle__content">

                                        <strong>
                                            Task assignments
                                        </strong>

                                        <span>
                                        Notify members when a task is assigned to them.
                                    </span>

                                    </div>

                                    <label class="wm-settings-switch">

                                        <input
                                            type="checkbox"
                                            checked
                                            data-setting-toggle="emailAssignments"
                                        >

                                        <span></span>

                                    </label>

                                </div>


                                <div class="wm-settings-toggle">

                                    <div class="wm-settings-toggle__content">

                                        <strong>
                                            Task mentions
                                        </strong>

                                        <span>
                                        Notify members when they are mentioned in a task or comment.
                                    </span>

                                    </div>

                                    <label class="wm-settings-switch">

                                        <input
                                            type="checkbox"
                                            checked
                                            data-setting-toggle="emailMentions"
                                        >

                                        <span></span>

                                    </label>

                                </div>


                                <div class="wm-settings-toggle">

                                    <div class="wm-settings-toggle__content">

                                        <strong>
                                            Project updates
                                        </strong>

                                        <span>
                                        Receive updates when important project information changes.
                                    </span>

                                    </div>

                                    <label class="wm-settings-switch">

                                        <input
                                            type="checkbox"
                                            checked
                                            data-setting-toggle="emailProjects"
                                        >

                                        <span></span>

                                    </label>

                                </div>


                                <div class="wm-settings-toggle">

                                    <div class="wm-settings-toggle__content">

                                        <strong>
                                            Milestone reminders
                                        </strong>

                                        <span>
                                        Receive reminders for upcoming and overdue milestones.
                                    </span>

                                    </div>

                                    <label class="wm-settings-switch">

                                        <input
                                            type="checkbox"
                                            checked
                                            data-setting-toggle="emailMilestones"
                                        >

                                        <span></span>

                                    </label>

                                </div>


                                <div class="wm-settings-toggle">

                                    <div class="wm-settings-toggle__content">

                                        <strong>
                                            Weekly summary
                                        </strong>

                                        <span>
                                        Receive a weekly summary of workspace activity and progress.
                                    </span>

                                    </div>

                                    <label class="wm-settings-switch">

                                        <input
                                            type="checkbox"
                                            data-setting-toggle="weeklySummary"
                                        >

                                        <span></span>

                                    </label>

                                </div>

                            </div>

                        </div>

                    </div>


                    <div class="wm-settings-card">

                        <div class="wm-settings-card__header">

                            <div>
                                <h3 class="wm-settings-card__title">
                                    In-App Notifications
                                </h3>

                                <p class="wm-settings-card__description">
                                    Manage real-time notifications inside the application.
                                </p>
                            </div>

                        </div>


                        <div class="wm-settings-card__body">

                            <div class="wm-settings-toggle-list">

                                <div class="wm-settings-toggle">

                                    <div class="wm-settings-toggle__content">

                                        <strong>
                                            Desktop notifications
                                        </strong>

                                        <span>
                                        Show browser notifications for important workspace events.
                                    </span>

                                    </div>

                                    <label class="wm-settings-switch">

                                        <input
                                            type="checkbox"
                                            checked
                                            data-setting-toggle="desktopNotifications"
                                        >

                                        <span></span>

                                    </label>

                                </div>


                                <div class="wm-settings-toggle">

                                    <div class="wm-settings-toggle__content">

                                        <strong>
                                            Notification sound
                                        </strong>

                                        <span>
                                        Play a sound when a new notification arrives.
                                    </span>

                                    </div>

                                    <label class="wm-settings-switch">

                                        <input
                                            type="checkbox"
                                            data-setting-toggle="notificationSound"
                                        >

                                        <span></span>

                                    </label>

                                </div>

                            </div>

                        </div>

                    </div>

                </section>


                {{-- ====================================================
                    DANGER ZONE
                ===================================================== --}}
                <div class="wm-settings-danger">

                    <div class="wm-settings-danger__icon">
                        <i class="ph ph-warning"></i>
                    </div>

                    <div class="wm-settings-danger__content">

                        <h3>
                            Danger Zone
                        </h3>

                        <p>
                            These actions can permanently affect your workspace. Please proceed carefully.
                        </p>

                    </div>

                    <button
                        type="button"
                        class="btn btn-outline-danger"
                        id="deleteWorkspace"
                    >
                        Delete Workspace
                    </button>

                </div>

            </div>

        </div>

    </div>

@endsection


@push('script')
    <script>
        $(document).ready(function () {
            'use strict';


            // ============================================================
            // State
            // ============================================================

            let hasChanges = false;


            // ============================================================
            // Functions
            // ============================================================

            function markChanged() {

                hasChanges = true;

                $('#saveSettings')
                    .addClass('is-dirty');

                $('.wm-settings-page')
                    .addClass('has-unsaved-changes');
            }


            function clearChangedState() {

                hasChanges = false;

                $('#saveSettings')
                    .removeClass('is-dirty');

                $('.wm-settings-page')
                    .removeClass('has-unsaved-changes');
            }


            function showSection(section) {

                $('.wm-settings-nav__item')
                    .removeClass('is-active');

                $(
                    '[data-settings-section="' +
                    section +
                    '"]'
                ).addClass('is-active');


                $('.wm-settings-section')
                    .removeClass('is-active');

                $(
                    '[data-settings-panel="' +
                    section +
                    '"]'
                ).addClass('is-active');


                $('html, body').animate({
                    scrollTop: $('.wm-settings-page__content').offset().top - 30
                }, 250);
            }


            function showToast(
                title,
                text,
                icon = 'success'
            ) {

                Swal.fire({
                    icon: icon,
                    title: title,
                    text: text,
                    toast: true,
                    position: 'top-end',
                    showConfirmButton: false,
                    timer: 2200,
                    timerProgressBar: true
                });
            }


            // ============================================================
            // Settings Navigation
            // ============================================================

            $(document).on(
                'click',
                '[data-settings-section]',
                function () {

                    const section =
                        $(this).data(
                            'settings-section'
                        );

                    showSection(section);
                }
            );


            // ============================================================
            // Track Changes
            // ============================================================

            $(document).on(
                'input change',
                '.wm-settings-page input, .wm-settings-page textarea, .wm-settings-page select',
                function () {

                    markChanged();
                }
            );


            // ============================================================
            // Radio View Options
            // ============================================================

            $('input[name="defaultView"]').on(
                'change',
                function () {

                    $('.wm-settings-view-option')
                        .removeClass('is-selected');

                    $(this)
                        .closest('.wm-settings-view-option')
                        .addClass('is-selected');

                    markChanged();
                }
            );


            // ============================================================
            // Save Settings
            // ============================================================

            $('#saveSettings').on(
                'click',
                function () {

                    const $button = $(this);


                    $button
                        .prop('disabled', true)
                        .addClass('is-loading')
                        .html(`
                        <span class="wm-settings-spinner"></span>
                        Saving...
                    `);


                    setTimeout(function () {

                        $button
                            .prop('disabled', false)
                            .removeClass('is-loading')
                            .html(`
                            <i class="ph ph-check"></i>
                            Saved
                        `);


                        clearChangedState();


                        showToast(
                            'Settings saved',
                            'Your workspace settings have been updated.'
                        );


                        setTimeout(function () {

                            $button.html(`
                            <i class="ph ph-check"></i>
                            Save Changes
                        `);

                        }, 1600);

                    }, 900);
                }
            );


            // ============================================================
            // Reset Settings
            // ============================================================

            $('#resetSettings').on(
                'click',
                function () {

                    if (!hasChanges) {

                        showToast(
                            'No changes',
                            'There are no unsaved changes to reset.',
                            'info'
                        );

                        return;
                    }


                    Swal.fire({
                        icon: 'question',
                        title: 'Reset changes?',
                        text: 'All unsaved changes will be discarded.',
                        showCancelButton: true,
                        confirmButtonText: 'Reset Changes',
                        cancelButtonText: 'Keep Changes'
                    }).then(function (result) {

                        if (!result.isConfirmed) {
                            return;
                        }


                        location.reload();
                    });
                }
            );


            // ============================================================
            // Logo
            // ============================================================

            $('#changeLogo').on(
                'click',
                function () {

                    showToast(
                        'Upload Logo',
                        'The logo upload dialog will open here.',
                        'info'
                    );
                }
            );


            $('#removeLogo').on(
                'click',
                function () {

                    Swal.fire({
                        icon: 'question',
                        title: 'Remove workspace logo?',
                        text: 'The current workspace logo will be removed.',
                        showCancelButton: true,
                        confirmButtonText: 'Remove',
                        cancelButtonText: 'Cancel'
                    }).then(function (result) {

                        if (result.isConfirmed) {

                            $('.wm-settings-logo__preview')
                                .text('WM');

                            markChanged();

                            showToast(
                                'Logo removed',
                                'The workspace logo will be removed after saving.'
                            );
                        }
                    });
                }
            );


            // ============================================================
            // Delete Workspace
            // ============================================================

            $('#deleteWorkspace').on(
                'click',
                function () {

                    Swal.fire({
                        icon: 'warning',
                        title: 'Delete workspace?',
                        html:
                            '<p>This action cannot be undone.</p>' +
                            '<p>All projects, tasks, files and workspace data will be permanently deleted.</p>',
                        input: 'text',
                        inputPlaceholder: 'Type DELETE to continue',
                        showCancelButton: true,
                        confirmButtonText: 'Delete Workspace',
                        cancelButtonText: 'Cancel',
                        confirmButtonColor: '#EF4444',
                        preConfirm: function (value) {

                            if (value !== 'DELETE') {

                                Swal.showValidationMessage(
                                    'Please type DELETE exactly.'
                                );

                                return false;
                            }

                            return true;
                        }
                    }).then(function (result) {

                        if (result.isConfirmed) {

                            showToast(
                                'Workspace deletion requested',
                                'The workspace deletion flow will be handled here.'
                            );
                        }
                    });
                }
            );


            // ============================================================
            // Before Unload
            // ============================================================

            window.addEventListener(
                'beforeunload',
                function (event) {

                    if (!hasChanges) {
                        return;
                    }

                    event.preventDefault();

                    event.returnValue = '';
                }
            );


            // ============================================================
            // Initial
            // ============================================================

            clearChangedState();

        });
    </script>
@endpush
