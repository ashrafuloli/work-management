@extends('layout.app')

@section('title', __('profile.title'))

@section('main')

    @php
        $fullName = trim(
            ($profile->first_name ?? '') . ' ' . ($profile->last_name ?? '')
        );

        $displayName = $profile->display_name ?: $fullName;

        if (!$displayName) {
            $displayName = __('common.user');
        }

        $avatarUrl = $profile->avatar
            ? asset($profile->avatar)
            : null;

        $avatarInitials = collect(
            preg_split('/\s+/', trim($displayName))
        )
            ->filter()
            ->take(2)
            ->map(fn ($name) => strtoupper(substr($name, 0, 1)))
            ->implode('');

        $avatarInitials = $avatarInitials ?: 'U';

        $profileCompletionFields = [
            $profile->first_name,
            $profile->last_name,
            $profile->display_name,
            $profile->avatar,
            $profile->phone,
            $profile->job_title,
            $profile->department,
            $profile->bio,
            $profile->address_line_1,
            $profile->city,
            $profile->country,
        ];

        $profileCompletion = (int) round(
            (
                collect($profileCompletionFields)
                    ->filter(fn ($value) => filled($value))
                    ->count()
                / count($profileCompletionFields)
            ) * 100
        );

        $selectedTimezone = old(
            'timezone',
            $profile->timezone ?? 'UTC'
        );

        $timezoneGroups = \App\Support\Timezone::groups();

        $supportedLanguages = config(
            'localization.supported',
            []
        );

        $selectedLocale = old(
            'locale',
            $profile->locale ?? config('localization.default', 'en')
        );
    @endphp

    <div
        class="wm-profile-page"
        id="profilePage"

        data-profile-update-url="{{ route('settings.profile.update') }}"

        data-avatar-update-url="{{ route('settings.profile.avatar.update') }}"

        data-avatar-remove-url="{{ route('settings.profile.avatar.remove') }}"

        data-password-update-url="{{ route('settings.profile.password.update') }}"

        {{-- =========================================================
            2FA STATUS
        ========================================================== --}}

        data-2fa-status-url="{{ route('settings.security.2fa.status') }}"

        {{-- =========================================================
            EMAIL 2FA
        ========================================================== --}}

        data-email-2fa-send-url="{{ route('settings.security.2fa.email.send') }}"

        data-email-2fa-verify-url="{{ route('settings.security.2fa.email.verify') }}"

        data-email-2fa-resend-url="{{ route('settings.security.2fa.email.resend') }}"

        data-email-2fa-disable-send-url="{{ route('settings.security.2fa.email.disable.send') }}"

        data-email-2fa-disable-url="{{ route('settings.security.2fa.email.disable') }}"
    >

        {{-- ============================================================
            PAGE HEADER
        ============================================================= --}}

        <div class="wm-profile-page__header">

            <div class="wm-profile-page__breadcrumb">

                <a
                    href="{{ route('dashboard') }}"
                    class="wm-profile-page__breadcrumb-link"
                >
                    {{ __('common.dashboard') }}
                </a>

                <i class="ph ph-caret-right"></i>

                <a
                    href="{{ route('settings.index') }}"
                    class="wm-profile-page__breadcrumb-link"
                >
                    {{ __('common.settings') }}
                </a>

                <i class="ph ph-caret-right"></i>

                <span>
                    {{ __('profile.title') }}
                </span>

            </div>

            <div class="wm-profile-page__heading">

                <div>

                    <h1 class="wm-profile-page__title">
                        {{ __('profile.title') }}
                    </h1>

                    <p class="wm-profile-page__subtitle">
                        {{ __('profile.subtitle') }}
                    </p>

                </div>

                <div class="wm-profile-page__header-actions">

                    <button
                        type="button"
                        class="btn btn-light"
                        id="profileReset"
                    >
                        <i class="ph ph-arrow-counter-clockwise"></i>
                        {{ __('common.reset') }}
                    </button>

                    <button
                        type="button"
                        class="btn btn-primary"
                        id="profileSave"
                    >
                        <i class="ph ph-check"></i>
                        {{ __('common.save_changes') }}
                    </button>

                </div>

            </div>

        </div>


        {{-- ============================================================
            PROFILE LAYOUT
        ============================================================= --}}

        <div class="wm-profile-page__layout">

            <div class="wm-profile-page__main">

                {{-- ====================================================
                    PROFILE CARD
                ===================================================== --}}

                <div class="wm-profile-card">

                    <div class="wm-profile-card__cover"></div>

                    <div class="wm-profile-card__body">

                        <div class="wm-profile-card__identity">

                            <div class="wm-profile-avatar">

                                <div
                                    class="wm-profile-avatar__image"
                                    id="profileAvatarPreview"
                                >

                                    @if ($avatarUrl)

                                        <img
                                            src="{{ $avatarUrl }}"
                                            alt="{{ $displayName }}"
                                        >

                                    @else

                                        <span>
                                            {{ $avatarInitials }}
                                        </span>

                                    @endif

                                </div>

                                <button
                                    type="button"
                                    class="wm-profile-avatar__edit"
                                    id="changeAvatar"
                                    aria-label="{{ __('profile.change_photo') }}"
                                >
                                    <i class="ph ph-camera"></i>
                                </button>

                                <input
                                    type="file"
                                    id="avatarInput"
                                    name="avatar"
                                    accept=".jpg,.jpeg,.png,.webp,image/jpeg,image/png,image/webp"
                                    hidden
                                >

                            </div>

                            <div class="wm-profile-card__identity-content">

                                <h2 id="profileIdentityName">
                                    {{ $displayName }}
                                </h2>

                                <p id="profileIdentityJobTitle">
                                    {{ $profile->job_title ?: __('profile.add_job_title') }}
                                </p>

                                <span>

                                    <i class="ph ph-map-pin"></i>

                                    <span id="profileIdentityLocation">

                                        @if ($profile->city || $profile->country)

                                            {{ collect([
                                                $profile->city,
                                                $profile->country
                                            ])->filter()->implode(', ') }}

                                        @else

                                            {{ __('profile.add_location') }}

                                        @endif

                                    </span>

                                </span>

                            </div>

                            <div class="wm-profile-card__identity-status">

                                <span class="wm-profile-online-status">

                                    <i></i>

                                    {{ ucfirst($user->status ?? __('common.active')) }}

                                </span>

                            </div>

                        </div>

                    </div>

                </div>


                {{-- ====================================================
                    PROFILE FORM
                ===================================================== --}}

                <form
                    id="profileForm"
                    novalidate
                >

                    {{-- PERSONAL INFORMATION --}}

                    <div class="wm-profile-section">

                        <div class="wm-profile-section__header">

                            <div>

                                <h2 class="wm-profile-section__title">
                                    {{ __('profile.personal_information') }}
                                </h2>

                                <p class="wm-profile-section__description">
                                    {{ __('profile.personal_information_description') }}
                                </p>

                            </div>

                        </div>

                        <div class="wm-profile-section__body">

                            <div class="row g-4">

                                <div class="col-md-6">

                                    <div class="wm-profile-field">

                                        <label for="firstName">
                                            {{ __('profile.first_name') }}
                                            <span>*</span>
                                        </label>

                                        <input
                                            type="text"
                                            id="firstName"
                                            name="first_name"
                                            class="form-control"
                                            value="{{ old('first_name', $profile->first_name) }}"
                                            autocomplete="given-name"
                                            maxlength="100"
                                            required
                                        >

                                        <div
                                            class="wm-profile-field__error"
                                            data-error-for="first_name"
                                        ></div>

                                    </div>

                                </div>

                                <div class="col-md-6">

                                    <div class="wm-profile-field">

                                        <label for="lastName">
                                            {{ __('profile.last_name') }}
                                        </label>

                                        <input
                                            type="text"
                                            id="lastName"
                                            name="last_name"
                                            class="form-control"
                                            value="{{ old('last_name', $profile->last_name) }}"
                                            autocomplete="family-name"
                                            maxlength="100"
                                        >

                                        <div
                                            class="wm-profile-field__error"
                                            data-error-for="last_name"
                                        ></div>

                                    </div>

                                </div>

                                <div class="col-md-6">

                                    <div class="wm-profile-field">

                                        <label for="displayName">
                                            {{ __('profile.display_name') }}
                                        </label>

                                        <input
                                            type="text"
                                            id="displayName"
                                            name="display_name"
                                            class="form-control"
                                            value="{{ old('display_name', $profile->display_name) }}"
                                            autocomplete="nickname"
                                            maxlength="150"
                                        >

                                        <span class="wm-profile-field__hint">
                                            {{ __('profile.display_name_hint') }}
                                        </span>

                                        <div
                                            class="wm-profile-field__error"
                                            data-error-for="display_name"
                                        ></div>

                                    </div>

                                </div>

                                <div class="col-md-6">

                                    <div class="wm-profile-field">

                                        <label for="profileEmail">
                                            {{ __('profile.email_address') }}
                                        </label>

                                        <div class="wm-profile-input-icon">

                                            <i class="ph ph-envelope"></i>

                                            <input
                                                type="email"
                                                id="profileEmail"
                                                class="form-control"
                                                value="{{ $user->email }}"
                                                readonly
                                                disabled
                                            >

                                        </div>

                                        <span class="wm-profile-field__hint">
                                            {{ __('profile.email_change_hint') }}
                                        </span>

                                    </div>

                                </div>

                                <div class="col-md-6">

                                    <div class="wm-profile-field">

                                        <label for="profilePhone">
                                            {{ __('profile.phone_number') }}
                                        </label>

                                        <div class="wm-profile-input-icon">

                                            <i class="ph ph-phone"></i>

                                            <input
                                                type="tel"
                                                id="profilePhone"
                                                name="phone"
                                                class="form-control"
                                                value="{{ old('phone', $profile->phone) }}"
                                                autocomplete="tel"
                                                maxlength="30"
                                            >

                                        </div>

                                        <div
                                            class="wm-profile-field__error"
                                            data-error-for="phone"
                                        ></div>

                                    </div>

                                </div>

                                <div class="col-md-6">

                                    <div class="wm-profile-field">

                                        <label for="jobTitle">
                                            {{ __('profile.job_title') }}
                                        </label>

                                        <input
                                            type="text"
                                            id="jobTitle"
                                            name="job_title"
                                            class="form-control"
                                            value="{{ old('job_title', $profile->job_title) }}"
                                            maxlength="150"
                                        >

                                        <div
                                            class="wm-profile-field__error"
                                            data-error-for="job_title"
                                        ></div>

                                    </div>

                                </div>

                                <div class="col-md-6">

                                    <div class="wm-profile-field">

                                        <label for="department">
                                            {{ __('profile.department') }}
                                        </label>

                                        <input
                                            type="text"
                                            id="department"
                                            name="department"
                                            class="form-control"
                                            value="{{ old('department', $profile->department) }}"
                                            maxlength="150"
                                        >

                                        <div
                                            class="wm-profile-field__error"
                                            data-error-for="department"
                                        ></div>

                                    </div>

                                </div>

                                <div class="col-12">

                                    <div class="wm-profile-field">

                                        <label for="profileBio">
                                            {{ __('profile.bio') }}
                                        </label>

                                        <textarea
                                            id="profileBio"
                                            name="bio"
                                            class="form-control"
                                            rows="4"
                                            maxlength="1000"
                                        >{{ old('bio', $profile->bio) }}</textarea>

                                        <span class="wm-profile-field__hint">
                                            {{ __('profile.bio_hint') }}
                                        </span>

                                        <div
                                            class="wm-profile-field__error"
                                            data-error-for="bio"
                                        ></div>

                                    </div>

                                </div>

                            </div>

                        </div>

                    </div>


                    {{-- ADDRESS --}}

                    <div class="wm-profile-section">

                        <div class="wm-profile-section__header">

                            <div>

                                <h2 class="wm-profile-section__title">
                                    {{ __('profile.address') }}
                                </h2>

                                <p class="wm-profile-section__description">
                                    {{ __('profile.address_description') }}
                                </p>

                            </div>

                        </div>

                        <div class="wm-profile-section__body">

                            <div class="row g-4">

                                <div class="col-12">

                                    <div class="wm-profile-field">

                                        <label for="addressLine1">
                                            {{ __('profile.address_line_1') }}
                                        </label>

                                        <input
                                            type="text"
                                            id="addressLine1"
                                            name="address_line_1"
                                            class="form-control"
                                            value="{{ old('address_line_1', $profile->address_line_1) }}"
                                            autocomplete="address-line1"
                                            maxlength="255"
                                        >

                                        <div
                                            class="wm-profile-field__error"
                                            data-error-for="address_line_1"
                                        ></div>

                                    </div>

                                </div>

                                <div class="col-12">

                                    <div class="wm-profile-field">

                                        <label for="addressLine2">
                                            {{ __('profile.address_line_2') }}
                                        </label>

                                        <input
                                            type="text"
                                            id="addressLine2"
                                            name="address_line_2"
                                            class="form-control"
                                            value="{{ old('address_line_2', $profile->address_line_2) }}"
                                            autocomplete="address-line2"
                                            maxlength="255"
                                        >

                                        <div
                                            class="wm-profile-field__error"
                                            data-error-for="address_line_2"
                                        ></div>

                                    </div>

                                </div>

                                <div class="col-md-6">

                                    <div class="wm-profile-field">

                                        <label for="city">
                                            {{ __('profile.city') }}
                                        </label>

                                        <input
                                            type="text"
                                            id="city"
                                            name="city"
                                            class="form-control"
                                            value="{{ old('city', $profile->city) }}"
                                            autocomplete="address-level2"
                                            maxlength="100"
                                        >

                                        <div
                                            class="wm-profile-field__error"
                                            data-error-for="city"
                                        ></div>

                                    </div>

                                </div>

                                <div class="col-md-6">

                                    <div class="wm-profile-field">

                                        <label for="state">
                                            {{ __('profile.state_province') }}
                                        </label>

                                        <input
                                            type="text"
                                            id="state"
                                            name="state"
                                            class="form-control"
                                            value="{{ old('state', $profile->state) }}"
                                            autocomplete="address-level1"
                                            maxlength="100"
                                        >

                                        <div
                                            class="wm-profile-field__error"
                                            data-error-for="state"
                                        ></div>

                                    </div>

                                </div>

                                <div class="col-md-6">

                                    <div class="wm-profile-field">

                                        <label for="postalCode">
                                            {{ __('profile.postal_code') }}
                                        </label>

                                        <input
                                            type="text"
                                            id="postalCode"
                                            name="postal_code"
                                            class="form-control"
                                            value="{{ old('postal_code', $profile->postal_code) }}"
                                            autocomplete="postal-code"
                                            maxlength="20"
                                        >

                                        <div
                                            class="wm-profile-field__error"
                                            data-error-for="postal_code"
                                        ></div>

                                    </div>

                                </div>

                                <div class="col-md-6">

                                    <div class="wm-profile-field">

                                        <label for="country">
                                            {{ __('profile.country') }}
                                        </label>

                                        <input
                                            type="text"
                                            id="country"
                                            name="country"
                                            class="form-control"
                                            value="{{ old('country', $profile->country) }}"
                                            autocomplete="country-name"
                                            maxlength="100"
                                        >

                                        <div
                                            class="wm-profile-field__error"
                                            data-error-for="country"
                                        ></div>

                                    </div>

                                </div>

                            </div>

                        </div>

                    </div>


                    {{-- ACCOUNT PREFERENCES --}}

                    <div class="wm-profile-section">

                        <div class="wm-profile-section__header">

                            <div>

                                <h2 class="wm-profile-section__title">
                                    {{ __('profile.account_preferences') }}
                                </h2>

                                <p class="wm-profile-section__description">
                                    {{ __('profile.account_preferences_description') }}
                                </p>

                            </div>

                        </div>

                        <div class="wm-profile-section__body">

                            <div class="row g-4">

                                <div class="col-md-6">

                                    <div class="wm-profile-field">

                                        <label for="profileTimezone">
                                            {{ __('profile.timezone') }}
                                            <span>*</span>
                                        </label>

                                        <select
                                            id="profileTimezone"
                                            name="timezone"
                                            class="form-select"
                                            required
                                        >

                                            <option
                                                value="UTC"
                                                @selected($selectedTimezone === 'UTC')
                                            >
                                                UTC
                                            </option>

                                            @foreach ($timezoneGroups as $region => $timezones)

                                                <optgroup label="{{ $region }}">

                                                    @foreach ($timezones as $timezone)

                                                        @php
                                                            $parts = explode('/', $timezone);
                                                            $city = end($parts);
                                                            $city = str_replace(
                                                                ['_', '-'],
                                                                [' ', ' '],
                                                                $city
                                                            );
                                                            $city = ucwords($city);
                                                        @endphp

                                                        <option
                                                            value="{{ $timezone }}"
                                                            @selected($selectedTimezone === $timezone)
                                                        >
                                                            {{ $city }} — {{ $timezone }}
                                                        </option>

                                                    @endforeach

                                                </optgroup>

                                            @endforeach

                                        </select>

                                        <span class="wm-profile-field__hint">
                                            {{ __('profile.timezone_hint') }}
                                        </span>

                                        <div
                                            class="wm-profile-field__error"
                                            data-error-for="timezone"
                                        ></div>

                                    </div>

                                </div>

                                <div class="col-md-6">

                                    <div class="wm-profile-field">

                                        <label for="profileLanguage">
                                            {{ __('profile.language') }}
                                            <span>*</span>
                                        </label>

                                        <select
                                            id="profileLanguage"
                                            name="locale"
                                            class="form-select"
                                            required
                                        >

                                            @foreach ($supportedLanguages as $code => $language)

                                                <option
                                                    value="{{ $code }}"
                                                    @selected($selectedLocale === $code)
                                                >
                                                    {{ $language['native_name'] }}
                                                </option>

                                            @endforeach

                                        </select>

                                        <div
                                            class="wm-profile-field__error"
                                            data-error-for="locale"
                                        ></div>

                                    </div>

                                </div>

                                <div class="col-md-6">

                                    <div class="wm-profile-field">

                                        <label for="profileDateFormat">
                                            {{ __('profile.date_format') }}
                                            <span>*</span>
                                        </label>

                                        <select
                                            id="profileDateFormat"
                                            name="date_format"
                                            class="form-select"
                                            required
                                        >

                                            <option
                                                value="MMM D, YYYY"
                                                @selected(old('date_format', $profile->date_format) === 'MMM D, YYYY')
                                            >
                                                Sep 24, 2026
                                            </option>

                                            <option
                                                value="DD MMM YYYY"
                                                @selected(old('date_format', $profile->date_format) === 'DD MMM YYYY')
                                            >
                                                24 Sep 2026
                                            </option>

                                            <option
                                                value="MM/DD/YYYY"
                                                @selected(old('date_format', $profile->date_format) === 'MM/DD/YYYY')
                                            >
                                                09/24/2026
                                            </option>

                                            <option
                                                value="DD/MM/YYYY"
                                                @selected(old('date_format', $profile->date_format) === 'DD/MM/YYYY')
                                            >
                                                24/09/2026
                                            </option>

                                            <option
                                                value="YYYY-MM-DD"
                                                @selected(old('date_format', $profile->date_format) === 'YYYY-MM-DD')
                                            >
                                                2026-09-24
                                            </option>

                                        </select>

                                        <div
                                            class="wm-profile-field__error"
                                            data-error-for="date_format"
                                        ></div>

                                    </div>

                                </div>

                                <div class="col-md-6">

                                    <div class="wm-profile-field">

                                        <label for="profileTheme">
                                            {{ __('profile.theme') }}
                                            <span>*</span>
                                        </label>

                                        <select
                                            id="profileTheme"
                                            name="theme"
                                            class="form-select"
                                            required
                                        >

                                            <option
                                                value="light"
                                                @selected(old('theme', $profile->theme) === 'light')
                                            >
                                                {{ __('profile.theme_light') }}
                                            </option>

                                            <option
                                                value="dark"
                                                @selected(old('theme', $profile->theme) === 'dark')
                                            >
                                                {{ __('profile.theme_dark') }}
                                            </option>

                                            <option
                                                value="system"
                                                @selected(old('theme', $profile->theme) === 'system')
                                            >
                                                {{ __('profile.theme_system') }}
                                            </option>

                                        </select>

                                        <div
                                            class="wm-profile-field__error"
                                            data-error-for="theme"
                                        ></div>

                                    </div>

                                </div>

                            </div>

                        </div>

                    </div>

                </form>


                {{-- ====================================================
                    SECURITY
                ===================================================== --}}

                <div class="wm-profile-section">

                    <div class="wm-profile-section__header">

                        <div>

                            <h2 class="wm-profile-section__title">
                                {{ __('profile.password_security') }}
                            </h2>

                            <p class="wm-profile-section__description">
                                {{ __('profile.password_security_description') }}
                            </p>

                        </div>

                    </div>


                    <div class="wm-profile-security-list">

                        {{-- =================================================
                            PASSWORD
                        ================================================== --}}

                        <div class="wm-profile-security-item">

                            <div class="wm-profile-security-item__icon">
                                <i class="ph ph-lock-key"></i>
                            </div>

                            <div class="wm-profile-security-item__content">

                                <strong>
                                    {{ __('profile.password') }}
                                </strong>

                                <span>
                                    {{ __('profile.password_description') }}
                                </span>

                            </div>

                            <button
                                type="button"
                                class="btn btn-light btn-sm"
                                id="changePassword"
                            >
                                {{ __('profile.change_password') }}
                            </button>

                        </div>


                        {{-- =================================================
                            EMAIL 2FA
                        ================================================== --}}

                        <div class="wm-profile-security-item wm-profile-security-item--2fa-email">

                            <div class="wm-profile-security-item__icon wm-profile-security-item__icon--info">
                                <i class="ph ph-envelope-simple"></i>
                            </div>

                            <div class="wm-profile-security-item__content">

                                <strong>
                                    {{ __('profile.email_two_factor_authentication') }}
                                </strong>

                                <span>
                                    {{ __('profile.email_two_factor_description') }}
                                </span>

                            </div>

                            <div class="wm-profile-security-item__status">

                                <span
                                    class="wm-profile-security-badge wm-profile-security-badge--warning"
                                    id="emailTwoFactorStatusBadge"
                                >
                                    {{ __('profile.not_enabled') }}
                                </span>

                                <button
                                    type="button"
                                    class="btn btn-light btn-sm"
                                    id="enableEmailTwoFactor"
                                >
                                    {{ __('profile.enable') }}
                                </button>

                            </div>

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
                                {{ __('profile.active_sessions') }}
                            </h2>

                            <p class="wm-profile-section__description">
                                {{ __('profile.active_sessions_description') }}
                            </p>

                        </div>

                        <button
                            type="button"
                            class="btn btn-light btn-sm"
                            id="logoutOtherSessions"
                        >
                            {{ __('profile.sign_out_other_sessions') }}
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
                                        {{ __('profile.current_browser') }}
                                    </strong>

                                    <span>
                                        {{ __('profile.current_authenticated_session') }}
                                    </span>

                                </div>

                            </div>

                            <span class="wm-profile-session__current">
                                {{ __('common.current') }}
                            </span>

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
                                {{ __('profile.recent_security_activity') }}
                            </h2>

                            <p class="wm-profile-section__description">
                                {{ __('profile.recent_security_activity_description') }}
                            </p>

                        </div>

                        <a
                            href="{{ route('activity') }}"
                            class="btn btn-link btn-sm"
                        >
                            {{ __('common.view_all') }}
                            <i class="ph ph-arrow-right"></i>
                        </a>

                    </div>

                    <div class="wm-profile-activity">

                        <div class="wm-profile-activity__item">

                            <div class="wm-profile-activity__icon wm-profile-activity__icon--success">
                                <i class="ph ph-sign-in"></i>
                            </div>

                            <div class="wm-profile-activity__content">

                                <strong>
                                    {{ __('profile.last_login') }}
                                </strong>

                                <span>
                                    {{ $user->last_login_at?->format('M d, Y · h:i A') ?? __('profile.no_previous_login') }}
                                </span>

                            </div>

                            <time>
                                {{ $user->last_login_at?->diffForHumans() ?? '—' }}
                            </time>

                        </div>

                    </div>

                </div>

            </div>


            {{-- ========================================================
                SIDEBAR
            ========================================================= --}}

            <aside class="wm-profile-page__sidebar">

                {{-- ACCOUNT SUMMARY --}}

                <div class="wm-profile-sidebar-card">

                    <div class="wm-profile-sidebar-card__header">

                        <h3>
                            {{ __('profile.account') }}
                        </h3>

                    </div>

                    <div class="wm-profile-account">

                        <div class="wm-profile-account__avatar">

                            @if ($avatarUrl)

                                <img
                                    src="{{ $avatarUrl }}"
                                    alt="{{ $displayName }}"
                                >

                            @else

                                {{ $avatarInitials }}

                            @endif

                        </div>

                        <strong>
                            {{ $displayName }}
                        </strong>

                        <span>
                            {{ __('profile.member_since', [
                                'date' => $user->created_at?->format('M Y') ?? '—'
                            ]) }}
                        </span>

                    </div>

                    <div class="wm-profile-account-meta">

                        <div>

                            <span>
                                {{ __('profile.role') }}
                            </span>

                            <strong>
                                {{ ucfirst($user->user_type ?? __('common.member')) }}
                            </strong>

                        </div>

                        <div>

                            <span>
                                {{ __('profile.workspace') }}
                            </span>

                            <strong>
                                WorkManagement
                            </strong>

                        </div>

                        <div>

                            <span>
                                {{ __('profile.status') }}
                            </span>

                            <strong class="wm-profile-account-meta__status">
                                {{ ucfirst($user->status ?? __('common.active')) }}
                            </strong>

                        </div>

                    </div>

                </div>


                {{-- PROFILE COMPLETION --}}

                <div class="wm-profile-sidebar-card">

                    <div class="wm-profile-sidebar-card__header">

                        <h3>
                            {{ __('profile.profile_completion') }}
                        </h3>

                        <strong>
                            {{ $profileCompletion }}%
                        </strong>

                    </div>

                    <div class="wm-profile-completion">

                        <div class="wm-profile-completion__bar">

                            <span
                                style="width: {{ $profileCompletion }}%;"
                            ></span>

                        </div>

                        <p>

                            @if ($profileCompletion >= 100)

                                {{ __('profile.profile_complete') }}

                            @else

                                {{ __('profile.profile_completion_hint') }}

                            @endif

                        </p>

                    </div>

                </div>


                {{-- QUICK LINKS --}}

                <div class="wm-profile-sidebar-card">

                    <div class="wm-profile-sidebar-card__header">

                        <h3>
                            {{ __('profile.quick_links') }}
                        </h3>

                    </div>

                    <div class="wm-profile-quick-links">

                        <a href="{{ route('settings.index') }}">

                            <i class="ph ph-gear"></i>

                            <span>
                                {{ __('common.settings') }}
                            </span>

                            <i class="ph ph-arrow-up-right"></i>

                        </a>

                        <a href="{{ route('notifications') }}">

                            <i class="ph ph-bell"></i>

                            <span>
                                {{ __('common.notifications') }}
                            </span>

                            <i class="ph ph-arrow-up-right"></i>

                        </a>

                        <a href="{{ route('settings.integrations') }}">

                            <i class="ph ph-plugs-connected"></i>

                            <span>
                                {{ __('common.integrations') }}
                            </span>

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

            /*
            |--------------------------------------------------------------------------
            | CSRF
            |--------------------------------------------------------------------------
            */

            const csrfToken =
                $('meta[name="csrf-token"]').attr('content');

            if (!csrfToken) {

                console.error(
                    'WorkManagement: CSRF token not found.'
                );

                return;
            }

            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': csrfToken,
                    'Accept': 'application/json'
                }
            });


            /*
            |--------------------------------------------------------------------------
            | Localization
            |--------------------------------------------------------------------------
            */

            const translations = {

                /*
                |--------------------------------------------------------------------------
                | Common
                |--------------------------------------------------------------------------
                */

                saving:
                @json(__('profile.js.saving')),

                saveChanges:
                @json(__('common.save_changes')),

                continue:
                @json(__('common.continue')),

                cancel:
                @json(__('common.cancel')),

                close:
                @json(__('common.close')),

                enable:
                @json(__('profile.enable')),

                notEnabled:
                @json(__('profile.not_enabled')),

                somethingWentWrong:
                @json(__('common.something_went_wrong')),

                validationError:
                @json(__('profile.js.validation_error')),

                validationMessage:
                @json(__('profile.js.validation_message')),

                sessionExpired:
                @json(__('profile.js.session_expired')),

                sessionExpiredMessage:
                @json(__('profile.js.session_expired_message')),


                /*
                |--------------------------------------------------------------------------
                | Profile
                |--------------------------------------------------------------------------
                */

                profileUpdated:
                @json(__('profile.js.profile_updated')),

                profileUpdatedMessage:
                @json(__('profile.save_success')),

                unableToSave:
                @json(__('profile.js.unable_to_save')),

                noChanges:
                @json(__('profile.js.no_changes')),

                noChangesMessage:
                @json(__('profile.js.no_changes_message')),

                resetChanges:
                @json(__('profile.js.reset_changes')),

                resetChangesTitle:
                @json(__('profile.js.reset_changes_title')),

                resetChangesMessage:
                @json(__('profile.js.reset_changes_message')),

                keepChanges:
                @json(__('profile.js.keep_changes')),


                /*
                |--------------------------------------------------------------------------
                | Avatar
                |--------------------------------------------------------------------------
                */

                uploadFailed:
                @json(__('profile.js.upload_failed')),

                photoUpdated:
                @json(__('profile.js.photo_updated')),

                photoUpdatedMessage:
                @json(__('profile.photo_success')),

                invalidImage:
                @json(__('profile.js.invalid_image')),

                invalidImageMessage:
                @json(__('profile.js.invalid_image_message')),

                imageTooLarge:
                @json(__('profile.js.image_too_large')),

                imageTooLargeMessage:
                @json(__('profile.js.image_too_large_message')),

                unableToUpdatePhoto:
                @json(__('profile.js.unable_to_update_photo')),


                /*
                |--------------------------------------------------------------------------
                | Password
                |--------------------------------------------------------------------------
                */

                changePassword:
                @json(__('profile.change_password')),

                currentPassword:
                @json(__('profile.current_password')),

                newPassword:
                @json(__('profile.new_password')),

                confirmPassword:
                @json(__('profile.confirm_password')),

                currentPasswordPlaceholder:
                @json(__('profile.current_password_placeholder')),

                newPasswordPlaceholder:
                @json(__('profile.new_password_placeholder')),

                confirmPasswordPlaceholder:
                @json(__('profile.confirm_password_placeholder')),

                currentPasswordRequired:
                @json(__('profile.js.current_password_required')),

                currentPasswordInvalid:
                @json(__('profile.js.current_password_invalid')),

                passwordRequired:
                @json(__('profile.js.password_required')),

                passwordMinimum:
                @json(__('profile.js.password_minimum')),

                passwordMismatch:
                @json(__('profile.js.password_mismatch')),

                confirmPasswordRequired:
                @json(__('profile.js.confirm_password_required')),

                passwordSameAsCurrent:
                @json(__('profile.js.password_same_as_current')),

                passwordStrengthHint:
                @json(__('profile.js.password_strength_hint')),

                strongPassword:
                @json(__('profile.js.strong_password')),

                goodPassword:
                @json(__('profile.js.good_password')),

                weakPassword:
                @json(__('profile.js.weak_password')),

                updatePassword:
                @json(__('profile.update_password')),

                passwordUpdated:
                @json(__('profile.js.password_updated')),

                passwordUpdatedMessage:
                @json(__('profile.js.password_updated_message')),

                unableToUpdatePassword:
                @json(__('profile.js.unable_to_update_password')),


                /*
                |--------------------------------------------------------------------------
                | Email 2FA
                |--------------------------------------------------------------------------
                */

                emailTwoFactor:
                @json(__('profile.email_two_factor_authentication')),

                emailTwoFactorDescription:
                @json(__('profile.email_two_factor_description')),

                emailTwoFactorEnabled:
                @json(__('profile.js.email_two_factor_enabled')),

                emailTwoFactorDisabled:
                @json(__('profile.js.email_two_factor_disabled')),

                emailTwoFactorAlreadyEnabled:
                @json(__('profile.js.email_two_factor_already_enabled')),

                emailTwoFactorNotEnabled:
                @json(__('profile.js.email_two_factor_not_enabled')),

                emailTwoFactorCodeSent:
                @json(__('profile.js.email_two_factor_code_sent')),

                emailTwoFactorCodePlaceholder:
                @json(__('profile.js.email_two_factor_code_placeholder')),

                emailTwoFactorEmail:
                @json(__('profile.js.email_two_factor_email')),

                emailTwoFactorSentTo:
                @json(__('profile.js.email_two_factor_sent_to')),

                enableEmailTwoFactor:
                @json(__('profile.enable_email_two_factor')),

                verifyEmailTwoFactor:
                @json(__('profile.js.verify_email_two_factor')),

                resendEmailCode:
                @json(__('profile.js.resend_email_two_factor_code')),

                emailCodeResent:
                @json(__('profile.js.email_two_factor_code_resent')),

                unableToSendEmailCode:
                @json(__('profile.js.unable_to_send_email_two_factor_code')),

                unableToVerifyEmailCode:
                @json(__('profile.js.unable_to_verify_email_two_factor')),

                invalidEmailTwoFactorCode:
                @json(__('profile.js.email_two_factor_invalid_code')),

                unableToResendEmailCode:
                @json(__('profile.js.unable_to_resend_email_two_factor_code')),

                disableEmailTwoFactor:
                @json(__('profile.js.email_two_factor_disable')),

                disableEmailTwoFactorDescription:
                @json(__('profile.js.email_two_factor_disable_description')),

                disableEmailTwoFactorButton:
                @json(__('profile.js.disable_email_two_factor_button')),

                unableToDisableEmailTwoFactor:
                @json(__('profile.js.unable_to_disable_email_two_factor'))

            };


            /*
            |--------------------------------------------------------------------------
            | Elements
            |--------------------------------------------------------------------------
            */

            const $page =
                $('#profilePage');

            const $form =
                $('#profileForm');

            const $saveButton =
                $('#profileSave');

            const $avatarInput =
                $('#avatarInput');

            const $avatarPreview =
                $('#profileAvatarPreview');


            /*
            |--------------------------------------------------------------------------
            | URLs
            |--------------------------------------------------------------------------
            */

            const profileUpdateUrl =
                $page.data('profile-update-url');

            const avatarUpdateUrl =
                $page.data('avatar-update-url');

            const passwordUpdateUrl =
                $page.data('password-update-url');


            /*
            |--------------------------------------------------------------------------
            | 2FA URLs
            |--------------------------------------------------------------------------
            */

            const twoFactorStatusUrl =
                $page.data('2fa-status-url');


            /*
            |--------------------------------------------------------------------------
            | Email 2FA
            |--------------------------------------------------------------------------
            */

            const emailTwoFactorSendUrl =
                $page.data('email-2fa-send-url');

            const emailTwoFactorVerifyUrl =
                $page.data('email-2fa-verify-url');

            const emailTwoFactorResendUrl =
                $page.data('email-2fa-resend-url');

            const emailTwoFactorDisableSendUrl =
                $page.data('email-2fa-disable-send-url');

            const emailTwoFactorDisableUrl =
                $page.data('email-2fa-disable-url');


            /*
            |--------------------------------------------------------------------------
            | State
            |--------------------------------------------------------------------------
            */

            let hasChanges = false;

            let emailTwoFactorEnabled = false;


            /*
            |--------------------------------------------------------------------------
            | Helpers
            |--------------------------------------------------------------------------
            */

            function markChanged() {

                hasChanges = true;

                $saveButton
                    .addClass('is-dirty');

                $page
                    .addClass('has-unsaved-changes');

            }


            function clearChangedState() {

                hasChanges = false;

                $saveButton
                    .removeClass('is-dirty');

                $page
                    .removeClass('has-unsaved-changes');

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

                    timer: 3500,

                    timerProgressBar: true

                });

            }


            function clearValidationErrors() {

                $form
                    .find('.wm-profile-field')
                    .removeClass('has-error');

                $form
                    .find('.wm-profile-field__error')
                    .empty();

            }


            function showValidationErrors(errors) {

                clearValidationErrors();

                $.each(
                    errors,
                    function (field, messages) {

                        const $error =
                            $form.find(
                                '[data-error-for="' +
                                field +
                                '"]'
                            );

                        $error
                            .text(messages[0])
                            .closest('.wm-profile-field')
                            .addClass('has-error');

                    }
                );

            }


            function setSaveButtonLoading(loading) {

                if (loading) {

                    $saveButton
                        .prop('disabled', true)
                        .addClass('is-loading')
                        .html(`
                            <span class="wm-profile-spinner"></span>
                            ${translations.saving}
                        `);

                    return;
                }

                $saveButton
                    .prop('disabled', false)
                    .removeClass('is-loading')
                    .html(`
                        <i class="ph ph-check"></i>
                        ${translations.saveChanges}
                    `);

            }


            function updateIdentityPreview() {

                const firstName =
                    $.trim($('#firstName').val());

                const lastName =
                    $.trim($('#lastName').val());

                const displayName =
                    $.trim($('#displayName').val());

                const jobTitle =
                    $.trim($('#jobTitle').val());

                const city =
                    $.trim($('#city').val());

                const country =
                    $.trim($('#country').val());

                const name =
                        displayName ||
                        $.trim(firstName + ' ' + lastName) ||
                    @json(__('common.user'));

                $('#profileIdentityName')
                    .text(name);

                $('#profileIdentityJobTitle')
                    .text(
                        jobTitle ||
                        @json(__('profile.add_job_title'))
                    );

                const location =
                    [city, country]
                        .filter(Boolean)
                        .join(', ');

                $('#profileIdentityLocation')
                    .text(
                        location ||
                        @json(__('profile.add_location'))
                    );

            }


            /*
            |--------------------------------------------------------------------------
            | Track Changes
            |--------------------------------------------------------------------------
            */

            $form.on(
                'input change',
                'input, textarea, select',
                function () {

                    markChanged();

                    $(this)
                        .closest('.wm-profile-field')
                        .removeClass('has-error');

                    $(this)
                        .closest('.wm-profile-field')
                        .find('.wm-profile-field__error')
                        .empty();

                    updateIdentityPreview();

                }
            );


            /*
            |--------------------------------------------------------------------------
            | Save Profile
            |--------------------------------------------------------------------------
            */

            $saveButton.on(
                'click',
                function (event) {

                    event.preventDefault();

                    clearValidationErrors();

                    if (!$form.length) {
                        return;
                    }

                    if (!$form[0].checkValidity()) {

                        $form[0].reportValidity();

                        return;
                    }

                    setSaveButtonLoading(true);

                    const formData =
                        $form.serializeArray();

                    formData.push({
                        name: '_token',
                        value: csrfToken
                    });

                    $.ajax({

                        url: profileUpdateUrl,

                        type: 'PUT',

                        data: $.param(formData),

                        success: function (response) {

                            if (
                                !response ||
                                !response.success
                            ) {

                                showToast(
                                    translations.somethingWentWrong,
                                    response?.message ||
                                    translations.unableToSave,
                                    'error'
                                );

                                return;
                            }

                            const selectedLocale =
                                $('#profileLanguage').val();

                            const currentLocale =
                                @json(app()->getLocale());

                            clearChangedState();

                            if (
                                selectedLocale !==
                                currentLocale
                            ) {

                                showToast(
                                    translations.profileUpdated,
                                    response.message ||
                                    translations.profileUpdatedMessage
                                );

                                setTimeout(function () {

                                    window.location.reload();

                                }, 700);

                                return;
                            }

                            updateIdentityPreview();

                            showToast(
                                translations.profileUpdated,
                                response.message ||
                                translations.profileUpdatedMessage
                            );

                        },

                        error: function (xhr) {

                            if (
                                xhr.status === 422 &&
                                xhr.responseJSON &&
                                xhr.responseJSON.errors
                            ) {

                                showValidationErrors(
                                    xhr.responseJSON.errors
                                );

                                showToast(
                                    translations.validationError,
                                    xhr.responseJSON.message ||
                                    translations.validationMessage,
                                    'warning'
                                );

                                return;
                            }

                            if (xhr.status === 419) {

                                showToast(
                                    translations.sessionExpired,
                                    translations.sessionExpiredMessage,
                                    'warning'
                                );

                                return;
                            }

                            showToast(
                                translations.somethingWentWrong,
                                xhr.responseJSON?.message ||
                                translations.unableToSave,
                                'error'
                            );

                        },

                        complete: function () {

                            setSaveButtonLoading(false);

                        }

                    });

                }
            );


            /*
            |--------------------------------------------------------------------------
            | Reset
            |--------------------------------------------------------------------------
            */

            $('#profileReset').on(
                'click',
                function () {

                    if (!hasChanges) {

                        showToast(
                            translations.noChanges,
                            translations.noChangesMessage,
                            'info'
                        );

                        return;
                    }

                    Swal.fire({

                        icon: 'question',

                        title:
                        translations.resetChangesTitle,

                        text:
                        translations.resetChangesMessage,

                        showCancelButton: true,

                        confirmButtonText:
                        translations.resetChanges,

                        cancelButtonText:
                        translations.keepChanges

                    }).then(function (result) {

                        if (result.isConfirmed) {

                            window.location.reload();

                        }

                    });

                }
            );


            /*
            |--------------------------------------------------------------------------
            | Avatar
            |--------------------------------------------------------------------------
            */

            $('#changeAvatar').on(
                'click',
                function () {

                    $avatarInput.trigger('click');

                }
            );


            $avatarInput.on(
                'change',
                function () {

                    const file =
                        this.files &&
                        this.files[0];

                    if (!file) {
                        return;
                    }

                    const allowedTypes = [
                        'image/jpeg',
                        'image/png',
                        'image/webp'
                    ];

                    if (!allowedTypes.includes(file.type)) {

                        showToast(
                            translations.invalidImage,
                            translations.invalidImageMessage,
                            'error'
                        );

                        this.value = '';

                        return;
                    }

                    if (
                        file.size >
                        2 * 1024 * 1024
                    ) {

                        showToast(
                            translations.imageTooLarge,
                            translations.imageTooLargeMessage,
                            'error'
                        );

                        this.value = '';

                        return;
                    }

                    uploadAvatar(file);

                }
            );


            function uploadAvatar(file) {

                const formData =
                    new FormData();

                formData.append(
                    'avatar',
                    file
                );

                formData.append(
                    '_token',
                    csrfToken
                );

                const $button =
                    $('#changeAvatar');

                $button
                    .prop('disabled', true)
                    .addClass('is-loading');

                $.ajax({

                    url: avatarUpdateUrl,

                    type: 'POST',

                    data: formData,

                    processData: false,

                    contentType: false,

                    success: function (response) {

                        if (
                            !response ||
                            !response.success ||
                            !response.data ||
                            !response.data.avatar
                        ) {

                            showToast(
                                translations.uploadFailed,
                                response?.message ||
                                translations.unableToUpdatePhoto,
                                'error'
                            );

                            return;
                        }

                        const avatarUrl =
                            response.data.avatar;

                        $avatarPreview.html(`
                            <img
                                src="${escapeHtml(avatarUrl)}"
                                alt="${@json(__('profile.profile_photo'))}"
                            >
                        `);

                        $('.wm-profile-account__avatar').html(`
                            <img
                                src="${escapeHtml(avatarUrl)}"
                                alt="${@json(__('profile.profile_photo'))}"
                            >
                        `);

                        showToast(
                            translations.photoUpdated,
                            response.message ||
                            translations.photoUpdatedMessage
                        );

                    },

                    error: function (xhr) {

                        if (
                            xhr.status === 422 &&
                            xhr.responseJSON &&
                            xhr.responseJSON.errors
                        ) {

                            const errors =
                                xhr.responseJSON.errors;

                            const firstError =
                                Object.values(errors)[0]?.[0] ||
                                translations.invalidImageMessage;

                            showToast(
                                translations.invalidImage,
                                firstError,
                                'error'
                            );

                            return;
                        }

                        if (xhr.status === 419) {

                            showToast(
                                translations.sessionExpired,
                                translations.sessionExpiredMessage,
                                'warning'
                            );

                            return;
                        }

                        showToast(
                            translations.uploadFailed,
                            xhr.responseJSON?.message ||
                            translations.unableToUpdatePhoto,
                            'error'
                        );

                    },

                    complete: function () {

                        $button
                            .prop('disabled', false)
                            .removeClass('is-loading');

                        $avatarInput.val('');

                    }

                });

            }


            /*
            |--------------------------------------------------------------------------
            | Change Password
            |--------------------------------------------------------------------------
            */

            $('#changePassword').on(
                'click',
                function () {

                    Swal.fire({

                        title:
                        translations.changePassword,

                        html: `

                            <div class="wm-profile-swal-form">

                                <div class="wm-profile-swal-field">

                                    <label for="swalCurrentPassword">
                                        ${translations.currentPassword}
                                    </label>

                                    <div class="wm-profile-swal-input-wrapper">

                                        <i class="ph ph-lock-key"></i>

                                        <input
                                            type="password"
                                            id="swalCurrentPassword"
                                            class="swal2-input"
                                            placeholder="${translations.currentPasswordPlaceholder}"
                                            autocomplete="current-password"
                                        >

                                        <button
                                            type="button"
                                            class="wm-profile-swal-password-toggle"
                                            data-swal-password-toggle="swalCurrentPassword"
                                            aria-label="Show password"
                                            aria-pressed="false"
                                        >
                                            <i class="ph ph-eye"></i>
                                        </button>

                                    </div>

                                    <span
                                        class="wm-profile-swal-field-error"
                                        data-swal-password-error-for="current_password"
                                    ></span>

                                </div>


                                <div class="wm-profile-swal-field">

                                    <label for="swalNewPassword">
                                        ${translations.newPassword}
                                    </label>

                                    <div class="wm-profile-swal-input-wrapper">

                                        <i class="ph ph-lock-key"></i>

                                        <input
                                            type="password"
                                            id="swalNewPassword"
                                            class="swal2-input"
                                            placeholder="${translations.newPasswordPlaceholder}"
                                            autocomplete="new-password"
                                        >

                                        <button
                                            type="button"
                                            class="wm-profile-swal-password-toggle"
                                            data-swal-password-toggle="swalNewPassword"
                                            aria-label="Show password"
                                            aria-pressed="false"
                                        >
                                            <i class="ph ph-eye"></i>
                                        </button>

                                    </div>

                                    <div
                                        class="wm-profile-swal-password-strength"
                                        id="wmSwalPasswordStrength"
                                    >

                                        <div class="wm-profile-swal-password-strength__bars">

                                            <span></span>
                                            <span></span>
                                            <span></span>
                                            <span></span>

                                        </div>

                                        <span
                                            class="wm-profile-swal-password-strength__text"
                                            id="wmSwalPasswordStrengthText"
                                        >
                                            ${translations.passwordStrengthHint}
                                        </span>

                                    </div>

                                    <span
                                        class="wm-profile-swal-field-error"
                                        data-swal-password-error-for="password"
                                    ></span>

                                </div>


                                <div class="wm-profile-swal-field">

                                    <label for="swalConfirmPassword">
                                        ${translations.confirmPassword}
                                    </label>

                                    <div class="wm-profile-swal-input-wrapper">

                                        <i class="ph ph-lock-key-open"></i>

                                        <input
                                            type="password"
                                            id="swalConfirmPassword"
                                            class="swal2-input"
                                            placeholder="${translations.confirmPasswordPlaceholder}"
                                            autocomplete="new-password"
                                        >

                                        <button
                                            type="button"
                                            class="wm-profile-swal-password-toggle"
                                            data-swal-password-toggle="swalConfirmPassword"
                                            aria-label="Show password"
                                            aria-pressed="false"
                                        >
                                            <i class="ph ph-eye"></i>
                                        </button>

                                    </div>

                                    <span
                                        class="wm-profile-swal-field-error"
                                        data-swal-password-error-for="password_confirmation"
                                    ></span>

                                </div>

                            </div>

                        `,

                        showCancelButton: true,

                        confirmButtonText:
                        translations.updatePassword,

                        cancelButtonText:
                        translations.cancel,

                        focusConfirm: false,

                        allowOutsideClick: function () {

                            return !Swal.isLoading();

                        },

                        showLoaderOnConfirm: true,

                        didOpen: function () {

                            $('#swalCurrentPassword')
                                .trigger('focus');

                            updateSwalPasswordStrength('');

                        },

                        preConfirm: function () {

                            const current =
                                $.trim(
                                    $('#swalCurrentPassword').val()
                                );

                            const password =
                                $('#swalNewPassword').val();

                            const confirm =
                                $('#swalConfirmPassword').val();

                            clearSwalPasswordErrors();

                            let isValid = true;

                            if (!current) {

                                showSwalPasswordError(
                                    'current_password',
                                    translations.currentPasswordRequired
                                );

                                isValid = false;

                            }

                            if (!password) {

                                showSwalPasswordError(
                                    'password',
                                    translations.passwordRequired
                                );

                                isValid = false;

                            } else if (password.length < 8) {

                                showSwalPasswordError(
                                    'password',
                                    translations.passwordMinimum
                                );

                                isValid = false;

                            }

                            if (!confirm) {

                                showSwalPasswordError(
                                    'password_confirmation',
                                    translations.confirmPasswordRequired
                                );

                                isValid = false;

                            } else if (password !== confirm) {

                                showSwalPasswordError(
                                    'password_confirmation',
                                    translations.passwordMismatch
                                );

                                isValid = false;

                            }

                            if (
                                current &&
                                password &&
                                current === password
                            ) {

                                showSwalPasswordError(
                                    'password',
                                    translations.passwordSameAsCurrent
                                );

                                isValid = false;

                            }

                            if (!isValid) {
                                return false;
                            }

                            return $.ajax({

                                url: passwordUpdateUrl,

                                type: 'PUT',

                                data: {

                                    _token:
                                    csrfToken,

                                    current_password:
                                    current,

                                    password:
                                    password,

                                    password_confirmation:
                                    confirm

                                }

                            })

                                .then(function (response) {

                                    if (
                                        !response ||
                                        !response.success
                                    ) {

                                        Swal.showValidationMessage(
                                            response?.message ||
                                            translations.unableToUpdatePassword
                                        );

                                        return false;
                                    }

                                    return response;

                                })

                                .catch(function (xhr) {

                                    const response =
                                        xhr.responseJSON;

                                    if (
                                        xhr.status === 422 &&
                                        response?.errors
                                    ) {

                                        $.each(
                                            response.errors,
                                            function (
                                                field,
                                                messages
                                            ) {

                                                showSwalPasswordError(
                                                    field,
                                                    messages[0]
                                                );

                                            }
                                        );

                                        Swal.showValidationMessage(
                                            response.message ||
                                            translations.validationMessage
                                        );

                                        return false;
                                    }

                                    Swal.showValidationMessage(
                                        response?.message ||
                                        translations.unableToUpdatePassword
                                    );

                                    return false;

                                });

                        }

                    }).then(function (result) {

                        if (
                            result.isConfirmed &&
                            result.value?.success
                        ) {

                            showToast(
                                translations.passwordUpdated,
                                result.value.message ||
                                translations.passwordUpdatedMessage
                            );

                        }

                    });

                }
            );


            /*
            |--------------------------------------------------------------------------
            | Password Visibility
            |--------------------------------------------------------------------------
            */

            $(document).on(
                'click',
                '[data-swal-password-toggle]',
                function () {

                    const $button =
                        $(this);

                    const targetId =
                        $button.attr(
                            'data-swal-password-toggle'
                        );

                    const $input =
                        $('#' + targetId);

                    const $icon =
                        $button.find('i');

                    const isPassword =
                        $input.attr('type') === 'password';

                    if (isPassword) {

                        $input.attr(
                            'type',
                            'text'
                        );

                        $icon
                            .removeClass('ph-eye')
                            .addClass('ph-eye-slash');

                        $button.attr(
                            'aria-label',
                            'Hide password'
                        );

                        $button.attr(
                            'aria-pressed',
                            'true'
                        );

                    } else {

                        $input.attr(
                            'type',
                            'password'
                        );

                        $icon
                            .removeClass('ph-eye-slash')
                            .addClass('ph-eye');

                        $button.attr(
                            'aria-label',
                            'Show password'
                        );

                        $button.attr(
                            'aria-pressed',
                            'false'
                        );

                    }

                }
            );


            /*
            |--------------------------------------------------------------------------
            | Password Strength
            |--------------------------------------------------------------------------
            */

            $(document).on(
                'input',
                '#swalNewPassword',
                function () {

                    updateSwalPasswordStrength(
                        $(this).val()
                    );

                }
            );


            function updateSwalPasswordStrength(password) {

                const $strength =
                    $('#wmSwalPasswordStrength');

                if (!$strength.length) {
                    return;
                }

                const $bars =
                    $strength.find(
                        '.wm-profile-swal-password-strength__bars span'
                    );

                const $text =
                    $('#wmSwalPasswordStrengthText');

                $bars.removeClass(
                    'is-active is-strong is-good is-weak'
                );

                $strength.removeClass(
                    'is-weak is-good is-strong'
                );

                if (!password.length) {

                    $text.text(
                        translations.passwordStrengthHint
                    );

                    return;
                }

                let score = 0;

                if (password.length >= 8) {
                    score++;
                }

                if (password.length >= 12) {
                    score++;
                }

                if (/[A-Z]/.test(password)) {
                    score++;
                }

                if (/[0-9]/.test(password)) {
                    score++;
                }

                if (/[^A-Za-z0-9]/.test(password)) {
                    score++;
                }

                let level = 'weak';

                if (score >= 4) {

                    level = 'strong';

                    $text.text(
                        translations.strongPassword
                    );

                } else if (score >= 2) {

                    level = 'good';

                    $text.text(
                        translations.goodPassword
                    );

                } else {

                    $text.text(
                        translations.weakPassword
                    );

                }

                $strength.addClass(
                    'is-' + level
                );

                const activeBars =
                    Math.min(
                        Math.max(score, 1),
                        4
                    );

                $bars.each(
                    function (index) {

                        if (index < activeBars) {

                            $(this)
                                .addClass('is-active')
                                .addClass(
                                    'is-' + level
                                );

                        }

                    }
                );

            }


            function clearSwalPasswordErrors() {

                $('.wm-profile-swal-field')
                    .removeClass('has-error');

                $('.wm-profile-swal-field-error')
                    .removeClass('is-visible')
                    .text('');

                $('.wm-profile-swal-input-wrapper')
                    .removeClass('is-invalid');

            }


            function showSwalPasswordError(
                field,
                message
            ) {

                const $error =
                    $(
                        '[data-swal-password-error-for="' +
                        field +
                        '"]'
                    );

                $error
                    .text(message)
                    .addClass('is-visible');

                const inputMap = {

                    current_password:
                        '#swalCurrentPassword',

                    password:
                        '#swalNewPassword',

                    password_confirmation:
                        '#swalConfirmPassword'

                };

                const $input =
                    $(inputMap[field]);

                if (!$input.length) {
                    return;
                }

                $input
                    .closest(
                        '.wm-profile-swal-field'
                    )
                    .addClass('has-error');

                $input
                    .closest(
                        '.wm-profile-swal-input-wrapper'
                    )
                    .addClass('is-invalid');

            }


            $(document).on(
                'input',
                '#swalCurrentPassword, #swalNewPassword, #swalConfirmPassword',
                function () {

                    const $input =
                        $(this);

                    const fieldMap = {

                        swalCurrentPassword:
                            'current_password',

                        swalNewPassword:
                            'password',

                        swalConfirmPassword:
                            'password_confirmation'

                    };

                    const field =
                        fieldMap[$input.attr('id')];

                    if (!field) {
                        return;
                    }

                    $input
                        .closest(
                            '.wm-profile-swal-field'
                        )
                        .removeClass('has-error');

                    $input
                        .closest(
                            '.wm-profile-swal-input-wrapper'
                        )
                        .removeClass('is-invalid');

                    $(
                        '[data-swal-password-error-for="' +
                        field +
                        '"]'
                    )
                        .removeClass('is-visible')
                        .text('');

                }
            );


            /*
            |--------------------------------------------------------------------------
            | 2FA STATUS
            |--------------------------------------------------------------------------
            */

            function loadTwoFactorStatus() {

                if (!twoFactorStatusUrl) {
                    return;
                }

                $.ajax({

                    url: twoFactorStatusUrl,

                    type: 'GET',

                    success: function (response) {

                        if (
                            !response ||
                            !response.success ||
                            !response.data
                        ) {
                            return;
                        }

                        emailTwoFactorEnabled =
                            Boolean(
                                response.data.email_2fa_enabled ??
                                response.data.enabled
                            );

                        updateTwoFactorUI();

                    },

                    error: function (xhr) {

                        console.error(
                            'WorkManagement: Unable to load 2FA status.',
                            xhr
                        );

                    }

                });

            }


            /*
            |--------------------------------------------------------------------------
            | Update 2FA UI
            |--------------------------------------------------------------------------
            */

            function updateTwoFactorUI() {

                updateEmailTwoFactorUI();

            }


            /*
            |--------------------------------------------------------------------------
            | Email 2FA UI
            |--------------------------------------------------------------------------
            */

            function updateEmailTwoFactorUI() {

                const $badge =
                    $('#emailTwoFactorStatusBadge');

                const $button =
                    $('#enableEmailTwoFactor');

                if (!$badge.length || !$button.length) {
                    return;
                }

                if (emailTwoFactorEnabled) {

                    $badge
                        .removeClass(
                            'wm-profile-security-badge--warning'
                        )
                        .addClass(
                            'wm-profile-security-badge--success'
                        )
                        .text(
                            translations.emailTwoFactorEnabled
                        );

                    $button
                        .removeClass('btn-light')
                        .addClass('btn-danger')
                        .text(
                            translations.disableEmailTwoFactorButton
                        );

                    return;
                }

                $badge
                    .removeClass(
                        'wm-profile-security-badge--success'
                    )
                    .addClass(
                        'wm-profile-security-badge--warning'
                    )
                    .text(
                        translations.notEnabled
                    );

                $button
                    .removeClass('btn-danger')
                    .addClass('btn-light')
                    .text(
                        translations.enableEmailTwoFactor
                    );

            }


            /*
            |--------------------------------------------------------------------------
            | Email 2FA - Enable / Disable
            |--------------------------------------------------------------------------
            */

            $('#enableEmailTwoFactor').on(
                'click',
                function () {

                    if (emailTwoFactorEnabled) {

                        disableEmailTwoFactor();

                        return;
                    }

                    startEmailTwoFactorSetup();

                }
            );


            /*
            |--------------------------------------------------------------------------
            | Email 2FA - Enable
            |--------------------------------------------------------------------------
            */

            function startEmailTwoFactorSetup() {

                const $button =
                    $('#enableEmailTwoFactor');

                $button
                    .prop('disabled', true)
                    .addClass('is-loading');

                $.ajax({

                    url: emailTwoFactorSendUrl,

                    type: 'POST',

                    data: {
                        _token: csrfToken
                    },

                    success: function (response) {

                        if (
                            !response ||
                            !response.success
                        ) {

                            showToast(
                                translations.emailTwoFactor,
                                response?.message ||
                                translations.unableToSendEmailCode,
                                'error'
                            );

                            return;
                        }

                        showEmailTwoFactorVerification(
                            response.data || {},
                            false
                        );

                    },

                    error: function (xhr) {

                        showToast(
                            translations.emailTwoFactor,
                            xhr.responseJSON?.message ||
                            translations.unableToSendEmailCode,
                            xhr.status === 422
                                ? 'warning'
                                : 'error'
                        );

                    },

                    complete: function () {

                        $button
                            .prop('disabled', false)
                            .removeClass('is-loading');

                    }

                });

            }


            /*
            |--------------------------------------------------------------------------
            | Email 2FA Verification Modal
            |--------------------------------------------------------------------------
            */

            function showEmailTwoFactorVerification(
                data,
                isDisableFlow = false
            ) {

                const maskedEmail =
                        data.email ||
                    @json($user->email);

                const title =
                    isDisableFlow
                        ? translations.disableEmailTwoFactor
                        : translations.emailTwoFactor;

                const description =
                    isDisableFlow
                        ? translations.disableEmailTwoFactorDescription
                        : translations.emailTwoFactorCodeSent;

                const confirmText =
                    isDisableFlow
                        ? translations.disableEmailTwoFactorButton
                        : translations.verifyEmailTwoFactor;

                const verifyUrl =
                    isDisableFlow
                        ? emailTwoFactorDisableUrl
                        : emailTwoFactorVerifyUrl;

                Swal.fire({

                    title: title,

                    html: `

                        <div class="wm-profile-2fa-setup">

                            <div class="wm-profile-2fa-setup__icon">

                                <i class="ph ph-envelope-simple"></i>

                            </div>

                            <p class="wm-profile-2fa-setup__description">
                                ${description}
                            </p>

                            <p class="wm-profile-2fa-setup__email">
                                ${escapeHtml(maskedEmail)}
                            </p>

                            <div class="wm-profile-2fa-setup__verification">

                                <label for="wmEmailTwoFactorCode">
                                    ${translations.emailTwoFactorCodePlaceholder}
                                </label>

                                <input
                                    type="text"
                                    id="wmEmailTwoFactorCode"
                                    class="swal2-input"
                                    inputmode="numeric"
                                    maxlength="6"
                                    autocomplete="one-time-code"
                                    placeholder="${translations.emailTwoFactorCodePlaceholder}"
                                >

                                <span
                                    class="wm-profile-2fa-code-error"
                                    id="wmEmailTwoFactorCodeError"
                                ></span>

                            </div>

                            ${
                        !isDisableFlow
                            ? `
                                        <button
                                            type="button"
                                            class="btn btn-link btn-sm"
                                            id="resendEmailTwoFactorCode"
                                        >
                                            ${translations.resendEmailCode}
                                        </button>
                                    `
                            : ''
                    }

                        </div>

                    `,

                    showCancelButton: true,

                    confirmButtonText:
                    confirmText,

                    cancelButtonText:
                    translations.cancel,

                    confirmButtonColor:
                        isDisableFlow
                            ? '#EF4444'
                            : undefined,

                    focusConfirm: false,

                    showLoaderOnConfirm: true,

                    allowOutsideClick: function () {

                        return !Swal.isLoading();

                    },

                    didOpen: function () {

                        $('#wmEmailTwoFactorCode')
                            .trigger('focus');

                        $('#wmEmailTwoFactorCode').on(
                            'input',
                            function () {

                                this.value =
                                    this.value
                                        .replace(/\D/g, '')
                                        .slice(0, 6);

                                $('#wmEmailTwoFactorCodeError')
                                    .removeClass('is-visible')
                                    .text('');

                                $('#wmEmailTwoFactorCode')
                                    .removeClass('is-invalid');

                            }
                        );

                        if (!isDisableFlow) {

                            $('#resendEmailTwoFactorCode').on(
                                'click',
                                function () {

                                    resendEmailTwoFactorCode();

                                }
                            );

                        }

                    },

                    preConfirm: function () {

                        const code =
                            $.trim(
                                $('#wmEmailTwoFactorCode').val()
                            );

                        if (!/^\d{6}$/.test(code)) {

                            showEmailCodeError(
                                translations.invalidEmailTwoFactorCode
                            );

                            return false;
                        }

                        return $.ajax({

                            url: verifyUrl,

                            type: 'POST',

                            data: {
                                _token: csrfToken,
                                code: code
                            }

                        })

                            .then(function (response) {

                                if (
                                    !response ||
                                    !response.success
                                ) {

                                    Swal.showValidationMessage(
                                        response?.message ||
                                        (
                                            isDisableFlow
                                                ? translations.unableToDisableEmailTwoFactor
                                                : translations.unableToVerifyEmailCode
                                        )
                                    );

                                    return false;
                                }

                                return response;

                            })

                            .catch(function (xhr) {

                                const response =
                                    xhr.responseJSON;

                                const message =
                                    response?.errors?.code?.[0] ||
                                    response?.message ||
                                    (
                                        isDisableFlow
                                            ? translations.unableToDisableEmailTwoFactor
                                            : translations.invalidEmailTwoFactorCode
                                    );

                                showEmailCodeError(message);

                                Swal.showValidationMessage(
                                    message
                                );

                                return false;

                            });

                    }

                }).then(function (result) {

                    if (
                        !result.isConfirmed ||
                        !result.value?.success
                    ) {
                        return;
                    }

                    if (isDisableFlow) {

                        emailTwoFactorEnabled = false;

                        updateEmailTwoFactorUI();

                        showToast(
                            translations.emailTwoFactor,
                            result.value.message ||
                            translations.emailTwoFactorDisabled
                        );

                        return;
                    }

                    emailTwoFactorEnabled = true;

                    updateEmailTwoFactorUI();

                    showToast(
                        translations.emailTwoFactor,
                        result.value.message ||
                        translations.emailTwoFactorEnabled
                    );

                });

            }


            /*
            |--------------------------------------------------------------------------
            | Email 2FA - Resend Code
            |--------------------------------------------------------------------------
            */

            function resendEmailTwoFactorCode() {

                const $button =
                    $('#resendEmailTwoFactorCode');

                if (!$button.length) {
                    return;
                }

                $button
                    .prop('disabled', true)
                    .addClass('is-loading');

                $.ajax({

                    url: emailTwoFactorResendUrl,

                    type: 'POST',

                    data: {
                        _token: csrfToken
                    },

                    success: function (response) {

                        if (
                            !response ||
                            !response.success
                        ) {

                            showToast(
                                translations.emailTwoFactor,
                                response?.message ||
                                translations.unableToResendEmailCode,
                                'error'
                            );

                            return;
                        }

                        showToast(
                            translations.emailTwoFactor,
                            response.message ||
                            translations.emailCodeResent
                        );

                    },

                    error: function (xhr) {

                        showToast(
                            translations.emailTwoFactor,
                            xhr.responseJSON?.message ||
                            translations.unableToResendEmailCode,
                            xhr.status === 422
                                ? 'warning'
                                : 'error'
                        );

                    },

                    complete: function () {

                        setTimeout(function () {

                            $button
                                .prop('disabled', false)
                                .removeClass('is-loading');

                        }, 1000);

                    }

                });

            }


            /*
            |--------------------------------------------------------------------------
            | Email 2FA Code Error
            |--------------------------------------------------------------------------
            */

            function showEmailCodeError(message) {

                $('#wmEmailTwoFactorCodeError')
                    .text(message)
                    .addClass('is-visible');

                $('#wmEmailTwoFactorCode')
                    .addClass('is-invalid')
                    .trigger('focus');

            }


            /*
            |--------------------------------------------------------------------------
            | Email 2FA - Disable
            |--------------------------------------------------------------------------
            */

            function disableEmailTwoFactor() {

                const $button =
                    $('#enableEmailTwoFactor');

                if (!emailTwoFactorDisableSendUrl) {

                    showToast(
                        translations.disableEmailTwoFactor,
                        translations.unableToSendEmailCode,
                        'error'
                    );

                    return;
                }

                /*
                |--------------------------------------------------------------------------
                | Send OTP for disable confirmation
                |--------------------------------------------------------------------------
                */

                $button
                    .prop('disabled', true)
                    .addClass('is-loading');

                $.ajax({

                    url: emailTwoFactorDisableSendUrl,

                    type: 'POST',

                    data: {
                        _token: csrfToken
                    },

                    success: function (response) {

                        if (
                            !response ||
                            !response.success
                        ) {

                            showToast(
                                translations.disableEmailTwoFactor,
                                response?.message ||
                                translations.unableToSendEmailCode,
                                'error'
                            );

                            return;
                        }

                        showEmailTwoFactorVerification(
                            response.data || {},
                            true
                        );

                    },

                    error: function (xhr) {

                        showToast(
                            translations.disableEmailTwoFactor,
                            xhr.responseJSON?.message ||
                            translations.unableToSendEmailCode,
                            xhr.status === 422
                                ? 'warning'
                                : 'error'
                        );

                    },

                    complete: function () {

                        $button
                            .prop('disabled', false)
                            .removeClass('is-loading');

                    }

                });

            }


            /*
            |--------------------------------------------------------------------------
            | Logout Other Sessions
            |--------------------------------------------------------------------------
            */

            $('#logoutOtherSessions').on(
                'click',
                function () {

                    Swal.fire({

                        icon: 'info',

                        title:
                        @json(__('profile.active_sessions')),

                        text:
                        @json(__('profile.js.active_sessions_message')),

                        confirmButtonText:
                        translations.continue

                    });

                }
            );


            /*
            |--------------------------------------------------------------------------
            | Before Unload
            |--------------------------------------------------------------------------
            */

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


            /*
            |--------------------------------------------------------------------------
            | Escape HTML
            |--------------------------------------------------------------------------
            */

            function escapeHtml(value) {

                return $('<div>')
                    .text(value ?? '')
                    .html();

            }


            /*
            |--------------------------------------------------------------------------
            | Initial State
            |--------------------------------------------------------------------------
            */

            clearChangedState();

            loadTwoFactorStatus();

        });
    </script>

@endpush
