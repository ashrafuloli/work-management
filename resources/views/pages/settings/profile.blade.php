@extends('layout.app')

@section('main')

    <div class="wm-profile-page">

        {{-- ============================================================
            PAGE HEADER
        ============================================================= --}}
        <div class="wm-profile-page__header">

            <div class="wm-profile-page__breadcrumb">

                <a
                    href="{{ route('dashboard') }}"
                    class="wm-profile-page__breadcrumb-link"
                >
                    Dashboard
                </a>

                <i class="ph ph-caret-right"></i>

                <a
                    href="{{ route('settings.index') }}"
                    class="wm-profile-page__breadcrumb-link"
                >
                    Settings
                </a>

                <i class="ph ph-caret-right"></i>

                <span>Profile</span>

            </div>


            <div class="wm-profile-page__heading">

                <div>

                    <h1 class="wm-profile-page__title">
                        Profile
                    </h1>

                    <p class="wm-profile-page__subtitle">
                        Manage your personal information, security and account preferences.
                    </p>

                </div>


                <div class="wm-profile-page__header-actions">

                    <button
                        type="button"
                        class="btn btn-light"
                        id="profileReset"
                    >
                        <i class="ph ph-arrow-counter-clockwise"></i>
                        Reset
                    </button>

                    <button
                        type="button"
                        class="btn btn-primary"
                        id="profileSave"
                    >
                        <i class="ph ph-check"></i>
                        Save Changes
                    </button>

                </div>

            </div>

        </div>


        {{-- ============================================================
            PROFILE LAYOUT
        ============================================================= --}}
        <div class="wm-profile-page__layout">

            {{-- ========================================================
                MAIN CONTENT
            ========================================================= --}}
            <div class="wm-profile-page__main">

                {{-- ====================================================
                    PROFILE CARD
                ===================================================== --}}
                <div class="wm-profile-card">

                    <div class="wm-profile-card__cover"></div>


                    <div class="wm-profile-card__body">

                        <div class="wm-profile-card__identity">

                            <div class="wm-profile-avatar">

                                <div class="wm-profile-avatar__image">
                                    AO
                                </div>

                                <button
                                    type="button"
                                    class="wm-profile-avatar__edit"
                                    id="changeAvatar"
                                    aria-label="Change profile photo"
                                >
                                    <i class="ph ph-camera"></i>
                                </button>

                            </div>


                            <div class="wm-profile-card__identity-content">

                                <h2>
                                    Ashraful Oli
                                </h2>

                                <p>
                                    Front-End & Webflow Developer
                                </p>

                                <span>
                                <i class="ph ph-map-pin"></i>
                                Dhaka, Bangladesh
                            </span>

                            </div>


                            <div class="wm-profile-card__identity-status">

                            <span class="wm-profile-online-status">
                                <i></i>
                                Active
                            </span>

                            </div>

                        </div>

                    </div>

                </div>


                {{-- ====================================================
                    PERSONAL INFORMATION
                ===================================================== --}}
                <div class="wm-profile-section">

                    <div class="wm-profile-section__header">

                        <div>

                            <h2 class="wm-profile-section__title">
                                Personal Information
                            </h2>

                            <p class="wm-profile-section__description">
                                Update your personal details and contact information.
                            </p>

                        </div>

                    </div>


                    <div class="wm-profile-section__body">

                        <div class="row g-4">

                            <div class="col-md-6">

                                <div class="wm-profile-field">

                                    <label for="firstName">
                                        First Name
                                    </label>

                                    <input
                                        type="text"
                                        id="firstName"
                                        class="form-control"
                                        value="Ashraful"
                                    >

                                </div>

                            </div>


                            <div class="col-md-6">

                                <div class="wm-profile-field">

                                    <label for="lastName">
                                        Last Name
                                    </label>

                                    <input
                                        type="text"
                                        id="lastName"
                                        class="form-control"
                                        value="Oli"
                                    >

                                </div>

                            </div>


                            <div class="col-md-6">

                                <div class="wm-profile-field">

                                    <label for="profileEmail">
                                        Email Address
                                    </label>

                                    <div class="wm-profile-input-icon">

                                        <i class="ph ph-envelope"></i>

                                        <input
                                            type="email"
                                            id="profileEmail"
                                            class="form-control"
                                            value="ashraful@example.com"
                                        >

                                    </div>

                                    <span class="wm-profile-field__hint">
                                    This email is used for account notifications and login.
                                </span>

                                </div>

                            </div>


                            <div class="col-md-6">

                                <div class="wm-profile-field">

                                    <label for="profilePhone">
                                        Phone Number
                                    </label>

                                    <div class="wm-profile-input-icon">

                                        <i class="ph ph-phone"></i>

                                        <input
                                            type="tel"
                                            id="profilePhone"
                                            class="form-control"
                                            value="+880 1712 345678"
                                        >

                                    </div>

                                </div>

                            </div>


                            <div class="col-md-6">

                                <div class="wm-profile-field">

                                    <label for="jobTitle">
                                        Job Title
                                    </label>

                                    <input
                                        type="text"
                                        id="jobTitle"
                                        class="form-control"
                                        value="Front-End & Webflow Developer"
                                    >

                                </div>

                            </div>


                            <div class="col-md-6">

                                <div class="wm-profile-field">

                                    <label for="department">
                                        Department
                                    </label>

                                    <input
                                        type="text"
                                        id="department"
                                        class="form-control"
                                        value="Product & Engineering"
                                    >

                                </div>

                            </div>


                            <div class="col-12">

                                <div class="wm-profile-field">

                                    <label for="profileBio">
                                        Bio
                                    </label>

                                    <textarea
                                        id="profileBio"
                                        class="form-control"
                                        rows="4"
                                    >Front-end developer focused on building modern, accessible and scalable web experiences.</textarea>

                                    <span class="wm-profile-field__hint">
                                    A short introduction about yourself. Maximum 300 characters.
                                </span>

                                </div>

                            </div>

                        </div>

                    </div>

                </div>


                {{-- ====================================================
                    ACCOUNT PREFERENCES
                ===================================================== --}}
                <div class="wm-profile-section">

                    <div class="wm-profile-section__header">

                        <div>

                            <h2 class="wm-profile-section__title">
                                Account Preferences
                            </h2>

                            <p class="wm-profile-section__description">
                                Configure your language, timezone and display preferences.
                            </p>

                        </div>

                    </div>


                    <div class="wm-profile-section__body">

                        <div class="row g-4">

                            <div class="col-md-6">

                                <div class="wm-profile-field">

                                    <label for="profileTimezone">
                                        Timezone
                                    </label>

                                    <select
                                        id="profileTimezone"
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

                                <div class="wm-profile-field">

                                    <label for="profileLanguage">
                                        Language
                                    </label>

                                    <select
                                        id="profileLanguage"
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

                                <div class="wm-profile-field">

                                    <label for="profileDateFormat">
                                        Date Format
                                    </label>

                                    <select
                                        id="profileDateFormat"
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

                                <div class="wm-profile-field">

                                    <label for="profileTheme">
                                        Theme
                                    </label>

                                    <select
                                        id="profileTheme"
                                        class="form-select"
                                    >
                                        <option value="light" selected>
                                            Light
                                        </option>

                                        <option value="dark">
                                            Dark
                                        </option>

                                        <option value="system">
                                            System Default
                                        </option>

                                    </select>

                                </div>

                            </div>

                        </div>

                    </div>

                </div>


                {{-- ====================================================
                    SECURITY
                ===================================================== --}}
                <div class="wm-profile-section">

                    <div class="wm-profile-section__header">

                        <div>

                            <h2 class="wm-profile-section__title">
                                Password & Security
                            </h2>

                            <p class="wm-profile-section__description">
                                Keep your account secure with password and authentication controls.
                            </p>

                        </div>

                    </div>


                    <div class="wm-profile-security-list">

                        <div class="wm-profile-security-item">

                            <div class="wm-profile-security-item__icon">
                                <i class="ph ph-lock-key"></i>
                            </div>

                            <div class="wm-profile-security-item__content">

                                <strong>
                                    Password
                                </strong>

                                <span>
                                Last changed 42 days ago
                            </span>

                            </div>

                            <button
                                type="button"
                                class="btn btn-light btn-sm"
                                id="changePassword"
                            >
                                Change Password
                            </button>

                        </div>


                        <div class="wm-profile-security-item">

                            <div class="wm-profile-security-item__icon wm-profile-security-item__icon--success">
                                <i class="ph ph-shield-check"></i>
                            </div>

                            <div class="wm-profile-security-item__content">

                                <strong>
                                    Two-Factor Authentication
                                </strong>

                                <span>
                                Add an extra layer of security to your account.
                            </span>

                            </div>

                            <div class="wm-profile-security-item__status">

                            <span class="wm-profile-security-badge wm-profile-security-badge--warning">
                                Not Enabled
                            </span>

                                <button
                                    type="button"
                                    class="btn btn-light btn-sm"
                                    id="enableTwoFactor"
                                >
                                    Enable
                                </button>

                            </div>

                        </div>


                        <div class="wm-profile-security-item">

                            <div class="wm-profile-security-item__icon wm-profile-security-item__icon--info">
                                <i class="ph ph-key"></i>
                            </div>

                            <div class="wm-profile-security-item__content">

                                <strong>
                                    Recovery Codes
                                </strong>

                                <span>
                                Generate backup codes for account recovery.
                            </span>

                            </div>

                            <button
                                type="button"
                                class="btn btn-light btn-sm"
                                id="generateRecovery"
                            >
                                Generate Codes
                            </button>

                        </div>

                    </div>

                </div>


                {{-- ====================================================
                    ACTIVE SESSIONS
                ===================================================== --}}
                <div class="wm-profile-section">

                    <div class="wm-profile-section__header">

                        <div>

                            <h2 class="wm-profile-section__title">
                                Active Sessions
                            </h2>

                            <p class="wm-profile-section__description">
                                Devices currently signed in to your account.
                            </p>

                        </div>

                        <button
                            type="button"
                            class="btn btn-light btn-sm"
                            id="logoutOtherSessions"
                        >
                            Sign Out Other Sessions
                        </button>

                    </div>


                    <div class="wm-profile-sessions">

                        <div class="wm-profile-session">

                            <div class="wm-profile-session__device">
                                <div class="wm-profile-session__icon">
                                    <i class="ph ph-desktop"></i>
                                </div>

                                <div>

                                    <strong>
                                        MacOS · Chrome
                                    </strong>

                                    <span>
                                    Dhaka, Bangladesh · Current session
                                </span>

                                </div>
                            </div>

                            <span class="wm-profile-session__current">
                            Current
                        </span>

                        </div>


                        <div class="wm-profile-session">

                            <div class="wm-profile-session__device">

                                <div class="wm-profile-session__icon">
                                    <i class="ph ph-device-mobile"></i>
                                </div>

                                <div>

                                    <strong>
                                        iPhone · Safari
                                    </strong>

                                    <span>
                                    Dhaka, Bangladesh · Active 2 hours ago
                                </span>

                                </div>

                            </div>

                            <button
                                type="button"
                                class="wm-profile-session__revoke"
                                data-session-action="revoke"
                            >
                                Revoke
                            </button>

                        </div>


                        <div class="wm-profile-session">

                            <div class="wm-profile-session__device">

                                <div class="wm-profile-session__icon">
                                    <i class="ph ph-laptop"></i>
                                </div>

                                <div>

                                    <strong>
                                        Windows · Edge
                                    </strong>

                                    <span>
                                    Chittagong, Bangladesh · Active yesterday
                                </span>

                                </div>

                            </div>

                            <button
                                type="button"
                                class="wm-profile-session__revoke"
                                data-session-action="revoke"
                            >
                                Revoke
                            </button>

                        </div>

                    </div>

                </div>


                {{-- ====================================================
                    ACCOUNT ACTIVITY
                ===================================================== --}}
                <div class="wm-profile-section">

                    <div class="wm-profile-section__header">

                        <div>

                            <h2 class="wm-profile-section__title">
                                Recent Security Activity
                            </h2>

                            <p class="wm-profile-section__description">
                                Recent sign-ins and security-related events.
                            </p>

                        </div>

                        <button
                            type="button"
                            class="btn btn-link btn-sm"
                            id="viewAllActivity"
                        >
                            View All
                            <i class="ph ph-arrow-right"></i>
                        </button>

                    </div>


                    <div class="wm-profile-activity">

                        <div class="wm-profile-activity__item">

                            <div class="wm-profile-activity__icon wm-profile-activity__icon--success">
                                <i class="ph ph-sign-in"></i>
                            </div>

                            <div class="wm-profile-activity__content">

                                <strong>
                                    Successful sign in
                                </strong>

                                <span>
                                MacOS · Chrome · Dhaka, Bangladesh
                            </span>

                            </div>

                            <time>
                                Today, 4:12 PM
                            </time>

                        </div>


                        <div class="wm-profile-activity__item">

                            <div class="wm-profile-activity__icon">
                                <i class="ph ph-key"></i>
                            </div>

                            <div class="wm-profile-activity__content">

                                <strong>
                                    Password verified
                                </strong>

                                <span>
                                Account security verification completed.
                            </span>

                            </div>

                            <time>
                                Yesterday
                            </time>

                        </div>


                        <div class="wm-profile-activity__item">

                            <div class="wm-profile-activity__icon">
                                <i class="ph ph-device-mobile"></i>
                            </div>

                            <div class="wm-profile-activity__content">

                                <strong>
                                    New device signed in
                                </strong>

                                <span>
                                iPhone · Safari · Dhaka, Bangladesh
                            </span>

                            </div>

                            <time>
                                Sep 21, 2026
                            </time>

                        </div>

                    </div>

                </div>

            </div>


            {{-- ========================================================
                SIDEBAR
            ========================================================= --}}
            <aside class="wm-profile-page__sidebar">

                {{-- Account Summary --}}
                <div class="wm-profile-sidebar-card">

                    <div class="wm-profile-sidebar-card__header">
                        <h3>
                            Account
                        </h3>
                    </div>


                    <div class="wm-profile-account">

                        <div class="wm-profile-account__avatar">
                            AO
                        </div>

                        <strong>
                            Ashraful Oli
                        </strong>

                        <span>
                        Member since Jan 2025
                    </span>

                    </div>


                    <div class="wm-profile-account-meta">

                        <div>

                        <span>
                            Role
                        </span>

                            <strong>
                                Administrator
                            </strong>

                        </div>

                        <div>

                        <span>
                            Workspace
                        </span>

                            <strong>
                                ResearchOS
                            </strong>

                        </div>

                        <div>

                        <span>
                            Status
                        </span>

                            <strong class="wm-profile-account-meta__status">
                                Active
                            </strong>

                        </div>

                    </div>

                </div>


                {{-- Profile Completion --}}
                <div class="wm-profile-sidebar-card">

                    <div class="wm-profile-sidebar-card__header">

                        <h3>
                            Profile Completion
                        </h3>

                        <strong>
                            85%
                        </strong>

                    </div>


                    <div class="wm-profile-completion">

                        <div class="wm-profile-completion__bar">
                            <span style="width: 85%;"></span>
                        </div>

                        <p>
                            Add your phone number and profile photo to complete your profile.
                        </p>

                    </div>

                </div>


                {{-- Quick Links --}}
                <div class="wm-profile-sidebar-card">

                    <div class="wm-profile-sidebar-card__header">

                        <h3>
                            Quick Links
                        </h3>

                    </div>


                    <div class="wm-profile-quick-links">

                        <a href="{{ route('settings.index') }}">
                            <i class="ph ph-gear"></i>
                            <span>Settings</span>
                            <i class="ph ph-arrow-up-right"></i>
                        </a>

                        <a href="{{ route('settings.index') ?? '#' }}">
                            <i class="ph ph-bell"></i>
                            <span>Notifications</span>
                            <i class="ph ph-arrow-up-right"></i>
                        </a>

                        <a href="{{ route('settings.integrations') }}">
                            <i class="ph ph-plugs-connected"></i>
                            <span>Integrations</span>
                            <i class="ph ph-arrow-up-right"></i>
                        </a>

                    </div>

                </div>

            </aside>

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

                $('#profileSave')
                    .addClass('is-dirty');

                $('.wm-profile-page')
                    .addClass('has-unsaved-changes');
            }


            function clearChangedState() {

                hasChanges = false;

                $('#profileSave')
                    .removeClass('is-dirty');

                $('.wm-profile-page')
                    .removeClass('has-unsaved-changes');
            }


            function toast(
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
            // Track Changes
            // ============================================================

            $(document).on(
                'input change',
                '.wm-profile-page input, .wm-profile-page textarea, .wm-profile-page select',
                function () {

                    markChanged();
                }
            );


            // ============================================================
            // Save Profile
            // ============================================================

            $('#profileSave').on(
                'click',
                function () {

                    const $button = $(this);


                    $button
                        .prop('disabled', true)
                        .addClass('is-loading')
                        .html(`
                        <span class="wm-profile-spinner"></span>
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


                        toast(
                            'Profile updated',
                            'Your profile information has been saved.'
                        );


                        setTimeout(function () {

                            $button.html(`
                            <i class="ph ph-check"></i>
                            Save Changes
                        `);

                        }, 1500);

                    }, 900);
                }
            );


            // ============================================================
            // Reset
            // ============================================================

            $('#profileReset').on(
                'click',
                function () {

                    if (!hasChanges) {

                        toast(
                            'No changes',
                            'There are no unsaved changes to reset.',
                            'info'
                        );

                        return;
                    }


                    Swal.fire({
                        icon: 'question',
                        title: 'Reset changes?',
                        text: 'All unsaved profile changes will be discarded.',
                        showCancelButton: true,
                        confirmButtonText: 'Reset Changes',
                        cancelButtonText: 'Keep Changes'
                    }).then(function (result) {

                        if (result.isConfirmed) {

                            location.reload();
                        }
                    });
                }
            );


            // ============================================================
            // Change Avatar
            // ============================================================

            $('#changeAvatar').on(
                'click',
                function () {

                    toast(
                        'Change profile photo',
                        'The image upload dialog will open here.',
                        'info'
                    );
                }
            );


            // ============================================================
            // Change Password
            // ============================================================

            $('#changePassword').on(
                'click',
                function () {

                    Swal.fire({
                        title: 'Change Password',
                        html: `
                        <div class="wm-profile-swal-form">

                            <div class="wm-profile-swal-field">
                                <label>Current Password</label>
                                <input
                                    type="password"
                                    id="swalCurrentPassword"
                                    class="swal2-input"
                                    placeholder="Current password"
                                >
                            </div>

                            <div class="wm-profile-swal-field">
                                <label>New Password</label>
                                <input
                                    type="password"
                                    id="swalNewPassword"
                                    class="swal2-input"
                                    placeholder="New password"
                                >
                            </div>

                            <div class="wm-profile-swal-field">
                                <label>Confirm Password</label>
                                <input
                                    type="password"
                                    id="swalConfirmPassword"
                                    class="swal2-input"
                                    placeholder="Confirm password"
                                >
                            </div>

                        </div>
                    `,
                        showCancelButton: true,
                        confirmButtonText: 'Update Password',
                        cancelButtonText: 'Cancel',
                        focusConfirm: false,
                        preConfirm: function () {

                            const current =
                                $('#swalCurrentPassword').val();

                            const password =
                                $('#swalNewPassword').val();

                            const confirm =
                                $('#swalConfirmPassword').val();


                            if (!current || !password || !confirm) {

                                Swal.showValidationMessage(
                                    'Please complete all password fields.'
                                );

                                return false;
                            }


                            if (password.length < 8) {

                                Swal.showValidationMessage(
                                    'New password must contain at least 8 characters.'
                                );

                                return false;
                            }


                            if (password !== confirm) {

                                Swal.showValidationMessage(
                                    'Passwords do not match.'
                                );

                                return false;
                            }


                            return true;
                        }
                    }).then(function (result) {

                        if (result.isConfirmed) {

                            toast(
                                'Password updated',
                                'Your password has been changed successfully.'
                            );
                        }
                    });
                }
            );


            // ============================================================
            // Two Factor Authentication
            // ============================================================

            $('#enableTwoFactor').on(
                'click',
                function () {

                    Swal.fire({
                        icon: 'info',
                        title: 'Enable two-factor authentication',
                        text:
                            'The two-factor authentication setup wizard will open here.',
                        showCancelButton: true,
                        confirmButtonText: 'Continue',
                        cancelButtonText: 'Cancel'
                    }).then(function (result) {

                        if (result.isConfirmed) {

                            toast(
                                '2FA setup',
                                'Authentication setup will be available here.',
                                'info'
                            );
                        }
                    });
                }
            );


            // ============================================================
            // Recovery Codes
            // ============================================================

            $('#generateRecovery').on(
                'click',
                function () {

                    Swal.fire({
                        icon: 'warning',
                        title: 'Generate recovery codes?',
                        text:
                            'Generating new codes will invalidate your existing recovery codes.',
                        showCancelButton: true,
                        confirmButtonText: 'Generate',
                        cancelButtonText: 'Cancel'
                    }).then(function (result) {

                        if (result.isConfirmed) {

                            toast(
                                'Recovery codes generated',
                                'Your new recovery codes are ready.',
                                'success'
                            );
                        }
                    });
                }
            );


            // ============================================================
            // Logout Other Sessions
            // ============================================================

            $('#logoutOtherSessions').on(
                'click',
                function () {

                    Swal.fire({
                        icon: 'warning',
                        title: 'Sign out other sessions?',
                        text:
                            'All other devices will be signed out of your account.',
                        showCancelButton: true,
                        confirmButtonText: 'Sign Out',
                        cancelButtonText: 'Cancel'
                    }).then(function (result) {

                        if (result.isConfirmed) {

                            toast(
                                'Sessions revoked',
                                'All other active sessions have been signed out.'
                            );
                        }
                    });
                }
            );


            // ============================================================
            // Session Actions
            // ============================================================

            $(document).on(
                'click',
                '[data-session-action="revoke"]',
                function () {

                    const $button = $(this);


                    Swal.fire({
                        icon: 'question',
                        title: 'Revoke this session?',
                        text:
                            'This device will be signed out immediately.',
                        showCancelButton: true,
                        confirmButtonText: 'Revoke Session',
                        cancelButtonText: 'Cancel'
                    }).then(function (result) {

                        if (!result.isConfirmed) {
                            return;
                        }


                        $button
                            .closest('.wm-profile-session')
                            .fadeOut(250, function () {
                                $(this).remove();
                            });


                        toast(
                            'Session revoked',
                            'The selected device has been signed out.'
                        );
                    });
                }
            );


            // ============================================================
            // View Activity
            // ============================================================

            $('#viewAllActivity').on(
                'click',
                function (event) {

                    event.preventDefault();


                    toast(
                        'Security activity',
                        'The complete security activity page will open here.',
                        'info'
                    );
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
